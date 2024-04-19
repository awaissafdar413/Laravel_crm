<?php

namespace App\Http\Controllers;
use App\Imports\emailImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class exportController extends Controller
{
    public function importexportview(){
        return view ('excel.import');
    }
    public function import(){
        Excel::import(new emailImport, request()->file('file'));
        return back();
    }
    // public function export(){
    //     // return Excel::download(new )
    // }
}
