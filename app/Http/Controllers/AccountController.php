<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use function Sodium\add;

class AccountController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Paginator::useBootstrap();
        $user = User::findOrFail($id);
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        $followersCounter = $this->getFollowersCounter($user);
        $followingCounter = $this->getFollowingCounter($user);
        $posts=$user->posts->paginate(15);

        return view('account', [
            'user'=>$user,
            'posts'=>$posts,
            'follows' => $follows,
            'followersCounter'=>$followersCounter,
            'followingCounter'=>$followingCounter,
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
        $account =$user->account();
        $data = request() ->validate([
            'biography'=> 'nullable',
            'location'=> 'nullable',
            'image'=> 'image',
        ]);
        if (request('name')!=''){
            $user->name = request('name');
        }
        if (request('biography')!='') {
            $account->biography = request('biography');
        }
        if (request('location')!='') {
            $account->location = request('location');
        }

        if (request('image')!='') {
            $filepath = request('image')-> store('uploads', 'public');
            $account->image = $filepath;
            $data['image']= $filepath;
        }



        $user->update();
        $account->update($data);

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

    /**
     * @param $user
     * @return mixed
     */
    public function getFollowingCounter($user)
    {
        $followingCounter = Cache::remember(
            'count.following.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->following->count();
            });
        return $followingCounter;
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getFollowersCounter($user)
    {
        $followersCounter = Cache::remember(
            'count.followers.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->account->followers->count();
            });
        return $followersCounter;
    }
}
