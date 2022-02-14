<?php include_once "./class/config.php";?>


<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="<?php echo MAINURL?>">Arif.et</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="menu-active"><a href="<?php echo MAINURL?>">Home</a></li>
                <!-- <li class="menu-has-children"><a href="#call-to-action">Lesson</a> -->
                       <li><a href="<?php echo LESSSONURL."?cata=Daily Conversations"?>">Daily Conversations</a></li>
                        <li><a href="<?php echo LESSSONURL."?cata=Beginner"?>">Beginner</a></li>
                        <li><a href="<?php echo LESSSONURL."?cata=Intermediate"?>">Intermediate</a></li>
                        <li><a href="<?php echo LESSSONURL."?cata=Advanced"?>">Advanced</a></li>
                         <li><a href="<?php echo EXAM."?lsid=0";?>>">Take a test</a></li>
                        <li><a href="<?php echo LESSSONURL?>">All Lessons</a></li>
               
              </li>

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->


