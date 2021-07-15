<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tweet;
use App\Models\User;
use App\Models\following;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Pages 
    public function index()
    {


        // $data = DB::table('tweets')
        //     ->leftJoin('users', 'tweets.user_id', '=', 'users.id')
        //     ->select('tweets.tweet', 'users.name', 'tweets.id', 'tweets.likecnt', 'users.username', 'tweets.user_id', 'tweets.created_at')
        //     ->where('tweets.user_id', auth()->id())
        //     ->orderByDesc('tweets.created_at')
        //     ->get();
        $following = Auth()->user()->followings;
        
        $data =Auth()->user()->timeline();
        // return $data;

         return view('App.index', compact('data','following'));
    }

    public function user($id)
    {

        // return "user name ".$id;
        //select u.username, u.name,f.following, f.user_id from users u left join followings f on u.id=f.user_id where f.user_id=1 or f.following =1;


        // $data = DB::table('users')
        //     ->where('id', auth()->id())
        //     ->get();

        $data= Auth()->user()->where('id',$id)->get();

        $following = DB::table('followings')
            ->where('user_id', auth()->id())->count();

        $followers = DB::table('followings')
            ->where('following', auth()->id())->count();

        // data of tweets by active user,
        $tweets = User::find($id)->tweets;

        // return $data;
        return view('App.user', compact('data', 'followers', 'following', 'tweets'));
    }

    //not yet create
    public function tweet()
    {
        return view('App.tweet');
    }

    public function profile()
    {
        return view('App.profile');
    }
}
