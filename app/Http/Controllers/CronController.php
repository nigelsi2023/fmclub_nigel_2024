<?php

namespace App\Http\Controllers;

use App\User;
use App\Subscribe;
use App\Subscribe2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users      = DB::table('users')->select('name','email')->get();
        $subscribers= DB::table('subscribes')->select('name','email')->get();
        // $input = [];
        // foreach($users as $user){
        //     $input[] = (array)$user;
        // }
        // // dd($input);
        // if(Subscribe::insert($input)){
        //     echo "Success!";
        // } else {
        //     echo " Errror";
        // }
        foreach($users as $user){
            $data = Subscribe::where('email',$user->email)->first();
            echo "<pre>";
            var_dump($data);
        }
        
        die();
        return view('financepro.pages.checkout',compact('packageId','page_title','package'));
    }
}