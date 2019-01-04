<?php

namespace App\Http\Controllers\Admin;

use Geek\classes\Bill\SmsNotifier;
use Geek\classes\Bill\StripeBiller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function renew()
    {
        $user = [
            'LeBron',
            'Tracy',
            'Kobe',
        ];
        $biller = new StripeBiller(new SmsNotifier());
        $biller->bill($user,'1000');
    }
}