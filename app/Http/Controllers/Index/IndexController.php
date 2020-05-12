<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexPage()
    {
        return view('site.index');
    }

    public function HowItWorksPage()
    {
        return view('site.howitworks');
    }

    public function MicroJobsPage()
    {
        return view('site.JobPages.microjobslists');
    }

    public function JobDetailPage()
    {
        return view('site.JobPages.jobdetails');
    }


}
