<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 4:26 PM
 */

namespace Geek\classes\Bill;


use Geek\contracts\Bill\BillingNotifier;

class SmsNotifier implements BillingNotifier
{
    public function notify(array $user, $amount)
    {
        echo "<pre>";
        var_dump(__METHOD__, $user, $amount);
    }
}