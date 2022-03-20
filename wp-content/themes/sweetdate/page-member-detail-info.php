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
        <h2 class="title-type-pink-line">詳細會員資料</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>

    <div class="main-content mt-4">


        <h2 class="text-center mb-3">登入資料</h2>
        <form action="" class="member-login-info-form mb-5">
            <table>
                <tr>
                    <td class="text-end"><label for="login-email"> 登記電郵：</label></td>
                    <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
                </tr>
                <tr>
                    <td class="text-end"><label for="old-login-password">舊登入密碼：</label> </td>
                    <td><input type="password" class="form-control" id="old-login-password" name="old-login-password">
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="new-login-password">新登入密碼：</label> </td>
                    <td><input type="password" class="form-control" id="new-login-password" name="new-login-password">
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="new-login-password">再次輸入新登入密碼：</label> </td>
                    <td><input type="password" class="form-control" id="new-login-password" name="new-login-password">
                    </td>
                </tr>





                <tr>
                    <td></td>
                    <td class="text-end">

                        <input type="submit" value="更改登入資料" class="form-submit-btn">
                    </td>
                </tr>


            </table>
        </form>

        <h2 class="text-center mb-3">詳細會員資料</h2>


        <form class="member-further-info-form">
            <table class="">

                <tr>
                    <td class="text-end">姓別：</td>
                    <td>
                        <label class="me-2"><input class="me-1" type="radio" name="gender" value="男">男</label>
                        <label class="me-2"><input class="me-1" type="radio" name="gender" value="女">女</label>
                    </td>
                </tr>

                <tr>

                    <td class=" text-end">
                        <label for="msg-content">喜歡吃的食物：</label>
                    </td>
                    <td>
                        <select id="like-food" name="like-food" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option value="牛">牛</option>
                            <option value="雞">雞</option>
                            <option value="羊">羊</option>
                            <option value="豬">豬</option>
                            <option value="魚">魚</option>
                        </select>
                    </td>
                </tr>
                <tr>

                    <td class=" text-end">
                        <label for="msg-content">不喜歡吃的食物：</label>
                    </td>
                    <td>

                        <select id="like-food" name="like-food" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option value="牛">牛</option>
                            <option value="雞">雞</option>
                            <option value="羊">羊</option>
                            <option value="豬">豬</option>
                            <option value="魚">魚</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-end">

                        <input type="submit" value="更新會員資料" class="form-submit-btn">
                    </td>
                </tr>

            </table>
        </form>




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