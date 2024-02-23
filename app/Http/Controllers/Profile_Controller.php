<?php

namespace App\Http\Controllers;

use App\Http\Requests\profilerequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Profile_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $profiles = Profile::paginate(9);
        return view('Profile.profiles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(profilerequest $request)
    {
        //
        $name = $request->name;
        $password = $request->password;
        $bio = $request->bio;
        $email = $request->email;
        $image = $request->image;
        // dd($image);
        $image=$request->file('image')->store('profile','public');
        // dd($filename);

        Profile::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),//password makayb9axi kayban fbase donne kayrja3 bwahd code mam3rofxi
            'bio' => $bio,
            'image' => $image,
        ]);

        return redirect()->route('login.show')->with('success', 'Votre compte est bien crée ' . $email);
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
        // $id = (int) $request->id;
        $profile = Profile::findOrFail($id);

        return view('Profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        return view('Profile.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(profilerequest $request,Profile $profile)
    {
        //
        $formfields=$request->validated();
        if($request->hasFile('image')){
            $formfields['image']=$request->file('image')->store('profile','public');
        }
        // dd($formfields);
        $profile->fill($formfields)->save();
        return redirect()->route('profile.show',$profile->id)->with('success','le profile a été bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
        $profile->delete();
        return redirect()->route('login')->with('success','le porofile a été bien supprimé');
    }
}
