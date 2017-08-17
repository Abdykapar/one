<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create(){
        return view('admin/category/create');
    }
    public function store(Request $request){
        Category::create($request->all());
        return redirect(route('admin.category'));
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin/category/edit',compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        $category->save();
        return redirect(route('admin.category'));
    }
    public function destroy($id){
        Category::destroy($id);
        return redirect(route('admin.category'));
    }
}
