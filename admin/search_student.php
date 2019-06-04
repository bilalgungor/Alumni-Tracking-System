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
        <h1 class="page-head-line">Mezunlar</h1>

      </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
     <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading clearfix"></div>
        <div class="panel-body">
          <div class="table-responsive">

            <table id="student_table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Öğrenci Numarası</th>
                  <th>Fotoğraf</th>
                  <th>Ad Soyad</th>
                  <th>Fakülte</th>
                  <th>Bölüm</th>
                  <th>İş&Pozisyon</th>
                  <th>İletişim</th>
                  <th>Mezuniyet Tarihi</th>
                </tr>
              </thead>


              <?php  
              $sql = "SELECT * FROM student WHERE student_id"; 
              $query = $db->query($sql);  
              $query->setFetchMode(PDO::FETCH_ASSOC);
              while($row = $query->fetch()){
               echo "
               <tr>
               <td><p class='label label-info'>".$row['student_id']."</p></td>
               <td> <img src='../".$row['photo']."' width='45px' height='45px'></td>
               <td>".$row['first_name'].' '.$row['last_name']."</td>
               <td>".$row['faculty']."</td>
               <td>".$row['department']."</td>
               <td><p class='label label-danger'>".$row['firm'].'</p></br>'.$row['position']."</td>
               <td>".$row['email'].'</br>'.$row['phone_number']."</td>
               <td>".$row['graduate_date']."</td>

               </tr>
               "; }
               ?>
               <tfoot>
                <tr>
                  <th>Öğrenci Numarası</th>
                  <th>Fotoğraf</th>
                  <th>Ad Soyad</th>
                  <th>Fakülte</th>
                  <th>Bölüm</th>
                  <th>İş&Pozisyon</th>
                  <th>İletişim</th>
                  <th>Mezuniyet Tarihi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>




  </div>
  <!-- /. WRAPPER  -->
</div>




<?php include 'footer.php'; ?>
<?php include 'script.php'; ?>

<script>
 $(document).ready(function() {
  $('#student_table').DataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
    }
  } );
} );
</script>


