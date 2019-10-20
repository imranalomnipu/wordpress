
<?php get_header();?>
/*
Template Name: blog right sidebar
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
                            <h2>Blog with right sidebar</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=============================================
=            Blog With Right Sidebar            =
==============================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/blog/post-1.jpg" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>
                    
                </article>
                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/blog/post-2.jpg" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>
                    
                </article>
                <article class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/blog/post-3.jpg" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html">Space shouldn’t be the final frontier</a>
                        </h2>
                        <div class="blog-meta">
                            <span>Dec 11, 2020</span>
                            <span>by <a href="">Admin</a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p>Ultrices posuere cubilia curae curabitur sit amet tortor ut massa commodo. Vestibulum consectetur euismod malesuada tincidunt cum. Sed ullamcorper dignissim consectetur ut tincidunt eros sed sapien consectetur dictum. Pellentesques sed volutpat ante, cursus port. Praesent mi magna, penatibus et magniseget dis parturient montes sed quia consequuntur magni dolores eos qui ratione.
                        </p>
                        <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>
                    
                </article>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                  <?php dynamic_sidebar();?>
                
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

    <?php get_footer()?>