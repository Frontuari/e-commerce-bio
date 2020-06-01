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
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            //'c_password' => 'required|same:password', VALIDAR LA CONFIRMACIÓN SOLO DEL LADO DEL CLIENTE!!
        ]);

        // var_dump($validator->errors);
        // var_dump($validator["errors"]);
    
        // if($validator->fails()) {
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }
        
        $data = $request->all();
        if($data['rif']) $rif=$data['rif']; else $rif=rand(1111,999999);
        $people = People::create([
            'rif' => $rif,
            'name' => $data['name'],
            'sex' => $data["sex"],
            'birthdate' => $data["date"],
            'cities_id' => '1',
            'phone' => $data["phone"],
            'phone_home' => '',
        ]);

        $tokenRegister = password_hash($data['email'],PASSWORD_BCRYPT);

        $user = User::create([
            'id'=>'15',
            'name' => $data['name'],
            'email' => $data['email'],
            'validateemail' => $tokenRegister,
            'password' => password_hash($data['password'],PASSWORD_BCRYPT),
            'peoples_id' => $people->id,
            'groups_id' => '1',
            'coins_id' => '1'
        ]);

        DB::table("user_roles")->insert(["user_id" => $user->id, 'role_id' => '2']);
        
        // $success['token'] =  $user->createToken('Bio')->accessToken;
        $link = env("APP_URL")."validateUser/".$tokenRegister;
        Mail::to($data["email"])->queue(new UsuarioRegistro($link));
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


    /**
     * Register Controller
     *
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {   
        $data_user = $request->all();
        print_r($data_user);
        die();
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
                'phone' => $data_user["user_data"]['phone'],
                'phone_home' => $data_user["user_data"]['phone_home'],
            ]);
        
        //Dirección de Habitación
        $hasDirection = DB::table('order_address')->where("users_id","=",data_user['user_data']['id']);
        if($hasDirection) {
            DB::insert("INSERT INTO order_address (cities_id,address,status,users_id,zip_code,urb,sector,nro_home,reference_point) values(?,?,?,?,?,?,?,?)",['','','','','','','','','']);
        }else {
            DB::table('peoples')
            ->where('users_id', $data_user['user_data']['peoples_id'])
            ->update([
                'cities_id' => '',
                'address' => '',
                'status' => '',
                'users_id' => '',
                'zip_code' => '',
                'urb' => '',
                'sector' => '',
                'nro_home' => '',
                'reference_point' => '',
            ]);
        }

        
        
        // return $this->sendResponse(["success"=>true]);
        // return $this->sendResponse($this->getData($data_user["user_data"]["email"]));
        echo json_encode($this->getData($data_user["user_data"]["email"]));
    }   

    public function getData($email) {
        $datos = User::select("users.id","users.email","peoples.name","users.peoples_id","peoples.sex","peoples.birthdate","peoples.phone","peoples.phone_home","cities.id as city_id","cities.name as ciudad")
        ->join("peoples","peoples.id","=","users.peoples_id")
        ->join("cities","cities.id","=","peoples.cities_id")
        ->where("users.email",$email)
        ->first();
        // $_SESSION["usuario"]=$datos;
        return $datos;
    }

    public function validateUser($token) {
        $datos = DB::table("users")->where("validateemail",$token)->first();
        $_SESSION['usuario']["email"] = $datos->email;
        $_SESSION['usuario']["id"] = $datos->id;

        DB::table("users")
        ->where("validateemail",$token)
        ->update([
            'validateemail' => '',
        ]);

        if($datos->email) {
            $url = env("APP_URL");
            echo "redireccionando a Biomercados...";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url."/api_rapida.php?evento=obtenerTodo");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $dataCurl= curl_exec($ch);
            dd($dataCurl);
            curl_close($ch);
            return redirect()->route("home");
        }
        return "Token invalido";
    }

}