


<?php 
session_start();
include '../dbconnection.php';

?>
<?php include 'header.php'; 
include 'sidebar.php';



if (!isset($_SESSION['username'])) 
{
  header('Location:login.php');
}

include 'profile_update.php';
?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Profil</h1>


      </div>
    </div>
     <?php
        if(isset($_SESSION['success'])){
      echo "
      <div class='alert alert-success alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-check'></i> Başarılı!</h4>
      ".$_SESSION['success']."
      </div>
      ";
      unset($_SESSION['success']);
    }
       
        if(isset($_SESSION['error_password'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Hata!</h4>
              ".$_SESSION['error_password']."
            </div>
          ";
          unset($_SESSION['error_password']);
        }
      ?>
   



    <hr>
    <div class="container bootstrap snippet">

      <div class="row">
        <div class="col-sm-3"><!--left col-->
           <form class="form"  method="post" enctype="multipart/form-data">
          <div class="text-center">
            <img width="200" src="<?php echo $photo ?>"  >
            <h6>Fotoğraf yükle...</h6>
            <input type="file" name="photo" class="text-center center-block file-upload">
          </div></hr><br>


          
        </div><!--/col-3-->
        <div class="col-sm-9">




         <div class="tab-pane" id="settings">


          <hr>
         
            <div class="form-group">

              <div class="col-xs-6">
                <label for="first_name"><h4>İsim</h4></label>
                <input type="text" class="form-control" name="first_name"  id="first_name" value="<?php echo $first_name ?>" >
              </div>
            </div>
            <div class="form-group">

              <div class="col-xs-6">
                <label for="last_name"><h4>Soyisim</h4></label>
                <input type="text" class="form-control" name="last_name"  id="last_name" value="<?php echo $last_name ?>" >
              </div>
            </div>

            <div class="form-group">

              <div class="col-xs-6">
                <label for="faculty"><h4>Fakülte</h4></label>
                <input type="text" class="form-control" readonly="" name="faculty"  id="faculty" value="<?php echo $faculty ?>" >
              </div>
            </div>

            <div class="form-group">

              <div class="col-xs-6">
                <label for="department"><h4>Bölüm</h4></label>
                <input type="text" class="form-control" readonly="" name="department"  id="department" value="<?php echo $department ?>" >
              </div>
            </div>

        

            <div class="form-group">

              <div class="col-xs-6">
                <label for="email"><h4>Email</h4></label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" >
              </div>
            </div>


            <div class="form-group">
             <div class="col-xs-12">
              <br>
              <button class="btn btn-lg btn-success pull-right" type="submit"  name="save_profile"><i class="glyphicon glyphicon-ok-sign"></i> Kaydet</button>
              <a href="#password_modal  " data-toggle="modal" class="btn btn-lg btn-danger"> Şifre Değiştir</a>

            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
</div>











<?php include 'footer.php'; ?>
<?php include 'password_modal.php'; ?>