<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use app\expense;

class expensesController extends Controller
{
    public function barChart()
    {
    	$lava = new Lavacharts; 
        $expenses = $lava->DataTable();
        $year=expense::select('year as 0', 'expense as 1')
                        ->get()
                        ->toArray();
	    $expenses->addStringColumn('expense')
		           ->addNumberColumn('expense')
		           ->addRows($year);
        $lava->BarChart('expense', $expenses);
        return view('barchart',compact('lava'));
    }
}