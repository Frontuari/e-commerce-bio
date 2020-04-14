<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
    
        body {
            
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        *d  {
            border: 1px solid #000;
        }
        .la{

            
        }
    
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login ">
<div class="container-fluid" >
    <div class="row" >
         <div class="text-center">
            <a href="../index.php" >
            <img class="img-responsive" style="margin:0 auto; width:200px" src="{{Voyager::image( Voyager::setting('site.logo','')) }}" />
            
            </a><br>
            
                <span style="font-size:20px; color:#28b67a"><b>Ingresa los datos para iniciar sesión</b>
            
        </div>
        <div class="faded-bg animated"></div>
        <div class="col-md-4"></div>;
        <div class="col-md-4 login-sidebar" style="
        -webkit-box-shadow: 3px 3px 10px 0px rgba(119,119,119,0.54);
-moz-box-shadow: 3px 3px 10px 0px rgba(119,119,119,0.54);
box-shadow: 3px 3px 10px 0px rgba(119,119,119,0.54);
 min-height:380px;  margin: 0 auto; border-radius:20px; border: 0px solid #000">
            <img style="width:39%; float:right" src="/storage/settings/January2020/login.svg">
            <div class="login-container" style="margin-top:-20px;">
                <form action="{{ route('voyager.login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="fosrm-group form-group-ddefault" id="emailGroup">
                        <label style="font-size:13px; color:#000; font-weight:800">Correo electrónico</label>
                        <div class="controls">
                            <input style=" border:1px solid #28b67a;" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                         </div>
                    </div>
<br>
                    <div class="fodrm-group form-group-defaudlt" id="passwordGroup">
                        <label style="font-size:13px; color:#000; font-weight:800">Contraseña</label>
                        <div class="controls">
                            <input style=" border:1px solid #28b67a;" type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control in" required>
                        </div>
                    </div>
                    <br>
                  <style> *{border: 0px solid #000}</style>
                      <div class="form-group" id="rememberMeGroup">
                      <div class="row">
                        <div class="col-xs-6">
                          <div class="controls">
                            <label class="container">
                              <input checked="checked" type="checkbox" name="remember" id="remember" value="1">
                              <span style="font-size:12px;"><b>Recuérdame</b></span>
                             <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <div class="col-xs-6">
                        <div class="text-right">
                      <button type="submit" class="btn btn-success login-buttson">
                          <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
                          <span class="signin" style=" font-size:14px;"><b>Ingresar</b></span>
                      </button>
                      </div>
                      
                        </div>    <div class="text-center"><a href="../index.php">Pagina de inicio</a></div>
                          </div>
                        </div>
                                   
                     
                    

                    </div>

              </form>

              <div style="cleara:botha"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif

            </div> <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
</body>
<style>
        label{
            color:#000;
        }
/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 20px;

  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
 margin-top:5px;
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #FFF;
  border: 1px solid #28b67a;
  
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}
.container .checkmark{

  border:1px solid #80bc00;

}
/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 5px;
  top: 3px;
  width: 3px;
  height: 7px;
  border: solid #80bc00;
  
  border-width: 0 2px 2px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
</html>