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
    $login_email=$_POST['login-email'];
    $login_password=$_POST['login-password'];
    $gender=$_POST['gender'];
    $nickname=$_POST['nickname'];
    $first_name=$_POST['first-name'];
    $last_name=$_POST['last-name'];
    $age=$_POST['age'];
    $tel = $_POST['tel'];
    $like_food = $_POST['like_food'];
    $dislike_food = $_POST['dislike_food'];
    $member_id = 'M'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);

    $post_id = wp_insert_post(array (
        'post_type' => 'member',
        'post_title' => $member_id.'('.$first_name.' '.$last_name.')('.$nickname.')',
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));
    
    if ($post_id) {
        add_post_meta($post_id, 'member_id', $member_id);
        add_post_meta($post_id, 'login_email', $login_email);
        add_post_meta($post_id, 'login_password', $login_password);
        add_post_meta($post_id, 'gender', $gender);
        add_post_meta($post_id, 'nickname', $nickname);
        add_post_meta($post_id, 'first_name', $first_name);
        add_post_meta($post_id, 'last_name', $last_name);
        add_post_meta($post_id, 'age', $age);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'like_food', $like_food);
        add_post_meta($post_id, 'dislike_food', $dislike_food);

        //password no problem
        
       
       ?>
<script type="text/javascript">
$(function() {
    $('.login-form').html('會員註冊成功，三秒後自動登入。');
})
</script>
<?php
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
                    <td><input value="<?php echo $_POST['login-email']?>" required type="text" class="form-control"
                            id="login-email" name="login-email"></td>
                </tr>
                <tr>
                    <td class="text-end"><label for="login-password">登入密碼：*</label> </td>
                    <td><input value="<?php echo $_POST['login-password']?>" required type="password"
                            class="form-control" id="login-password" name="login-password">
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="login-password-again">再次輸入登入密碼：*</label> </td>
                    <td><input value="<?php echo $_POST['login-password-again'];?>" required type="password"
                            class="form-control" id="login-password-again" name="login-password-again">
                    </td>
                </tr>

                <tr>
                    <td class="text-end">姓別：*</td>
                    <td>
                        <label class="me-2"><input <?php echo $_POST['gender']=='男' ? 'checked' :'';?> required
                                class="me-1" type="radio" name="gender" value="男">男</label>
                        <label class="me-2"><input <?php echo $_POST['gender']=='女' ? 'checked' :'';?> class="me-1"
                                type="radio" name="gender" value="女">女</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nickname">稱呼：*</label>
                    </td>
                    <td>
                        <input value="<?php echo $_POST['nickname'];?>" required id="nickname" name="nickname"
                            class="form-control" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="first-name">英文名(e.g.Jacky)：*</label>
                    </td>
                    <td>

                        <input value="<?php echo $_POST['first-name'];?>" required id="first-name" class="form-control"
                            name="first-name" type="text">
                    </td>
                </tr>
                <tr>
                    <td><label for="last-name">姓：*</label></td>
                    <td>
                        <input value="<?php echo $_POST['last-name'];?>" required id="last-name" class="form-control"
                            name="last-name" type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="age">年齡：*</label>
                    </td>
                    <td>
                        <select required id="age" name="age" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option <?php echo $_POST['age']=='20-29' ? 'selected' :'';?> value="20-29">20-29</option>
                            <option <?php echo $_POST['age']=='30-34' ? 'selected' :'';?> value="30-34">30-34</option>
                            <option <?php echo $_POST['age']=='35-39' ? 'selected' :'';?> value="35-39">35-39</option>
                            <option <?php echo $_POST['age']=='40或以上' ? 'selected' :'';?> value="40或以上">40或以上</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-end"><label for="tel">聯絡電話：*</label></td>
                    <td><input value="<?php echo $_POST['tel'];?>" required type="text" class="form-control" id="tel"
                            name="tel"></td>
                </tr>

                <tr>

                    <td class=" text-end">
                        <label for="like-food">最喜歡吃的食物：*</label>
                    </td>
                    <td>
                        <select required id="like-food" name="like-food" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option <?php echo $_POST['like-food']=='牛' ? 'selected' :'';?> value="牛">牛</option>
                            <option <?php echo $_POST['like-food']=='雞' ? 'selected' :'';?> value="雞">雞</option>
                            <option <?php echo $_POST['like-food']=='羊' ? 'selected' :'';?> value="羊">羊</option>
                            <option <?php echo $_POST['like-food']=='豬' ? 'selected' :'';?> value="豬">豬</option>
                            <option <?php echo $_POST['like-food']=='魚' ? 'selected' :'';?> value="魚">魚</option>
                        </select>
                    </td>
                </tr>
                <tr>

                    <td class=" text-end">
                        <label for="dislike-food">最不喜歡吃的食物：*</label>
                    </td>
                    <td>

                        <select required id="dislike-food" name="dislike-food" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option <?php echo $_POST['dislike-food']=='牛' ? 'selected' :'';?> value="牛">牛</option>
                            <option <?php echo $_POST['dislike-food']=='雞' ? 'selected' :'';?> value="雞">雞</option>
                            <option <?php echo $_POST['dislike-food']=='羊' ? 'selected' :'';?> value="羊">羊</option>
                            <option <?php echo $_POST['dislike-food']=='豬' ? 'selected' :'';?> value="豬">豬</option>
                            <option <?php echo $_POST['dislike-food']=='魚' ? 'selected' :'';?> value="魚">魚</option>
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