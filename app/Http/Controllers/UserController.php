<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function show(User $user)
    {
        $topics = $user->topics;
        return view('profile', compact('user', 'topics'));
    }

    public function notifications()
    {

        $usernotifications = [];

        foreach (currentUser()->notifications as $notification) {
           foreach ($notification->data as $notify) {
                array_push($usernotifications, $notify);
           }
        }
     
        return view('notifications', compact('usernotifications'));

    }


}
