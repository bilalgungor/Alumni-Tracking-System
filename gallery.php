<?php 
ob_start();
session_start(); 
include 'dbconnection.php';
include 'header.php'; 
include 'sidebar.php';

if (!isset($_SESSION['student_id'])) 
{
  header('Location:login.php');
}

if(isset($_POST['send_photo'])){
  if ($_FILES["gallery_photo"]["type"]=="image/jpeg") {
      $photo_name=$_FILES["gallery_photo"]["name"];
      $photo = explode(".", $photo_name);
      $extension=$photo[1];
      $new=md5($photo[0]);
      $newname="uploads/gallery/".$new.".".$extension;
 }
  if (move_uploaded_file($_FILES["gallery_photo"]["tmp_name"],$newname)) {
       $query= $db->query("INSERT INTO gallery (student_id, first_name, last_name, photo) VALUES ( '$student_id', '$first_name', '$last_name', '$newname')");
        if ($query) 
{
   
    echo '<meta http-equiv="refresh" content="0">';
 }
else 
{
    echo '<meta http-equiv="refresh" content="0">';
} 
     }
}


?>




<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Galeri</h1>
                <form class="form"  method="post" action="" enctype="multipart/form-data">
                    <div class="text-center">
                        <h6>Fotoğraf Gönder...</h6>
                        <input type="file" name="gallery_photo" class="text-center center-block file-upload">
                        <button class="btn btn-lg btn-success " type="submit"  name="send_photo"><i class="glyphicon glyphicon-ok-sign"></i> Gönder</button>
                    </div>
                </form>

            </div>
        </div>
        <!-- /. ROW  -->
        <div id="port-folio">
          <div class="row " >
            <?php  
            $sql = "SELECT * FROM gallery WHERE status=1; ";
            $query = $db->query($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            while($_POST = $query->fetch()){
              $gallery_first_name=$_POST["first_name"];
              $gallery_last_name=$_POST["last_name"];
              $galllery_photo=$_POST["photo"];
              echo " 
              <div class='col-md-4'  >

              <div class='portfolio-item awesome mix_all' data-cat='awesome' >


              <center> <img src=".$galllery_photo." height='403' /> </center>
              <div class='overlay'>
              <p>
              <span>
              ".$gallery_first_name.' '.$gallery_last_name. "
              </span>
              </p>
              <a class='preview btn btn-success '  href=".$galllery_photo."> <i class='  glyphicon glyphicon-ok fa-2x'></i></a>
              </div>
              </div>
              </div>
              ";
          }
          
          ?>

          
          

      </div>
  </div>
</div>
</div>






<?php include 'footer.php'; ?>