<?php

namespace App\Http\Controllers\Backend;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $pages;

    public function __construct(Page $pages){
        $this->pages = $pages;
        parent::__construct();
    }

    public function index()
    {
        //
        $pages = $this->pages->all();
        return view('backend.pages.index', compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        //
        return view('backend.pages.form', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StorePageRequest $request)
    {
        //
        $this->pages->create($request->only('title','uri','name','content'));
        return redirect(route('pages.index'))->with('status', 'Page successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->pages->findOrFail($id); 
        return view('backend.pages.form',compact('page'));
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
        $page = $this->pages->findOrFail($id); 
        $page->fill($request->only('title','uri','name','content'))->save();
        return redirect(route('pages.edit',$page->id))->with('status', 'Page successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm ($id) {
        $page = $this->pages->findOrFail($id);
        return view('backend.pages.confirm', compact('page'));
    }

    public function destroy($id)
    {
        $page = $this->pages->findOrFail($id);
        $page->delete();
        return redirect(route('pages.index'))->with('status', 'Page deleted');

    }
}
