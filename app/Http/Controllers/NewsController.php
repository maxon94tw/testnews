<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'text' => 'required',
            'activity' => 'required',
        ]);

        $new = new News([
            'title' => $request->get('title'),
            'photo' => $request->get('photo'),
            'tags' => $request->get('tags'),
            'description' => $request->get('description'),
            'text' => $request->get('text'),
            'activity' => $request->get('activity'),
        ]);
        $new->save();
        return redirect('/admin/news')->with('success', 'News saved!');
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
        $new = News::find($id);

        return view('admin.edit', compact('new'));
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
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'text' => 'required',
            'activity' => 'required',
        ]);

        $new = News::find($id);
        $new->title =  $request->get('title');
        $new->photo = $request->get('photo');
        $new->tags = $request->get('tags');
        $new->description = $request->get('description');
        $new->text = $request->get('text');
        $new->activity = $request->get('activity');
        $new->save();

        return redirect('/admin/news')->with('success', 'News updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        $new->delete();

        return redirect('/admin/news')->with('success', 'News deleted!');
    }
}
