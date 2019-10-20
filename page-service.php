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
                            <h2><?php echo $timermaster['service_title'];?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timermaster['service_header'];?></h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo $timermaster['service_par'];?></p>
                    <div class="row service-parts">
                     <?php
                     $query= new WP_Query(array(
                         'post_type' =>'service',
                         'post_per_page'=>-1,
                         'order' =>'ASC'
                     ));
                     if($query->have_posts()){
                         while($query->have_posts()):$query->the_post();
                         $ion_cls=get_post_meta(get_the_ID(),'ion_ios_class',true);
                         $service_title=get_post_meta(get_the_ID(),'service_area',true);
                         $service_desc=get_post_meta(get_the_ID(),'service_desc',true);
                         
                         ?>
                         <div class="col-md-6">
                         <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                             <i class="ion-ios-<?php echo $ion_cls;?>"></i>
                             <h4><?php echo $service_title;?></h4>
                             <p><?php echo $service_desc;?></p>
                         </div>
                     </div>
                      <?php endwhile;
                     
                     }
                     ?>
                       
                      
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block">
                    <img class="img-responsive" src="<?php echo $timermaster['service_img']['url'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 
================================================== 
    Works Section Start
================================================== -->

<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timermaster['feature_title'];?></h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
              <?php echo $timermaster['feature_desc'];?>
            </p>
        <div class="row">
        <?php 
         $query=new WP_Query(array(
             'post_type'=>'feature',
             'post_per_page'=>-1,
             'order'=>'ASC'
         ));
         if($query->have_posts()){
             while($query->have_posts()):$query->the_post();
             $feature_img=get_post_meta(get_the_ID(),'feature_image',true);
             $feature_img_title=get_post_meta(get_the_ID(),'feature_img_title',true);
             $feature_img_desc=get_post_meta(get_the_ID(),'feature_img_desc',true);
             $feature_demo_title=get_post_meta(get_the_ID(),'feature_demo_title',true);
             $feature_demo_desc=get_post_meta(get_the_ID(),'feature_demo_desc',true);
             
             
             ?>
             <div class="col-sm-3">
             <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                <div class="img-wrapper">
                    <img src="<?php echo $feature_img;?>" class="img-responsive" alt="this is a title" >
                    <div class="overlay">
                        <div class="buttons">
                            <a rel="gallery" class="fancybox" href="<?php echo $feature_img;?>"><?php
                            echo $feature_img_title;?></a>        
                            <a target="_blank" href=""><?php echo $feature_img_desc;?></a>
                        </div>
                    </div>
                </div>
                <figcaption>
                    <h4>
                        <a href="#">
                            <?php echo $feature_demo_title;?>        
                        </a>
                    </h4>
                    <p>
                        <?php echo $feature_demo_desc;?>
                    </p>
                </figcaption>
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
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                        <?php 
                        $query=new WP_Query(array(
                            'post_type'=>'clients',
                            'post_per_page'=>-1,
                            'order'=>'ASC'
                        ));
                         if($query->have_posts()){
                             while($query->have_posts()):$query->the_post();
                             $clients_img=get_post_meta(get_the_ID(),'clients_image',true);
                             
                             ?>
                             <div>
                                <img src="<?php echo $clients_img;?>" alt="">
                            </div>

                            <?php endwhile;
                         }
                        
                        
                        ?>
                            
                            
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