<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
    <style>
            body{
                width: 600px;
                margin: 20px auto;
                box-shadow: 2px 3px 3px 2px #888888;
                padding: 10px;
            }
            .native-class-form{
                width: 100%;
                background-color: white;
                height: 30px;
                margin-top: 13px;
                border: 1px solid black;
                border-radius: 3px;
            }
            .native-class-button{
                background: black;
                color: white;
                padding: 5px;
                border-radius: 3px;
                width: 100%;
                height: 30px;
                border: 1px solid black;
                margin-top: 13px;
            }
    </style>
 
</head>
 
<body>
 
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login Panel</h1>
			</div>
 
			<div class="login-form">
             <form action="/herxpanel/login" method="POST">
             {{ csrf_field() }}
				<div class="control-group">
				<input type="text" name="username" class="login-field" value="" placeholder="username" id="login-name">
				@if($errors->has('username'))
                <label style="color:red" class="login-field-icon fui-user" for="login-name">username Jangan kosong</label>
                @endif
				</div>
 
				<div class="control-group">
				<input type="password" name="password" class="login-field" value="" placeholder="password" id="login-pass">
				@if($errors->has('username'))
                <label style="color:red" class="login-field-icon fui-user" for="login-name">password Jangan kosong</label>
                @endif	</div>
 
				<button type="submit" class="btn btn-primary btn-large btn-block">login</button>
				 @if(Session::has('failed'))
  					<p style="color:red">Username Atau Password Anda Salah</p>
  				@endif
				</div>
            </form>
		</div>
	</div>
</body>
  
  
</body>
</html>


