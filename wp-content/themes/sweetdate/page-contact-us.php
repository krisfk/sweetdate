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
                    <td>
                        <label for="nickname">稱呼：</label>

                    </td>
                    <td><input id="nickname" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td>
                        <label for="email">電郵：</label>
                    </td>
                    <td><input id="email" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td>
                        <label for="msg-title">標題：</label>
                    </td>
                    <td><input id="msg-title" type="text" class="form-control"></td>
                </tr>
                <tr>

                    <td class="align-top pt-1">
                        <label for="msg-content">內容：</label>
                    </td>
                    <td><textarea id="msg-content" class="form-control" name="" rows="4" cols="50">
</textarea></td>
                </tr>


                <tr>

                    <td class="align-top pt-1">
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

                    <td class="align-top pt-1">
                        <label for="msg-content">不喜歡吃的食物：</label>
                    </td>
                    <td>


                    <td>
                        <select id="dislike-food" name="dislike-food" class="form-select" aria-label="">
                            <option value="" selected="">選擇</option>
                            <option value="牛">牛</option>
                            <option value="雞">雞</option>
                            <option value="羊">羊</option>
                            <option value="豬">豬</option>
                            <option value="魚">魚</option>
                        </select>
                    </td>
                    </td>
                </tr>



                <tr>

                    <td class="align-top pt-1">
                        <label for="msg-content">內容：</label>
                    </td>
                    <td><textarea id="msg-content" class="form-control" name="" rows="4" cols="50">
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