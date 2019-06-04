<?php include 'profile_update.php'; ?>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div mb-red">
                            <img src="<?php echo $photo ?>" class="img-thumbnail" />

                            <div class="inner-text">
                                 
                           Merhaba: <?php echo $first_name.' '.$last_name; ?>
                            <br/>
                               
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-graduation-cap "></i>Öğrenci <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="student.php"><i class="fa fa-plus"></i>Mezun Ekle</a>
                            </li>
                            <li>
                                <a href="graduate_card.php"><i class="fa fa-credit-card "></i>Mezun Kart Başvuru</a>
                            </li>                     
                        </ul>
                    </li>

                      <li>
                        <a href="#"><i class="fa fa-desktop "></i>İş <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="advert.php"><i class="fa fa-search"></i>İş İlanları</a>
                            </li>
                            <li>
                                <a href="myadvert.php"><i class="fa fa-bell "></i>İş İlanı Ver</a>
                            </li>                     
                        </ul>
                    </li>

                    <li>
                        <a href="check_photo.php"><i class="fa fa-picture-o "></i>Fotoğraf Onay</a>
                    </li>


                    <li>
                        <a href="check_motto.php"><i class="fa fa-check-circle "></i>Söz Onay </a>
                    </li>

                  
                      <li>
                        <a href="search_student.php"><i class="fa fa-users "></i>Mezun Ara</a>
                    </li>

                    
                    <li>
                        <a href="profile.php"><i class="fa fa-user "></i>Profil</a>
                    </li>
                   

            </div>

        </nav>
