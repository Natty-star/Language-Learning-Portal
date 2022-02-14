<?php
include_once "./class/lesson.php";
$lesson=new lesson();
$category="";
if(isset($_GET['cata'])){
    $category=$_GET['cata'];
}
$result=$lesson->fetch_all_lessons(urldecode($category));


?>
 <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3> <?php
                if(isset($_GET["cata"]))
                    echo $_GET["cata"]." Level Lessons";
                else
                    echo "All Lessons";
                ?></h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
        </header>

        <?php
//echo count($result);
for($j=0;$j<count($result);$j++){
?>

        <div class="row about-cols">
          <?php
            for($i=0;$i<3 && $j<count($result);$i++){
            ?>
          <div class="col-md-4 " data-aos="fade-up" data-aos-delay="100">
            <div class="about-col c">
                <br>
              <h2 class="title"><a href="<?php echo LESSSONURL."?lsid=".$result[$j]["lesson_sequence"];?>"><?php echo $result[$j]["lesson_name"];?></a></h2>
              <h4>
               <span>Lesson <?php echo $result[$j]["lesson_sequence"]." : ".$result[$j]["category"];?></span>
              </h4>
              <br><br>
              <h2><a href="<?php echo LESSSONURL."?lsid=".$result[$j]["lesson_sequence"];?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a></h2>
            </div>
          </div>
           <?php
                $j++;
            }
            $j--;
            ?>

         
        </div>
<?php
}
?>
      </div>
    </section>

