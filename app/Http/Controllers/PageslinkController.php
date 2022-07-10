<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class PageslinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'editors', 'contact', 'about', 'adminlog', 'show', 'entertainment', 'investigative', 'news', 'sports']]);
    }
    
    public function home(){
        return view('home');
    }
    public function delete(){
        return view('delete')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    public function investigative(){
        // return view('pages.investigative');
            $category = "Investigative";

            $posts = DB::table('posts')->where('category', $category)->get();
            
            if ($posts){
                return view('pages.investigative')
                    ->with('posts', $posts);
            }
                
                    
    }
    public function sports(){
        $category = "Sports";

        $posts = DB::table('posts')->where('category', $category)->get();
        
        if ($posts){
            return view('pages.sports')
                ->with('posts', $posts);
        }
       
    }
    public function entertainment(){
        $category = "Entertainment";

        $posts = DB::table('posts')->where('category', $category)->get();
        
        if ($posts){
            return view('pages.entertainment')
                ->with('posts', $posts);
        }
        
    }
    public function news(){
        $category = "News";

        $posts = DB::table('posts')->where('category', $category)->get();
        
        if ($posts){
            return view('pages.news')
                ->with('posts', $posts);
        }
        return view('news');
    } 
    public function editpost(){
        return view('edit')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    } 
    

     /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('single.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('editpost')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'category' => $request->input('category'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id'=> auth()->user()->id
            ]);

        return redirect('/edit')
            ->with('message', 'Your post has been updated!! Click the back button to return.');
    }

    
}
