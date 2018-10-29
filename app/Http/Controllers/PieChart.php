<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class PieChart extends Controller
{
    $lava = new Lavacharts;
    $datatable = $lava->DataTable();
    $datatable->addStringColumn('Name');
    $datatable->addNumberColumn('Donuts Eaten');
    $datatable->addRows([
        ['Michael',   5],
        ['Elisa',     7],
        ['Robert',    3],
        ['John',      2],
        ['Jessica',   6],
        ['Aaron',     1],
        ['Margareth', 8]
    ]);
    $pieChart = $lava->PieChart('Donuts', $datatable, [
        'width' => 400,
        'pieSliceText' => 'value'
    ]);
    $filter  = $lava->NumberRangeFilter(1, [
        'ui' => [
            'labelStacking' => 'vertical'
        ]
    ]);
    $control = $lava->ControlWrapper($filter, 'control');
    $chart   = $lava->ChartWrapper($pieChart, 'chart');
    $lava->Dashboard('Donuts')->bind($control, $chart);

}

