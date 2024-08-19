<?php

namespace App\Http\Controllers;

use DB;
use App\Referral;
use App\Affiliator;

class AffiliatorDashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth', 'affiliator']);
    }
    
    public function index()
    {
        $affiliatorId = auth()->user()->affiliator->id;

        $totalVisit = Referral::whereAffiliatorId($affiliatorId)->count();

        $todaysTotalVisit = Referral::whereAffiliatorId($affiliatorId)
                             ->whereDate('created_at', today())
                             ->count();

        $lastWeekTotalVisit = Referral::whereAffiliatorId($affiliatorId)
                             ->whereBetween('created_at', [now()->startOfWeek(), now()])
                             ->count();

        $lastMonthTotalVisit = Referral::whereAffiliatorId($affiliatorId)
                                ->whereBetween('created_at', [now()->startOfMonth(), now()])
                                ->count();

        $lastYearTotalVisit = Referral::whereAffiliatorId($affiliatorId)
                               ->whereBetween('created_at', [now()->startOfYear(), now()])
                               ->count();

        return view('affiliator.dashboard.index', compact([
            'totalVisit', 
            'todaysTotalVisit',
            'lastWeekTotalVisit',
            'lastMonthTotalVisit',
            'lastYearTotalVisit'
        ]));
    }

}
