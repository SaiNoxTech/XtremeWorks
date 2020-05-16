<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class IndexController extends Controller
{
    public function indexPage()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('site.index')->with(compact('wallet')); 
    }

    public function HowItWorksPage()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('site.howitworks')->with(compact('wallet')); 
    }

    public function MicroJobsPage()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('site.JobPages.microjobslists')->with(compact('wallet')); 
    }

    public function JobDetailPage()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('site.JobPages.jobdetails')->with(compact('wallet')); 
    }


}
