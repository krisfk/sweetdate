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
<div class="container mt-3">



    <div class="relative">
        <h2 class="title-type-pink-line">最新活動</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>



    <div class="main-content-2 mt-4">





        <div class="row mt-3">

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

            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-2">

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

                            <div class="col-lg-2 col-md-2 col-sm-3 col-3 text-center pt-3 pb-3">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png" alt="">
                            </div>

                            <div class="col-lg-10 col-md-10 col-sm-9 col-9 pt-3 pe-2 pb-3">
                                <div class="row">

                                    <div class="col-6">名額 : <?php echo get_field('male_quota');?>人
                                        (<?php echo get_field('male_age_range');?>歲)</div>
                                    <div class="col-6">餘額 : <?php echo get_field('male_remain_quota');?>人</div>
                                    <div class="col-12 mt-1"><?php echo get_field('male_requirement');?></div>
                                </div>

                            </div>


                        </div>

                        <div class="gender-div female row align-items-center gx-0 mt-1">

                            <div class="col-lg-2 col-md-2 col-sm-3 col-3 text-center pt-3 pb-3">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/f-icon.png" alt="">
                            </div>

                            <div class="col-lg-10 col-md-10 col-sm-9 col-9 pt-3 pe-2 pb-3">
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




</div>
<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $('.filter-ul li a').removeClass('active');
        $(this).addClass('active');
    })
})
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