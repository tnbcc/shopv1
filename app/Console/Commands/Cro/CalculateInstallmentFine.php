<?php

namespace App\Console\Commands\Cro;

use App\Models\Installment;
use App\Models\InstallmentItem;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CalculateInstallmentFine extends Command
{
    protected $signature = 'cron:calculate-installment-fine';

    protected $description = '计算分期付款逾期费';


    public function handle()
    {
        InstallmentItem::query()
            //预加载分期付款的数据避免 N+1 问题
             ->with(['installment'])
             ->whereHas('installment', function ($query) {
                 //对应分期还款状态为还款中
                 $query->where('status', Installment::STATUS_REPAYING);
             })
              //还款截止日期在当前时间之前
             ->where('due_date', '<=', Carbon::now())
             //尚未还款
             ->whereNull('paid_at')
             ->chunkById(1000, function ($items) {
                foreach ($items as $item) {
                    //通过Carbon 对象的diffInDays 直接得到逾期天数
                    $overdueDays = Carbon::now()->diffInDays($item->due_date);
                    //本金与手续费之和
                    $base = big_number($item->base)->add($item->fee)->getValue();
                    //计算逾期费
                    $fine = big_number($base)
                            ->multiply($overdueDays)
                            ->multiply($item->installment->fine_rate)
                            ->divide(100)
                            ->getValue();
                   //避免逾期费高于本金和手续费之和

                   $fine = big_number($fine)->compareTo($base) === 1 ? $base : $fine;

                   $item->update([
                       'fine' => $fine
                   ]);
                }
             });
    }
}
