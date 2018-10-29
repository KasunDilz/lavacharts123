<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use app\expense;
use app\geocharttest;

class DashboardController extends Controller
{
    public function barChart()
    {
    	$lava = new Lavacharts; 
        $expenses = $lava->DataTable();
        //return DB::table('expenses')->get();
        $year=expense::select('year as 0', 'expense as 1')
                        ->get()
                        ->toArray();
	    $expenses->addStringColumn('expense')
		           ->addNumberColumn('expense')
		           ->addRows($year);
        $lava->BarChart('expense', $expenses);
        return view('Dashboard',compact('lava'));
    }

        public function geoChart()
        {
        $lava2 = new Lavacharts; 
        $fans = $lava2->DataTable();
        //return DB::table('geocharttest')->get();
        $value=geoCharttest::select('country as 0', 'count as 1')
                        ->get()
                        ->toArray();
        $fans->addStringColumn('country')
                   ->addNumberColumn('count')
                   ->addRows($value);
        $lava2->GeoChart('count', $fans);
        return view('Dashboard',compact('lava2'));
        }
}
