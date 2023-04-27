<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $data = [
            'posts' => Post::where('title','like','%'.$keyword.'%')->orderby('created_at', 'desc')->get(),
            'categories' => Category::all(),
            'keyword' => $keyword
        ];
        return view('pages.blog.search_results')->with($data);
    }
}
