<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Photos;
use App\Post;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photos::all();
        return view('photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        return view('photo.add', compact('posts'));
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
            'text' => 'required',
            'post_id' => 'required'
        ]);

        Photos::create([
            'title' => $request->title,
            'text' => $request->text,
            'post_id' => $request->post_id
        ]);

        return redirect('photo');
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
    public function edit(Photos $row)
    {
        $posts = Post::all();

        return view('photo.edit', compact('row', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photos $row)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'post_id' => 'required'
        ]);

        Photos::where('id', $row->id)
                ->update([
                    'title' => $request->title,
                    'text' => $request->text,
                    'post_id' => $request->post_id
                ]);
         return redirect('/photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photos::findOrFail($id);
        $row->delete();

        return redirect('photo');
    }
}
