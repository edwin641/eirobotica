<?php

namespace App\Http\Controllers;

use App\Models\SocialProfile;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;

use Exception;


class SocialController extends Controller
{
    public function facebookRedirect($driver)
    {
        $drivers = ['facebook', 'google'];
        if (in_array($driver, $drivers)) {
            return Socialite::driver($driver)->redirect();
        }else{
            return redirect()->route('login')->with('info', $driver . ' no es una palicacion valida');
        }
    }

    public function loginWithFacebook(Request $request, $driver)
    {
        if ($request->get('error')) {
            return redirect()->route('login');
        }


        $userSocialite = Socialite::driver($driver)->stateless()->user();
       
        
        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
                                        ->where('social_name', $driver)->first();

        if(!$social_profile){

            $user = User::where('email', $userSocialite->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email' => $userSocialite->getEmail(),
                ]);
            }


            $social_profile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $userSocialite->getAvatar()
            ]);
        }

        auth()->login($social_profile->user);

        return redirect()->route('home');
    }
}
