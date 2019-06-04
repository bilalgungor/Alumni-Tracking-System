<?php 
ob_start();
session_start(); 
include '../dbconnection.php';
include 'header.php'; 
include 'sidebar.php';
if (!isset($_SESSION['username'])) 
{
  header('Location:login.php');
}

?>



<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Fotoğraf Onay</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <div id="port-folio">
      <div class="row " >
        <div class="col-md-12">
          <h3>Onay Bekleyenler</h3>
        </div>
        <?php  
        $sql = "SELECT * FROM gallery WHERE status=0 ";
        $query = $db->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        while($_POST = $query->fetch()){
          $gallery_first_name=$_POST["first_name"];
          $gallery_last_name=$_POST["last_name"];
          $galllery_photo=$_POST["photo"];
          $gallery_id=$_POST["id"];
          echo " 
          <div class='col-md-4'  >

          <div class='portfolio-item awesome mix_all' data-cat='awesome' >


          <center> <img src=../".$galllery_photo." height='403' /> </center>
          <div class='overlay'>
          <p>
          <span>
          ".$gallery_first_name.' '.$gallery_last_name. "
          </span>
          </p>
          <form action='' method='POST'>
          <button type='submit' class='preview btn btn-success gallery_button '  data-id=".$gallery_id." >ONAYLA  <i class='glyphicon glyphicon-ok '></i></button>
          <button type='submit' class='preview btn btn-danger delete_button'  data-id=".$gallery_id." >SİL <i class='fa fa-trash'></i></button>
          </form>
          </div>
          </div>
          </div>
          ";
        }
        ?>

      </div>
      <div class="row " >
        <div class="col-md-12">
          <h3>Yayındaki Fotoğraflar</h3>
        </div>
        <?php  
        $sql = "SELECT * FROM gallery WHERE status=1 ORDER BY RAND() ";
        $query = $db->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        while($_POST = $query->fetch()){
          $gallery_first_name=$_POST["first_name"];
          $gallery_last_name=$_POST["last_name"];
          $galllery_photo=$_POST["photo"];
          $gallery_id=$_POST["id"];
          echo " 
          <div class='col-md-4'  >

          <div class='portfolio-item awesome mix_all' data-cat='awesome' >


          <center> <img src=../".$galllery_photo." height='403' /> </center>
          <div class='overlay'>
          <p>
          <span>
          ".$gallery_first_name.' '.$gallery_last_name. "
          </span>
          </p>
          <form action='' method='POST'>
          <button type='submit' class='preview btn btn-danger delete_button'  data-id=".$gallery_id." >SİL <i class='fa fa-trash'></i></button>
          </form>
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

<script>
  $(document).on('click', '.gallery_button', function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');
    $(".id").val(id);
    $('#photo_apply').modal('show'); 
  });

  $(document).on('click', '.delete_button', function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');
    $(".id").val(id);
    $('#photo_delete').modal('show');
  });
</script>

<div class="modal fade" id="photo_apply">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Onayla</b></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="photo_function.php">
            <input type="hidden"class="id" name="id">
            <div class="text-center">
              <p>Onaylamak İstiyor musun?</p>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kapat</button>
            <button type="submit" class="btn btn-success btn-flat" name="button_photo"> Onayla</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="photo_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Onayla</b></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="photo_function.php">
            <input type="hidden"class="id" name="id">
            <div class="text-center">
              <p>Onaylamak İstiyor musun?</p>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kapat</button>
            <button type="submit" class="btn btn-danger btn-flat" name="button_delete_photo"> Sil</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>