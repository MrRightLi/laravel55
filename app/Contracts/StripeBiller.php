<?php
/**
 * Created by PhpStorm.
 * User: mrrightli
 * Date: 2019/1/3
 * Time: 5:02 PM
 */

namespace App\Contracts;


class StripeBiller implements BillerInterface
{
    public $notifier;

    public function __construct(BillingNotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function bill(array $user, $amount)
    {
        // Bill the user via Stripe...
        $this->notifier->notify($user, $amount);
    }
}