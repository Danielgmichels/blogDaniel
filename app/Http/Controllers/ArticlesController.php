<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $search = request("search");
        if($search){
            $articles = Articles::where([
                ["title", "like", "%{$search}%"]
            ])->paginate(10);
        }else{
            $articles = Articles::paginate(10);
        }
        return view("blog/articles", [
            "articles" => $articles,
            "search" => $search
        ]);
    }


}
