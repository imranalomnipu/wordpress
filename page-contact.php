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
                            <h2><?php echo $timermaster['contact_title'];?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <?php echo $timermaster['contact_leftsite'];?></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <?php echo $timermaster['contact_leftsite_txt'];?>
                    </p>
                    
                    <div class="<?php echo $timermaster['contact_leftsite_form'];?>">
                       
                           
                                               
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"> <?php echo $timermaster['contact_righttsite'];?></h2></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
               
                    <?php echo $timermaster['contact_rightsite_txt'];?>
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
        <?php
       
        $query=new WP_Query(array(
            'post_type'=>'contact',
            'post_per_page'=>-1,
            'order'   =>'ASC'
        ));
        if($query->have_posts()){
            while($query->have_posts()):$query->the_post();
            $ion_icon_class=get_post_meta(get_the_ID(),'ion_ios_class',true);
            $contact_add1=get_post_meta(get_the_ID(),'contact_add1',true);
            $contact_add2=get_post_meta(get_the_ID(),'contact_add2',true);
            ?>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-<?php echo $ion_icon_class;?> "></i>
                    <h5><?php echo $contact_add1;?><br><?php echo $contact_add2;?></h5>
                </div>
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