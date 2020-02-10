<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Orders;
use App\Products;
use App\RatingProducts;
class Prueba extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $h="";
        $h.= "<div class='row'>".$this->top().
        $this->productos().
        $this->usuarios().
        $this->ventas().
        $this->opiniones().
        '</div>'.
        $this->grafico_pedidos();
        //$h.=$this->footer();
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
        return Auth::user()->can('browse', Voyager::model('User'));
    }
    public function productos(){
        $products= new Products;
        $count = $products->count();
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
                    <h3 class="box-title">Historico de pedidos</h3>

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
        $count = $orders->count();
        $url="/admin/orders";
        return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
        <a href="'.$url.'">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pedidos</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div></a>
        <!-- /.info-box -->
      </div>';
    }
    public function opiniones(){
        $RatingProducts= new RatingProducts;
        $count = $RatingProducts->count();
        $url="/admin/rating-products";
        return '<div class="col-md-3 col-sm-6 col-xs-12 lin">
        <a href="'.$url.'">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="ion-heart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Opiniones</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div></a>
        <!-- /.info-box -->
      </div>';
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
        ';
       // $html.='<link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.min.css">';
        return $html;
    }

    public function footer(){
        $html="";
        
        return $html;
    }
}
