<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;


class NewsController extends Controller
{
    
    public function showAll()
    {
        $news = News::all();
    return response()->json($news);
    }

    public function showOne($id)
    {
        return response()->json(News::find($id));
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|unique:news',
            'url' => 'required'
        ]);

        $new = News::create($request->all());

        return response()->json($new, 201);
    }


    public function update($id, Request $request)
    {
        $new = News::find($id);
            $new->title = $request->title;
            $new->description = $request->description;
            $new->url = $request->url;
            $new->save();

        return response()->json($new, 200);
    }


    public function delete($id)
    {
        News::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}