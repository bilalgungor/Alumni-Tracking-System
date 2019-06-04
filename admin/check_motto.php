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
if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
  $stmt = $db->query("SELECT * FROM academician WHERE username='$username' ");
  while ($row = $stmt->fetch()) {
    $faculty = $row['faculty'];
    $department = $row['department'];

  }
}
?>



<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Söz Onay</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Motto
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab">Onay Bekleyenler</a>
							</li>
							<li class=""><a href="#profile" data-toggle="tab">Yayında Olanlar</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane fade active in" id="home">
								<h4>Onay Bekleyenler</h4>
								<div class="row">
									<?php 

									$sql = "SELECT *FROM motto where status=1 AND department='$department'";
									$query = $db->query($sql);
									$query->setFetchMode(PDO::FETCH_ASSOC);
									while($row = $query->fetch()){
										echo "
										<div class='col-md-4'>
										<div class='alert alert-info text-center'>
										<h4>".$row['first_name'].' '.$row['last_name'].' - '.$row['student_id']. "</h4> 
										<hr />
										<p><i class='fa fa-quote-left'></i> 
										".$row['motto']."
										<i class='fa fa-quote-right'></i>
										</p>
										<hr />

										<button type='button' class='btn btn-info confirm_motto'  data-id='".$row['id']."'>ONAYLA</button>
										
										</div>
										</div>
										";
									}
									?>
								</div>
							</div>

							<div class="tab-pane fade" id="profile">
								<h4>Yayında Olanlar</h4>
								<div class="row">
									<?php 

									$sql = "SELECT * FROM motto WHERE department='$department' AND status=0 ";
									$query = $db->query($sql);
									$query->setFetchMode(PDO::FETCH_ASSOC);
									while($row = $query->fetch()){
										echo "
										<div class='col-md-4'>
										<div class='alert alert-info text-center'>
										<h4>".$row['first_name'].' '.$row['last_name'].' - '.$row['student_id']. "</h4> 
										<hr />
										<p><i class='fa fa-quote-left'></i> 
										".$row['motto']."
										<i class='fa fa-quote-right'></i>
										</p>
										<hr />
										<button type='button' class='btn btn-danger delete_motto'  data-id='".$row['id']."'>SİL<i class='fa fa-trash'></i></button>
										</div>
										</div>
										";
									}
									?>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>








<?php include 'footer.php'; ?>


<script>
	$(document).on('click', '.confirm_motto', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$(".id").val(id);
		$('#motto_apply').modal('show'); 
	});

	$(document).on('click', '.delete_motto', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$(".id").val(id);
		$('#motto_delete').modal('show'); 
	});
</script>



<div class="modal fade" id="motto_apply">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><b>Onayla</b></h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="motto_function.php">
						<input type="hidden"class="id" name="id">
						<div class="text-center">
							<p>Onaylamak İstiyor musun?</p>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kapat</button>
						<button type="submit" class="btn btn-success btn-flat" name="button_motto"> Onayla</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>


<div class="modal fade" id="motto_delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><b>Onayla</b></h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="motto_function.php">
						<input type="hidden"class="id" name="id">
						<div class="text-center">
							<p>Onaylamak İstiyor musun?</p>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Kapat</button>
						<button type="submit" class="btn btn-success btn-flat" name="delete_motto"> Onayla</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>


