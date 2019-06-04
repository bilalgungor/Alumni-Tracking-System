<?php 
session_start();
include 'dbconnection.php';

?>
<?php include 'header.php'; 
include 'sidebar.php';
include 'advert_delete.php';  

if (!isset($_SESSION['student_id'])) 
{
  header('Location:login.php');
}
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">İlanlarım</h1>


      </div>
    </div>
    <?php
    if(isset($_SESSION['advert_error'])){
      echo "
      <div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-warning'></i> Hata!</h4>
      ".$_SESSION['advert_error']."
      </div>
      ";
      unset($_SESSION['advert_error']);
    }
    if(isset($_SESSION['advert_success'])){
      echo "
      <div class='alert alert-success alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-check'></i> Başarılı!</h4>
      ".$_SESSION['advert_success']."
      </div>
      ";
      unset($_SESSION['advert_success']);
    }
    ?>
    <!-- /. ROW  -->
    <div class="row">
     <div class="col-md-12">

      <div class="panel panel-default">

        <div class="panel-heading">
          <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Yeni</a>
        </div>

        <div class="panel-body">
          <div class="table-responsive">
            <table class="table">
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
              <tbody>
                <?php  
                $student_id=$_SESSION['student_id'];
                $sql = "SELECT * FROM job_advert WHERE student_id='$student_id' ORDER BY ad_date"; 
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
                 <button type='button' class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Düzenle</button>
                 <button type='button' class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."' ><i class='fa fa-trash'></i> Sil</button>
                 </td>

                 </tr>
                 "; }
                 ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>




   </div>
   <!-- /. WRAPPER  -->
 </div>




 <?php include 'footer.php'; ?>
<?php include 'advert_edit_modal.php'; ?>
 <?php include 'advert_modal.php'; ?>



 <script>
   $(document).on('click', '.edit', function(e) {
     e.preventDefault();
      var id = $(this).attr('data-id');
      $('#edit_advert').modal('show');
      getRow(id);
 });

  
  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');
    $(".id").val(id);
    $('#delete').modal('show'); 
    
  });

   var getRow = function getInfo(id){
   $.ajax({  
      url:"advert_edit.php",  
      method:"POST",  
      data:{id:id},  
      dataType:"json",  
      success:function(data){  
         $('#position').val(data[0].position);  
         $('#company').val(data[0].company);  
         $('#title').val(data[0].job_definition);  
         $('#contact').val(data[0].contact); 
         $('#id').val(data[0].id);      
      }
    });
 }
</script>

