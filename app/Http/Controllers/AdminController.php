<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use MongoDB\BSON\Timestamp;

class AdminController extends Controller
{
    public function index(){
        $comments = Comment::all();
        $articles = Article::all();
        $categories = Category::all();
        return view('admin/index',compact('comments','articles','categories'));
    }

    public function category(){
        $categories = Category::all();
        return view('admin/category',compact('categories'));
    }

    public function article(){
        $articles = Article::all();
        return view('admin/article',compact('articles'));
    }
    public function comment(){
        $comments = Comment::all();
        return view('admin/comment',compact('comments'));
    }
    public function deleteComment($id){
        Comment::destroy($id);
        return redirect(route('admin.comment'));
    }
}
