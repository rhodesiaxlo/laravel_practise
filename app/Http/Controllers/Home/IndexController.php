<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use app\Model\Store;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
    public function index(Request $request){
        echo "hello world".$request->user();
        die;
        $stores = \App\Model\Store::all();
        foreach($stores as $store){
            echo $store->store_name.'</br/>';
        }
    }

    public function view(){
        $user = \App\Permission::find(1);

        foreach ($user->roles as $role) {
               
            echo $role->name;
            echo "<br/>";
        }
        die;
        echo 'dash board';
        die;
        //if(!Auth::check()){
         //   echo 'please login';
          //  die;
        //}
        return view('Home/view');
        if(Gate::allows('update-post', Post::class)){
            return view('Home/view');
        }

        if(Gate::denies('update-post', Post::class))
        {
            echo 'auth denied';
        }
    }
        
}

