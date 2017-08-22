<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
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
    protected $articles;
    protected $categories;
    protected $comments;
    public function __construct()
    {
        $this->middleware('web');
        $this->articles = Article::all();
        $this->categories = Category::all();
        $this->comments = Comment::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('test')->with('articles',$this->articles)->with('comments',$this->comments)->with('categories',$this->categories);
    }

    public function single($id){
        $article = Article::find($id);
        return view('index')->with('article',$article)->with('articles',$this->articles)->with('comments',$this->comments)->with('categories',$this->categories);
    }
    public function comment(Request $request){
        Comment::create($request->all());
        return back();
    }
}
