<?php 

/* Template Name:Contact 

*/
get_header();
?>

      <!-- inner-banner -->
      <div class="full-width inner-banner">
        <div class="full-width bredcm about-bredcm">
         <div class="container-fluid">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb font-12 font400">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">contact us</li>
               </ol>
            </nav>
         </div>
        </div>
        <div class="inner-banner-in">
          <div class="inner-banner-img">
            <!-- <div class="overlay"></div> -->
            <?php
$image = get_field('banner_image');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="object-cover">';
  
}
?>
            <!-- <img class="object-cover" src="<?php //echo get_template_directory_uri();?>/assets/images/contact-banner.jpg" alt="banner"> -->
          </div>
        </div>
        <div class="container inner-banner-content">
          <div class="row justify-content-center align-items-center">
            <div class="text-center inner-banner-info-main color-black-light font-13 font-600">
              <h2 class="color-white font-20 font-700 text-uppercase"><?php echo get_field('banner_image_title');?></h2>              
            </div>
          </div>
        </div>
      </div>
      <!-- inner-banner -->

      
      <div class="full-width contact-information text-center">
        <div class="container-fluid">
          <div class="contact-info-in font-14 font-400 color-black">
            <h2 class="font-20 font-700 color-black text-uppercase"><?php echo get_field('banner_title');?></h2>
            <h4 class="font-18 font-400 color-black"><?php echo get_field('banner_content');?></h4>
            <h6 class="text-uppercase font-400 font-14 color-black"><?php echo get_field('banner_time');?></h6>
          </div>
        </div>
      </div>


      <div class="full-width contact-frm-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-7">
              <div class="map">
                <img class="object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/map.jpg">
              </div>
            </div>
            <div class="col-md-5">
              <div class="contact-form-pnl">
                <h4 class="font-15 font-700 color-black text-uppercase">FILL OUT THE FORM BELOW SO THAT WE CAN BETTER ASSIST YOU:</h4>
                <div class="full-width contact-frm-in">
                  <form id="contact-form" method="post" action="" role="form">
                    <div class="full-width frm-design-part-contact design-projectFrmPart">
                      <div class="dsgnPrj-FrmRow cntc-fm-ds">
                        <label class="font-13 font-600 color-black">Full Name</label>
                        <div class="full_width dsgnPrj-FrmRow_in cntc-fm-ds-in">
                        <input type="text" name="name">
                        </div>
                      </div>
                      <div class="dsgnPrj-FrmRow cntc-fm-ds">
                        <label class="font-13 font-600 color-black">Phone Number</label>
                        <div class="full_width dsgnPrj-FrmRow_in cntc-fm-ds-in">
                        <input type="text" name="name">
                        </div>
                      </div>
                      <div class="dsgnPrj-FrmRow cntc-fm-ds">
                        <label class="font-13 font-600 color-black">Email Address</label>
                        <div class="full_width dsgnPrj-FrmRow_in cntc-fm-ds-in">
                        <input type="email" name="name">
                        </div>
                      </div>
                      <div class="dsgnPrj-FrmRow cntc-fm-ds">
                        <label class="font-13 font-600 color-black">Order Number</label>
                        <div class="full_width dsgnPrj-FrmRow_in cntc-fm-ds-in">
                        <input type="text" name="name">
                        </div>
                      </div>
                      <div class="dsgnPrj-FrmRow cntc-fm-ds">
                        <label class="font-13 font-600 color-black">Comments/Questions</label>
                        <div class="full_width dsgnPrj-FrmRow_in cntc-fm-ds-in">
                        <textarea></textarea>
                        </div>
                      </div>
                      <div class="full-width create-account-btn submint-contact">
                        <button class="create-ac-btn">Submit form</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>