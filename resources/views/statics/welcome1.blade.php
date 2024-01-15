<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
        <link href="{{ asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/app.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class=" d-flex justify-content-center min-vh-100 align-items-center  ">
            <form class="login_form col-md-8   shadow-lg p-4 mb-4 bg-white pt-5"> <br /> 
               
                <label class="headings text">Hello welcome to </label> <br>
            <div class="button">
             <button type="button" class="btn btn-primary  fade-in-right" name="log_in"> <a href="{{ route('login')}}">Log in </a> </button>
             <button type="button" class="btn btn-primary  fade-in-right" name="sign_up">Sign Up now </button>
           </div>
            </form>
            
        </div>
    </div>
   <!--  <div class="banner">
        <img src="{{ asset('images/background.jpg')}}" class="banner">
    </div> -->
</body>
</html>