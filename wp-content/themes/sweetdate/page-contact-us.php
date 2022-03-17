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

    <h2 class="title-type-pink-line">聯絡我們</h2>


    <div class="main-content mt-4">



        <form action="" class="contact-form" method="post">
            <table>
                <tr>
                    <td>稱呼</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td>電郵</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td>標題</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td class="align-top pt-1">內容</td>
                    <td><textarea class="form-control" name="" rows="4" cols="50">
</textarea></td>
                </tr>
                <tr>
                    <td colspan="2">fds</td>
                </tr>

            </table>

        </form>




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