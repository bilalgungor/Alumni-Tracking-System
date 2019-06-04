<?php 
session_start();
include 'header.php'; 
include 'sidebar.php';
include 'profile_update.php'; ?>



<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Mezun Kart</h1>


			</div>
		</div>
		<form class="form-horizontal" method="POST" action="graduate_card_apply.php">
			<div class="card center">
				<div class="card__front card__part">
					<img class="card__front-square card__square" src="<?php echo $photo ?>"/>
					<img class="card__front-logo card__square" src="assets/img/ankara-yildirim-beyazit-university-logo.png">
					<p class="card_numer">Ankara Yıldırım Beyazıt Üniversitesi</p>
					<div class="card__space-75">
						<p class="card__info"><?php echo $first_name.' '.$last_name; ?></p>
						<span class="card__label"><?php echo $department ?></span>
					</div>
					<div class="card__space-25">
						<span class="card__label">Mezuniyet Tarihi</span>
						<p class="card__info"><?php echo $graduate_date ?></p>
					</div>
				</div>
				<div class="card__back card__part">
					<div class="card__back-content">
						<center><span class="card__label">Ankara Yıldırım Beyazıt Üniversitesi Mezun Kartı. Bu kartın bulunması halinde üniversite ile iletişime geçilmesi rica olunur.</span></center>
						<img class="card__back-square card__square" src="assets/img/ankara-yildirim-beyazit-university-logo.png">
						<img class="card__back-logo card__square" src="assets/img/ankara-yildirim-beyazit-university-logo.png">

					</div>
				</div>
			</div>
			<br/>
			<br/>
		<center><button type="submit" name="apply" class="btn btn-lg btn-info ">Başvur</button></center>	
	</form>
	</div>
	
</div>   




<?php include 'footer.php'; ?>