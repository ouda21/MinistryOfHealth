<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = DB::table('news')->get();

        return view('welcome', ['news' => $news]);
    }

    public function store(Request $request)
    {
        $news = $request->isMethod('PUT') ?  News::findOrFail($request->id): new News;


        $news->id = $request->input('id');
        $news->title = $request->input('title');
        $news->link = $request->input('link');
        $news->image = $request->input('image');


//        $check = $this->checkifExists($news->id );
        if ($news->save()) {
            return new NewsResource($news);
        }
//        if(is_null($check)) {
//
//        }
//        else
//        {
//            $this->truncate();
//            $news->save();
//        }
//        return new NewsResource($news);
    }


    public function show($id)
    {
        //Get a single news value
        $news = News::findOrFail($id);

        //Return the single news article as a resource
        return new NewsResource($news);
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if($news->delete()){
            return new NewsResource($news);
        }
    }

//    public function truncate(){
//        News::query()->truncate();
//    }
//    public function checkifExists($user_id){
//        $news = DB::table('news')->where('id', '=',$user_id)->first();
//
//        $news->id;
//
//    }

//    public function getAll(){
//
//    }
}
