<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SignalcsvExport;
use App\Imports\SignalcsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Signal2;

class SignalcsvFile extends Controller
{
    function index()
    {
        $data = Signal2::latest()->paginate(10);
        return view('csv_file_pagination', compact('data'))->with('i', (request()->input('page',1)-1)*10);
    }
    
    public function csv_export()
    {
        return Excel::download(new SignalcsvExport,'signal.csv');
    }
    
    public function csv_import()
    {
        Excel::import(new SignalcsvImport, request()->file('file'));
        return back();
    }
}