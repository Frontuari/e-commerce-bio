<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Packages extends Model
{
<<<<<<< HEAD
    protected $table='packages';

=======

    public function setNameAttribute($value)
    {
        if(isset($this->attributes['id'])){
            $_POST['id_leo']=$this->attributes['id'];
        }
 
        //$_POST['cantidad']="ff";
       // $this->attributes['prueba']="pruebaaaa";
        /*
        $cant=$_POST['cantidad'];
        if($_POST['_method']=='PUT'){
            foreach($_POST['package_belongstomany_product_relationship'] as $valor){
                echo $cant[$valor]."<br>";


            }
        }

        
        exit();
        */
        $this->attributes['name']=$value;
    }
>>>>>>> f1ec0b1a2fa8d76128272d664945f5b82a566668
    public function setDiscountAttribute($value)
    {
        $fg= new FuncionesGenerales;
        $this->attributes['discount']=$fg->set_formato_moneda($value);
    }
    public function getDiscountAttribute($value){
       $fg= new FuncionesGenerales;
       return $fg->get_formato_moneda($value);
    }
}
