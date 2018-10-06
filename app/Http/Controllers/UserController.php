<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //个人设置页面
    public function setting()
    {
        return view('user.setting'); 
    }

    //个人设置行为
    public function settingStore()
    {
        return; 
    }

    //个人中心页面
    public function show(User $user)
    {
        
        //这个人信息，包含关注/粉丝/文章数
        $user = User::withCount(['stars','fans','posts'])->find($user->id);
        // 这个人的文章列表 ， 取创建时间最新的前10条
        $posts = $user->posts()->orderBy('created_at','desc')->take(10)->get();
<<<<<<< HEAD
=======
        $as = \Carbon\Carbon;
        dd($as);
        foreach($posts as $post){
            dd($post->created_at->toFormattedDateString()); 
        }
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
        //这个人关注的用户,包含关注用户的 关注/粉丝/文章数
        $stars = $user->stars;
        $susers = User::whereIn('id',$stars->pluck('star_id'))->withCount(['stars','fans','posts'])->get();

        //这个人粉丝用户，包含粉丝用户的 关注/粉丝/文章数
        $fans = $user->fans;
        $fusers = User::whereIn('id',$fans->pluck('fan_id'))->withCount(['stars','fans','posts'])->get();
        return view('user/show',compact('user','posts','susers','fusers'));
    }

    //关注
<<<<<<< HEAD
    public function fan(User $user)
    {
        $me = \Auth::user();
        $me->doFan($user->id);
        return [
            'error' => 0,
            'msg' => ''
        ];
    }

    //取消关注
    public function unfan(User $user)
    {
        $me = \Auth::user();
        $me->doUnfan($user->id);
        return [
            'error' => 0,
            'msg' => ''
        ];
=======
    public function fan()
    {
        return;
    }

    //取消关注
    public function unfan()
    {
        return;
>>>>>>> bd855a86491ec263610e95e460b60f768b1aa4bf
    }
}
