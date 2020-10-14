<?php

namespace App\Http\Controllers;

use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    public function redirectTo()
    {
        
        $user_id= Auth::user()->id;
     

        if(isset($_GET['store'])){
            $_SESSION['stores_id']=$_GET['store'];
        }else{
            $res= DB::select("select * from user_stores us INNER JOIN stores s ON s.id=us.stores_id WHERE us.user_id=".$user_id);
            if(count($res)>0){
                
                foreach($res as $index=>$obj){
                    
                    $_SESSION['stores_id']=$obj->stores_id;
        
                    break;
                }
               
            }
        }
        return config('voyager.user.redirect', route('voyager.dashboard'));
    }
}
