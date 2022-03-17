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

    <h2 class="title-type-pink-line">Q & A</h2>


    <div class="main-content mt-4">



        <div>

            <a href="javascript:void(0);" class="qt position-relative">

                <table>
                    <tr>
                        <td class="pe-2">
                            <span class="symbol">Q</span>
                        </td>
                        <td>問題問題問題問題問題問題問題問題問題問題問題問題問題</td>
                    </tr>
                </table>


                <img class="arrow" src="<?php echo get_template_directory_uri()?>/assets/images/down-arrow.png" alt="">
            </a>

            <div class="ans position-relative">

                <table>
                    <tr>
                        <td class="pe-2">
                            <span class="symbol">A</span>
                        </td>
                        <td>答案答案答案答案答案答案答案答案答案答案答案答案答案</td>
                    </tr>
                </table>



            </div>
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