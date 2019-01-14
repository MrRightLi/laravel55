<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/4
 * Time: 4:21 PM
 */

namespace Geek\classes\Bill;


use Geek\contracts\Bill\Biller;
use Geek\contracts\Bill\BillingNotifier;

class StripeBiller implements Biller
{
    protected $notifier;

    public function __construct(BillingNotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function bill(array $user, $amount)
    {
        $this->notifier->notify($user, $amount);
    }
}