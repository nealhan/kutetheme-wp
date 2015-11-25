<?php
    $address = kt_get_info_address();
    $hotline = kt_get_info_hotline();
    $email   = kt_get_info_email();
    $copyright = kt_get_info_copyrights();
    $kt_footer_payment_logo = kt_option('kt_footer_payment_logo','');
    $kt_footer_background = kt_option('kt_footer_background','');
?>
<footer class="footer4">
     <div class="container">
         <div class="footer-top">
            <div class="left">
                <div class="row">
                     <div class="col-sm-4">
                        <?php
                            if(is_active_sidebar('footer-menu-1')){
                                dynamic_sidebar('footer-menu-1');
                            }
                         ?>
                     </div>
                     <div class="col-sm-4">
                        <?php
                            if(is_active_sidebar('footer-menu-2')){
                                dynamic_sidebar('footer-menu-2');
                            }
                         ?>
                     </div>
                     <div class="col-sm-4">
                        <?php
                            if(is_active_sidebar('footer-menu-3')){
                                dynamic_sidebar('footer-menu-3');
                            }
                         ?>
                     </div>
                 </div>
            </div>
            <div class="right">
                <?php
                    if(is_active_sidebar('footer-menu-4')){
                        dynamic_sidebar('footer-menu-4');
                    }
                 ?>
             </div>
         </div>
         <div class="footer-middle">
             <img src="assets/data/option12/payment.jpg" alt="">
         </div>
         <div class="footer-bottom">
              <?php
                  if(is_active_sidebar('footer-menu-bottom')){
                      dynamic_sidebar('footer-menu-bottom');
                  }
              ?>
             <div class="footer-coppyright"><?php echo esc_textarea($copyright);?></div>
         </div>
     </div>
</footer>