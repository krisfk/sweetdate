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
<div class="container">


    <div class="row">

        <div class="col-6">

            <img class="w-100" src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-img.jpg"
                alt="">

            <ul class="thumbanil-slide-ul">
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
            </ul>

        </div>

        <div class="col-6">



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