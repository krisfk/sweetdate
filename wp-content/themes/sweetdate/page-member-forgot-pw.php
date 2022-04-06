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
session_start();

?>
<div class="container mt-3">


    <div class="relative">
        <h2 class="title-type-pink-line">忘記密碼</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>



    <div class="main-content mt-4">


        <div class="error-msg mb-4 text-center pink"></div>

        <form action="" method="post" class="login-form">
            <table>
                <tr>
                    <td class="text-end"><label for="login-email"> 登記電郵：</label></td>
                    <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
                </tr>

                <tr>
                    <td>


                    </td>

                    <td class="text-end">
                        <input type="submit" class="form-submit-btn" value="重發密碼">
                    </td>
                </tr>
            </table>
        </form>




    </div>



</div>




</div>
<script type="text/javascript">
$(function() {

    $('form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: '<?php echo get_site_url();?>/wp-json/api/recover-pw',
            data: {
                login_email: $('#login-email').val()
            },
            dataType: "json",
            success: function(response) {

                if (response.status == -1) {
                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html('這個登入電郵沒有註冊。');
                } else {
                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html('登入資料已發送至您的電子郵箱。');
                }


            }
        })
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