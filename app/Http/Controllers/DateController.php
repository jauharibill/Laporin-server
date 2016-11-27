<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class DateController extends Controller
{
    //
    public function countDateFunction($request){
/* useless code
    $startTimeStamp = strtotime($request->startdate);
	$endTimeStamp = strtotime($request->enddate);

	$diff = abs($endTimeStamp - $startTimeStamp);

	$numberDays = $timeDiff/86400;  // 86400 seconds in one day

	and you might want to convert to integer
	$numberDays = intval($numberDays);
	return $numberDays;

	$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$date = $years." years, ".$months." months, ".$days." days\n";
	$date1 = date_create($request->startdate);
	$date2 = date_create($request->enddate);
	$date = date_diff($date1,$date2);
	return $date->format("%R%a days");;*/

$start = Carbon::parse($request->startdate);
$end = Carbon::parse($request->enddate);

	return $end->diffInDays($start);

    }
    
    public function hitung(Request $request){
    	$hasil = $this->countDateFunction($request);
    	return redirect()->back()->with('hasil',$hasil);
    }

}
