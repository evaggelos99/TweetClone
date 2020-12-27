<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($user)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('account', [
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);
        return view('edit', [
            'user'=>$user,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $user= User::findOrFail($id);
        if (request('name')!=''){
            $user->name = request('name');
        }
        if (request('biography')!='') {
            $user->biography = request('biography');

        }
        if (request('location')!='') {
            $user->location = request('location');
        }


        if (request('image')!='') {
            $filepath = request('image')->store('uploads', 'public');
            $user->image = $filepath;

        }



        $user->update();

        /*Auth::user()->update([
            'name' => request('name'),
            'biography' => request('biography'),
            'location' => request('location'),
            'profile_photo_path' => request('profile_photo_path'),
        ]);*/

        return redirect('/account/'.$user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/');
    }
}
