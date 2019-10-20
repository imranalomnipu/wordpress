
<?php global $timermaster;?>
<?php get_header();?>
/*
Template Name: about page
*/

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2><?php echo $timermaster['about_title'];?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="<?php echo $timermaster['company_desc']['url'];?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timermaster['company_title'];?></h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                       <?php echo $timermaster['company_subtitle'];?>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
                <?php echo $timermaster['company_subtitle1'];?>
                </h2>
                <p>
                 <?php echo $timermaster['company_subtitle1_desc'];?>
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <h2 class="item_title">
                <?php echo $timermaster['company_subtitle_2'];?>
                </h2>
                <p>
                <?php echo $timermaster['company_subtitle2_desc'];?>
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <h2 class="item_title">
                <?php echo $timermaster['company_subtitle_3'];?>
                </h2>
                <p>
                 <?php echo $timermaster['company_subtitle3_desc'];?>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center"><?php echo $timermaster['member_title'];?></h2>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="<?php echo $timermaster['member_image']['url'];?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name"><?php echo $timermaster['member_name'];?></h3>
                    <p class="team_designation"><?php echo $timermaster['member_pos'];?></p>
                    <p class="team_text"><?php echo $timermaster['member_desc'];?></p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="<?php echo $timermaster['member_image2']['url'];?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name"><?php echo $timermaster['member_name2'];?></h3>
                    <p class="team_designation"><?php echo $timermaster['member_pos2'];?></p>
                    <p class="team_text"><?php echo $timermaster['member_desc2'];?></p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="<?php echo $timermaster['member_image3']['url'];?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name"><?php echo $timermaster['member_name3'];?></h3>
                    <p class="team_designation"><?php echo $timermaster['member_pos3'];?></p>
                    <p class="team_text"><?php echo $timermaster['member_desc3'];?></p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="<?php echo $timermaster['member_image4']['url'];?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name"><?php echo $timermaster['member_name4'];?></h3>
                    <p class="team_designation"><?php echo $timermaster['member_pos4'];?></p>
                    <p class="team_text"><?php echo $timermaster['member_desc4'];?></p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" 
                        data-wow-delay=".3s"><?php echo $timermaster['client_title'];?></h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" 
                        data-wow-delay=".5s"><?php echo $timermaster['client_desc'];?></p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="<?php echo $timermaster['client_image1']['url'];?>">
                            </div>
                            <div>
                                <img src="<?php echo $timermaster['client_image2']['url'];?>">
                            </div>
                            <div>
                                <img src="<?php echo $timermaster['client_image3']['url'];?>">
                            </div>
                            <div>
                                <img src="<?php echo $timermaster['client_image4']['url'];?>">
                            </div>
                            <div>
                                <img src="<?php echo $timermaster['client_image5']['url'];?>">
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>





            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

 <?php get_footer();?>