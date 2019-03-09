<?php

namespace App\Http\Controllers\ELK;

use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    private $hosts = [
        '192.168.3.102:9200',       // IP + Port
    ];

    public function __construct()
    {
    }

    public function test1()
    {
        echo __METHOD__;
        $client = ClientBuilder::create()
            ->setHosts($this->hosts)
            ->build();

        $params = [
            'index'  => 'hospital',
            'type'   => '北京',
            'id'     => 'TmnAVmkBT6p3EPht4HHy',
            'client' => [ 'ignore' => 404 ]
        ];
        $result =  $client->get($params);

        dd($result);
    }

}
