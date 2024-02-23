<?php

namespace App\Http\Controllers;

use App\Http\Requests\postrequest;
use App\Models\Post;
use Illuminate\Http\Request;


class InformationsController extends Controller
{
    public function index(Request $request)
    {
        // $id = $request->segment(2);
        // dd($id);
        // $post = Post::all();
        // dd($post);
        return view('partials/settings');
    }
    public function settings()
    {
        // $id = $request->segment(2);
        // dd($id);
        // $post = Post::all();
        // dd($post);
        return view('partials/settings');
    }
    public function edit($id)
    {
        // $id = $request->segment(2);
        // dd($id);
        $postid = Post::where('profile_id', '=', $id)->get();
        // dd($postid);
        return view('partials/settings', compact('postid'));
    }
    public function create($id)
    {
        return view('partials/createpost', compact("id"));
    }
    public function store(Request $request)
    {

        //         $title = $request->title;
//         $bio = $request->bio;
//         $image = $request->image;
//         // dd($image);
//         $image=$request->file('image')->store('profile','public');
//         // dd($filename);

        //         Post::create([
//             'bio' => $bio,
//             'title' => $title,
//             'image' => $image,
//         ]);
// dd($request);
//         return redirect()->route('settings.index');
        // // dd($filename);
        $request->validate([
            'profile_id' => 'integer',
            'bio' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg|max:10240',
        ]);
        $image = $request->file('image')->store('profile', 'public');
        // Post::create($request->all());
        Post::create([
            'profile_id' => $request->profile_id,
            'bio' => $request->bio,
            'title' => $request->title,
            'image' => $image,
        ]);
        // dd($request);
        return redirect()->route('profile.index')->with('success', 'Votre post est bien crée ');
    }
    public function destory(Post $id)
    {
        // $id = $request->segment(2);
        // dd($id);

        $id->delete();
        // dd($postid);
        return redirect()->route('profile.index')->with('success', 'Votre post est supprimer ');
    }
    public function index_post()
    {
        $post = Post::paginate(5);
        return view('profile/post', compact('post'));
    }
}
