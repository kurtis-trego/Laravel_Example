<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB, AuthorizesRequests, DispatchesJobs, ValidatesRequests;


class ReportController extends Controller
{
    public function showData() 
    {
        
        $forms = DB::table('forms')->get();
        return view('showFares', ['forms' => $forms]);

    }

    public function showWeeklyData() 
    {
        
        //$from = date('2019-01-01');
        $from = date('Y-m-d');
        $to = date('Y-m-d', strtotime($from. '+ 7 days'));
        $forms = DB::table('forms')->whereBetween('fareDate', [$from, $to])->get();
        return view('showWeeklyFares', ['forms' => $forms]);


    }

    


}
