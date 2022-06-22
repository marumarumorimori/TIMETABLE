<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Auth;


class ProfileController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}


    public function edit()
    {
        $user = Auth::user();
        return view('profile.setting', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user = Auth::user();

        $user->id = $request->user()->id;
        $user->name = $request->name;
        $user->avatar = $request->avatar;

        if($user->avatar == null) {
            Storage::delete('public/image/' . $user->avatar);
            $user->avatar = 'default.png';
        }

        if ($request->hasFile('avatar')) {
            if (is_file($user->avatar)) {
                Storage::delete('public/image/' . $user->avatar);
            }
            $path = $request->file('avatar')->store('public/image');
            $user->avatar = basename($path);
        }

        $user->update();

        return redirect('todo/index')->with('message' , 'プロフィールを更新しました');
    }




}
