<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Packages extends Model
{
    protected $table='packages';

    public function save(array $options = []) 
    { 
        if (!$this->stores_id) { 
            $this->stores_id = $_SESSION['stores_id']; 
        } 
     
        parent::save(); 
    } 
    
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
