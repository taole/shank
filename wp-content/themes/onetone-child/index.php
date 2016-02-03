<?php
/**
* The main template file.
*
*/
 ?>
<?php
if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) :
get_header(); 
else:
get_header('home'); 
endif;
?>
<?php
if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) :

$left_sidebar   = onetone_option('left_sidebar_blog_archive','');
$right_sidebar  = onetone_option('right_sidebar_blog_archive','');
$aside          = 'no-aside';
if( $left_sidebar !='' )
$aside          = 'left-aside';
if( $right_sidebar !='' )
$aside          = 'right-aside';
if(  $left_sidebar !='' && $right_sidebar !='' )
$aside          = 'both-aside';
?>

<div class="post-wrap">
            <div class="container">
                <div class="post-inner row <?php echo $aside; ?>">
                    <div class="col-main">
                        <section class="post-main" role="main" id="content">                        
                            <article class="page type-page" id="">
                            <?php if (have_posts()) :?>
                                <!--blog list begin-->
                                <div class="blog-list-wrap">
                                
                                <?php while ( have_posts() ) : the_post();?>
                                <?php get_template_part("content",get_post_format() ); ?>
                                <?php endwhile;?>
                                </div>
                                <?php endif;?>
                                <!--blog list end-->
                                <!--list pagination begin-->
                                <nav class="post-list-pagination" role="navigation">
                                    <?php if(function_exists("onetone_native_pagenavi")){onetone_native_pagenavi("echo",$wp_query);}?>
                                </nav>
                                <!--list pagination end-->
                            </article>
                            
                            
                            <div class="post-attributes"></div>
                        </section>
                    </div>
                    <?php if( $left_sidebar !='' ):?>
                    <div class="col-aside-left">
                        <aside class="blog-side left text-left">
                            <div class="widget-area">
                                <?php get_sidebar('archiveleft');?> 
                            </div>
                        </aside>
                    </div>
                    <?php endif; ?>
                    <?php if( $right_sidebar !='' ):?>
                    <div class="col-aside-right">
                       <?php get_sidebar('archiveright');?>
                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>  
        </div>
<?php else: ?>
<div class="post-wrap">
  <div class="container-fullwidth">
    <div class="page-inner row no-aside" style="padding-top: 0; padding-bottom: 0;">
      <div class="col-main">
        <section class="post-main" role="main" id="content">
          <article class="page type-page homepage" id="">
            <?php
 global $onetone_options, $allowedposttags ;
 $allowedposttags['input']  = array ( 'class' => 1, 'id'=> 1, 'style' => 1, 'type' => 1, 'value' => 1 ,'placeholder'=> 1,'size'=> 1,'tabindex'=> 1,'aria-required'=> 1);
 $allowedposttags['iframe'] = array(
					'align' => true,
					'width' => true,
					'height' => true,
					'frameborder' => true,
					'name' => true,
					'src' => true,
					'id' => true,
					'class' => true,
					'style' => true,
					'scrolling' => true,
					'marginwidth' => true,
					'marginheight' => true,
					
  );
					 
 
 $video_array               = array();
 $section_num               = onetone_option( 'section_num',8 ); 
 $section_background_video  = onetone_option( 'section_background_video_0' ,'');
 $video_background_section  = onetone_option( 'video_background_section',0 );
 $video_background_section  = $video_background_section == ""?0:$video_background_section;
 $video_controls            = onetone_option( 'video_controls' ,1);
 $video_controls            = $video_controls == ""?0:$video_controls;
 $section_1_content         = onetone_option( 'section_1_content' ,'content');
 
 
 // default home page sections data
 $default_options = array(
				  //section 1
				  array(
						'section_title'=>'',
						'menu_title'=>'Home',
						'menu_slug'=>'home',
						'section_background'=>array(
											  'color' => '',
											  'image' => THEME_URL.'/images/start.png',
											  'repeat' => 'repeat',
											  'position' => 'top left',
											  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '48px','face'  => '','style' => 'normal','color' => '#666666' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#666666' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'section-banner',
						'section_padding'=>'',
						'text_align'=>'left',
						'section_content'=>'<div class="banner-box">

&nbsp;
<h1>Night and Day</h1>
<div class="sub-title">After the moment known as EIEN unfolded, and the birth of Universe came to be, a Goddess awakened upon a floating rock in a world filled with beauty and endless possibility. Upon awakening, she learned her name, and from that moment on, all that lived in the universe knew Life as Lady Vale. Yet, she ...</div>
<div class="banner-scroll"><a class="scroll" href="#crew" data-section="crew"><img src="'.get_site_url().'/wp-content/themes/onetone-child/scroll-down.png" class="feature-img" alt="down"></a></div>
</div>',
						),
				  
				  //section 2
				  array(
						'section_title'=>'',
						'menu_title'=>'',
						'menu_slug'=>'',
						'section_background'=>array(
											  'color' => '#eeeeee',
											  'image' => '',
											  'repeat' => 'repeat',
											  'position' => 'top left',
											  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '48px','face'  => '','style' => 'normal','color' => '#666666' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#666666' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'30px 0',
						'text_align'=>'left',
						'section_content'=>'<div class="magee-promo-box row" id="">
                                        <div class="promo-info col-md-6">
                                            
                                          <h4><em>What</em> is <span>the Curseborn Saga?</span></h4>
                                          <div class="promo-content-box">
                                              <p>The Novella Series {} The Curseborn Saga</p>
                                              <p>The Curseborn Saga is a high fantasy epic, set in the distant fictional realm known as Soria. It tells the tale of Death\'s unrelenting pursuit of Lady Life, and the never-ending war know as Ragnarok. The Curseborn Saga is a 22 Chapter Series that will be released one by one in the form of short novellar Each novella will have it\'s own unique cover drawn by the legend and master of artwork,Jise</p>
                                              <a href="#" class="btn-normal btn-lg"><i class="fa "></i> READ MORE</a>
                                          </div>
                                        </div>
                                        <div class="promo-action col-md-6">
                                        <div style="text-align:right">
                                           <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/image-2.png" class="feature-img">
                                        </div>
                                        </div>
                                    </div>',
						),
				  
				 
				 //section 4
				  array(
						'section_title'=>'THE CHARACTERS',
						'menu_title'=>'Info',
						'menu_slug'=>'info',
						'section_background'=> array(
											  'color' => '#ffffff',
											  'image' => '',
											  'repeat' => 'repeat',
											  'position' => 'top left',
											  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '36px','face'  => '','style' => 'bold','color' => '#666666' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#666666' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0',
						'text_align'=>'left',
						'section_content'=>'<p style="text-align: center">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere ce.<br>
  Etiam ut dui eu nisi lobortis rhoncus ac quis nunc.</p>
<style type="text/css" scoped="scoped">
.divider-5642db4239a47{ margin-top: 30px;margin-bottom:0;width:100%;}.divider-5642db4239a47 .divider-border{border-bottom-width:; border-color:;}.divider-5642db4239a47 .double-line.divider-inner-item .divider-inner{border-top-width: ; border-bottom-width: ;}.divider-5642db4239a47 .divider-border.divider-inner-item .divider-inner{ border-bottom-width: ;} 
</style>
<div class=" divider divider-5642db4239a47" id="" style="margin-top:; margin-bottom:;">
  <div class="divider-inner divider-border"></div>
</div>
<div id="" class=" row">
  <div class=" col-md-3" id="">
    <style type="text/css" scoped="scoped">
.person-5642db423a0e2 .person-vcard.person-social li a i{ border-radius: 4px; background-color:#595959;} .person-5642db423a0e2 .img-box img{ border-radius: 0; display: inline-block;} .person-5642db423a0e2 .img-box img{border-width: 1px;border-style: solid;}.person-5642db423a0e2 .img-box img{border-color: #eeeeee;}
</style>
    <div class="magee-person-box  person-5642db423a0e2" id="">
      <div class="person-img-box">
        <div class="img-box figcaption-middle text-center fade-in"><a href="#"><img src="'.esc_url('http://www.mageewp.com/onetone/wp-content/uploads/sites/17/2015/11/001.jpg').'">
          <div class="img-overlay primary">
            <div class="img-overlay-container">
              <div class="img-overlay-content"><i class="fa fa-link"></i></div>
            </div>
          </div>
          </a></div>
      </div>
      <div class="person-vcard text-center">
        <h3 class="person-name" style="text-transform: uppercase;">Kevin Perry</h3>
        <h4 class="person-title" style="text-transform: uppercase;">Software Developer</h4>
        <p class="person-desc">Vivamus congue justo eget diam interdum scelerisque. In hac habitasse platea dictumst. </p>
        <ul class="person-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class=" col-md-3" id="">
    <style type="text/css" scoped="scoped">
.person-5642db423a4bd .person-vcard.person-social li a i{ border-radius: 4px; background-color:#000000;} .person-5642db423a4bd .img-box img{ border-radius: 0; display: inline-block;} .person-5642db423a4bd .img-box img{border-width: 1px;border-style: solid;}.person-5642db423a4bd .img-box img{border-color: #eeeeee;}
</style>
    <div class="magee-person-box  person-5642db423a4bd" id="">
      <div class="person-img-box">
        <div class="img-box figcaption-middle text-center fade-in"><a href="#"><img src="'.esc_url('http://www.mageewp.com/onetone/wp-content/uploads/sites/17/2015/11/002.jpg').'">
          <div class="img-overlay primary">
            <div class="img-overlay-container">
              <div class="img-overlay-content"><i class="fa fa-link"></i></div>
            </div>
          </div>
          </a></div>
      </div>
      <div class="person-vcard text-center">
        <h3 class="person-name" style="text-transform: uppercase;">Jennifer Lee</h3>
        <h4 class="person-title" style="text-transform: uppercase;">Software Engineer</h4>
        <p class="person-desc">Vivamus congue justo eget diam interdum scelerisque. In hac habitasse platea dictumst. </p>
        <ul class="person-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class=" col-md-3" id="">
    <style type="text/css" scoped="scoped">
.person-5642db423a876 .person-vcard.person-social li a i{ border-radius: 4px; background-color:#000000;} .person-5642db423a876 .img-box img{ border-radius: 0; display: inline-block;} .person-5642db423a876 .img-box img{border-width: 1px;border-style: solid;}.person-5642db423a876 .img-box img{border-color: #eeeeee;}
</style>
    <div class="magee-person-box  person-5642db423a876" id="">
      <div class="person-img-box">
        <div class="img-box figcaption-middle text-center fade-in"><a href="#"><img src="'.esc_url('http://www.mageewp.com/onetone/wp-content/uploads/sites/17/2015/11/003.jpg').'">
          <div class="img-overlay primary">
            <div class="img-overlay-container">
              <div class="img-overlay-content"><i class="fa fa-link"></i></div>
            </div>
          </div>
          </a></div>
      </div>
      <div class="person-vcard text-center">
        <h3 class="person-name" style="text-transform: uppercase;">Brandon Ross</h3>
        <h4 class="person-title" style="text-transform: uppercase;">Java Developer</h4>
        <p class="person-desc">Vivamus congue justo eget diam interdum scelerisque. In hac habitasse platea dictumst. </p>
        <ul class="person-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class=" col-md-3" id="">
    <style type="text/css" scoped="scoped">
.person-5642db423ac2a .person-vcard.person-social li a i{ border-radius: 4px; background-color:#000000;} .person-5642db423ac2a .img-box img{ border-radius: 0; display: inline-block;} .person-5642db423ac2a .img-box img{border-width: 1px;border-style: solid;}.person-5642db423ac2a .img-box img{border-color: #eeeeee;}
</style>
    <div class="magee-person-box  person-5642db423ac2a" id="">
      <div class="person-img-box">
        <div class="img-box figcaption-middle text-center fade-in"><a href="#"><img src="'.esc_url('http://www.mageewp.com/onetone/wp-content/uploads/sites/17/2015/11/004.jpg').'">
          <div class="img-overlay primary">
            <div class="img-overlay-container">
              <div class="img-overlay-content"><i class="fa fa-link"></i></div>
            </div>
          </div>
          </a></div>
      </div>
      <div class="person-vcard text-center">
        <h3 class="person-name" style="text-transform: uppercase;">Sara Wright</h3>
        <h4 class="person-title" style="text-transform: uppercase;">Systems Engineer</h4>
        <p class="person-desc">Vivamus congue justo eget diam interdum scelerisque. In hac habitasse platea dictumst. </p>
        <ul class="person-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
',
			
						),

					  //section 5
				  array(
						'section_title'=>'THE CREW',
						'menu_title'=>'Crew',
						'menu_slug'=>'crew',
						'section_background'=> array(
												'color' => '#eeeeee',
												'image' => '',
												'repeat' => 'repeat',
												'position' => 'top left',
												'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '36px','face'  => '','style' => 'bold','color' => '#666666' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#666666' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0',
						'text_align'=>'center',
						'section_content'=>'<p>We are the Four Lords. Two brothers and two best mates who have learned that our minds will always and forever work at their best when you work with others. We are
story tellers in trade, and we long to create something that has never been before. Something that will touch people\'s hearts and leave them breathless. We are just like you.
We work normal jobs everyday, and try desperately to find our way in this labyrinth we have all come to know as life. But for us, even in the toughest of times, and we all
have them, it was always stories that kept us going. It is our passion. It is how we can live life, yet still create. We believe that stories are the heart of everything.</p>
<p>That\'s exactly why four years ago, we came together from the corners of this world and began working on our own story. \"One of the greatest stories ever told\".This is what
we told ourselves we would create. We devote our lives to this. To give something back to the world after the artists of the past have already given so much. We would not
be who we are without them. And in turn, are willing to stake our futures on creating something for others. We are artists. We may be irrational, reckless, and stupid at times</p>
<p>But we know how to love.</p>
<p>THE FOUR LORDS</p>
<p>Director-Marten D. Shanks {} Writer-Trowa D. Cloud</p>
<p>Creator-Simon Gatsu Sandoval {} Creator-Peter Ace Kolias</p>
<a href="#" class="btn-normal btn-lg"><i class="fa "></i> READ MORE</a>
',
			
						),  
				  
				  //section 6
				  array(
						'section_title'=>'THE NOVELLAS',
						'menu_title'=>'Novellas',
						'menu_slug'=>'novellas',
						'section_background'=> array(
												  'color' => '#ffffff',
												  'image' => '',
												  'repeat' => 'repeat',
												  'position' => 'top left',
												  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '48px','face'  => '','style' => 'normal','color' => '#666666' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#666666' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0',
						'text_align'=>'center',
						'section_content'=>'<div id="" class=" row">
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db4235f60 h3 {font-size:18px;}.feature-box-5642db4235f60 h3 {color:#666666;}.feature-box-5642db4235f60 .icon-box{color:#000000;}.feature-box-5642db4235f60 .feature-content,.feature-box-5642db4235f60 .feature-content p{color:#666666;}.feature-box-5642db4235f60 .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db4235f60" id="" data-os-animation="fadeOut"><div class="icon-box " data-animation=""> <i class="feature-box-icon fa fa-leaf  fa-fw"></i></div><h3>FREE PSD TEMPLATE </h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu. </p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db42363df h3 {font-size:18px;}.feature-box-5642db42363df h3 {color:#666666;}.feature-box-5642db42363df .icon-box{color:#000000;}.feature-box-5642db42363df .feature-content,.feature-box-5642db42363df .feature-content p{color:#666666;}.feature-box-5642db42363df .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db42363df" id="" data-os-animation="fadeOut"><div class="icon-box " data-animation=""> <i class="feature-box-icon fa fa-hourglass-end  fa-fw"></i></div><h3>FREE PSD TEMPLATE</h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu.</p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db423682b h3 {font-size:18px;}.feature-box-5642db423682b h3 {color:#666666;}.feature-box-5642db423682b .icon-box{color:#000000;}.feature-box-5642db423682b .feature-content,.feature-box-5642db423682b .feature-content p{color:#666666;}.feature-box-5642db423682b .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db423682b" id="" data-os-animation="fadeOut"><div class="icon-box " data-animation=""> <i class="feature-box-icon fa fa-signal  fa-fw"></i></div><h3>FREE PSD TEMPLATE</h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu. </p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
</div>
<div id="" class=" row">
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db4236ff8 h3 {font-size:18px;}.feature-box-5642db4236ff8 h3 {color:#666666;}.feature-box-5642db4236ff8 .icon-box{color:#000000;}.feature-box-5642db4236ff8 .feature-content,.feature-box-5642db4236ff8 .feature-content p{color:#666666;}.feature-box-5642db4236ff8 .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db4236ff8" id="" data-os-animation="fadeOut"><div class="icon-box" data-animation=""> <i class="feature-box-icon fa fa-heart  fa-fw"></i></div><h3>FREE PSD TEMPLATE</h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu.</p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db423744b h3 {font-size:18px;}.feature-box-5642db423744b h3 {color:#666666;}.feature-box-5642db423744b .icon-box{color:#000000;}.feature-box-5642db423744b .feature-content,.feature-box-5642db423744b .feature-content p{color:#666666;}.feature-box-5642db423744b .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db423744b" id="" data-os-animation="fadeOut"><div class="icon-box " data-animation=""> <i class="feature-box-icon fa fa-video-camera  fa-fw"></i></div><h3>FREE PSD TEMPLATE </h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu.</p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
<div class=" col-md-4" id="">
<style type="text/css">.feature-box-5642db423788d h3 {font-size:18px;}.feature-box-5642db423788d h3 {color:#666666;}.feature-box-5642db423788d .icon-box{color:#000000;}.feature-box-5642db423788d .feature-content,.feature-box-5642db423788d .feature-content p{color:#666666;}.feature-box-5642db423788d .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-5642db423788d" id="" data-os-animation="fadeOut"><div class="icon-box " data-animation=""> <i class="feature-box-icon fa fa-tag  fa-fw"></i></div><h3>FREE PSD TEMPLATE</h3><div class="feature-content"><p>Integer pulvinar elementum est, suscipit ornare ante finibus ac. Praesent vel ex dignissim, rhoncus eros luctus, dignissim arcu.</p><a href="" target="_blank" class="feature-link"></a></div></div>
</div>
</div>
',
						),
				  
				  //section 7
				  				  array(
						'section_title'=>'SEE OUR WORLD',
						'menu_title'=>'Gallery',
						'menu_slug'=>'gallery',
						'section_background'=> array(
												'color' => '#fff',
												'image' => '',
												'repeat' => 'repeat',
												'position' => 'top left',
												'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '36px','face'  => '','style' => 'bold','color' => '#6c6c6c' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#6c6c6c' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0 85px',
						'text_align'=>'center',
						'section_content'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<style type="text/css" scoped="scoped">.divider-5642db4238104{ margin-top: 30px;margin-bottom:0;width:100%;}.divider-5642db4238104 .divider-border{border-bottom-width:; border-color:;}.divider-5642db4238104 .double-line.divider-inner-item .divider-inner{border-top-width: ; border-bottom-width: ;}.divider-5642db4238104 .divider-border.divider-inner-item .divider-inner{ border-bottom-width: ;} </style><div class=" divider divider-5642db4238104" id="" style="margin-top:; margin-bottom:;"><div class="divider-inner divider-border"></div></div>
<div id="" class=" no-padding row">
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-1.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-2.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-3.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-4.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-5.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                       <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-6.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-7.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-8.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-9.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-10.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-11.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>
<div class=" col-md-3" id=""><div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a target="_self" href="javascript:;">
                                                        <img src="'.get_site_url().'/wp-content/themes/onetone-child/images/charater-12.png" class="feature-img">
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></div></div></div>                                    
</div>',
			
						),
				 
				  
				   //section 8
				  array(
						'section_title'=>'BAZAAR',
						'menu_title'=>'Bazaar',
						'menu_slug'=>'bazaar',
						'section_background'=>  array(
												  'color' => '#ffffff',
												  'image' => THEME_URL.'/images/bg.png',
												  'repeat' => 'no-repeat',
												  'position' => 'bottom center',
												  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '36px','face'  => '','style' => 'bold','color' => '#fff' ),
						'section_content_typography'=> array('size'  => '14px','face'  => '','style' => 'normal','color' => '#fff' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0',
						'text_align'=>'left',
						'section_content'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',

			
						),
				  
				  
				    
  //section 9
				  array(
						'section_title'=>'feel free to contact us',
						'menu_title'=>'Contact',
						'menu_slug'=>'contact',
						'section_background'=>  array(
												  'color' => '',
												  'image' => '',
												  'repeat' => 'no-repeat',
												  'position' => 'bottom center',
												  'attachment'=>'scroll' ),
						'section_title_typography'=> array('size'  => '44px','face'  => '','style' => 'normal','color' => '#222', 'weight'=>'600' ),
						'section_content_typography'=> array('size'  => '16px','face'  => '','style' => 'normal','color' => '#222' ),
						'parallax_scrolling'=>'no',
						'section_css_class'=>'',
						'section_padding'=>'50px 0',
						'text_align'=>'left',
						'section_content'=>'
            <div class="content-ct">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
<div><form class="" action="" method="post">
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
		    <label for="exampleInputName">Name<span class="text-danger">*</span></label>
		    <input  id="name" class="form-control" tabindex="1" name="name" size="22" type="text" value="" placeholder="Name" />
		  </div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="exampleInputEmail">Email address<span class="text-danger">*</span></label>
		    <input id="email" class="form-control" tabindex="2" name="email" size="22" type="text" value="" placeholder="Email" />
		</div>
	</div>
</div>
	<div class="form-group">
	    <label for="exampleInputMessage">Message<span class="text-danger">*</span></label>
	    <textarea id="message" class="form-control" tabindex="4" cols="39" name="x-message" rows="7" placeholder="Message"></textarea>
</div>

  

<input id="sendto" name="sendto" type="hidden" value="YOUR EMAIL HERE(Default Admin Email)" />
<input id="submit" name="submit" type="button" value="SEND" /></form></div></div>',
			
						),
				  
				  );
 

 if(isset($section_num) && is_numeric($section_num ) && $section_num >0):
 for( $i = 0; $i < $section_num ;$i++){
	 
	 if( $section_1_content == 'slider' && $i == 0 ){
		 
		echo onetone_get_default_slider(); 
		 
		 }else{
 
 $section_title       = onetone_option( 'section_title_'.$i ,isset($default_options[$i]['section_title'])?$default_options[$i]['section_title']:'');
 $section_menu        = onetone_option( 'menu_title_'.$i ,isset($default_options[$i]['menu_title'])?$default_options[$i]['menu_title']:'');
 $section_background  = onetone_option( 'section_background_'.$i,isset($default_options[$i]['section_background'])?$default_options[$i]['section_background']:'' );
 $parallax_scrolling  = onetone_option( 'parallax_scrolling_'.$i,isset($default_options[$i]['parallax_scrolling'])?$default_options[$i]['parallax_scrolling']:'' );
 $section_css_class   = onetone_option( 'section_css_class_'.$i ,isset($default_options[$i]['section_css_class'])?$default_options[$i]['section_css_class']:'');
 $section_content     = onetone_option( 'section_content_'.$i ,isset($default_options[$i]['section_content'])?$default_options[$i]['section_content']:onetone_option( 'sction_content_'.$i ));

 $section_slug        = onetone_option( 'menu_slug_'.$i ,isset($default_options[$i]['menu_slug'])?$default_options[$i]['menu_slug']:'');
 $section_padding     = onetone_option( 'section_padding_'.$i ,isset($default_options[$i]['section_padding'])?$default_options[$i]['section_padding']:'50px 0');
 $text_align          = onetone_option( 'text_align_'.$i,isset($default_options[$i]['text_align'])?$default_options[$i]['text_align']:'');
 
 
 
 $section_title_typography    = onetone_option( 'section_title_typography_'.$i,isset($default_options[$i]['section_title_typography'])?$default_options[$i]['section_title_typography']:'');
 $title_typography            = onetone_get_typography( $section_title_typography );
 
 $section_content_typography  = onetone_option( 'section_content_typography_'.$i,isset($default_options[$i]['section_content_typography'])?$default_options[$i]['section_content_typography']:'');
 $content_typography          = onetone_get_typography( $section_content_typography );
 

 if( $section_slug )
  $section_slug =  sanitize_title($section_slug );
  else
  $section_slug = 'section-'.($i+1);
  
 $section_css = '';
 $background  = onetone_get_background($section_background);
 
 $sanitize_title = $section_slug; 
 
 $css_class = isset($section_css_class)?$section_css_class:"";
 
  $background_video = '';
  $video_wrap = '';
  $video_enable = 0;
  $detect = new Mobile_Detect;
  if($section_background_video != "" && $video_background_section == ($i+1) && !$detect->isMobile() && !$detect->isTablet() ){
	$video_enable = 1;  
  }
  
  if( $parallax_scrolling == "yes" ){
	 $css_class  .= ' onetone-parallax';
	 $section_css .= 'background-attachment:fixed;background-position:50% 0;background-repeat:no-repeat;';
	 }
  
 if($video_enable == 1){

    $background_video  = array("videoId"=>$section_background_video,"mute"=>false,"start"=>3 ,"container" =>"section.onetone-".$sanitize_title,"playerid"=>$sanitize_title);
    $video_section_item = "section.onetone-".$sanitize_title;
    $video_array[]  =  array("options"=>$background_video,  "video_section_item"=>$video_section_item );
	$background = "";
	$video_wrap = "video-section";
	}
	$section_css .= $background;
	if( $section_padding )
    $section_css .= 'padding:'.$section_padding.';';
	
	$section_content_css = '';
	$section_title_css = 'section#'.$section_slug.' .section-title{text-align:center;}';
	if( $title_typography )
	$section_title_css .= 'section#'.$section_slug.' .section-title{'.$title_typography.' }';
	
	if( $content_typography )
	$section_content_css .= 'section#'.$section_slug.' .home-section-content,section#'.$section_slug.' .home-section-content p{'.$content_typography.'}';
	
	if( $text_align )
    $section_content_css .= 'section#'.$section_slug.' .home-section-content{text-align:'.$text_align.'}';
	
	$section_content_css .=  'section#'.$section_slug.' {'.$section_css.'}';

 ?>
 <style><?php echo $section_title_css;?> <?php echo $section_content_css;?></style>
            <section id="<?php echo $section_slug;?>" class="section <?php echo esc_attr($css_class);?> onetone-<?php echo $sanitize_title;?> <?php echo $video_wrap;?>"  >
              <div class="home-container container" >
                <?php if($section_title){?>
                <h1 class="section-title"><?php echo esc_attr($section_title);?></h1>
                <?php } ?>
                <div class="home-section-content">
                <?php echo do_shortcode(wp_kses( $section_content, $allowedposttags  ));?> 
                </div>
                </div>
              <div class="clear"></div>
              <?php 
	  if( $video_enable == 1 && $video_controls == 1 ){
		   $background = "";
		if(  !$detect->isMobile() && !$detect->isTablet() ){
		
	  echo '<p class="black-65" id="video-controls">
		  <a class="tubular-play" href="#"><i class="fa fa-play "></i></a>&nbsp; &nbsp;&nbsp;&nbsp;
		  <a class="tubular-pause" href="#"><i class="fa fa-pause "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		  <a class="tubular-volume-up" href="#"><i class="fa fa-volume-up "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		  <a class="tubular-volume-down" href="#"><i class="fa fa-volume-off "></i></a> 
	  </p>';
		}
	 }
	 ?>
            </section>
            <?php
 }
 }
  if($video_array !="" && $video_array != NULL ){
  wp_localize_script( 'onetone-bigvideo', 'onetone_bigvideo',$video_array);
  
		}

 endif;
 ?>
            <div class="clear"></div>
          </article>
        </section>
      </div>
    </div>
  </div>
</div>
<?php endif;?>
<?php get_footer();?>
