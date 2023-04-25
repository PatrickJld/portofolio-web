<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:#F8F9FA ;
            height: 100vh;
        }
        .loginBox{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%)
            ;width: 358px;
            min-height: 200px;
            background: #212529;
            padding: 48px;
            box-sizing: border-box
        }
      
    </style>
</head>
<body>
    <div class="loginBox">
        <h3 class="text-light text-center mb-4">Verify you are Patrick</h3>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="inputBox"> 
                <input id="uname" type="text" name="username" placeholder="Username" class="form-control mb-3 rounded-0 @error('username') is-invalid @enderror"> 
                <input id="pass" type="password" name="password" placeholder="Password" class="form-control mb-4 rounded-0 @error('password') is-invalid @enderror"> 
            </div> 
            <div class="d-grid">
                <button type="submit" class="btn btn-light rounded-pill">Submit</button>
            </div>    
        </form> 
        
    </div>
</body>
</html>