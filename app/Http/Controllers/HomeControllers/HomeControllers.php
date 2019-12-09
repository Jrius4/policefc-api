<?php

namespace App\Http\Controllers\HomeControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControllers extends Controller
{
    public function latestResults()
    {
        $matchReports = MatchReport::with('match')->orderBy('created_at','desc')->get();
        $matchReports = $this->paginate($matchReports);
        $matchReportsCount = $matchReports->count();
        $teams = Team::get();

        return view("platform.matches.latest-results",compact('matchReports','matchReportCounter','matchReportsCount','teams')); 
    }
}
