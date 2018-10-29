<?php

namespace app\Http\Controllers;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Http\Request;
use app\geoCharttest; 

class GeocharttestController extends Controller
{
    public function geoChart()
    {
    	$lava2 = new Lavacharts; 
        $fans = $lava->DataTable();
        $value=geoCharttest::select('country as 0', 'count as 1')
                        ->get()
                        ->toArray();
        $fans->addStringColumn('country')
                   ->addNumberColumn('count')
                   ->addRows($value);
        $lava2->GeoChart('count', $fans);
        return view('geochart',compact('lava2'));
    }
}
?>
<!--
class GeocharttestController extends Controller
{
    public function geoChart()
    {
    	$lava = new Lavacharts; 
        $fans = $lava->DataTable();
        $value=(Modelname):select('(1stvalue) as 0', '(2ndvalue) as 1')
                        ->get()
                        ->toArray();
        $fans->addStringColumn('(1stvalue)')
                   ->addNumberColumn('(2ndvalue)')
                   ->addRows($value);
        $lava->GeoChart('(2ndvalue)', $fans);
        return view('viewname',compact('lava'));
    }
} -->

