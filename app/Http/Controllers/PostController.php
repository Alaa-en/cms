<?php
namespace App\Http\Controllers;
use App\Post;
use App\user;
use App\Category;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PostsFromDB = Post::all();

        return view('posts.index',['posts'=>$PostsFromDB]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $category = $request->category_id;
        $description = $request->description;

         post::create([
            'title'=>$title,
            'category_id'=>$category,
            'description'=>$description,
            'user_id' =>Auth::user()->id,
            
         ]);
         return redirect(route('posts.index'));
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $users = user::all();
        
        $categories=category::all();
    
        return view('posts.edit',['post'=>$post ,'users'=>$users , 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $post, Request $request)
    {
        $update= post::findOrFail($post);
        $update->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id'=>$request->category_id,
        ]);
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $singlepost= post::findOrFail($post);
        $singlepost->delete();

        return redirect(route('posts.index'));
    }

    public function trashed()
    {
        $singlepost= post::onlyTrashed()->get();
        return view('posts.softdelete',['posts'=>$singlepost]);
    }

    public function hdestroy($post)
    {
        $singlepost= post::withTrashed()->where('id',$post)->first();
        $singlepost->forceDelete();

        return redirect()->back();
    }
   
           public function restore($post)
    {
        $singlepost= post::withTrashed()->where('id',$post)->first();
        $singlepost->restore();

        return redirect(route('posts.index'));
    }
}
