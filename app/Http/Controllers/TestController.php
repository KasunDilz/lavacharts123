<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use app\stocks;

class TestController extends Controller
{
    //
    public function columnChart()
{
    $lava = new Lavacharts;
    $fans = $lava->DataTable();
    $value=stocks::select('stockYear as 0', 'stockPrice as 1')
            ->get()
            ->toArray();
    $fans->addStringColumn('target')
            ->addNumberColumn('stockPrice')
            //->addNumberColumn('target')
            //->addNumberColumn('average')
            ->addRows($value);
    $lava->ColumnChart('target', $fans);
    return view('testchart',compact('lava'));
}
}




