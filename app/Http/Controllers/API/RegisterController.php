<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\UserRole;
use App\People;
use App\Mail\UsuarioRegistro;
use Illuminate\Support\Facades\Mail;
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
        /*$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }*/
        
        $data = $request->all();

        // $people = People::create([
        //     'rif' => '11111',
        //     'name' => $data['name'],
        //     'sex' => $data["sex"],
        //     'birthdate' => '01/01/1990',
        //     'cities_id' => '1',
        //     'phone' => ''
        // ]);

         $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => password_hash($data['password'],PASSWORD_BCRYPT),
             'peoples_id' => $people->id,
             'groups_id' => '1',
            'coins_id' => '1'
         ]);

        // DB::table("user_roles")->insert(["user_id" => $user->id, 'role_id' => '2']);
        
        // $success['token'] =  $user->createToken('Bio')->accessToken;
        //Mail::to($data["email"])->queue(new UsuarioRegistro());
        // $success['name'] =  $user->name;
        // $success['user_id'] =  $user->id;
        $success = [];
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


    /**
     * Register Controller
     *
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {   
        $data_user = $request->all();
        //USER
        DB::table('users')
            ->where('id', $data_user['user_data']['id'])
            ->update([
                'name' => $data_user['user_data']['name'],
            ]);
        //PEOPLES
        DB::table('peoples')
            ->where('id', $data_user['user_data']['peoples_id'])
            ->update([
                'name' => $data_user['user_data']['name'],
                'sex' => $data_user["user_data"]['sex'],
                'birthdate' =>$data_user["user_data"]['birthdate'],
                'cities_id' => $data_user["user_data"]['city_id'],
                'phone' => ''
            ]);

        echo json_encode($this->getData($data_user["user_data"]["email"]));
    }   

    public function getData($email) {
        $datos = User::select("users.id","users.email","users.name","users.peoples_id","peoples.sex","peoples.birthdate","cities.id as city_id","cities.name as ciudad")
        ->join("peoples","peoples.id","=","users.peoples_id")
        ->join("cities","cities.id","=","peoples.cities_id")
        ->where("users.email",$email)
        ->first();
        $_SESSION["usuario"]=$datos;
        return $datos;
    }

}