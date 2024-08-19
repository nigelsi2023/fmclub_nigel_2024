<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Trader_blog;
use App\TraderCategory;
use Illuminate\Http\Request;

class UserFaqController extends Controller
{
    //

    public function faqs()
    {
        $faqs = Faq::all();
    	$desc_blogs         = Trader_blog::orderBy('created_at', 'desc')->limit(5)->get();
	    $trader_category    = TraderCategory::orderBy('name', 'asc')->get();
        return view('financepro.pages.faq', compact('faqs','desc_blogs', 'trader_category'));
    }

    public function faq_search(Request $request){
        
    	/*echo json_encode($request->search);
    	exit;*/

        $this->validate($request,[
            'search' => 'required'
        ]);

        if(!empty($request->search)){
            $searchTerm = $request->search;
            
            $faqs = Faq::query()
                ->where('question', 'LIKE', "%{$searchTerm}%")
                ->orWhere('answer', 'LIKE', "%{$searchTerm}%") 
                ->get();
            /*echo json_encode($faq);
            exit();*/
            if($faqs->count()<1){
            	$no = 1;
            }
            if(empty($searchTerm)){
            	$searchTerm = ' ';
            }
            return view('financepro.pages.faq', compact('faqs', 'no', 'searchTerm'));
        }/*else{
            return redirect(route('faq'))->with('errorMsg', 'Please Enter a keyword.');
        }*/
    }
}
