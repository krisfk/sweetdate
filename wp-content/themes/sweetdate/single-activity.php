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



    <div class="position-relative">
        <h2 class="title-type-pink-line"><?php echo get_field('activity_title')?></h2>

        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>

    </div>



    <div class="main-content mt-4">

        <div class="text-center"> <img class="activity-detail-main-img"
                src="<?php echo wp_get_attachment_image_url(get_field('activity_main_image'),'full');?>" alt="">
        </div>

        <div>
            <ul class="news-act-info-ul">
                <li>
                    <div class="d-table">
                        <div class="d-table-cell pe-1">
                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-cal-icon.png"
                                alt="">
                        </div>
                        <div class="d-table-cell">
                            <?php echo get_field('activity_date');?></div>
                    </div>
                </li>
                <li>
                    <div class="d-table">
                        <div class="d-table-cell pe-1">
                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-clock-icon.png"
                                alt="">
                        </div>
                        <div class="d-table-cell">
                            <?php echo get_field('activity_time');?></div>
                    </div>
                </li>
                <li>
                    <div class="d-table">
                        <div class="d-table-cell pe-1">
                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/pin-icon.png" alt="">
                        </div>
                        <div class="d-table-cell">

                            <?php echo get_field('activity_place');?></div>
                    </div>
                </li>
            </ul>



        </div>


    </div>



</div>




</div>



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