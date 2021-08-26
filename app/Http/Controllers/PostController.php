<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Exports\PostExport;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as Excel;

class PostController extends Controller
{
    public function exportIntoExcel(){
        return Excel::download(new PostExport, 'postslist.xlsx');
    }    
}
