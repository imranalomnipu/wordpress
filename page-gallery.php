    <?php global $timermaster;?>
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
                            <h2><?php echo $timermaster['gallery_title'];?></h2>
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


<!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
            <?php
             $query = new WP_Query(array(
                'post_type' =>'gallery',
                'post_per_page'=>-1,
                'order' => 'ASC'
            ));
            if( $query->have_posts()){
                while( $query->have_posts()): $query->the_post();
                $gallery_img=get_post_meta(get_the_ID(),'gallery_image',true);
                $gallery_dem=get_post_meta(get_the_ID(),'gallery_demo',true);
                
                ?>
                <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="<?php echo $gallery_img;?>" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo $gallery_img;?>"><?php echo $gallery_dem;?></a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>

            <?php endwhile;
            }
            ?>
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