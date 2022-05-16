<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="container mt-4">


    <div class="row gx-5">

        <?php
        $content_type=[];
        $img_arr=[];
        $img_arr2=[];

        
if( have_rows('carousel') ){

    while( have_rows('carousel') ) { the_row();
        array_push($content_type, get_sub_field('content_type'));
        array_push($img_arr,wp_get_attachment_image_url(get_sub_field('banner_img'),'full') );
        array_push($img_arr2,wp_get_attachment_image_url(get_sub_field('banner_thumbnail'),'full'));
    }
}

?>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-5">

            <div class="banner-container position-relative">
                <img class="w-100 opacity-0"
                    src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/video-dummy-img.jpg" alt="">

                <?php
                    
                    for($i=0;$i<count($img_arr);$i++)
                    {

                        if($content_type[$i]=='image')
                        {
                            ?>

                <div class="banner-content-div position-absolute top-0 start-0 w-100 h-100">
                    <img class="banner-img " src="<?php echo $img_arr[$i];?>" alt="">
                </div>
                <?php
                        }
                        

                        if($content_type[$i]=='video')
                        {
                            ?>

                <div class="banner-content-div position-absolute top-0 start-0 w-100 h-100">
                    <iframe class="video-iframe" src="https://www.youtube.com/embed/_nJSFrveMZg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <?php
                        }
                        ?>


                <?php
                    }

                    ?>

            </div>
            <!--  -->
            <!-- <img class=" w-100" src="<?php echo $img_arr[$i];?>" alt=""> -->


            <ul class="thumbanil-slide-ul mt-2">
                <!-- _nJSFrveMZg -->
                <!-- A7ZUt_2jrxg -->
                <?php
            
            for($i=0;$i<count($img_arr2);$i++)
            {
              ?>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100" src="<?php echo $img_arr2[$i];?>" alt="">
                    </a>

                </li>
                <?php  
            }
            ?>




            </ul>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12  ">

            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-1.png" alt="">
                        </div>
                        <div class="d-table-cell  align-middle">

                            <h2 class="d-inline-block m-0 ps-2">
                                關於蜜遇
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <a href="<?php echo get_site_url();?>/about-us" class="more-btn">詳細簡介 〉</a>
                </div>
            </div>

            <div class="mt-4">
                <?php
               echo get_field('brief_about_us');
               ?>
            </div>


            <div class="sep-line mt-4 mb-4"></div>

            <div class="row align-items-center">
                <div class="col-6">

                    <div class="d-table">
                        <div class="d-table-cell">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-2.png" alt="">
                        </div>
                        <div class="d-table-cell  align-middle">

                            <h2 class="d-inline-block m-0  ps-2">
                                最新資訊
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <a href="<?php echo get_site_url();?>/news" class="more-btn">更多資訊 〉</a>
                </div>
            </div>
            <div class="mt-4"> <?php
               echo get_field('brief_news');
            ?></div>

        </div>

    </div>

    <div class="successful-story-container mt-5">

        <div class="position-relative">
            <h2 class="title-type-pink-line">成功故事</h2>

            <div class="text-center">
                <div class="title-pink-line"></div>
            </div>

        </div>


        <div class="successful-story-carousel mt-4">
            <?php
      
      $query_args = array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'category__in' => array(4)

       );
      
      // The Query
      $the_query = new WP_Query( $query_args );
      
      // The Loop
      if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            //   echo 1;
            $the_query->the_post();
            ?>
            <div class="s-case-div">
                <a href="<?php echo get_permalink();?>" class="s-case-div-a"><img
                        src="<?php echo wp_get_attachment_image_url(get_field('article_main_image'),'full');?>" alt="">
                    <div class="mt-4">
                        <h2><?php echo get_the_title();?></h2>

                        <div><?php echo get_field('article_short_content');?></div>

                        <!-- 你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。 -->

                    </div>
                </a>
            </div>

            <?php
            // echo 1;
          }
        }

        wp_reset_postdata();

        
              ?>



        </div>
    </div>

    <div class="news-act-container mt-5">

        <div class=" gx-0 row justify-content-center">
            <div class="position-relative col-10">
                <h2 class="title-type-pink-line">最新活動</h2>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>

                <a href="<?php echo get_site_url();?>/new-activities"
                    class="more-btn position-absolute top-0 end-0">過往活動
                    〉</a>

            </div>
        </div>

        <div class="row mt-3 justify-content-center">

            <?php
      
    $query_args = array(
        'post_type' => 'activity',
        'posts_per_page' => -1
     );
    
    // The Query
    $the_query = new WP_Query( $query_args );
    
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12  mb-2">

                <div class="s-case-div-a"><img
                        src="<?php echo wp_get_attachment_image_url(get_field('activity_main_image'),'full');?>" alt="">
                    <div class="mt-4">


                        <h2><?php echo get_field('activity_title');?></h2>


                        <div>



                            <?php
                            $date_arr = [];
                            $time_arr=[];
                        while(have_rows('activity_date_and_time') ){ the_row(); 
                            array_push($date_arr, get_sub_field('activity_date'));
                            array_push($time_arr, get_sub_field('activity_time'));

                       }

                       
                       ?>


                            <ul class="news-act-info-ul">
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/small-cal-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">
                                            <?php echo get_field('activity_date');?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/small-clock-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">
                                            <?php echo get_field('activity_time');?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/pin-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">

                                            <?php echo get_field('activity_place');?></div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="mt-3">

                            <?php echo get_field('activity_short_content');?>

                        </div>

                        <div>

                            <a class="entry-person-btn" href="<?php echo get_permalink();?>?person=1">
                                $<?php echo get_field('price');?> <br>
                                一人參加
                                <img class="btn-right-arrow"
                                    src="<?php echo get_template_directory_uri()?>/assets/images/right-arrow.png"
                                    alt="">
                            </a>
                            <a class="entry-person-btn" href="<?php echo get_permalink();?>?person=2">
                                $<?php echo get_field('two_people_discount_price');?> <br>
                                二人同行(優惠價)
                                <img class="btn-right-arrow"
                                    src="<?php echo get_template_directory_uri()?>/assets/images/right-arrow.png"
                                    alt="">
                            </a>
                        </div>

                        <div class="gender-div male row align-items-center gx-0 mt-3">

                            <div class="col-lg-2 col-md-2 col-sm-3 col-3  text-center pt-3 pb-3">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png" alt="">
                            </div>

                            <div class=" col-lg-10 col-md-10 col-sm-9 col-9  pt-3 pe-2 pb-3">
                                <div class="row">

                                    <div class="col-6">名額 : <?php echo get_field('male_quota');?>人
                                        (<?php echo get_field('male_age_range');?>歲)</div>
                                    <div class="col-6">餘額 : <?php echo get_field('male_remain_quota');?>人</div>
                                    <div class="col-12 mt-1"><?php echo get_field('male_requirement');?></div>
                                </div>

                            </div>


                        </div>

                        <div class="gender-div female row align-items-center gx-0 mt-1">


                            <div class="col-lg-2 col-md-2 col-sm-3 col-3  text-center pt-3 pb-3">

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/f-icon.png" alt="">
                            </div>

                            <div class=" col-lg-10 col-md-10 col-sm-9 col-9  pt-3 pe-2 pb-3">
                                <div class="row">

                                    <div class="col-6">名額 : <?php echo get_field('female_quota');?>人
                                        (<?php echo get_field('female_age_range');?>歲)</div>
                                    <div class="col-6">餘額 : <?php echo get_field('female_remain_quota');?>人</div>
                                    <div class="col-12 mt-1"><?php echo get_field('female_requirement');?></div>
                                </div>

                            </div>


                        </div>





                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
    }
            
            ?>




        </div>

    </div>


</div>




</div>



<script type="text/javascript">
$(function() {

    $('.banner-content-div').fadeOut(0);

    $('.banner-content-div').eq(0).fadeIn(0);
    // successful - story - carousel

    $('.thumbanil-slide-ul li a').click(function() {
        var idx = $(this).parent('li').index();

        $('.banner-content-div').fadeOut(0);

        $('.banner-content-div').eq(idx).fadeIn(500);

        // alert(idx);


    })

    $('.successful-story-carousel').slick({
        infinite: true,
        // slidesToShow: 3,
        // slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

})
// successful-story-carousel
</script>
<?php
/* Start the Loop */
// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'template-parts/content/content-page' );

// 	// If comments are open or there is at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}
// endwhile; // End of the loop.

get_footer();