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
        <h1 class="page-head-line">Mezun Kart</h1>

      </div>
    </div>

    <div class="row">
     <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading clearfix"><p class='label label-warning'>Onay Bekleyen Kartlar</p></div>
        <div class="panel-body">
          <div class="table-responsive">

            <table id="advert_table" class="table table-striped table-bordered">
              <thead>
               <tr>                     
                <th>Öğrenci Numarası</th>
                <th>Fotoğraf</th>
                <th>Ad Soyad</th>
                <th>Bölüm</th>
                <th>Mezuniyet Tarihi</th>
              </tr>
            </thead>


            <?php  
            $sql = "SELECT * FROM graduate_card WHERE status=1 "; 
            $query = $db->query($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $query->fetch()){
             echo "
             <tr>

             <td>".$row['student_id']."</td>
             <td> <img src='../".$row['photo']."' width='45px' height='45px'></td>
             <td>".$row['first_name'].' '.$row['last_name']."</td>
             <td>".$row['department']."</td>
             <td>".$row['graduate_date']."</td>
             <td><button type='button' class='btn btn-sm btn-success confirm'  data-id='".$row['id']."'>ONAYLA</button></td>
             </tr>
             "; }
             ?>
             <tfoot>
              <tr>
               <th>Öğrenci Numarası</th>
                <th>Fotoğraf</th>
                <th>Ad Soyad</th>
                <th>Bölüm</th>
                <th>Mezuniyet Tarihi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

 <div class="row">
     <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading clearfix"><p class='label label-success'>Onaylanan Kartlar</p></div>
        <div class="panel-body">
          <div class="table-responsive">

            <table id="advert_table" class="table table-striped table-bordered">
              <thead>
               <tr>                     
                <th>Öğrenci Numarası</th>
                <th>Fotoğraf</th>
                <th>Ad Soyad</th>
                <th>Bölüm</th>
                <th>Mezuniyet Tarihi</th>
              </tr>
            </thead>


            <?php  
            $sql = "SELECT * FROM graduate_card WHERE status=0 "; 
            $query = $db->query($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $query->fetch()){
             echo "
             <tr>

             <td>".$row['student_id']."</td>
             <td> <img src='../".$row['photo']."' width='45px' height='45px'></td>
             <td>".$row['first_name'].' '.$row['last_name']."</td>
             <td>".$row['department']."</td>
             <td>".$row['graduate_date']."</td>
             </tr>
             "; }
             ?>
             <tfoot>
              <tr>
                <th>Öğrenci Numarası</th>
                <th>Fotoğraf</th>
                <th>Ad Soyad</th>
                <th>Bölüm</th>
                <th>Mezuniyet Tarihi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

  </div>
</div>






<?php include 'footer.php'; ?>
<?php include 'graduate_card_modal.php'; ?>

<script>
$(document).on('click', '.confirm', function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');
    $(".id").val(id);
    $('#card_apply').modal('show'); 
  });
  </script>
