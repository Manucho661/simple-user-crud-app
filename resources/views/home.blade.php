<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
<P>Congrats, you're loggin in</P>
<form action="/logout" method="POST">
    @csrf
    <button> Logout</button>
</form>
    @else

    <div style="border 3px solid black">
        <h3>Register</h3>
        <form action="/register" method="POST" >
         @csrf
        
    <input name="name" type="name" placeholder="name">
    <input name="email" type="email" placeholder-= "wanyonyi.em@gmail.com">
    <input name="password" type="password" placeholder="password">
    <button>Register</button>

</form>
</div>


<div style="border 3px solid black">
    <h3>Login</h3>
    <form action="/login" method="POST" >
     @csrf
    
<input name="loginname" type="name" placeholder="name">
<input name="loginpassword" type="password" placeholder="password">
<button>Login</button>

</form>
</div>

    @endauth
    


   
</body>
</html>