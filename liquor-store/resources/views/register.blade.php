
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Register</title>
</head>
<body id="register-body">
<div id="logreg-forms">
    <form method="post" class="form-register">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"><strong> Register </strong></h1>
        <div class="social-login">
            <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span>
            </button>
            <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span>
            </button>
        </div>

        <p style="text-align:center">OR</p>


        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="" class="form-control input_user" value="" placeholder="User name">
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-email"></i></span>
            </div>
            <input type="email" name="" class="form-control input_user" value="" placeholder="User email">
        </div>
        <br>
        <div class="input-group mb-2">
            <div class="input-group-append" id="icon-eye">
                <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
            </div>
            <input type="password" name="" class="form-control input_pass" value="" placeholder="password"
                   id="inputPassword">
        </div>
        <br>
        <div class="input-group mb-2">
            <div class="input-group-append" id="icon-eye">
                <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
            </div>
            <input type="repeatPassword" name="" class="form-control repeat_pass" value="" placeholder=" Repeat password"
                   id="repeatPassword">
        </div>
        <br>

        <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
    </form>
    <br>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="{{asset('script.js')}}"></script>
<script src="../../public/css/login.css"></script>
<script src="{{asset('Tadm/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('Tadm/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('js/register.js')}}"></script>


</body>
</html>

