<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Exports\PostExport;
use App\Imports\PostImport;
//use Maatwebsite\Excel\Excel;
use Excel;

class PostController extends Controller
{
    public function exportIntoExcel(){
        return Excel::download(new PostExport, 'postslist.xlsx');
    }    

    public function importForm(){
        return view ('import-form');
    }

    public function importFromExcel(Request $request){
        Excel::import(new PostImport, $request->file);
        return "Records are imported succesfully";
    }
}
