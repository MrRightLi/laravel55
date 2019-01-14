<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 4:20 PM
 */

namespace Geek\contracts\Bill;


interface Biller
{
    public function bill(array $user, $amount);
}