<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    // write by me

    public function index()
    {
        $categories = category::all();
        // dd($caregories);
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(category $category)
    {
        // dd($category_Id);
        // $category = category::findOrFail($category_Id); == category $category

        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // validation
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'desc' => 'required|string',
            'img' => 'nullable|image|mimes:png,jpg|max:1024'
        ]);

        
        // move uploaded file to public
        // Storage::putFile( "public/categories", $data['img']);
        // $data['img'] =

        category::create( $data );
        return redirect (url ('/categories'));
    }

    public function edit(category $category)
    {
        // $category = category::findOrFail($categoryId);
        return view('categories.edit' ,[
            'category' => $category
        ]);
    }

    public function update(category $category, Request $request)
    {
        // validation
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'desc' => 'required|string',
        ]);

        $category->update([ $data ]);
        return redirect( url('/categories'));
    }

    public function destroy(category $category)
    {
        $category->delete();

        return redirect( url('/categories'));
    }
}
