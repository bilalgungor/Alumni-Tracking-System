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

            <table id="advert_table1" class="table table-striped table-bordered">
              <thead>
               <tr>                     
                <th>İlan Tarihi</th>
                <th>İlan Sahibi</th>
                <th>Pozisyon</th>
                <th>Firma</th>
                <th>Açıklama</th>
                <th>İletişim</th>
                <th></th>
              </tr>
            </thead>


            <?php  
            $sql = "SELECT first_name, last_name, position, company, job_definition, contact, ad_date,id FROM job_advert ORDER BY ad_date"; 
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
             <td>
             <button type='button' class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."' ><i class='fa fa-trash'></i> Sil</button>
             </td>

             </tr>
             "; }
             ?>
             <div class="modal fade" id="all_delete">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><b>Siliniyor...</b></h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method="POST" action="advert_delete.php">
                        <input type="hidden"class="id" name="id">
                        <div class="text-center">
                          <p>İlan Sil</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kapat</button>
                        <button type="submit" class="btn btn-danger btn-flat" name="all_delete_button"><i class="fa fa-trash"></i> Sil</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

             


                  <tfoot>
                    <tr>
                      <th>İlan Tarihi</th>
                      <th>İlan Sahibi</th>
                      <th>Pozisyon</th>
                      <th>Firma</th>
                      <th>Açıklama</th>
                      <th>İletişim</th>
                      <th></th>
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
      $('#advert_table1').DataTable( {
        "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json"
        }
      } );
    } );
  </script>

  <script>
    $(document).on('click', '.delete', function(e){
      e.preventDefault();
      var id = $(this).attr('data-id');
      $(".id").val(id);
      $('#all_delete').modal('show'); 
    });
  </script>

 



