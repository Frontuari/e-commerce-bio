<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Orders;
use App\Products;
use App\RatingProducts;
use DB;
class Prueba extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    
    //public function Prueba(){
      //echo run();
   // }
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $h="";
        $h.= "<div class='row'>".$this->top();
        $rol=Auth::user()->role_id;
        if($rol!=7){
          $h.=$this->productos();
          $h.=$this->usuarios();
          $h.=$this->ventas();
          $h.=$this->opiniones();
        }


        if($rol==6 || $rol==1){
          $h.=$this->nuevo_pago('Nuevos pagos','consutar_nuevo_pago','/admin/det-bank-orders','ion-cash');
        }
        if($rol==5 || $rol==1){
          $h.=$this->nuevo_pago('Nueva orden','consutar_nuevas_ordenes','/admin/orders','ion-pricetag');
        }
        if($rol==7 || $rol==1){
          $h.=$this->nuevo_pago('Delivery','consutar_nuevas_ordenes_delivery','/admin/orders','ion-pricetag');
        }
        $h.='
        <span id="noti" style="margin-right:20px;float:right; font-size:60px; color:#E1251B" onclick="chao()"><i class="ion-android-notifications-off"></i></span>
        </div>'.
        $this->grafico_pedidos();
       $h.=$this->footer();
        //$h.=$this->footer();
        return $h;
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
        return Auth::user()->can('browse', Voyager::model('User'));
    }
    public function productos(){
      if(!isset($_SESSION['stores_id']) and !empty($_SESSION['stores_id'])){
        $user_id= Auth::user()->id;
        $res= DB::select("select * from user_stores us INNER JOIN stores s ON s.id=us.stores_id WHERE us.user_id=".$user_id);
        if(count($res)>0){
            
            foreach($res as $index=>$obj){
                
                $_SESSION['stores_id']=$obj->stores_id;
    
                break;
            }
           
        }
    }
        $count =DB::table('products')->where('stores_id','=',$_SESSION['stores_id'])->count();
        $url="/admin/products";
        return '
          
            <div class="col-md-3 col-sm-6 col-xs-12 lin">
            <a href="'.$url.'">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion-ios-baseball-outline"></i></span>
                   
                    <div class="info-box-content">
                    <span class="info-box-text">Productos</span>
                        <span class="info-box-number">'.$count.'</span>
                    </div>
                    <!-- /.info-box-content -->
                </div></a>
                <!-- /.info-box -->
             </div>
    ';
    }
    public function grafico_pedidos(){
        $html="";
        $html.='
        <div class="center col-md-9 col-sm-12 col-xs-12 lin">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Historico de ordenes</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="areaChart" style="height: 248px; width: 511px;" height="248" width="511"></canvas>
                    </div>
                    <div class="chartb">
                        <canvas id="areaChartIngresos" style="height: 248px; width: 511px;" height="248" width="511"></canvas>
                    </div>
                </div>
                 <!-- /.box-body -->
            </div>
        </div>
            <script type="text/javascript">
var APP_URL = "'.url("/").'";
</script>
         ';
      return $html;

    }
    public function usuarios(){
        $count = Voyager::model('User')->count();
        $url="/admin/users";
        return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
        <a href="'.$url.'">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Usuarios</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        </a>
        <!-- /.info-box -->
      </div>';
    }
    public function ventas(){
        $orders= new Orders;
        //$count = $orders->where('status','=','NU')->count();

        $store_id=$_SESSION['stores_id'];
        $count =DB::select("SELECT count(*) as cant FROM orders WHERE stores_id=$store_id AND status='NU'")[0]->cant;
        $url="/admin/orders";
        return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
        <a href="'.$url.'">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Ordenes</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div></a>
        <!-- /.info-box -->
      </div>';
    }
    public function opiniones(){
        $RatingProducts= new RatingProducts;
       // $count = $RatingProducts->count();
        $store_id=$_SESSION['stores_id'];
        $count =DB::select("SELECT count(*) as cant FROM rating_products rp INNER JOIN products p ON p.id=rp.products_id WHERE p.stores_id=$store_id")[0]->cant;

        $url="/admin/rating-products";
        return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
        <a href="'.$url.'">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion-heart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Opiniones</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div></a>
        <!-- /.info-box -->
      </div>';
    }


    
    public function nuevo_pago($name,$evento,$url,$icono){
     $js='' ;
$js=$this->send_data($evento);

$count=1;
      //$url="/admin/det-bank-orders";
      return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
      <a href="'.$url.'">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="'.$icono.'"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">'.$name.'</span>
          <span class="info-box-number" id="'.$evento.'"></span>
        </div>
        <!-- /.info-box-content -->
      </div></a>
      <!-- /.info-box -->
    </div>
    
    <script>
    var cant_'.$evento.'=0;
    data_'.$evento.'();
    async function data_'.$evento.'(){
      while(true){
        '.$js.'
        await sleep(2000);
       // beep(999, 220, 300);
      }
      
      
    }

 function datab_'.$evento.'(json){
   
   cant_nueva_'.$evento.'=json.data[0].cant;
   if(cant_'.$evento.'!=cant_nueva_'.$evento.'){
    notify().success().message("Successfull Hello World");    
    cant_'.$evento.'=cant_nueva_'.$evento.';
   }
  document.getElementById("'.$evento.'").innerHTML =json.data[0].cant;

 }

    </script>

    
    
    ';
  }




private function send_data($evento){
  $url=url('/api_rapida_admin.php?token=leonardomelendez&evento='.$evento);
  $js='
  var xmlhttp = new XMLHttpRequest();
  var url = "'.$url.'";
  
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var myArr = JSON.parse(this.responseText);
          datab_'.$evento.'(myArr);
      }
  };
  xmlhttp.open("GET", url, true);
  xmlhttp.send();
  ';
  return $js;
}








    public function top(){
        $html="";
        $html.='<link rel="stylesheet" href="css/AdminLTE.min.css">';
        $html.='<link rel="stylesheet" href="css/_all-skins.min.css">';
        $html.='<link rel="stylesheet" href="css/ionicons.min.css">
        <style>

        .lin a{
         color:#000; 
        }
        .lin:hover{
          filter:brightness(1.2);
          transition-property: -moz-filter, -ms-filter, -o-filter, -webkit-filter, filter;
          transition-duration: 1s;
        }
        
        </style>
        <script>
      
        function sleep(ms) {
          return new Promise(resolve => setTimeout(resolve, ms));
        }
function chao(){
  document.getElementById("noti").style.display="none";
}
        </script>
       
        ';
       // $html.='<link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.min.css">';
        return $html;
    }

    public function footer(){
        $html='
        

  
        <script src="js/notify.min.js"></script>
        <script>
    var n = notify({
        duration: 3000
    });
    n.wait(function() {
        n.message("Hi! I am a Notification!")
    }, 2000);

</script>




     




        ';
        
        return $html;
    }
}
