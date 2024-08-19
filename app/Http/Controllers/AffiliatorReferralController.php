<?php

namespace App\Http\Controllers;

use DB;
use App\Referral;
use App\Affiliator;

class AffiliatorReferralController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth', 'affiliator']);
    }
    
    public function index()
    {
        $affiliatorId = auth()->user()->affiliator->id;

        $referrals = Referral::whereAffiliatorId($affiliatorId)->orderBy('id', 'desc')->get();
        
        return view('affiliator.referral.index', compact(['referrals']));
    }
    
    public function create()
    {
        return view('affiliator.referral.create');
    }

}
