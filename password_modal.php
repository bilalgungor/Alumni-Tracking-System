 <?php include 'function.php'; ?>
 <div class="modal fade" id="password_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Şifre Değiştir</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="change_password.php">

                  <div class="form-group">
                    <label for="cpassword" class="col-sm-3 control-label">Mevcut Şifre</label>

                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="validate_password" class="col-sm-3 control-label">Yeni Şifre</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="validate_password" name="validate_password" required >
                  </div>
              </div>
              
              
              
              <div class="form-group">
                <label for="validate_password1" class="col-sm-3 control-label">Yeni Şifre Tekrar</label>

                <div class="col-sm-9">
                  <input type="password" class="form-control" id="validate_password1" name="validate_password1"  required >
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-primary" name="updatePasswd">Güncelle</button>
    </div>
</form>
</div>
</div>
</div>

<script type="text/javascript">
    var validate_password = document.getElementById("validate_password")
  , validate_password1 = document.getElementById("validate_password1");

function validatePassword(){
  if(validate_password.value != validate_password1.value) {
    validate_password1.setCustomValidity("Şifreler Uyuşmuyor!");
  } else {
    validate_password1.setCustomValidity('');
  }
}

validate_password.onchange = validatePassword;
validate_password1.onkeyup = validatePassword;
</script>



