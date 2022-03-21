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
    <ul class="filter-ul mt-4">
        <li>
            <a class="active" href="javascript:void(0);" rel="login-form">登入資料
            </a>
        </li>
        <li>
            <a class="" href="javascript:void(0);" rel="detail-form">個人資料及配對要求
            </a>
        </li>



    </ul>


    <div class="main-content mt-5">


        <div class="login-form form-div">
            <form action="" class="member-login-info-form mb-5">
                <table>
                    <tr>
                        <td colspan="2">
                            <h2 class="text-center m-0">登入資料</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="login-email"> 登記電郵：</label></td>
                        <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="old-login-password">舊登入密碼：</label> </td>
                        <td><input type="password" class="form-control" id="old-login-password"
                                name="old-login-password">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="new-login-password">新登入密碼：</label> </td>
                        <td><input type="password" class="form-control" id="new-login-password"
                                name="new-login-password">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="new-login-password">再次輸入新登入密碼：</label> </td>
                        <td><input type="password" class="form-control" id="new-login-password"
                                name="new-login-password">
                        </td>
                    </tr>





                    <tr>
                        <td></td>
                        <td class="text-end">

                            <input type="submit" value="更新登入資料" class="form-submit-btn">
                        </td>
                    </tr>


                </table>
            </form>
        </div>


        <div class="detail-form form-div">


            <form class="member-further-info-form">
                <table class="">

                    <tr>
                        <td colspan="2">
                            <h2 class="text-center mb-2">個人資料</h2>
                            <div class=" text-center small">(請閣下細心提供資料, 愈精準, 找到合適伴侶的機率愈高!)</div>


                        </td>
                    </tr>

                    <tr>
                        <td class="text-end">姓別：</td>
                        <td>
                            <label class="me-2"><input class="me-1" type="radio" name="gender" value="男">男</label>
                            <label class="me-2"><input class="me-1" type="radio" name="gender" value="女">女</label>
                        </td>
                    </tr>

                    <tr>

                        <td class=" text-end">
                            <label for="like-food">最喜歡吃的食物：</label>
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
                            <label for="dislike-food">最不喜歡吃的食物：</label>
                        </td>
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
                    </tr>
                    <tr>
                        <td>
                            <label for="first-name">英文名* (e.g.Jacky)：*</label>
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
                        <td>
                            <label for="education-level">教育程度：*</label>


                        </td>
                        <td>

                            <select id="education-level" name="education-level" class="form-select" aria-label="">
                                <option value="" selected="">選擇</option>
                                <option value="小學程度">小學程度</option>
                                <option value="中學程度">中學程度</option>
                                <option value="大學程度">大學程度</option>
                                <option value="碩士">碩士</option>
                                <option value="博士">博士</option>

                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="occupation">職業</label>

                        </td>
                        <td>

                            <select id="occupation" name="occupation" class="form-select">
                                <option value="教師">教師</option>
                                <option value="研究員">研究員</option>
                                <option value="編輯">編輯</option>
                                <option value="翻譯">翻譯</option>
                                <option value="記者">記者</option>
                                <option value="作家">作家</option>
                                <option value="文化/美術/文藝工作者">文化/美術/文藝工作者</option>
                                <option value="教練">教練</option>
                                <option value="運動員">運動員</option>
                                <option value="工程師">工程師</option>
                                <option value="技術員">技術員</option>
                                <option value="會計">會計</option>
                                <option value="企業管理人員">企業管理人員</option>
                                <option value="廚師">廚師</option>
                                <option value="農藝師">農藝師</option>
                                <option value="工人">工人</option>
                                <option value="農民">農民</option>
                                <option value="牧民">牧民</option>
                                <option value="漁民">漁民</option>
                                <option value="醫生">醫生</option>
                                <option value="藥劑師">藥劑師</option>
                                <option value="護士">護士</option>
                                <option value="機長">機長</option>
                                <option value="飛行員">飛行員</option>
                                <option value="船長">船長</option>
                                <option value="乘務員">乘務員</option>
                                <option value="公務員">公務員</option>
                                <option value="服務員">服務員</option>
                                <option value="律師">律師</option>
                                <option value="商人">商人</option>
                                <option value="宗教職業者">宗教職業者</option>
                                <option value="家庭婦女">家庭婦女</option>
                                <option value="退休">退休</option>
                                <option value="無業">無業</option>
                                <option value="學生">學生</option>
                                <option value="兒童">兒童</option>
                                <option value="職員">職員</option>
                                <option value="法律工作者">法律工作者</option>
                                <option value="教授">教授</option>
                            </select>
                        </td>
                    </tr>


                    <!-- <tr>
                        <td></td>
                        <td class="text-end">

                            <input type="submit" value="更新會員資料" class="form-submit-btn">
                        </td>
                    </tr> -->

                    <!-- </table> -->

                    <tr>
                        <td colspan="2">
                            <h2 class="text-center mb-1">配對要求</h2>
                        </td>
                    </tr>

                    <!-- <table class="mt-3"> -->
                    <tr>
                        <td class="text-end">姓別：</td>
                        <td>
                            <label class="me-2"><input class="me-1" type="radio" name="gender" value="男">男</label>
                            <label class="me-2"><input class="me-1" type="radio" name="gender" value="女">女</label>
                        </td>
                    </tr>
                </table>
            </form>

        </div>







    </div>



</div>




</div>
<script type="text/javascript">
$(function() {


    $('.filter-ul li a').click(function() {
        $('.filter-ul li a').removeClass('active');
        $(this).addClass('active');
        $('.form-div').fadeOut(0);
        var rel = $(this).attr('rel');
        $('.form-div.' + rel).fadeIn(0);
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