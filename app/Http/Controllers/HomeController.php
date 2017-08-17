<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('test',compact('categories','articles'));
    }

    public function single($id){
        $article = Article::find($id);
        $articles = Article::all();
        $categories = Category::all();
        return view('index',compact('article','categories','articles'));
    }
}
