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


if($_POST)
{
    $login_email=$_POST['login_email'];
    $login_password=$_POST['login_password'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $tel = $_POST['tel'];
    $like_food = $_POST['like_food'];
    $dislike_food = $_POST['dislike_food'];
    
    $post_id = wp_insert_post(array (
        'post_type' => 'member',
        'post_title' => '',
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));
    
    if ($post_id) {

        $tutor_id = 'T'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);
        add_post_meta($post_id, 'tutor_id', $tutor_id);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'enable', 'no');
    }
}

?>
<div class="container mt-3">



    <div class="relative">
        <h2 class="title-type-pink-line">會員註冊</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>

    <div class="main-content mt-4">

        <div class="error-msg mb-4 text-center pink"></div>
        <form action="" method="post" class="login-form">
            <table>
                <tr>
                    <td class="text-end"><label for="login-email"> 登記電郵：*</label></td>
                    <td><input required type="text" class="form-control" id="login-email" name="login-email"></td>
                </tr>
                <tr>
                    <td class="text-end"><label for="login-password">登入密碼：*</label> </td>
                    <td><input required type="password" class="form-control" id="login-password" name="login-password">
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="login-password-again">再次輸入登入密碼：*</label> </td>
                    <td><input required type="password" class="form-control" id="login-password-again"
                            name="login-password-again">
                    </td>
                </tr>

                <tr>
                    <td class="text-end">姓別：*</td>
                    <td>
                        <label class="me-2"><input required class="me-1" type="radio" name="gender" value="男">男</label>
                        <label class="me-2"><input class="me-1" type="radio" name="gender" value="女">女</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nickname">稱呼：*</label>
                    </td>
                    <td>
                        <input required id="nickname" name="nickname" class="form-control" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="first-name">英文名(e.g.Jacky)：*</label>
                    </td>
                    <td>

                        <input id="first-name" class="form-control" name="first-name" type="text">
                    </td>
                </tr>
                <tr>
                    <td><label for="last-name">姓：*</label></td>
                    <td>
                        <input id="last-name" class="form-control" name="last-name" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="age">年齡：*</label>
                    </td>
                    <td>
                        <select id="age" name="age" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option value="20-29">20-29</option>
                            <option value="30-34">30-34</option>
                            <option value="35-39">35-39</option>
                            <option value="40或以上">40或以上</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="tel">聯絡電話：*</label></td>
                    <td><input required type="text" class="form-control" id="tel" name="tel"></td>
                </tr>

                <tr>

                    <td class=" text-end">
                        <label for="msg-content">最喜歡吃的食物：*</label>
                    </td>
                    <td>
                        <select required id="like-food" name="like-food" class="form-select" aria-label="">
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
                        <label for="msg-content">最不喜歡吃的食物：*</label>
                    </td>
                    <td>

                        <select required id="like-food" name="like-food" class="form-select" aria-label="">
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

                        <input type="submit" value="送出表格" class="form-submit-btn">
                    </td>
                </tr>

            </table>
        </form>




    </div>



</div>




</div>
<script type="text/javascript">
$(function() {

    $('form').submit(function() {

        var login_email = $('#login-email').val();
        var login_password = $('#login-password').val();
        var login_password_again = $('#login-password-again').val();

        var error_txt = '';

        // error_txt = '';
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(login_email))) {
            error_txt +=
                '電郵格式不正確</br>';
        }

        if (!login_password) {
            error_txt +=
                '請輸入登入密碼</br>';
        }

        if (login_password != login_password_again) {
            error_txt +=
                '確認登入密碼輸入不相同</br>';
        }

        if (error_txt) {
            $('.error-msg').html(error_txt);
            return false;
        } else {
            return true;
        }






        // var gender = $('#gender').val();


    })

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