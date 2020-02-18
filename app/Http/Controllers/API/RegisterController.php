<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\UserRole;
use App\People;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
   
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $data = $request->all();

        $people = People::create([
            'rif' => '11111',
            'name' => $data['name'],
            'sex' => $data["sex"],
            'birthdate' => '01/01/1990',
            'cities_id' => '1',
            'phone' => ''
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'peoples_id' => $people->id,
            'groups_id' => '1',
            'coins_id' => '1'
        ]);

        DB::table("user_roles")->insert(["user_id" => $user->id, 'role_id' => '2']);
        
        // $success['token'] =  $user->createToken('Bio')->accessToken;
        $success['name'] =  $user->name;
        $success['user_id'] =  $user->id;
   
        return $this->sendResponse($success, 'User register successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            // $success['token'] =  $user->createToken('Bio')-> accessToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
}