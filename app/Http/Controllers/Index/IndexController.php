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
        if(Auth::user()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
            return view('site.index')->with(compact('wallet')); 
        } else {
            return view('site.index');
        }
        
    }

    public function HowItWorksPage()
    {
        if(Auth::user()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
            return  view('site.howitworks')->with(compact('wallet')); 
        } else {
            return view('site.howitworks'); 
        }
    }

    public function MicroJobsPage()
    {
        if(Auth::user()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
            return  view('site.JobPages.microjobslists')->with(compact('wallet'));  
        } else {
            return view('site.JobPages.microjobslists'); 
        }
    }

    public function JobDetailPage()
    {
        if(Auth::user()) {
            $username = Auth::user()->username;
            $email = Auth::user()->email;
            $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
            return  view('site.JobPages.jobdetails')->with(compact('wallet'));  
        } else {
            return view('site.JobPages.jobdetails'); 
        }
    }


}
