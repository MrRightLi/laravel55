<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/3
 * Time: 5:06 PM
 */

namespace App\Serveices;


use App\Contracts\BillingNotifierInterface;

class EmailBillingNotifier implements BillingNotifierInterface
{
    public function notify(array $user, $amount)
    {
        // TODO: Implement notify() method.
        var_dump($user, $amount);
    }

}