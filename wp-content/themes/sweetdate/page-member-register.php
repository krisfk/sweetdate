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
session_start();
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
    
    $like_food = $_POST['like-food'];
    $dislike_food = $_POST['dislike-food'];
    $tel = $_POST['tel'];
    $education_level=$_POST['education-level'];
    $occupation=$_POST['occupation'];
    $occupation_title=$_POST['occupation-title'];
    $other_occupation=$_POST['other-occupation'];
    $annual_income=$_POST['annual-income'];
    $religion=$_POST['religion'];
    $overseas_study=$_POST['overseas-study'];
    $overseas_study_nation=$_POST['overseas-study-nation'];
    $other_overseas_study_nation=$_POST['other-overseas-study-nation'];

    $language=$_POST['language'];
    $other_language = $_POST['other-language'];
    $height= $_POST['height'];
    $hobby= $_POST['hobby'];
    $target_age_from= $_POST['target-age-from'];
    $target_age_to= $_POST['target-age-to'];
    $target_education_level=$_POST['target-education-level'];
    $target_personality_request=$_POST['target-personality-request'];
    $target_shape_request = $_POST['target-shape-request'];
    $target_matching_relationship=$_POST['target-matching-relationship'];
    $how_to_know_us=$_POST['how-to-know-us'];
    $join_activity_way=$_POST['join-activity-way'];
    $member_id = 'M'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);

    $post_id = wp_insert_post(array (
        'post_type' => 'member',
        'post_title' => $member_id.' ('.$first_name.' '.$last_name.')',
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
        add_post_meta($post_id, 'education_level', $education_level);
        add_post_meta($post_id, 'occupation', $occupation);
        add_post_meta($post_id, 'occupation_title', $occupation_title);
        add_post_meta($post_id, 'other_occupation', $other_occupation);
        add_post_meta($post_id, 'annual_income', $annual_income);
        add_post_meta($post_id, 'religion', $religion);
        add_post_meta($post_id, 'overseas_study', $overseas_study);
        add_post_meta($post_id, 'overseas_study_nation', $overseas_study_nation);
        add_post_meta($post_id, 'other_overseas_study_nation', $other_overseas_study_nation);

        add_post_meta($post_id, 'language', $language);
        add_post_meta($post_id, 'other_language', $other_language);
        add_post_meta($post_id, 'height', $height);
        add_post_meta($post_id, 'hobby', $hobby);
        add_post_meta($post_id, 'target_age_from', $target_age_from);
        add_post_meta($post_id, 'target_age_to', $target_age_to);
        add_post_meta($post_id, 'target_education_level', $target_education_level);
        add_post_meta($post_id, 'target_personality_request', $target_personality_request);
        add_post_meta($post_id, 'target_shape_request', $target_shape_request);
        add_post_meta($post_id, 'target_matching_relationship', $target_matching_relationship);
        add_post_meta($post_id, 'how_to_know_us', $how_to_know_us);
        add_post_meta($post_id, 'join_activity_way', $join_activity_way);


        //password no problem
        $_SESSION['login_member_id']=$member_id;
       
       ?>
<script type="text/javascript">
$(function() {
    $('.member-login-info-form').addClass('text-center');
    $('.member-login-info-form').html('會員註冊成功，三秒後自動登入。');
    setTimeout(() => {
        window.location = '<?php echo get_site_url();?>'
    }, 3000);
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


        <div class="login-form form-div">
            <form action="" class="member-login-info-form mb-5" action="" method="post">
                <table>
                    <tr>
                        <td colspan="2">
                            <h2 class="text-center m-0">登入資料</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="login-email"> 登記電郵：*</label></td>
                        <td><input required type="text" class="form-control" id="login-email" name="login-email"></td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="login-password">登入密碼：*</label> </td>
                        <td><input required type="password" class="form-control" id="login-password"
                                name="login-password">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end"><label for="login-password-again">再次輸入登入密碼：*</label> </td>
                        <td><input required type="password" class="form-control" id="login-password-again"
                                name="login-password-again">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>


                <div class="detail-form form-div mt-5">


                    <table class="">

                        <tr>
                            <td colspan="2">
                                <h2 class="text-center mb-2">個人資料</h2>
                                <div class=" text-center small">(請閣下細心提供資料, 愈精準, 找到合適伴侶的機率愈高!)</div>


                            </td>
                        </tr>

                        <tr>
                            <td class="text-end">姓別：*</td>
                            <td>
                                <label class="me-2"><input required class="me-1" type="radio" name="gender"
                                        value="男">男</label>
                                <label class="me-2"><input class="me-1" type="radio" name="gender" value="女">女</label>
                            </td>
                        </tr>

                        <tr>

                            <td class=" text-end">
                                <label for="like-food">最喜歡吃的食物：*</label>
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
                                <label for="dislike-food">最不喜歡吃的食物：*</label>
                            </td>
                            <td>

                                <select required id="dislike-food" name="dislike-food" class="form-select"
                                    aria-label="">
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
                            <td> <label for="tel">聯絡電話*</label>
                            </td>
                            <td>
                                <input required type="text" id="tel" name="tel" class="form-control">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label for="first-name">英文名(e.g.Jacky)：*</label>
                            </td>
                            <td>

                                <input required id="first-name" class="form-control" name="first-name" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="last-name">姓：*</label></td>
                            <td>
                                <input required id="last-name" class="form-control" name="last-name" type="text">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="age">年齡：*</label>
                            </td>
                            <td>
                                <select required id="age" name="age" class="form-select" aria-label="">
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

                                <select required id="education-level" name="education-level" class="form-select"
                                    aria-label="">
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
                            <td class="align-top pt-4">
                                <label for="occupation">職業：*</label>

                            </td>
                            <td>

                                <select id="occupation" name="occupation" class="form-select">
                                    <option value="">選擇</option>
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
                                <div class="mt-2"><input type="text" class="form-control" placeholder="其他職業"
                                        name="other-occupation"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label for="occupation-title">職銜：</label>
                            </td>
                            <td>
                                <input type="text" id="occupation-title" class="form-control" name="occupation-title">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="annual-income">年薪(HKD)：</label>

                            </td>
                            <td>

                                <select id="annual-income" name="annual-income" class="form-control">
                                    <option value="250,000以下">250,000以下</option>
                                    <option value="250,001-500,001">250,001-500,001</option>
                                    <option value="500,000-750,000">500,000-750,000</option>
                                    <option value="750,001-100,000">750,001-100,000</option>
                                    <option value="1,000,001以上">1,000,001以上</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="religion">宗教：*</label>
                            </td>
                            <td><select required class="form-select" id="religion" name="religion">
                                    <option value="">選擇</option>
                                    <option value="沒有">沒有</option>
                                    <option value="佛教">佛教</option>
                                    <option value="道教">道教</option>
                                    <option value="猶太教">猶太教</option>
                                    <option value="天主教">天主教</option>
                                    <option value="基督教">基督教</option>
                                    <option value="伊斯蘭教">伊斯蘭教</option>
                                    <option value="東正教">東正教</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="align-top">
                                <label for="overseas_study">海外留學：</label>
                            </td>
                            <td>
                                <label class="me-2"><input class="me-1" type="radio" name="gender" value="有">有</label>
                                <label class="me-2"><input class="me-1" type="radio" name="gender" value="沒有">沒有</label>

                                <div class="mt-2"> <label for="overseas-study-nation">如有留學國家為</label> </div>

                                <div class="mt-2"> <select class="form-control" id="overseas-study-nation"
                                        name="overseas-study-nation">
                                        <option value="">選擇</option>
                                        <option value="紐西蘭">紐西蘭</option>
                                        <option value="中國">中國</option>
                                        <option value="英國">英國</option>
                                        <option value="澳大利亞">澳大利亞</option>
                                        <option value="美國">美國</option>
                                        <option value="日本">日本</option>
                                        <option value="法國">法國</option>
                                        <option value="德國">德國</option>
                                        <option value="加拿大">加拿大</option>
                                    </select> </div>

                                <div class="mt-2">

                                    <label for="other-overseas-study-nation">其他海外留學國家</label>
                                </div>
                                <div class="mt-2">

                                    <input type="text" id="other-overseas-study-nation" class="form-control"
                                        name="other-overseas-study-nation">
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td class="align-top pt-4"> <label for="language">語言：*</label>
                            </td>
                            <td><select required class="form-select" id="language" name="language">
                                    <option value="">選擇</option>

                                    <option value="中文">中文</option>
                                    <option value="英文">英文</option>
                                </select>
                                <div class="mt-3">

                                    <input type="text" class="form-control" placeholder="其他語言" name="other-language">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="height">身高(CM)：*</label>

                            </td>
                            <td>
                                <select class="form-select" id="height" name="height">
                                    <option value="">選擇</option>

                                    <option value="144-153">144-153</option>
                                    <option value="154-163">154-163</option>
                                    <option value="164-173">164-173</option>
                                    <option value="174-183">174-183</option>
                                    <option value="184-195">184-195</option>
                                    <option value="196以上">196以上</option>
                                </select>
                                <!-- <input required type="text" class="form-control" id="height" name="height"> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="hobby">興趣：</label>

                            </td>
                            <td>
                                <select id="hobby" name="hobby" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>

                                </select>


                            </td>
                        </tr>

                        <tr>
                            <td class="border-0"></td>
                            <td class="border-0"></td>
                        </tr>

                    </table>



                    <table class="mt-5">
                        <tr>
                            <td colspan="2">
                                <h2 class="text-center mb-1">配對要求</h2>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="2" class="text-center">
                                *對象年齡由<input required type="text" class="form-control age-input"
                                    name="target-age-from">至<input required type="text" class="age-input form-control"
                                    name="target-age-to">歲
                            </td>
                        </tr>
                        <tr>
                            <td><label for="target-education-level">教育程度：*</label></td>
                            <td>
                                <select required id="target-education-level" name="target-education-level"
                                    class="form-select" aria-label="">
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
                            <td class="align-top pt-4"><label for="target-personality-request">配對性格要求(如有)：</label></td>
                            <td>


                                <select id="target-personality-request" name="target-personality-request"
                                    class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>

                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="target-shape-request">配對身型要求：</label>

                            </td>
                            <td> <select id="target-shape-request" name="target-shape-request" class="form-select"
                                    aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="target-matching-relationship">期望關係：*</label></td>
                            <td>
                                <select required id="target-matching-relationship" name="target-matching-relationship"
                                    class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="朋友">朋友</option>
                                    <option value="以結婚為大前提對象">以結婚為大前提對象</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="how-to-know-us">如何得知我們：*</label>
                            </td>
                            <td>
                                <select required class="form-select" name="how-to-know-us" id="how-to-know-us">
                                    <option value="">選擇</option>
                                    <option value="Yahoo">Yahoo</option>
                                    <option value="Google">Google</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Magazine">Magazine</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="TV">TV</option>
                                    <option value="Email">Email</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Others">Others</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label for="join-activity-way">參與活動形式：*</label>
                            </td>
                            <td>
                                <select required class="form-select" name="join-activity-way" id="join-activity-way">
                                    <option value="">選擇</option>
                                    <option value="以閣下選擇之日期參加">以閣下選擇之日期參加
                                    </option>
                                    <option value="以閣下要求異性資料參加">以閣下要求異性資料參加
                                    </option>

                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="text-start"> <input type="checkbox" name="agree1" id="agree1"> <label
                                    for="agree1" class="d-inline">
                                    * 本人已得悉欲報名活動所註明之學歷及年齡要求。Sweet
                                    Date保留任何人士因未符合學歷及年齡要求，而拒絕該人士參加之權利。</label></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-start"> <input type="checkbox" name="agree2" id="agree2"
                                    class="d-inline">
                                <label for="agree2">* 我已閱讀，接受及同意有關Sweet Date的服務及免責條款。</label>
                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td class="text-end">

                                <input type="submit" value="遞交資料" class="form-submit-btn">
                            </td>
                        </tr>



                    </table>
            </form>

        </div>


    </div>





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

        if (!$('#agree1').is(':checked')) {
            error_txt +=
                '請先同意條款1</br>';
        }

        if (!$('#agree2').is(':checked')) {
            error_txt +=
                '請先同意條款2</br>';
        }



        if (error_txt) {
            $('.error-msg').html(error_txt);
            $('body,html').animate({
                scrollTop: $('.error-msg').offset().top - 100
            }, 200);
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