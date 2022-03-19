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

    <h2 class="title-type-pink-line">會員登入</h2>


    <div class="main-content mt-4">


        <table>
            <tr>
                <td><label for="login-email"> 登記電郵</label></td>
                <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
            </tr>
            <tr>
                <td><label for="login-password">登入密碼</label> </td>
                <td><input type="text" class="form-control" id="login-password" name="login-password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit-btn" value="登入"></td>
            </tr>
        </table>





    </div>



</div>




</div>
<script type="text/javascript">
$(function() {

    $('.qt').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next('.ans').slideDown(200);
        } else {
            $(this).next('.ans').slideUp(200);

        }
    });
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