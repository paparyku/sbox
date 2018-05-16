<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite; 
use Auth; 

class DiscordController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::with('discord')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('discord')->user();
        
        if(!is_null($user))
        {
            $user = $this->findOrCreate($user);
            Auth::login($user);
        }

        return redirect('/');
    }

    protected function findOrCreate($data)
    {
        $user = User::where('discordid', $data->id)->first(); 

        if(!is_null($user))
        {
            if($data->name != $user->name || $data->avatar != $user->avatar)
            {
                $user->update([
                    'name' => $data->name,
                    'avatar' => $data->avatar
                ]);
                return $user;
            }
            return $user; 
        }

        return User::create([
            'discordid' => $data->id,
            'name' => $data->name,
            'email' => $data->email,
            'avatar' => $data->avatar,
        ]);
    }

}
