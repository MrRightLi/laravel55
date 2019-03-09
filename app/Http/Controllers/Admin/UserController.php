<?php

namespace App\Http\Controllers\Admin;

use Geek\classes\Bill\SmsNotifier;
use Geek\classes\Bill\StripeBiller;
use Geek\contracts\Bill\Biller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{


    protected $biller;

    public function __construct(Biller $biller)
    {
        $this->biller = $biller;
    }

    public function renew()
    {
        $user = [
            'LeBron',
            'Tracy',
            'Kobe',
        ];
        $biller = new StripeBiller(new SmsNotifier());
        $biller->bill($user, 1000);
    }

    public function renew2()
    {
        $user = [
            'LeBron',
            'Tracy',
            'Kobe',
        ];
        $this->biller->bill($user, 1000);

        $reflection = new \ReflectionClass(StripeBiller::class);
        dump($reflection->getMethods());  # 获取 StripeBiller 类中的所有方法
        dump($reflection->getNamespaceName());  # 获取 StripeBiller 的命名空间
        dump($reflection->getProperties());  # 获取 StripeBiller 上的所有属性
    }

    public function test()
    {
        \Swoole\Runtime::enableCoroutine();

        go(function ()
        {
            sleep(1);
            echo "b";
        });

        go(function ()
        {
            sleep(2);
            echo "c";
        });


        return $user = [
            'LeBron',
            'Tracy',
            'Kobe',
        ];
    }
}