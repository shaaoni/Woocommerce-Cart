<?php 

/* Template Name:About Us 

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
                  <li class="breadcrumb-item active" aria-current="page">about us</li>
               </ol>
            </nav>
         </div>
        </div>
        <div class="inner-banner-in">
          <div class="inner-banner-img">
            <!-- <div class="overlay"></div> -->
            <?php
$image = get_field('inner_banner_image');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="object-cover">';
  
}
?>
          </div>
        </div>
        <div class="container inner-banner-content">
          <div class="row justify-content-center align-items-center">
            <div class="text-center inner-banner-info-main color-black-light font-13 font-600">
              <h2 class="color-white font-20 font-700 text-uppercase"><?php echo get_field('inner_content');?></h2>              
            </div>
          </div>
        </div>
      </div>
      <!-- inner-banner -->

      <div class="full-width about-disposable">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="disposable-img">
              <?php
$image = get_field('image_first');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="object-cover">';
  
}
?>
                <!-- <img class="object-cover" src="<?php //echo get_field('image_first');?>" alt=""> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="disposable-content">
                <div class="disposable-title font-13 font-400 color-black">
                  <h6 class="font-13 font400 color-black"><?php echo get_field('heading_six');?></h6>
                  <h3 class="font-28 font400 color-black text-uppercase"><?php echo get_field('heading_three');?></h3>
                  <p><?php echo get_field('content_para');?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row flex-row-reverse workshops">
            <div class="col-md-6">
              <div class="disposable-img video-tube">
                <div class="overlay"></div>
                <?php
$image = get_field('image_second');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="object-cover">';
  
}
?>
                <!-- <img class="object-cover" src="<?php //echo get_field('image_second');?>" alt=""> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="disposable-content">
                <div class="disposable-title font-13 font-400 color-black">
                  <h6 class="font-13 font400 color-black"><?php echo get_field('seacond_heading_six');?></h6>
                  <h3 class="font-28 font400 color-black text-uppercase"><?php echo get_field('second_heading_three');?></h3>
                  <p><?php echo get_field('second_content');?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- value-banner -->
      <div class="full-width reason-banner">
        <div class="reason-banner-in">
          <div class="reason-banner-img">
            <div class="overlay"></div>
            <?php
$image = get_field('img');
if ($image) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" class="object-cover">';
  
}
?>
            <!-- <img class="object-cover" src="<?php //echo get_field('img');?>" alt=""> -->
          </div>
        </div>
        <div class="container reason-banner-content">
          <div class="row justify-content-center align-items-center">
            <div class="full-width text-center reason-banner-info-main">
              <h2 class="color-white font-28 font-700 text-uppercase"><?php echo get_field('title');?></h2>
            </div>
            <div class="full-width support-section">
                 <div class="support-left text-center font-13 color-white font400">
                   <h4 class="font-20 font-700 color-white text-uppercase"><?php echo get_field('title_2_first');?></h4>
                   <p><?php echo get_field('content_first');?></p>
                 </div>
                 <div class="support-right text-center font-13 color-white font400">
                   <h4 class="font-20 font-700 color-white text-uppercase"><?php echo get_field('title_2_second');?></h4>
                   <p><?php echo get_field('content_second');?></p>
                 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- value-banner -->


      <div class="full-width instagram-section text-center">
        <div class="container-fluid">
          <div class="header-title text-center">
            <h4 class="font-20 font-700 color-black text-uppercase"><?php echo get_field('title');?></h4>            
          </div>
          <span class="font-12 color-black font-600"><?php echo get_field('content');?></span>
          <div class="insta-box-area">
            <div class="instagram-box">
              <a href="#">
                <div class="instagram-box-img">
                  <div class="transition5s instagram-hover"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-icon-hover.png"></div>                  
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/insta1.jpg">
                </div>
              </a>
            </div>
            <div class="instagram-box">
              <a href="#">
                <div class="instagram-box-img">
                  <div class="transition5s instagram-hover"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-icon-hover.png"></div>  
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/insta2.jpg">
                </div>
              </a>
            </div>
            <div class="instagram-box">
              <a href="#"><div class="instagram-box-img">
                <div class="transition5s instagram-hover">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-icon-hover.png">
                </div>  <img src="<?php echo get_template_directory_uri();?>/assets/images/insta3.jpg">
              </div>
            </a>
            </div>
            <div class="instagram-box">
              <a href="#">
                <div class="instagram-box-img">
                  <div class="transition5s instagram-hover">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-icon-hover.png">
                  </div>  
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/insta4.jpg">
                </div>
              </a>
            </div>
            <div class="instagram-box">
              <a href="#">
                <div class="instagram-box-img">
                  <div class="transition5s instagram-hover">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-icon-hover.png">
                  </div>  
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/insta1.jpg">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>