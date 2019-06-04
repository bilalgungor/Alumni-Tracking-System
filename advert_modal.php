 <?php include 'function.php'; ?>
 <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Yeni İlan Ekle</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="advert_add.php">
                 
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
              <input type="text" class="form-control" id="contact" name="contact">
          </div>
      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
    <button type="submit" class="btn btn-primary" name="add">Yayınla</button>
</div>
</form>
</div>
</div>
</div>


<!-- Delete Modal  -->
<div class="modal fade" id="delete">
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
                        <button type="submit" class="btn btn-danger btn-flat" name="delete_button"><i class="fa fa-trash"></i> Sil</button>
                    </div>
                </form>
            </div>
        </div>
        
        
