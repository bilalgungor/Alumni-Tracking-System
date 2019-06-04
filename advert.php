<?php 
ob_start();
session_start();
include 'dbconnection.php';
?>
<?php include 'header.php'; 
include 'sidebar.php'; 

if (!isset($_SESSION['student_id'])) 
{
  header('Location:login.php');
}
?>




<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">İş Fırsatları</h1>


      </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
     <div class="col-md-12">

      <div class="panel panel-default">
        <div class="panel-heading clearfix"></div>
        <div class="panel-body">
          <div class="table-responsive">

            <table id="advert_table" class="table table-striped table-bordered">
              <thead>
               <tr>                     
                <th>İlan Tarihi</th>
                <th>İlan Sahibi</th>
                <th>Pozisyon</th>
                <th>Firma</th>
                <th>Açıklama</th>
                <th>İletişim</th>
              </tr>
            </thead>


            <?php  
            $sql = "SELECT first_name, last_name, position, company, job_definition, contact, ad_date FROM job_advert ORDER BY ad_date"; 
            $query = $db->query($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $query->fetch()){
             echo "
             <tr>

             <td>".$row['ad_date']."</td>
             <td>".$row['first_name'].' '.$row['last_name']."</td>
             <td>".$row['position']."</td>
             <td>".$row['company']."</td>
             <td>".$row['job_definition']."</td>
             <td>".$row['contact']."</td>

             </tr>
             "; }
             ?>
             <tfoot>
              <tr>
                <th>İlan Tarihi</th>
                <th>İlan Sahibi</th>
                <th>Pozisyon</th>
                <th>Firma</th>
                <th>Açıklama</th>
                <th>İletişim</th>
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
    $('#advert_table').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
        }
    } );
} );
</script>