<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AYBU MBS GİRİŞ</title>
  <link href="../assets/css/login.css" rel="stylesheet" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
       <center>
      <img  src="../assets/img/uni_logo.gif" width="60px" height="60px">
      </center>
        <h2 class="text-center">Akademisyen Giriş</h2>
        <form class="login-form" method="POST" action="function.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Kullanıcı Adı</label>
    <input type="text" class="form-control" name="username" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Şifre</label>
    <input type="password" class="form-control" name="password" placeholder="">
  </div>
  
  
    <div class="form-check">
    <button type="submit" class="btn btn-login float-right" name="loggin_admin">Giriş</button>
  </div>
  
</form>
    </div>
    <div class="col-md-8">
           
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="../assets/img/login-photo.jpg" alt="First slide">
      
    </div>
            </div>     
    
  </div>
</div>
</section>

