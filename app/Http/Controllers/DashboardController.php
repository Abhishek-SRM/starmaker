<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(Request $request){
        $users=User::all(); //to get all user from database
        //$user=User::where('last_name','Singh')->get('relationship_status');// for filtering data
        // $user=User::where('profiles_status','1')->get(['first_name','last_name','dob']);//use []-Array to get multiple values from database
        //$user=User::where('profiles_status','1')->first('first_name');// to filter duplicate data
        //dd($user);
        $users=User::where('profiles_status','0')->get(['first_name','bio']);// for filtering data
        $bannedusers=User::where('profiles_status','1')->get(['first_name','bio']);
        return view('dashboard',compact(['users','bannedusers']));
      }

    public function manageuser(Request $request){
        $users=User::where('profiles_status','0')->get(['first_name','bio']);// for filtering data
        dd('$users');
        $bannedusers=User::where('profiles_status','1')->get(['first_name','bio']);
      return view('manageuser');
    }

     public function subscription(){
        return view('subscription');
      }
}
