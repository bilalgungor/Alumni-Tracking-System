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

$stmt = $db->query("SELECT department FROM student WHERE student_id='$student_id'");
while ($row = $stmt->fetch()) {
  $department = $row['department'];
  
  
}

$sql = "SELECT * FROM motto  WHERE status=0 ORDER BY RAND() ";
$query = $db->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
while($_POST = $query->fetch()){
  $mFirst_name=$_POST["first_name"];
  $mLast_name=$_POST["last_name"];
  $motto=$_POST["motto"];
  $motto_photo=$_POST["motto_photo"];
}

$sql = "SELECT * FROM motto  WHERE status=0 ORDER BY RAND() ";
$query = $db->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
while($_POST = $query->fetch()){
  $first_name1=$_POST["first_name"];
  $last_name1=$_POST["last_name"];
  $motto1=$_POST["motto"];
  $motto_photo1=$_POST["motto_photo"];
}

$sql = "SELECT * FROM motto  WHERE status=0 ORDER BY RAND() ";
$query = $db->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
while($_POST = $query->fetch()){
  $first_name2=$_POST["first_name"];
  $last_name2=$_POST["last_name"];
  $motto2=$_POST["motto"];
  $motto_photo2=$_POST["motto_photo"];
}

$sql = "SELECT * FROM gallery  WHERE status=1 ORDER BY RAND() ";
$query = $db->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
while($row = $query->fetch()){
  $main_photo=$row["photo"];
}
?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">ANASAYFA</h1>
        <h1 class="page-subhead-line">Ankara Yıldırım Beyazıt Üniversitesi Mezun Bilgi Sistemi'ne Hoşgeldiniz. </h1>

      </div>
    </div>
    <?php
    if(isset($_SESSION['error'])){
      echo "
      <div class='alert alert-danger alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-warning'></i> Hata!</h4>
      ".$_SESSION['error']."
      </div>
      ";
      unset($_SESSION['error']);
    }
    if(isset($_SESSION['success'])){
      echo "
      <div class='alert alert-success alert-dismissible'>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-check'></i> Başarılı!</h4>
      ".$_SESSION['success']."
      </div>
      ";
      unset($_SESSION['success']);
    }
    ?>
    <!-- /. ROW  -->
    <div class="row">
      <div class="col-md-4">
        <div class="main-box mb-red">
           <i class="fa fa-graduation-cap fa-5x"></i>
          <h5>
            <?php
            $sql = ('SELECT count(*) FROM student');
            $query = $db->query($sql);

            echo " " . $query->fetchColumn();   
            ?>
            <p>TOPLAM MEZUN</p>
            </h5>
            
         
          <a href="search_student.php" class="small-box-footer">Gözat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="main-box mb-red">
            <i class="fa fa-user fa-5x"></i>
            <h5>
            <?php
            
            $sql = ("SELECT count(*) ,department FROM student WHERE department ='$department' ");
            $query = $db->query($sql);

            echo " " . $query->fetchColumn();   
            ?>

            <p><?php echo $department ?> Bölüm Mezunu</p>
         </h5>
          <a href="search_student.php" class="small-box-footer">Gözat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-md-4">
        <div class="main-box mb-red">
           <i class="fa fa-bullhorn fa-5x"></i>
          <h5>
            <?php
            $sql = ('SELECT count(*) FROM job_advert');
            $query = $db->query($sql);

            echo " " . $query->fetchColumn();   
            ?>
            <p>İŞ İLANI</p>
          </h5>
          <a href="advert.php" class="small-box-footer">Gözat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
    <!-- /. ROW  -->

    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">

            <div id="reviews" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="item active">

                  <div class="col-md-10 col-md-offset-1">

                    <h4><i class="fa fa-quote-left"></i>

                     <?php  echo "$motto"; ?> 

                     <i class="fa fa-quote-right"></i></h4>
                     <div class="user-img pull-right">
                      <img src="<?php echo $motto_photo ?>" alt="" class="img-u image-responsive" width="100px" height="100px" />
                    </div>
                    <h5 class="pull-right"><strong class="c-black"><?php echo $mFirst_name.' '.$mLast_name; ?></strong></h5>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-10 col-md-offset-1">

                    <h4><i class="fa fa-quote-left"></i> 

                     <?php  echo "$motto1"; ?> 

                     <i class="fa fa-quote-right"></i></h4>
                     <div class="user-img pull-right">
                      <img src="<?php echo $motto_photo1 ?>" alt="" class="img-u image-responsive" width="100px" height="100px"/>
                    </div>
                    <h5 class="pull-right"><strong class="c-black"><?php echo $first_name1.' '.$last_name1; ?></strong></h5>
                  </div>

                </div>
                <div class="item">
                  <div class="col-md-10 col-md-offset-1">

                    <h4><i class="fa fa-quote-left"></i> 

                      <?php  echo "$motto2"; ?> 

                      <i class="fa fa-quote-right"></i></h4>
                      <div class="user-img pull-right">
                        <img src="<?php echo $motto_photo2 ?>" alt="" class="img-u image-responsive" width="100px" height="100px"/>
                      </div>
                      <h5 class="pull-right"><strong class="c-black"><?php echo $first_name2.' '.$last_name2; ?></strong></h5>
                    </div>
                  </div>
                </div>
                <!--INDICATORS-->
                <ol class="carousel-indicators">
                  <li data-target="#reviews" data-slide-to="0" class="active"></li>
                  <li data-target="#reviews" data-slide-to="1"></li>
                  <li data-target="#reviews" data-slide-to="2"></li>
                </ol>
                <!--PREVIUS-NEXT BUTTONS-->

              </div>

            </div>

          </div>
          <!-- /. ROW  -->
          <hr />

       
        </div>
      </div>

<center>
      <div class="row" style="padding-bottom: 100px; `">
        <div class="col-md-6">
          <div id="comments-sec">
            <h4><strong>Yayınlanmasını istediğin bir şeyler yaz :) </strong></h4>
            
            <form class="form-horizontal" method="POST" action="motto_add.php">
              <div class="form-group center">
               <input type="hidden" class="form-control" name="photo" id="photo" value="<?php echo $photo ?>">
               <textarea class="form-control" rows="5" name="motto" id="motto"></textarea>
             </div>
             <div class="form-group">
              <button type="submit" class="btn btn-success" name="motto_button">GÖNDER</button>
            </div>
          </form>
        </div>
      </div>
    </div>   
    </center>
  </div>



  <?php include 'footer.php'; ?>