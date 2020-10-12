<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="logo-icon-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                            <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                            <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                    </div>
                    <div class="title">{{Voyager::setting('admin.title', 'VOYAGER')}}</div>
                </a>
                <div>
                    <?php
                    $_SESSION['store']=$_GET['store'];
                    
                    
                    $user_id= Auth::user()->id;
                    $res= DB::select("select * from user_stores us INNER JOIN stores s ON s.id=us.stores_id");
                    if(count($res)>0){
                        echo "<select onchange='cambiarPagina(this.value)' name='store_id' class='form-control'>";
                        foreach($res as $index=>$obj){
                            echo "<option ".($_SESSION['store']==$obj->stores_id ? 'selected' : '')." value='".$obj->stores_id."'>".$obj->name."</option>";
                        }
                        echo "</select>";
                    }
                    //echo "ss";
                    ?>
                </div>
                <script>
                    function cambiarPagina(a){
                        url="<?php echo URL::to('/admin/?store='); ?>";
                        window.location.replace(url+a);
                    }
                    </script>
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background-color:#FFF">
                <div class="dimmer_nuevo"></div>
                <div class="panel-content">
                    <img src="{{ $user_avatar }}" class="avatar" alt="{{ Auth::user()->name }} avatar">
                    <h4>{{ ucwords(Auth::user()->name) }}</h4>
                    <p>{{ Auth::user()->email }}</p>

                    <a href="{{ route('voyager.profile') }}" class="btn btn-primary">{{ __('voyager::generic.profile') }}</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <div id="adminmenu">
            <admin-menu :items="{{ menu('admin', '_json') }}"></admin-menu>
        </div>
    </nav>
</div>
