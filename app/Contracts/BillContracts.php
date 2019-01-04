<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/3
 * Time: 5:02 PM
 */

namespace App\Contracts;


interface BillerInterface
{
    public function bill(array $user, $amount);
}

interface BillingNotifierInterface
{
    public function notify(array $user, $amount);
}