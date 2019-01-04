<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 4:20 PM
 */

namespace Geek\contracts\Bill;


interface BillingNotifier
{
    public function notify(array $user, $amount);
}