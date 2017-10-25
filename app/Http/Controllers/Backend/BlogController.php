<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $posts;

    public function __construct(Post $posts) {
        $this->posts = $posts;

        parent::__construct();

    }

    public function index()
    {
        $posts = $this->posts->with('author')->orderby('published_at', 'desc')->paginate(10);
        return view('backend.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.blog.form', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StorePostRequest $request)
    {
        $this->posts->create(['author_id' => auth()->user()->id]+$request->only('title','slug','published_at','body', 'excerpt'));
        return redirect(route('blog.index'))->with('status', 'Post successfully Created');
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
    public function edit($id)
    {
        $post = $this->posts->findOrFail($id);
        return view('backend.blog.form', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $post = $this->posts->findOrFail($id);
         $post->fill($request->only('title','slug','published_at','body', 'excerpt'))->save();
         return redirect(route('blog.edit',$post->id))->with('status', 'Post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id){
        $post = $this->posts->findOrFail($id);
        return view('backend.blog.confirm', compact('post'));
    }
    public function destroy($id)
    {
        $post = $this->posts->findOrFail($id);
        $post->delete();
        return redirect(route('blog.index'))->with('status', 'Post deleted');
    }
}
