<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PostExport implements FromCollection, WithHeadings
{
    public function headings():array {
        return[
            'id',
            'title',
            'slug',
            'user_id',
            'category_id',
            'created_at'
        ];
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Post::all();
        return collect(Post::getPosts());
    }
}
