<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use App\Models\OrderItem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateProductSoldCount implements ShouldQueue
{

    public function handle(OrderPaid $event)
    {
        $order = $event->getOrder();

        $order->load('items.product');

        foreach ($order->items as $item) {
            $product = $item->product;

            $soldCount = OrderItem::query()
                        ->where('product_id', $product->id)
                        ->whereHas('order', function ($query)  {
                            $query->whereNotNull('paid_at'); //关联的订单状态是已支付
                        })->sum('amount');
            $product->update([
                'sold_count' => $soldCount,
            ]);
        }
    }
}