
<?php get_header();?>
        

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title();?></h2>
                    <div class="portfolio-meta">
                        <span><?php the_time('M d , Y');?></span>|
                        <span> Category: <?php the_category(',');?></span>|
                        <span><?php the_tags();?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<section class="single-post">
    <div class="container">
        <div class="row">

        <?php if(have_posts()){
            while(have_posts()) : the_post();?>
            <div class="col-md-12">
                <div class="post-img">
                    <?php the_post_thumbnail('full',array('class' => 'img-responsive'));?>
                </div>
                <div class="post-content">
                    <p>
                        <?php the_content();?>
                    </p>
                 
                <ul class="social-share">
                    <h4>Share this article</h4>
                    <li>
                        <a href="#" class="Facebook">
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Twitter">
                            <i class="ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Linkedin">
                            <i class="ion-social-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Google Plus">
                            <i class="ion-social-googleplus"></i>
                        </a>
                    </li>
                    
                </ul>
                
            </div>
        </div>

        <?php endwhile;
        }
        ?>
            
        
        <div class="post-comment">
         <?php comments_template();?>
                
                
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