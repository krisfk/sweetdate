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
        <h2 class="title-type-pink-line">聯絡我們</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>

    <div class="main-content mt-4">


        <div class="text-center mb-4">WhatsApp 6692 9252</div>

        <?php
        if($_POST)
        {
                $nickname=$_POST['nickname'];
                $email = $_POST['email'];
                $msg_title= $_POST['msg-title'];
                $msg_content = $_POST['msg-content'];

                $to='krisfk@gmail.com';
                $subject='客人('.$nickname.') 查詢';

                $message='剛收到有位客人的查詢：<br><br>稱呼：<br>'.$nickname.'<br><br>聯絡電郵：<br>'.$email.'<br><br>標題：<br>'.$subject.'<br><br>內容：<br>'.$msg_content;
                wp_mail( $to, $subject, $message);


                
        }
        ?>
        <form action="" class="contact-form" method="post">
            <table>
                <tr>
                    <td class="text-end">
                        <label for="nickname">稱呼：*</label>

                    </td>
                    <td><input required name="nickname" id="nickname" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td class="text-end">
                        <label for="email">聯絡電郵：*</label>
                    </td>
                    <td><input required name="email" id="email" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td class="text-end">
                        <label for="msg-title">標題：*</label>
                    </td>
                    <td><input name="msg-title" required id="msg-title" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td class="text-end">
                        <label for="msg-content">內容：*</label>
                    </td>
                    <td><textarea name="msg-content" required id="msg-content" class="form-control" name="" rows="4"
                            cols="50">
</textarea></td>
                </tr>








                <tr>
                    <td colspan="2" class="text-end">

                        <input type="submit" value="送出表格" class="form-submit-btn">
                    </td>
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