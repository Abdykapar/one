<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('admin/article/create',compact('categories'));
    }
    public function store(Request $request){
        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $random = random_int(1000,9999);
            $randomName = $random.'.'.$extension;
            $request->file('image')->move('image/',$randomName);
            Article::create([
                'title' => $request['title'],
                'content' => $request['content'],
                'user_id' => Auth::user()->id,
                'category_id' => $request['category_id'],
                'image' => $randomName,
                'sub_text' =>$request['sub_text']
        ]);
        }
        else {
            return back()->withErrors('image','Добавте рисунок');
        }
        return redirect(route('admin.article'));
    }
    public function edit($id){
        $categories = Category::all();
        $article = Article::find($id);
        return view('admin/article/edit',compact('article','categories'));
    }
    public function update(Request $request, $id){
        $article = Article::find($id);
        if($request->hasFile('image')){
            File::delete('image/'.$article->image);
            $name = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $random = random_int(1000,9999);
            $randomName = $random.'.'.$extension;
            $request->file('image')->move('image/',$randomName);
            $article->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'category_id' => $request['category_id'],
                'image' => $randomName,
                'sub_text' => $request['sub_text']
            ]);
        }
        else{
            $article->update($request->all());
        }
        $article->save();
        return redirect(route('admin.article'));
    }
    public function destroy($id){
        $article = Article::find($id);
        File::delete('image/'.$article->image);
        Article::destroy($id);
        return redirect(route('admin.article'));
    }
}
