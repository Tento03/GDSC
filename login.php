<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="uts.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="uts.js"></script>
</head>
<body>
  <form class="login-form" action="aksi_login.php" method="POST">
    <h1>𝐋𝐎𝐆𝐈𝐍</h1>
    <div class="form-group">
      <label for="exampleInputEmail1">Username:</label>
      <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
    </div>
    <br>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <style>
    *{
      padding: 0;
      margin: 0;
      font-family: sans-serif;
    }
    body{
      background: url(shp.jpg);
      background-size:cover;
      background-repeat: repeat;
    }
    .login-form{
      width: 350px;
      top:50%;
      left: 50%;
      transform: translate(-50%,-50%);
      position: absolute;
      margin-top: 20px;
    }
    .login-form h1{
      font-size: 40px;
      text-align: center;
      text-transform: uppercase;
      margin-top: 30px;
      margin-bottom: 10px;
      margin-right: 30px;
      color: red;
    }
    .login-form .form-group label{
      font-size: 30px;
      color: red;
    }
    .login-form button{
      font-size: 18px;
      font-weight: bold;
      margin: 20px 0;
      padding:10px 15px;
      color:yellow;
      background: purple;
    }
    .login-form button:hover{
      font-size: 18px;
      font-weight: bold;
      margin: 20px 0;
      padding:10px 15px;
      color:red;
      background: green;
    }
  </style>
</body>
</html>