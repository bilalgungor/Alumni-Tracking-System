 <?php  
 include '../dbconnection.php';
              $sql = "SELECT department,faculty FROM academician WHERE username='$username'"; 
              $query = $db->query($sql);  
              $query->setFetchMode(PDO::FETCH_ASSOC);
              $row = $query->fetch()
               ?>
 <div class="modal fade" id="addnew_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Yeni Mezun Ekle</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="student_add.php">
                 
                  <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label">Adı</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="last_name" class="col-sm-3 control-label">Soyadı</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="last_name" name="last_name">
                  </div>
              </div>
              

              <div class="form-group">
            <label for="student_id" class="col-sm-3 control-label">Öğrenci Numarası</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="student_id" name="student_id">
          </div>
      </div>

       <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Şifre</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="password" name="password">
          </div>
      </div>


          <div class="form-group">
            <label for="faculty" class="col-sm-3 control-label">Fakülte</label>

            <div class="col-sm-9">
              <input type="text" readonly="" class="form-control" id="faculty" name="faculty" value="<?php echo $row['faculty']?>">
          </div>
      </div>

      <div class="form-group">
            <label for="department" class="col-sm-3 control-label">Bölüm</label>

            <div class="col-sm-9">
              <input type="text" readonly="" class="form-control" id="department" name="department" value="<?php echo $row['department']?>">
          </div>
      </div>

       <div class="form-group">
            <label for="graduate_date" class="col-sm-3 control-label">Mezuniyet Tarihi</label>

            <div class="col-sm-9">
              <input type="date" class="form-control" id="graduate_date" name="graduate_date">
          </div>
      </div>


  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
    <button type="submit" class="btn btn-primary" name="add">Ekle</button>
</div>
</form>
</div>
</div>
</div>




        
        
