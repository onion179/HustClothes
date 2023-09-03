<?php

namespace App\Utilities;

class Constant
{
    /*
     * Các hằng số, role dùng chung toàn hệ thống
     */


    //Order
    const order_status_ReceiveOrders = 1;
    const order_status_Unconfirmed = 2;
    const order_status_Confirmed = 3;
    const order_status_Paid = 4;
    const order_status_Processing = 5;
    const order_status_Shipping = 6;
    const order_status_Finish = 7;
    const order_status_Cancel = 0;
    public static $order_status = [
        self::order_status_ReceiveOrders =>'Tiếp Nhận Đơn Hàng',
        self::order_status_Unconfirmed =>'Chưa Xác Nhận',
        self::order_status_Confirmed =>'Xác Nhận',
        self::order_status_Paid =>'Đã Thanh Toán',
        self::order_status_Processing =>'Đang Đóng Gói',
        self::order_status_Shipping =>'Shipping',
        self::order_status_Finish =>'Hoàn Thành',
        self::order_status_Cancel =>'Hủy',
    ];

    //User
    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_client = 2;
    public static $user_level = [
        self::user_level_host => 'ADMIN',
        self::user_level_admin => 'NHÂN VIÊN',
        self::user_level_client => 'KHÁCH HÀNG',
    ];
}
