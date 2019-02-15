<?php

Route::get('/','PagesController@root')->name('root');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');

    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    // 开始
    Route::group(['middleware' => 'email_verified'], function() {
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        Route::get('user_addresses/{address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        Route::put('user_addresses/{address}', 'UserAddressesController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{address}','UserAddressesController@destroy')->name('user_addresses.destroy');
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::delete('cart/{sku}','CartController@remove')->name('cart.remove');
        Route::post('orders', 'OrderController@store')->name('order.store');
        Route::post('crowdfunding_orders', 'OrderController@crowdfunding')->name('crowdfunding_order.store');
        Route::get('orders', 'OrderController@index')->name('order.index');
        Route::get('orders/{order}', 'OrderController@show')->name('order.show');
        Route::post('orders/{order}/received', 'OrderController@received')->name('order.received');
        Route::get('orders/{order}/review', 'OrderController@review')->name('order.review.show');
        Route::post('orders/{order}/review', 'OrderController@sendReview')->name('order.review.store');
        Route::post('orders/{order}/apply_refund', 'OrderController@applyRefund')->name('order.apply_refund');
        Route::post('payment/{order}/installment', 'PaymentController@payByInstallment')->name('payment.installment');
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');

        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

        Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');

    });
    // 结束
});
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}','ProductsController@show')->name('products.show');
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
Route::post('payment/wechat/refund_notify', 'PaymentController@wechatRefundNotify')->name('payment.wechat.refund_notify');