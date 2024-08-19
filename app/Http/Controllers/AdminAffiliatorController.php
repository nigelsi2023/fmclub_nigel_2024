<?php

namespace App\Http\Controllers;
use App\Referral;
use App\Affiliator;

class AdminAffiliatorController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }
    
    public function index()
    {
        $affiliators = Affiliator::with([
                                        'user' => function($user) {
                                            $user->select(['id', 'name', 'email', 'role']);
                                        }
                                    ])->get();
        
        return view('admin.affiliator.index', compact(['affiliators']));
    }


    public function show($id)
    {
        $affiliator = Affiliator::whereId($id)->firstOrFail();
        
        $totalVisit = Referral::whereAffiliatorId($id)->count();

        $todaysTotalVisit = Referral::whereAffiliatorId($id)
                             ->whereDate('created_at', today())
                             ->count();

        $lastWeekTotalVisit = Referral::whereAffiliatorId($id)
                             ->whereBetween('created_at', [now()->startOfWeek(), now()])
                             ->count();

        $lastMonthTotalVisit = Referral::whereAffiliatorId($id)
                                ->whereBetween('created_at', [now()->startOfMonth(), now()])
                                ->count();

        $lastYearTotalVisit = Referral::whereAffiliatorId($id)
                               ->whereBetween('created_at', [now()->startOfYear(), now()])
                               ->count();

        $uniqueReferralsLastMonth = Referral::whereAffiliatorId($id)
                                ->whereBetween('created_at', [now()->subMonth(), now()])
                                ->get();
        
        return view('admin.affiliator.show', compact([
            'affiliator', 
            'todaysTotalVisit',
            'lastWeekTotalVisit',
            'lastMonthTotalVisit',
            'lastYearTotalVisit',
            'uniqueReferralsLastMonth'
        ]));
    }
}
