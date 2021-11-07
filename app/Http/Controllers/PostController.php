<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = "image".rand(1000000, 20000000).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('postimages');
            $image->move($destinationPath, $name);
            $data = Post::create([
                'title'=>$request->title,
                'body' =>$request->body,
                'image' => $name,

            ]);
            return $data;
        }
        else{
            return "failed";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = Post::all();
        return view("showpost", ["users"=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $user = Post::findorfail($id);
        return view("editpost", ["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Post::findorfail($request->id);
        $user->title = $request->title;
        $user->body = $request->body;
        if($request->file('image')){
            $destinationPath = public_path('postimages');
            File::delete($destinationPath."/".$user->getAttributes()['image']);
            $image = $request->file('image');
            $name = "image".rand(1000000, 20000000).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $user->image = $name;

        }
                $user->save();
                return redirect()->route('showPost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->delete();
//        $post = Post::findorfail($id);
//        $post->destroy();
        return redirect()->route('showPost');
    }
}
