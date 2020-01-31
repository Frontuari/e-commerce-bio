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
        return $this->top().$this->productos().$this->usuarios().$this->ventas().$this->opiniones();
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
        return '<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion-ios-baseball-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Productos</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>';
    }
    public function usuarios(){
        $count = Voyager::model('User')->count();
        return '<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Usuarios</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>';
    }
    public function ventas(){
        $orders= new Orders;
        $count = $orders->count();
        return '<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pedidos</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>';
    }
    public function opiniones(){
        $RatingProducts= new RatingProducts;
        $count = $RatingProducts->count();
        return '<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="ion-heart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Opiniones</span>
            <span class="info-box-number">'.$count.'</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>';
    }
    public function top(){
        $html="";
        $html.='<link rel="stylesheet" href="css/AdminLTE.min.css">';
        $html.='<link rel="stylesheet" href="css/_all-skins.min.css">';
        $html.='<link rel="stylesheet" href="css/ionicons.min.css">';
        $html.='<link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.min.css">
        
        ';
        return $html;
    }
}
