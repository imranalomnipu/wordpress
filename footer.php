
<?php global $timermaster;?>
<footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">
                          <?php echo $timermaster['footer_title'];?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                          <?php

                           $social_account=$timermaster['social_icon'];
                            if(is_array($social_account)){
                                foreach($social_account as $single_account){?>
                                    <li>
                                        <a href="<?php echo esc_url($single_account['url']);?>" class="Facebook">
                                        <i class="ion-social-<?php echo $single_account['title']?>"></i>
                                        </a>
                                  </li>
                               <?php }
                            }

                          ?>
                           
                           
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

    <?php wp_footer();?>
 	</body>
</html>
