<?php

namespace App\Http\Controllers;
use DB;
use App\Signal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForexSignalsNEWController extends Controller
{
    
    public function forexsignalsget()
    {
        $last30days = DB::table("signals")
                        ->where('status', '1')
                        ->where('created_at', '>', now()->subDays(30)->endOfDay())
                        ->get();
                        
        // if(empty($last30days['items']) || $last30days['items'] == null){
        //     $last30days = DB::table("signals")
        //                 ->where('status', '1')
        //                 ->where('created_at', '>', now()->subDays(60)->endOfDay())
        //                 ->get();
        // }
        
        $signals1 = DB::table('signals')->select('item_name', 'open_price', 'stop_loss', 'target_price', 'status')->get();
        $signals = DB::table('signals')->orderBy('signal_date','DESC')->simplePaginate(20);
        // $signals = DB::table('signals')->orderBy('created_at','desc')->simplePaginate(20);
        // $countRow = count($signals);
        $countRow  = DB::table('signals')->count();
        $liveCount = DB::table('signals')->WHERE('status',0)->count();
        $profitCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',1)->count();
        $lossCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',2)->count();
    	
    	$desc_blogs         = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
	    $trader_category    = DB::table('trader_categories')->orderBy('name', 'asc')->get();
        
        return view('financepro.pages.forex_signal1', compact('signals','last30days','countRow','profitCount','lossCount','liveCount','signals1','desc_blogs', 'trader_category'));
        
    }

        
    public function liveForexSignals()
    {     
        $signalsLimited = DB::select("select signals.* from signals,
                (select max(id) as signal_id from signals group by item_name) max_signal
                  where signals.id=max_signal.signal_id order by signals.created_at desc");
        // $signalsLimited = DB::table('signals')->orderBy('signal_date','DESC')->get();
        // dd($signalsLimited);
        
        
        // $signalsLimited = Signal::limit(35)->orderBy('signal_date','DESC')->get()->groupBy('item_name')->selectRaw;
        // dd($signalsLimited);

        $signals = DB::table('signals')->orderBy('signal_date','DESC')->get();
        $countRow = count($signals);
        $liveCount = DB::table('signals')->WHERE('status',0)->count();
        $profitCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',1)->count();
        $lossCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',2)->count();
        
        
        return view('financepro.pages.live_forex_signals', compact('signalsLimited','signals','countRow','profitCount','lossCount','liveCount'));
    }
}
