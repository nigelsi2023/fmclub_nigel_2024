<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;

class AdminContactController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function view_contacts(){
        $contacts = Contact::whereNull('deleted_at')->orderBy('id', 'DESC')->get();
        $allmail = DB::table('new_mail_save_and_send')->orderBy('id', 'DESC')->get();
        return view('admin.contacts', compact(['contacts', 'allmail']));
    }

    public function view($id){
        $contact = Contact::find($id);
        return view('admin.viewcontact', compact('contact'));
    }

    public function history($id){
        $mailhistory = DB::table('new_mail_history')->where(function ($query) use ($id) {$query->where('user_id', '=', $id);})->select('id','user_id','subject','message','created_at')->orderBy('id', 'DESC')->get();
        $mailhistory2 = DB::table('new_mail_save_and_send')->where(function ($query) use ($id) {$query->where('user_id', '=', $id);})->select('id','user_id','subject','message','created_at')->orderBy('id', 'DESC')->get();
        
        $maildatas = $mailhistory->concat($mailhistory2);
        
        return view('admin.signals.userMailHistory', compact('maildatas'));
    }

    public function destroy($id)
    {
        $contact = Contact::whereId($id)->firstOrFail();
        $contact->deleted_at = now();
        $contact->save();

        return redirect()->back()->with('success', 'The Contact has Been Deleted Successfully.');
    }
}
