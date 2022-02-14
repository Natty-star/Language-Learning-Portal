<?php
include_once "./class/lesson.php";
include_once "./class/question.php";




$lesson=new lesson();
$result=$lesson->fetch_lessons_detail($_GET['lsid']);
$result2=$lesson->fetch_all_lessons("");


$question=new question();
$result3=$question->get_questions_for_lesson($_GET['lsid']);
$takequiz=false;
if($result3 === null){
    $result3 = [];
}

if(count($result3)>0 ){
 $takequiz=true;
}

?>

<!-- ======= Services Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3 class="section-title"><?php echo $result[0]["lesson_name"]?></h3>
         
        </header>
    <div class="card" style="margin:0 auto">

       <div class="row">
            <!--div class="col-lg-6 about-img wow fadeInLeft">
                <img src="img/about-img.jpg" alt="">
            </div-->
            <h3><?php //echo $result[0]["category"]." Level : Lesson ".$result[0]["lesson_sequence"]?></h3>
            <?php if($_GET['lsid']!=1){?>
            <div style=" width:100%; padding: 40px; margin:0 auto" class=" content wow fadeInRight">
    <?php  }
    else
    {
    ?>
                <div style=" width:100%; padding: 40px;" class=" content wow fadeInRight"></div>
<?php }?>
            <br><br>


                <?php echo $result[0]["lesson_description"];?>
                <br><br>
                <?php if($_GET['lsid']!=1){?>
                </div>
                    <?php  }?>
                    </div>
            <div style=" width:100%; padding: 0%;" class=" content wow fadeInRight">

            </div>
            <div style="width: 100%">
            <div style="float: left; ">
                <?php
                if($takequiz)
                {
                    //echo  count($result3);
                ?>
                <a class="btn-get-started" href="<?php echo EXAM."?lsid=".$result[0]["lesson_sequence"];?>">Take a Quiz</a>
                <!-- <a href="<?php echo EXAM."?lsid=".$result[0]["lesson_sequence"];?>" class="get-started-btn-custom">Take a Quiz</a> -->
                <?php }?>



</div>
            <div style="float: right; ">
            <?php if($result[0]["lesson_sequence"]>1){?>
                 <a class="btn-get-started" href="<?php echo LESSSONURL."?lsid=".($result[0]["lesson_sequence"]-1);?>">Previous</a>
                <!-- <a href="<?php echo LESSSONURL."?lsid=".($result[0]["lesson_sequence"]-1);?>" class="get-started-btn-custom">Previous</a> -->
            <?php }?>
            &nbsp;&nbsp;&nbsp;
            <?php if($result[0]["lesson_sequence"]< count($result2)){?>
            <a  href="<?php echo LESSSONURL."?lsid=".($result[0]["lesson_sequence"]+1);?>" class="btn-get-started">Next</a>
            <?php }?>
            </div>

</div>

        </div>


      </div>
    </section><!-- End Services Section -->


