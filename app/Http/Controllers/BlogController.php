<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\category;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    } 


    public function index()
    {
    	$blogs = blog::latest()->get();
    	return view('blog.index',compact('blogs'));
    }

    public function create()
    {
        $category = category::pluck('name','id');
    	return view('blog.create', compact('category'));
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$blog = Blog::create($input);	
        $CategoryIds = $request->category_id;
        $blog->category()->sync($CategoryIds);
    	return redirect('blog');
    }

    public function show($id)
    {
    	$blog = Blog::findOrFail($id);
    	return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $category = category::pluck('name','id');
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog', 'category'));
    }

    public function update(Request $req, $id)
    {
        $input = $req->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        $CategoryIds = $req->category_id;
        $blog->category()->sync($CategoryIds);
        return redirect('/blog');
    }

    public function destroy(Request $req, $id)
    {
        $blog = Blog::findOrFail($id);
        $CategoryIds = $req->category_id;
        $blog->category()->detach($CategoryIds);
        $blog->delete($req->all());
        return redirect('/blog/bin');
    }

    public function bin()
    {
        $deletedBlogs = Blog::onlyTrashed()->get(); 

        return view('blog.bin', compact('deletedBlogs'));
    }

    public function restore($id)
    {
        $restoredBlogs = Blog::onlyTrashed()->findOrFail($id);
        $restoredBlogs->restore('restoredBlogs');
        return redirect('/blog');
    }

    public function destroyBlog($id)
    {
        $destroyBlog = Blog::onlyTrashed()->findOrFail($id);
        $destroyBlog->forceDelete($destroyBlog);
        return back();
    }
}
	
    