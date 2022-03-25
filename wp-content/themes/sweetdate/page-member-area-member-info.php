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




$member_id = $_SESSION['login_member_id'];

$query_args = array(
    'post_type' => 'member',
    'meta_query' => array(
            'key'   => 'member_id',
            'value' => $member_id
    )
);

$the_query = new WP_Query( $query_args );
$the_query->the_post();
$post_id = get_the_ID();



?>
<div class="container mt-3">



    <div class="relative">
        <h2 class="title-type-pink-line">會員專區</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>

    <ul class="filter-ul mt-4">
        <li>
            <a class="" href="<?php echo get_site_url();?>/member-area-new-activity" rel="login-form">最新活動
            </a>
        </li>
        <li>
            <a class="" href="<?php echo get_site_url();?>/member-area-joined-activity" rel="detail-form">已參加活動
            </a>
        </li>

        <li>
            <a class="active" href="<?php echo get_site_url();?>/member-area-member-info" rel="detail-form">會員資料
            </a>
        </li>



    </ul>


    <div class="text-center mt-4 pink">

        <?php
    

    if($_POST)
    {
        // echo $_POST['target-age-from'];
        if($_POST['form-type']=='member-further-info-form')
        {
            $like_food=$_POST['like-food'];
            $dislike_food=$_POST['dislike-food'];
            $first_name=$_POST['first-name'];
            $last_name=$_POST['last-name'];
            $age=$_POST['age'];
            $education_level=$_POST['education-level'];
            $occupation=$_POST['occupation'];
            $occupation_title=$_POST['occupation-title'];

            

            $other_occupation=$_POST['other-occupation'];
            $annual_income=$_POST['annual-income'];
            $religion=$_POST['religion'];
            $overseas_study=$_POST['overseas-study'];
            $overseas_study_nation=$_POST['overseas_study_nation'];
            $language=$_POST['language'];
            $other_language = $_POST['other_language'];
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

            $overseas_study_nation=$_POST['overseas-study-nation'];

            update_post_meta($post_id, 'like_food', $like_food);
            update_post_meta($post_id, 'dislike_food', $dislike_food);
            update_post_meta($post_id, 'first_name', $first_name);
            update_post_meta($post_id, 'last_name', $last_name);
            update_post_meta($post_id, 'age', $age);
            update_post_meta($post_id, 'overseas_study_nation', $overseas_study_nation);

            update_post_meta($post_id, 'education_level', $education_level);
            update_post_meta($post_id, 'occupation', $occupation);
            update_post_meta($post_id, 'occupation_title', $occupation_title);
            update_post_meta($post_id, 'other_occupation', $other_occupation);
            update_post_meta($post_id, 'annual_income', $annual_income);
            update_post_meta($post_id, 'religion', $religion);
            update_post_meta($post_id, 'overseas_study', $overseas_study);
            update_post_meta($post_id, 'overseas_study_nation', $overseas_study_nation);
            update_post_meta($post_id, 'language', $language);
            update_post_meta($post_id, 'other_language', $other_language);
            update_post_meta($post_id, 'height', $height);
            update_post_meta($post_id, 'hobby', $hobby);
            update_post_meta($post_id, 'target_age_from', $target_age_from);
            update_post_meta($post_id, 'target_age_to', $target_age_to);
            update_post_meta($post_id, 'target_education_level', $target_education_level);
            update_post_meta($post_id, 'target_personality_request', $target_personality_request);
            update_post_meta($post_id, 'target_shape_request', $target_shape_request);
            update_post_meta($post_id, 'target_matching_relationship', $target_matching_relationship);
            update_post_meta($post_id, 'how_to_know_us', $how_to_know_us);
            update_post_meta($post_id, 'join_activity_way', $join_activity_way);


            echo '會員資料已更新！';
        }
    }


    ?>
    </div>
    <div class="main-content mt-5">



        <div class="main-content mt-5">


            <div class="login-form form-div">
                <form action="" class="member-login-info-form mb-5" method="post" action="">
                    <input type="hidden" name="form-type" value="login-form">
                    <table>
                        <tr>
                            <td colspan="2">
                                <h2 class="text-center m-0">登入資料</h2>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-end"><label for="login-email"> 登記電郵：</label></td>
                            <td>
                                <?php 
                            echo get_field('login_email');
                            ?>
                                <!-- <input type="text" class="form-control" id="login-email" name="login-email"> -->
                            </td>
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


                <form class="member-further-info-form" method="post" action="">
                    <input type="hidden" name="form-type" value="member-further-info-form">

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
                                <?php echo get_field('gender');?>
                                <!-- <label class="me-2"><input <?php echo  get_field('gender')=='男' ? 'checked' :'';?>
                                        class="me-1" type="radio" name="gender" value="男">男</label>
                                <label class="me-2"><input <?php echo  get_field('gender')=='女' ? 'checked' :'';?>
                                        class="me-1" type="radio" name="gender" value="女">女</label> -->
                            </td>
                        </tr>

                        <tr>

                            <td class=" text-end">
                                <label for="like-food">最喜歡吃的食物：*</label>
                            </td>
                            <td>
                                <select required id="like-food" name="like-food" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option <?php echo get_field('like_food') =='牛' ? 'selected' :'';?> value="牛">牛
                                    </option>
                                    <option <?php echo get_field('like_food')=='雞' ? 'selected' :'';?> value="雞">雞
                                    </option>
                                    <option <?php echo get_field('like_food')=='羊' ? 'selected' :'';?> value="羊">羊
                                    </option>
                                    <option <?php echo get_field('like_food')=='豬' ? 'selected' :'';?> value="豬">豬
                                    </option>
                                    <option <?php echo get_field('like_food')=='魚' ? 'selected' :'';?> value="魚">魚
                                    </option>
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
                                    <option <?php echo get_field('dislike_food')=='牛' ? 'selected' :'';?> value="牛">牛
                                    </option>
                                    <option <?php echo get_field('dislike_food')=='雞' ? 'selected' :'';?> value="雞">雞
                                    </option>
                                    <option <?php echo get_field('dislike_food')=='羊' ? 'selected' :'';?> value="羊">羊
                                    </option>
                                    <option <?php echo get_field('dislike_food')=='豬' ? 'selected' :'';?> value="豬">豬
                                    </option>
                                    <option <?php echo get_field('dislike_food')=='魚' ? 'selected' :'';?> value="魚">魚
                                    </option>
                                </select>


                            </td>
                        </tr>
                        <tr>
                            <td> <label for="tel">聯絡電話：*</label>
                            </td>
                            <td>
                                <input required type="text" id="tel" name="tel" class="form-control"
                                    value="<?php echo get_field('tel');?>">
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <label for="first-name">英文名(e.g.Jacky)：*</label>
                            </td>
                            <td>

                                <input required value="<?php echo  get_field('first_name') ;?>" required id="first-name"
                                    class="form-control" name="first-name" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="last-name">姓：*</label></td>
                            <td>
                                <input required value="<?php echo get_field('last_name');?>" required id="last-name"
                                    class="form-control" name="last-name" type="text">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="age">年齡：*</label>
                            </td>
                            <td>
                                <select required id="age" name="age" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option <?php echo get_field('age')=='20-29' ? 'selected' :'';?> value="20-29">20-29
                                    </option>
                                    <option <?php echo get_field('age')=='30-34' ? 'selected' :'';?> value="30-34">30-34
                                    </option>
                                    <option <?php echo get_field('age')=='35-39' ? 'selected' :'';?> value="35-39">35-39
                                    </option>
                                    <option <?php echo get_field('age')=='40或以上' ? 'selected' :'';?> value="40或以上">40或以上
                                    </option>
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
                                    <option <?php echo get_field('education_level')=='小學程度' ? 'selected' :'';?>
                                        value="小學程度">小學程度</option>
                                    <option <?php echo get_field('education_level')=='中學程度' ? 'selected' :'';?>
                                        value="中學程度">中學程度</option>
                                    <option <?php echo get_field('education_level')=='大學程度' ? 'selected' :'';?>
                                        value="大學程度">大學程度</option>
                                    <option <?php echo get_field('education_level')=='碩士' ? 'selected' :'';?>
                                        value="碩士">碩士</option>
                                    <option <?php echo get_field('education_level')=='博士' ? 'selected' :'';?>
                                        value="博士">博士</option>

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

                                    <option <?php echo get_field('occupation')=='教師' ? 'selected' :'';?> value="教師">教師
                                    </option>
                                    <option <?php echo get_field('occupation')=='研究員' ? 'selected' :'';?> value="研究員">
                                        研究員</option>
                                    <option <?php echo get_field('occupation')=='編輯' ? 'selected' :'';?>value="編輯">
                                        編輯</option>
                                    <option <?php echo get_field('occupation')=='翻譯' ? 'selected' :'';?>value="翻譯">
                                        翻譯</option>
                                    <option <?php echo get_field('occupation')=='記者' ? 'selected' :'';?>value="記者">
                                        記者</option>
                                    <option <?php echo get_field('occupation')=='作家' ? 'selected' :'';?>value="作家">
                                        作家</option>
                                    <option
                                        <?php echo get_field('occupation')=='文化/美術/文藝工作者' ? 'selected' :'';?>value="文化/美術/文藝工作者">
                                        文化/美術/文藝工作者</option>
                                    <option <?php echo get_field('occupation')=='教練' ? 'selected' :'';?>value="教練">
                                        教練</option>
                                    <option <?php echo get_field('occupation')=='運動員' ? 'selected' :'';?>value="運動員">
                                        運動員
                                    </option>
                                    <option <?php echo get_field('occupation')=='工程師' ? 'selected' :'';?>value="工程師">
                                        工程師
                                    </option>
                                    <option <?php echo get_field('occupation')=='技術員' ? 'selected' :'';?>value="技術員">
                                        技術員
                                    </option>
                                    <option <?php echo get_field('occupation')=='會計' ? 'selected' :'';?>value="會計">
                                        會計</option>
                                    <option
                                        <?php echo get_field('occupation')=='企業管理人員' ? 'selected' :'';?>value="企業管理人員">
                                        企業管理人員</option>
                                    <option <?php echo get_field('occupation')=='廚師' ? 'selected' :'';?>value="廚師">
                                        廚師</option>
                                    <option <?php echo get_field('occupation')=='農藝師' ? 'selected' :'';?>value="農藝師">
                                        農藝師
                                    </option>
                                    <option <?php echo get_field('occupation')=='工人' ? 'selected' :'';?>value="工人">
                                        工人</option>
                                    <option <?php echo get_field('occupation')=='農民' ? 'selected' :'';?>value="農民">
                                        農民</option>
                                    <option <?php echo get_field('occupation')=='牧民' ? 'selected' :'';?>value="牧民">
                                        牧民</option>
                                    <option <?php echo get_field('occupation')=='漁民' ? 'selected' :'';?>value="漁民">
                                        漁民</option>
                                    <option <?php echo get_field('occupation')=='醫生' ? 'selected' :'';?>value="醫生">
                                        醫生</option>
                                    <option <?php echo get_field('occupation')=='藥劑師' ? 'selected' :'';?>value="藥劑師">
                                        藥劑師
                                    </option>
                                    <option <?php echo get_field('occupation')=='護士' ? 'selected' :'';?>value="護士">
                                        護士</option>
                                    <option <?php echo get_field('occupation')=='機長' ? 'selected' :'';?>value="機長">
                                        機長</option>
                                    <option <?php echo get_field('occupation')=='飛行員' ? 'selected' :'';?>value="飛行員">
                                        飛行員
                                    </option>
                                    <option <?php echo get_field('occupation')=='船長' ? 'selected' :'';?>value="船長">
                                        船長</option>
                                    <option <?php echo get_field('occupation')=='乘務員' ? 'selected' :'';?>value="乘務員">
                                        乘務員
                                    </option>
                                    <option <?php echo get_field('occupation')=='公務員' ? 'selected' :'';?>value="公務員">
                                        公務員
                                    </option>
                                    <option <?php echo get_field('occupation')=='服務員' ? 'selected' :'';?>value="服務員">
                                        服務員
                                    </option>
                                    <option <?php echo get_field('occupation')=='律師' ? 'selected' :'';?>value="律師">
                                        律師</option>
                                    <option <?php echo get_field('occupation')=='商人' ? 'selected' :'';?>value="商人">
                                        商人</option>
                                    <option
                                        <?php echo get_field('occupation')=='宗教職業者' ? 'selected' :'';?>value="宗教職業者">
                                        宗教職業者</option>
                                    <option <?php echo get_field('occupation')=='家庭婦女' ? 'selected' :'';?>value="家庭婦女">
                                        家庭婦女</option>
                                    <option <?php echo get_field('occupation')=='退休' ? 'selected' :'';?>value="退休">
                                        退休</option>
                                    <option <?php echo get_field('occupation')=='無業' ? 'selected' :'';?>value="無業">
                                        無業</option>
                                    <option <?php echo get_field('occupation')=='學生' ? 'selected' :'';?>value="學生">
                                        學生</option>
                                    <option <?php echo get_field('occupation')=='兒童' ? 'selected' :'';?>value="兒童">
                                        兒童</option>
                                    <option <?php echo get_field('occupation')=='職員' ? 'selected' :'';?>value="職員">
                                        職員</option>
                                    <option
                                        <?php echo get_field('occupation')=='法律工作者' ? 'selected' :'';?>value="法律工作者">
                                        法律工作者</option>
                                    <option <?php echo get_field('occupation')=='教授' ? 'selected' :'';?>value="教授">
                                        教授</option>
                                </select>
                                <div class="mt-2"><input value="<?php echo get_field('other_occupation');?>" type="text"
                                        class="form-control" name="other-occupation" placeholder="其他職業"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label for="occupation-title">職銜：</label>
                            </td>
                            <td>
                                <input value="<?php echo get_field('occupation_title');?>" type="text"
                                    id="occupation-title" class="form-control" name="occupation-title">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="annual-income">年薪(HKD)：*</label>

                            </td>
                            <td>
                                <input required value="<?php echo get_field('annual_income');?>" type="text"
                                    id="annual-income" class="form-control" name="annual-income">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="religion">宗教：*</label>
                            </td>
                            <td><select required class="form-select" id="religion" name="religion">
                                    <option value="">選擇
                                    </option>
                                    <option <?php echo get_field('religion')=='沒有' ? 'selected' :'';?> value="沒有">沒有
                                    </option>
                                    <option <?php echo get_field('religion')=='佛教' ? 'selected' :'';?> value="佛教">佛教
                                    </option>
                                    <option <?php echo get_field('religion')=='道教' ? 'selected' :'';?> value="道教">道教
                                    </option>
                                    <option <?php echo get_field('religion')=='猶太教' ? 'selected' :'';?> value="猶太教">猶太教
                                    </option>
                                    <option <?php echo get_field('religion')=='天主教' ? 'selected' :'';?> value="天主教">天主教
                                    </option>
                                    <option <?php echo get_field('religion')=='基督教' ? 'selected' :'';?> value="基督教">基督教
                                    </option>
                                    <option <?php echo get_field('religion')=='伊斯蘭教' ? 'selected' :'';?> value="伊斯蘭教">
                                        伊斯蘭教
                                    </option>
                                    <option <?php echo get_field('religion')=='東正教' ? 'selected' :'';?> value="東正教">東正教
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="align-top">
                                <label for="overseas_study">海外留學：</label>
                            </td>
                            <td>
                                <label class="me-2"><input
                                        <?php echo get_field('overseas_study')=='有' ? 'checked' :'';?> class="me-1"
                                        type="radio" name="overseas-study" value="有">有</label>
                                <label class="me-2"><input
                                        <?php echo get_field('overseas_study')=='沒有' ? 'checked' :'';?> class="me-1"
                                        type="radio" name="overseas-study" value="沒有">沒有</label>


                                <div class="mt-2"> <label for="overseas-study-nation">如有留學國家為</label> </div>

                                <div class="mt-2"> <select class="form-control" id="overseas-study-nation"
                                        name="overseas-study-nation">
                                        <option value="">選擇</option>
                                        <option <?php echo get_field('overseas_study_nation')=='紐西蘭' ? 'selected' :'';?>
                                            value="紐西蘭">
                                            紐西蘭</option>
                                        <option <?php echo get_field('overseas_study_nation')=='中國' ? 'selected' :'';?>
                                            value="中國">
                                            中國</option>
                                        <option <?php echo get_field('overseas_study_nation')=='英國' ? 'selected' :'';?>
                                            value="英國">
                                            英國</option>
                                        <option
                                            <?php echo get_field('overseas_study_nation')=='澳大利亞' ? 'selected' :'';?>
                                            value="澳大利亞">澳大利亞</option>
                                        <option <?php echo get_field('overseas_study_nation')=='美國' ? 'selected' :'';?>
                                            value="美國">
                                            美國</option>
                                        <option <?php echo get_field('overseas_study_nation')=='日本' ? 'selected' :'';?>
                                            value="日本">
                                            日本</option>
                                        <option <?php echo get_field('overseas_study_nation')=='法國' ? 'selected' :'';?>
                                            value="法國">
                                            法國</option>
                                        <option <?php echo get_field('overseas_study_nation')=='德國' ? 'selected' :'';?>
                                            value="德國">
                                            德國</option>
                                        <option <?php echo get_field('overseas_study_nation')=='加拿大' ? 'selected' :'';?>
                                            value="加拿大">
                                            加拿大</option>
                                    </select> </div>

                                <div class="mt-2">

                                    <label for="other-overseas-study-nation">其他海外留學國家</label>
                                </div>
                                <div class="mt-2">

                                    <input type="text" id="other-overseas-study-nation" class="form-control"
                                        name="other-overseas-study-nation"
                                        value="<?php echo get_field('other_overseas_study_nation');?>">
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td class="align-top pt-4"> <label for="language">語言：*</label>
                            </td>
                            <td><select required class="form-select" id="language" name="language">
                                    <option <?php echo get_field('language')=='中文' ? 'selected' :'';?> value="中文">
                                        中文</option>
                                    <option <?php echo get_field('language')=='英文' ? 'selected' :'';?> value="英文">
                                        英文</option>
                                </select>
                                <div class="mt-3">

                                    <input type="text" value="<?php echo get_field('other_language');?>"
                                        class="form-control" placeholder="其他語言" name="other_language">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="height">身高(CM)：*</label>

                            </td>
                            <td>


                                <select required class="form-select" id="height" name="height">
                                    <option value="">選擇</option>

                                    <option <?php echo get_field('height')=='144-153' ? 'selected' :'';?>
                                        value="144-153">
                                        144-153</option>
                                    <option <?php echo get_field('height')=='154-163' ? 'selected' :'';?>
                                        value="154-163">
                                        154-163</option>
                                    <option <?php echo get_field('height')=='164-173' ? 'selected' :'';?>
                                        value="164-173">
                                        164-173</option>
                                    <option <?php echo get_field('height')=='174-183' ? 'selected' :'';?>
                                        value="174-183">
                                        174-183</option>
                                    <option <?php echo get_field('height')=='184-195' ? 'selected' :'';?>
                                        value="184-195">
                                        184-195</option>
                                    <option <?php echo get_field('height')=='196以上' ? 'selected' :'';?> value="196以上">
                                        196以上</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="hobby">興趣：</label>

                            </td>
                            <td>
                                <select id="hobby" name="hobby" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option <?php echo get_field('hobby')=='A' ? 'selected' :'';?> value="A">A
                                    </option>
                                    <option <?php echo get_field('hobby')=='B' ? 'selected' :'';?> value="B">B
                                    </option>
                                    <option <?php echo get_field('hobby')=='C' ? 'selected' :'';?> value="C">C
                                    </option>

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
                                *對象年齡由<input type="text" value="<?php echo get_field('target_age_from');?>"
                                    class="form-control age-input" name="target-age-from">至<input
                                    value="<?php echo get_field('target_age_to');?>" type="text"
                                    class="age-input form-control" name="target-age-to">歲
                            </td>
                        </tr>
                        <tr>
                            <td><label for="target-education-level">教育程度：*</label></td>
                            <td>
                                <select required id="target-education-level" name="target-education-level"
                                    class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option <?php echo get_field('target_education_level')=='小學程度' ? 'selected' :'';?>
                                        value="小學程度">小學程度</option>
                                    <option <?php echo get_field('target_education_level')=='中學程度' ? 'selected' :'';?>
                                        value="中學程度">中學程度</option>
                                    <option <?php echo get_field('target_education_level')=='大學程度' ? 'selected' :'';?>
                                        value="大學程度">大學程度</option>
                                    <option <?php echo get_field('target_education_level')=='碩士' ? 'selected' :'';?>
                                        value="碩士">碩士</option>
                                    <option <?php echo get_field('target_education_level')=='博士' ? 'selected' :'';?>
                                        value="博士">博士</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top pt-4"><label for="target-personality-request">配對性格要求(如有)：</label></td>
                            <td>


                                <select id="target-personality-request" name="target-personality-request"
                                    class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option <?php echo get_field('target_personality_request')=='A' ? 'selected' :'';?>
                                        value="A">A</option>
                                    <option <?php echo get_field('target_personality_request')=='B' ? 'selected' :'';?>
                                        value="B">B</option>
                                    <option <?php echo get_field('target_personality_request')=='C' ? 'selected' :'';?>
                                        value="C">C</option>

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
                                    <option <?php echo get_field('target_shape_request')=='A' ? 'selected' :'';?>
                                        value="A">A</option>
                                    <option <?php echo get_field('target_shape_request')=='B' ? 'selected' :'';?>
                                        value="B">B</option>
                                    <option <?php echo get_field('target_shape_request')=='C' ? 'selected' :'';?>
                                        value="C">C</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="target-matching-relationship">期望關係：*</label></td>
                            <td>
                                <select required id="target-matching-relationship" name="target-matching-relationship"
                                    class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option
                                        <?php echo get_field('target_matching_relationship')=='朋友' ? 'selected' :'';?>
                                        value="朋友">朋友</option>
                                    <option
                                        <?php echo get_field('target_matching_relationship')=='以結婚為大前提對象' ? 'selected' :'';?>
                                        value="以結婚為大前提對象">以結婚為大前提對象</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="how-to-know-us">如何得知我們：*</label>
                            </td>
                            <td>
                                <select required class="form-select" name="how_to_know_us" id="how-to-know-us">
                                    <option value="">選擇</option>
                                    <option <?php echo get_field('how_to_know_us')=='Yahoo' ? 'selected' :'';?>
                                        value="Yahoo">Yahoo</option>
                                    <option <?php echo get_field('how_to_know_us')=='Google' ? 'selected' :'';?>
                                        value="Google">Google</option>
                                    <option <?php echo get_field('how_to_know_us')=='Facebook' ? 'selected' :'';?>
                                        value="Facebook">Facebook</option>
                                    <option <?php echo get_field('how_to_know_us')=='Friend' ? 'selected' :'';?>
                                        value="Friend">Friend</option>
                                    <option <?php echo get_field('how_to_know_us')=='Newspaper' ? 'selected' :'';?>
                                        value="Newspaper">Newspaper</option>
                                    <option <?php echo get_field('how_to_know_us')=='Magazine' ? 'selected' :'';?>
                                        value="Magazine">Magazine</option>
                                    <option <?php echo get_field('how_to_know_us')=='Instagram' ? 'selected' :'';?>
                                        value="Instagram">Instagram</option>
                                    <option <?php echo get_field('how_to_know_us')=='TV' ? 'selected' :'';?> value="TV">
                                        TV</option>
                                    <option <?php echo get_field('how_to_know_us')=='Email' ? 'selected' :'';?>
                                        value="Email">Email</option>
                                    <option <?php echo get_field('how_to_know_us')=='Youtube' ? 'selected' :'';?>
                                        value="Youtube">Youtube</option>
                                    <option <?php echo get_field('how_to_know_us')=='Others' ? 'selected' :'';?>
                                        value="Others">Others</option>
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
                                    <option <?php echo get_field('join_activity_way')=='以閣下選擇之日期參加' ? 'selected' :'';?>
                                        value="以閣下選擇之日期參加">以閣下選擇之日期參加
                                    </option>
                                    <option <?php echo get_field('join_activity_way')=='以閣下要求異性資料參加' ? 'selected' :'';?>
                                        value="以閣下要求異性資料參加">以閣下要求異性資料參加
                                    </option>

                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td class="text-end">

                                <input type="submit" value="更新資料" class="form-submit-btn">
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


    // $('.filter-ul li a').click(function() {
    //     $('.filter-ul li a').removeClass('active');
    //     $(this).addClass('active');
    //     $('.form-div').fadeOut(0);
    //     var rel = $(this).attr('rel');
    //     $('.form-div.' + rel).fadeIn(0);
    // })
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