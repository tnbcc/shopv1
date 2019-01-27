<?php

namespace App\Http\Controllers;


use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;

class CouponCodesController extends Controller
{
    public function show($code)
    {
        if (!$record = CouponCode::query()->where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('该优惠券不存在');
        }

        $record->checkAvailable();

        return $record;
    }
}
