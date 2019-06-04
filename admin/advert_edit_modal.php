<div class="modal fade" id="edit_advert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">İlanı Güncelle</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" action="advert_update.php">

					<div class="form-group">
						<label for="position" class="col-sm-3 control-label">Pozisyon</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="position" name="position" required>
						</div>
					</div>


					<div class="form-group">
						<label for="company" class="col-sm-3 control-label">Firma</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="company" name="company">
						</div>
					</div>


					<div class="form-group">
						<label for="title" class="col-sm-3 control-label">Açıklama</label>

						<div class="col-sm-9">
							<textarea class="form-control" name="title" id="title" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="contact" class="col-sm-3 control-label">İletişim</label>

						<div class="col-sm-9">
							<input type="hidden"  id="id" name="id">
							<input type="text" class="form-control" id="contact" name="contact">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
					<button type="submit" class="btn btn-primary" name="update">Güncelle</button>
				</div>
			</form>
		</div>
	</div>
</div>


