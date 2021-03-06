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
// session_start();
$current_post_id=get_the_ID();
$current_price=get_field('price');
$current_activity_title=get_field('activity_title');
$email_title=get_field('email_title');
$email_content=get_field('email_content');

// https://sweetdate.com.hk/wp-admin/post.php?post=398&action=edit

// function generateRandomString($length = 10) {
    $length=20;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    // return $randomString;
// }

// e generateRandomString();

if(!$_GET['person'])
{
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));    
    header('Location: '.$current_url.'?person=1');

}

if(!$_POST)
{
    unset ($_SESSION["paid"]);
    unset($_POST);
}

if($_POST['form-type']=='reg' && $_SESSION['paid'])
{
    //  $_SESSION['paid'] ='';
     unset ($_SESSION["paid"]);
     unset($_POST);

        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));
        
        header('Location: '.$current_url);


//    }



}
?>
<div class="container mt-3">



    <div class="position-relative">
        <h2 class="title-type-pink-line"><?php echo get_field('activity_title')?></h2>

        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>




    </div>



    <div class="main-content mt-4">



        <div class="row mt-4">
            <div class="col-12">
                <div class="text-center"> <img class="activity-detail-main-img"
                        src="<?php echo wp_get_attachment_image_url(get_field('activity_main_image'),'full');?>" alt="">
                </div>

                <h2 class="mt-3 text-center"> ????????????. ?????????New Year Wish?????????</h2>
            </div>
            <div class="col-12 mt-1  text-center">
                <ul class="news-act-info-ul">
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/small-cal-icon.png"
                                    alt="">
                            </div>
                            <div class="d-table-cell">
                                <?php echo get_field('activity_date');?></div>
                        </div>
                    </li>
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/small-clock-icon.png"
                                    alt="">
                            </div>
                            <div class="d-table-cell">
                                <?php echo get_field('activity_time');?></div>
                        </div>
                    </li>
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/pin-icon.png" alt="">
                            </div>
                            <div class="d-table-cell">

                                <?php echo get_field('activity_place');?></div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- <div class="col-12">

			
			</div> -->



        </div>


        <div class="row mt-3 gx-0">

            <div class="col-lg-6 col-md-12 col-sm-12 col-12  gender-div-col male">
                <div class="gender-div male">
                    <table>
                        <tr>
                            <td class="gender-icon-td">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png" alt="">


                            </td>
                            <td class="">
                                <div class="row">

                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
                                        ?????? :
                                        <?php echo get_field('male_quota');?>???
                                        (<?php echo get_field('male_age_range');?>???)</div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">
                                        ?????? :
                                        <?php echo get_field('male_remain_quota');?>???</div>
                                    <div class="col-12 mt-1"><?php echo get_field('male_requirement');?></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 gender-div-col female">
                <div class="gender-div female">
                    <table>
                        <tr>
                            <td class="gender-icon-td">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/f-icon.png" alt="">


                            </td>
                            <td class="">
                                <div class="row">

                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
                                        ?????? : <?php echo get_field('female_quota');?>???
                                        (<?php echo get_field('female_age_range');?>???)</div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">
                                        ?????? : <?php echo get_field('female_remain_quota');?>???
                                    </div>
                                    <div class="col-12 mt-1"><?php echo get_field('female_requirement');?></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>


        <!--  -->
        <div class="mt-5 text-center">




            <!-- <input type="checkbox">?????????????????????????????????(???????????????????????????-$100 ??????) -->


            <?php 
                if($_GET['person']==2  )
                {
                    //  echo 12999;
                    $final_price = get_field('two_people_discount_price')*2;
                    $charge_final_price=$final_price*100;
                    $two_people_discount_price=get_field('two_people_discount_price');
                    // echo $final_price;
                    ?>
            <span class="price me-2">?????????????????????: <span class="line-through">$<?php echo get_field('price');?></span>
                $<?php echo get_field('two_people_discount_price');?>/???</span>

            <?php
                }
                ?>

            <?php 



                if($_GET['person']==1)
                {
                    // echo 999999;
                    // $charge_final_price=get_field('price');


                    ?>



            <div class="one-ppl-discount" style="display:none;">




                <span class="price me-2">????????????????????????: <span class="line-through">$<?php echo get_field('price');?></span>
                    $<?php echo get_field('price')-get_field('random_date_fixed_discount_price_off');?>/???</span>
            </div>




            <div class="one-ppl-no-discount">
                <span class="price me-2">$<?php echo get_field('price');?>/???</span>
            </div>


            <div class="mb-5 mt-4">


                <?php if(get_field('random_date_fixed_discount_price_off')>0)
                        {
                            
                        ?>
                <div class="row justify-content-center align-items-center coupon-discount-div">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-9 mb-lg-0 mb-md-0 mb-sm-0  mb-4 "> <img
                            class="coupon-img" src="<?php echo get_template_directory_uri()?>/assets/images/coupon.jpg"
                            alt="">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-9 text-start">
                        <div class="checkbox-div agree-decide-other-date-div">


                            <table>
                                <tr>
                                    <td class="align-top"> <input type="checkbox" class="form-check-input me-2"
                                            id="agree-decide-other-date" name="" value="">
                                    </td>
                                    <td> <label
                                            for="agree-decide-other-date">??????????????????????????????????????????????????????????????????$<?php echo get_field('random_date_fixed_discount_price_off');?>????????????</label>
                                    </td>
                                </tr>
                            </table>



                            <!--  -->
                            <table class="mt-2">
                                <tr>
                                    <td> <label for="any-date">?????????????????????</label></td>
                                    <td>
                                        <?php
                                $random_date_select_option_arr= get_field('random_date_select_option');


                                ?>
                                        <select novalidate id="any-date" name="any-date" class="form-select any-date"
                                            aria-label="">
                                            <option value="" selected="">??????</option>
                                            <?php
                                    for($i=0;$i<count($random_date_select_option_arr);$i++)
                                    {
                                     echo '<option value="'.$random_date_select_option_arr[$i].'">'.$random_date_select_option_arr[$i].'</option>';   
                                    }
                                    ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
                <?php
                        }
                ?>


            </div>


            <script type="text/javascript">
            $(function() {

                $('#agree-decide-other-date').change(function() {

                    if ($(this).is(":checked")) {
                        $('.one-ppl-discount').fadeIn(0);
                        $('.one-ppl-no-discount').fadeOut(0);

                        $('.final-price').html(
                            '<?php echo get_field('price')-get_field('random_date_fixed_discount_price_off');?>'
                        );
                        $('input[name="final-price"]').val(
                            '<?php echo get_field('price')-get_field('random_date_fixed_discount_price_off');?>'
                        );

                    } else {
                        $('.one-ppl-discount').fadeOut(0);
                        $('.one-ppl-no-discount').fadeIn(0);
                        $('.final-price').html('<?php echo get_field('price');?>');
                        $('input[name="final-price"]').val('<?php echo get_field('price');?>');


                        $('.any-date').val('');


                    }
                })
            })
            </script>

            <?php
                }
                ?>



        </div>


        <div class="step step-1">

            <?php
           
           if(!$_SESSION['login_member_id'])
           {
               ?>

            <div class="mt-3 text-center"> <a href="javascript:void(0);" class="reg-btn">????????????</a>
            </div>
            <?php
           }
           ?>



            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">????????????</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>

            </div>

            <div class="mt-3">

                <?php echo get_field('activity_long_content');?>
            </div>






            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">????????????</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>
            </div>


            <div class="mt-3">

                <?php echo get_field('activity_remark');?>
            </div>







            <!-- <div class="mt-5 text-center">
                <?php 
                if($_GET['person']==2)
                {
                    ?>
                <span class="price me-2">?????????????????????: <span class="line-through">$<?php echo get_field('price');?></span>
                    $<?php echo get_field('two_people_discount_price');?>/???</span>

                <?php
                }
                ?>

                <?php 
                if($_GET['person']==1)
                {
                    ?>
                <span class="price me-2">$<?php echo get_field('price');?>/???</span>

                <?php
                }
                ?>

                <div class="mt-3"> <a href="javascript:void(0);" class="reg-btn">????????????</a>
                </div>
            </div> -->
        </div>

        <?php
        $charge_final_price = $_POST['final-price']*100;
        // echo $charge_final_price;
        // echo $_POST['final-price'];
        // echo $_SESSION['login_member_id'];

        if($_SESSION['login_member_id'])
        {
                $query_args = array(
                    'post_type' => 'member',
                    'meta_query' => array(
                            'key' => 'member_id',
                            'value' => $_SESSION['login_member_id'],
                            'compare' => '='   
                    ));

                $the_query = new WP_Query( $query_args );

                $the_query->have_posts();
                $the_query->the_post();
                $register_email = get_field('login_email');
                $tel = get_field('tel');
                $gender= get_field('gender');
                $first_name =get_field('first_name');
                $age = get_field('age');
                $like_food = get_field('like_food');
                $dislike_food = get_field('dislike_food');

                

        }

        ?>
        <div class="step step-2">

            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">????????????</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>
            </div>

            <div class="position-relative mt-4">

                <?php
                if($_SESSION['login_member_id'])
                {
                 ?>
                <div class="text-center">
                    <?php   
                    
                    echo '?????????'.get_field('last_name').' '.get_field('first_name').'?????????????????????????????????????????????';
                    ?>
                </div>
                <?php
                }
                else
            {
                ?>
                <form action="" class="login-form first">


                    <input type="hidden" name="form-type" value="login">
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-end"><label for="login-email">???????????????</label></td>
                                <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
                            </tr>
                            <tr>
                                <td class="text-end"><label for="login-password">???????????????</label> </td>
                                <td><input type="password" class="form-control" id="login-password"
                                        name="login-password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-0 text-start pb-0">(?????????????????????????????????????????????????????????????????????)</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-end align-top pt-0">
                                    <div class="pe-3 d-inline-block"> <a href="javascript:void(0);"
                                            class="pink">????????????</a>
                                    </div>
                                    <div class="pe-3 d-inline-block"> <a
                                            href="<?php echo get_site_url();?>/member-register" class="pink">????????????</a>
                                    </div>
                                    <input type="submit" class="form-submit-btn" value="????????????">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <?php
            }
                ?>

            </div>


            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">????????????</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>
            </div>

            <div class="position-relative mt-4">
                <form action="" class="login-form" id="payment-form" method="post">


                    <select novalidate id="any-date" name="any-date" class="form-select any-date d-none" aria-label="">
                        <option value="" selected="">??????</option>
                        <?php
                                    for($i=0;$i<count($random_date_select_option_arr);$i++)
                                    {
                                     echo '<option value="'.$random_date_select_option_arr[$i].'">'.$random_date_select_option_arr[$i].'</option>';   
                                    }
                                    ?>
                    </select>

                    <input type="hidden" name="is-member" id="is-member" value="0">
                    <input type="hidden" name="form-type" value="reg">
                    <table>
                        <tbody>
                            <tr
                                class="init-info-cover <?php echo $_SESSION['login_member_id'] ? 'd-block':'d-none'  ?>">
                                <td colspan="2" class="border-0"></td>
                            </tr>

                            <tr>
                                <td class="text-end"><label for="register-email">???????????????*</label></td>
                                <td><input required type="text" class="form-control" id="register-email"
                                        name="register-email" value="<?php echo get_field('login_email');?>"></td>
                            </tr>

                            <tr>
                                <td class="text-end"><label for="tel">???????????????*</label></td>
                                <td><input required type="text" class="form-control" id="tel" name="tel"
                                        value="<?php echo get_field('tel');?>"></td>
                            </tr>


                            <tr>
                                <td class="text-end">?????????*</td>
                                <td>
                                    <label class="me-2"><input <?php echo get_field('gender')=='???' ? 'checked' :''   ?>
                                            required class="me-1" type="radio" name="gender" value="???">???</label>
                                    <label class="me-2"><input <?php echo get_field('gender')=='???' ? 'checked' :''   ?>
                                            class="me-1" type="radio" name="gender" value="???">???</label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <label for="first-name">?????????*</label>

                                </td>
                                <td>
                                    <input required value="<?php echo get_field('first_name');?>" type="text"
                                        class="form-control" id="first-name" name="first-name">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="age">?????????*</label>
                                </td>
                                <td>
                                    <select required id="age" name="age" class="form-select" aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option <?php echo get_field('age')=='20-29' ? 'selected' :''   ?>
                                            value="20-29">
                                            20-29</option>
                                        <option <?php echo get_field('age')=='30-34' ? 'selected' :''   ?>
                                            value="30-34">
                                            30-34</option>
                                        <option <?php echo get_field('age')=='35-39' ? 'selected' :''   ?>
                                            value="35-39">
                                            35-39</option>
                                        <option <?php echo get_field('age')=='40?????????' ? 'selected' :''   ?>
                                            value="40?????????">
                                            40?????????</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="  text-end">
                                    <label for="like-food">????????????????????????*</label>
                                </td>
                                <td>
                                    <select readonly required id="like-food" name="like-food" class="form-select"
                                        aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option <?php echo get_field('like_food')=='???' ? 'selected' :''   ?> value="???">???
                                        </option>
                                        <option <?php echo get_field('like_food')=='???' ? 'selected' :''   ?> value="???">???
                                        </option>
                                        <option <?php echo get_field('like_food')=='???' ? 'selected' :''   ?> value="???">???
                                        </option>
                                        <option <?php echo get_field('like_food')=='???' ? 'selected' :''   ?> value="???">???
                                        </option>
                                        <option <?php echo get_field('like_food')=='???' ? 'selected' :''   ?> value="???">???
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>

                                <td class=" text-end">
                                    <label for="dislike-food">???????????????????????????*</label>
                                </td>
                                <td>

                                    <select required id="dislike-food" name="dislike-food" class="form-select"
                                        aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option <?php echo get_field('dislike_food')=='???' ? 'selected' :''   ?>
                                            value="???">???
                                        </option>
                                        <option <?php echo get_field('dislike_food')=='???' ? 'selected' :''   ?>
                                            value="???">???
                                        </option>
                                        <option <?php echo get_field('dislike_food')=='???' ? 'selected' :''   ?>
                                            value="???">???
                                        </option>
                                        <option <?php echo get_field('dislike_food')=='???' ? 'selected' :''   ?>
                                            value="???">???
                                        </option>
                                        <option <?php echo get_field('dislike_food')=='???' ? 'selected' :''   ?>
                                            value="???">???
                                        </option>
                                    </select>

                                </td>
                            </tr>
                            <tr class="position-relative" style="z-index:10000">
                                <td><label for="join-charm-workshop">?????????????????????(??????)<br>???????????????????????????????????????</label></td>
                                <td>
                                    <input type="checkbox" id="join-charm-workshop" name="join-charm-workshop"
                                        value="1">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>

                        <?php                 if($_GET['person']==2 )

{
    ?>
                        <tbody class="another-friend-tbody">
                            <tr>
                                <td colspan="2" class="border-0">

                                    <div class="position-relative mt-3">
                                        <h3 class="title-type-pink-line">??????????????????????????????</h3>

                                        <div class="text-center">
                                            <div class="title-pink-line"></div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-end"><label for="register-email-1">???????????????*</label></td>
                                <td><input required type="text" class="form-control" id="register-email-2"
                                        name="register-email-2"></td>
                            </tr>

                            <tr>
                                <td class="text-end"><label for="tel-2">???????????????*</label></td>
                                <td><input required type="text" class="form-control" id="tel-2" name="tel-2"></td>
                            </tr>


                            <tr>
                                <td class="text-end">?????????*</td>
                                <td>
                                    <label class="me-2"><input required class="me-1" type="radio" name="gender-2"
                                            value="???">???</label>
                                    <label class="me-2"><input class="me-1" type="radio" name="gender-2"
                                            value="???">???</label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <label for="first-name-2">?????????*</label>

                                </td>
                                <td>
                                    <input required type="text" class="form-control" id="first-name-2"
                                        name="first-name-2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="age-2">?????????*</label>
                                </td>
                                <td>
                                    <select required id="age-2" name="age-2" class="form-select" aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option value="20-29">20-29</option>
                                        <option value="30-34">30-34</option>
                                        <option value="35-39">35-39</option>
                                        <option value="40?????????">40?????????</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="  text-end">
                                    <label for="like-food-2">????????????????????????*</label>
                                </td>
                                <td>
                                    <select required id="like-food-2" name="like-food-2" class="form-select"
                                        aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>

                                <td class=" text-end">
                                    <label for="dislike-food-2">???????????????????????????*</label>
                                </td>
                                <td>

                                    <select required id="dislike-food-2" name="dislike-food-2" class="form-select"
                                        aria-label="">
                                        <option value="" selected="">??????</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                        <option value="???">???</option>
                                    </select>

                                </td>
                            </tr>

                            <tr class="position-relative" style="z-index:10000">
                                <td><label for="join-charm-workshop-2">?????????????????????(??????)<br>???????????????????????????????????????</label></td>
                                <td>
                                    <input type="checkbox" id="join-charm-workshop-2" name="join-charm-workshop-2"
                                        value="1">
                                </td>
                            </tr>


                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <?php

}
?>

                        <tbody>
                            <tr>
                                <td colspan="2" class="border-0">

                                    <div class="position-relative mt-3">
                                        <h3 class="title-type-pink-line">????????????</h3>

                                        <div class="text-center">
                                            <div class="title-pink-line"></div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>???????????????</td>
                                <td class="">$<?php 
                                if($_GET['person']==2)
                                {
                                    echo $two_people_discount_price.' x 2 = $'.$two_people_discount_price*2;
                                    $final_price=   $two_people_discount_price*2;
                                }
                                
                                if($_GET['person']==1)
                                {
                                    // echo 999;
                                    $final_price=  $current_price;
                                    // get_field('price');


                                  ?>
                                    <span class="final-price"><?php echo $current_price;?></span>
                                    <?php
                                }
                                
                                

                                ?>
                                    <input type="hidden" name="final-price" value="<?php echo $final_price; ?>">
                                    <input type="hidden" name="person" value="<?php echo $_GET['person'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="payment-method">????????????</label></td>
                                <td>
                                    <label class="me-2"><input checked class="me-1" type="radio" name="payment-method"
                                            value="???????????????">???????????????</label>
                                    <label class="me-2"><input class="me-1" type="radio" name="payment-method"
                                            value="?????????/Payme??????">?????????/Payme??????</label>


                                    <!-- <select name="payment-method" id="payment-method" class="form-select">

                                        <option value="" selected="">??????</option>
                                        <option value="???????????????">???????????????</option>
                                        <option value="?????????/Payme??????">?????????/Payme??????</option>

                                    </select> -->
                                </td>
                            </tr>

                            <tr class="payment-method-tr payment-method-tr-1">
                                <td>???????????????</td>
                                <td>
                                    <div class="form-row card-element-main">

                                        <div id="card-element">
                                        </div>

                                        <div id="card-errors" role="alert"></div>

                                    </div>

                                </td>
                            </tr>
                            <tr class="payment-method-tr payment-method-tr-2">
                                <td>?????????/Payme??????</td>
                                <td>???????????????????????????ID/Payme QRcode??????</td>
                            </tr>

                            <tr>
                                <td>??????SweetDate???<br><a class="pink" target="_blank"
                                        href="<?php echo get_site_url();?>/tnc">?????????????????????</a> </td>
                                <td>
                                    <input type="checkbox" id="agree-tnc" name="agree-tnc" value="1">

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td class="text-end">
                                    <button class="form-submit-btn">????????????</button>
                                    <!-- <input type="submit" value="????????????" class="form-submit-btn"> -->
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </form>


                <div class="external-card-element"></div>


            </div>



            <?php
            
            
if($_POST['form-type']=='reg')
{

    
    ?>
            <script type="text/javascript">
            $(function() {
                $('.step.step-1').fadeOut(0);
            })
            </script>
            <?php
    
    
    require_once('./stripe-test/stripe/init.php');
    
    \Stripe\Stripe::setApiKey('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');

    
    $token = $_POST['stripeToken'];
    
    $IMEI = $_POST['ImeiNum'];
    // echo $token.' '.$charge_final_price.' '.$IMEI;

    
 
    try {
 

        if($_POST['payment-method']=='???????????????')
        {
            $charge = \Stripe\Charge::create(array(
                "amount" => $charge_final_price,
                "currency" => "hkd",
                "source" => $token,
                "description" => '',
                "metadata" => array("IMEI" => $IMEI)
                )
              );
    
        }
       
        

        
        if($charge->paid || $_POST['payment-method']=='?????????/Payme??????')
        {
            
            date_default_timezone_set('Asia/Hong_Kong');


            // wp_mail()
            
            wp_mail( get_bloginfo('admin_email'), get_field('activity_title').'??????????????????'.date('d-m-y h:i:s'),get_field('activity_title').'??????????????????'.date('d-m-y h:i:s').':<br><br>???login admin ????????????<br>https://sweetdate.com.hk/wp-admin/post.php?post=398&action=edit'  );

            // date('d-m-y h:i:s')

            if($_POST['payment-method']=='?????????/Payme??????')
            {
                $balance_transaction='fps/payme';   
            }
            else
            {
                $balance_transaction = $charge->id;
            }

            $random_date_select=$_POST['any-date'];

            
            if($_POST['person']==1)
            {
                // echo 111;

              
                // echo 999;

                if(!$_POST['is-member'])
                {
                        
                    $post_id = wp_insert_post(array (
                        'post_type' => 'nonmember',
                        'post_title' =>$_POST['first-name'].' '.$_POST['last-name'],
                        'post_status' => 'publish',
                        'comment_status' => 'closed',   // if you prefer
                        'ping_status' => 'closed',      // if you prefer
                    ));

                    $nonmember_id = 'NM'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);
                    $register_email=$_POST['register-email'];
                    $tel=$_POST['tel'];
                    $gender=$_POST['gender'];
                    $first_name=$_POST['first-name'];
                    $age = $_POST['age'];
                    $like_food=$_POST['like-food'];
                    $dislike_food=$_POST['dislike-food'];
                    // $random_date_select=$_POST['any-date'];
                    
                    if ($post_id) {
                        add_post_meta($post_id,'secretcode',$randomString);
                        add_post_meta($post_id, 'non_member_id', $nonmember_id);
                        add_post_meta($post_id, 'login_email', $register_email);
                        add_post_meta($post_id, 'tel', $tel);
                        add_post_meta($post_id, 'gender', $gender);
                        add_post_meta($post_id, 'first_name', $first_name);
                        add_post_meta($post_id, 'age', $age);
                        add_post_meta($post_id, 'like_food', $like_food);
                        add_post_meta($post_id, 'dislike_food', $dislike_food);
                        // add_post_meta($post_id, 'random_date_select', $random_date_select);

                    }
                    $row = array(
                        'non_member_id' => $nonmember_id,
                        'transaction_id'   => $balance_transaction,
                        'date_of_purchase' => date('d-m-y h:i:s'),
                        'non_member_info_url' => $post_id,
                        'random_date_select' => $random_date_select,
                        'join_charm_workshop' => $_POST['join-charm-workshop'] ? '1' :'0'
                    );
                    add_row('applied_non_member', $row,$current_post_id);

                $sent_content= $_POST['first-name'].' ?????????<br><br>'.$email_content.'<br>??????????????????????????????????????????????????????????????????????????????????????????<br>'.get_site_url().'/nonmember-info/?nmid='.$post_id.'&sc='.$randomString.'<br><br><br>Sweetdate';
                wp_mail( $_POST['register-email'], $email_title, $sent_content );


                }
                else
                {
                    $row = array(
                        'member_id' => $_SESSION['login_member_id'],
                        'transaction_id'   => $balance_transaction,
                        'date_of_purchase' => date('d-m-y h:i:s'),
                        'member_info_url' => $_SESSION['mid'],
                        'random_date_select' => $random_date_select,
                        'join_charm_workshop' => $_POST['join-charm-workshop'] ? '1' :'0'

                    );
                    add_row('applied_member', $row,$current_post_id);
                    
                    $sent_content= $_POST['first-name'].' ?????????<br><br>'.$email_content.'<br><br><br>Sweetdate';
                    wp_mail( $_POST['register-email'], $email_title, $sent_content );

                    
                }

                
                
            }


            if($_POST['person']==2)
            {
                // echo 12345678;
                // echo 123;
                // echo $_POST['is-member'];
                // echo 999;
                

                if(!$_POST['is-member'])
                {

                     //1st person
                    $post_id = wp_insert_post(array (
                        'post_type' => 'nonmember',
                        'post_title' =>$_POST['first-name'].' '.$_POST['last-name'],
                        'post_status' => 'publish',
                        'comment_status' => 'closed',   // if you prefer
                        'ping_status' => 'closed',      // if you prefer
                    ));
                
                    $nonmember_id = 'NM'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);
                    $register_email=$_POST['register-email'];
                    $tel=$_POST['tel'];
                    $gender=$_POST['gender'];
                    $first_name=$_POST['first-name'];
                    $age = $_POST['age'];
                    $like_food=$_POST['like-food'];
                    $dislike_food=$_POST['dislike-food'];
                    
                    if ($post_id) {
                        add_post_meta($post_id,'secretcode',$randomString);


                        add_post_meta($post_id, 'non_member_id', $nonmember_id);
                        add_post_meta($post_id, 'login_email', $register_email);
                        add_post_meta($post_id, 'tel', $tel);
                        add_post_meta($post_id, 'gender', $gender);
                        add_post_meta($post_id, 'first_name', $first_name);
                        add_post_meta($post_id, 'age', $age);
                        add_post_meta($post_id, 'like_food', $like_food);
                        add_post_meta($post_id, 'dislike_food', $dislike_food);
                    }
                    $row = array(
                        'non_member_id' => $nonmember_id,
                        'transaction_id'   => $balance_transaction,
                        'date_of_purchase' => date('d-m-y h:i:s'),
                        'non_member_info_url' => $post_id,
                        'random_date_select' => $random_date_select,
                        'join_charm_workshop' => $_POST['join-charm-workshop'] ? '1' :'0'

                    );
                    add_row('applied_non_member', $row,$current_post_id);
                    
                    $sent_content= $_POST['first-name'].' ?????????<br><br>'.$email_content.'<br>??????????????????????????????????????????????????????????????????????????????????????????<br>'.get_site_url().'/nonmember-info/?nmid='.$post_id.'&sc='.$randomString.'<br><br><br>Sweetdate';
                    wp_mail( $_POST['register-email'], $email_title, $sent_content );

                    
                
                }
                else
                {
                    // echo  777.' '.;
                    $row = array(
                        'member_id' => $_SESSION['login_member_id'],
                        'transaction_id'   => $balance_transaction,
                        'date_of_purchase' => date('d-m-y h:i:s'),
                        'member_info_url' => $_SESSION['mid'],
                        'random_date_select' => $random_date_select,
                        'join_charm_workshop' => $_POST['join-charm-workshop'] ? '1' :'0'

                        
                    );
                    add_row('applied_member', $row,$current_post_id);
                    
                    $sent_content= $_POST['first-name'].' ?????????<br><br>'.$email_content.'<br><br><br>Sweetdate';
                    wp_mail( $_POST['register-email'], $email_title, $sent_content );

                }
                
                //2nd person
                $post_id = wp_insert_post(array (
                    'post_type' => 'nonmember',
                    'post_title' =>$_POST['first-name-2'].' '.$_POST['last-name-2'],
                    'post_status' => 'publish',
                    'comment_status' => 'closed',   // if you prefer
                    'ping_status' => 'closed',      // if you prefer
                ));
                
                $nonmember_id = 'NM'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);
                $register_email=$_POST['register-email-2'];
                $tel=$_POST['tel-2'];
                $gender=$_POST['gender-2'];
                $first_name=$_POST['first-name-2'];
                $age = $_POST['age-2'];
                $like_food=$_POST['like-food-2'];
                $dislike_food=$_POST['dislike-food-2'];
            
              
                if ($post_id) {
                    add_post_meta($post_id,'secretcode',$randomString);

                    
                    add_post_meta($post_id, 'non_member_id', $nonmember_id);
                    add_post_meta($post_id, 'login_email', $register_email);
                    add_post_meta($post_id, 'tel', $tel);
                    add_post_meta($post_id, 'gender', $gender);
                    add_post_meta($post_id, 'first_name', $first_name);
                    add_post_meta($post_id, 'age', $age);
                    add_post_meta($post_id, 'like_food', $like_food);
                    add_post_meta($post_id, 'dislike_food', $dislike_food);
                    
                    
                }

                $row = array(
                    'non_member_id' => $nonmember_id,
                    'transaction_id'   => $balance_transaction,
                    'date_of_purchase' => date('d-m-y h:i:s'),
                    'non_member_info_url' => $post_id,
                    'random_date_select' => $random_date_select,
                    'join_charm_workshop' => $_POST['join-charm-workshop-2'] ? '1' :'0'
                );
                add_row('applied_non_member', $row,$current_post_id);

                
                $sent_content= $_POST['first-name-2'].' ?????????<br><br>'.$email_content.'<br>??????????????????????????????????????????????????????????????????????????????????????????<br>'.get_site_url().'/nonmember-info/?nmid='.$post_id.'&sc='.$randomString.'<br><br><br>Sweetdate';
                wp_mail( $_POST['register-email-2'], $email_title, $sent_content );

                
              
    
            }
            

         
            
            $_SESSION['paid']=1;



            
            ?>
            <script type="text/javascript">
            $(function() {
                // alert(5);
                setTimeout(() => {
                    $('.step').fadeOut(0);
                    $('.step.step-3').fadeIn(200);
                    $('.agree-decide-other-date-div,.one-ppl-discount,.one-ppl-no-discount,.coupon-discount-div')
                        .fadeOut(0);
                }, 100);

                localStorage.removeItem('any-date');
                localStorage.clear();




            })
            </script>
            <?php
        }
        
        // echo $charge->id;
    }catch(\Stripe\Error\Card $e){
        echo $e->getMessage();
    }

}
// echo 999;
    ?>




        </div>
        <?php //echo $_POST['final-price']*100;?>
        <div class="step step-3 text-center mt-5">
            <?php 

if($_POST['payment-method']=='?????????/Payme??????')
{
?>

            <h4 class="pink">
                ???????????????????????????????????????????????????????????? <br>
            </h4>

            <div class="mt-4">

                <ol class="text-start">
                    <li>???????????????????????????????????????????????????????????????????????????:
                        ????????????????????????(???????????????)???Stripe(credit card)?????????Payme???FPS???7420482???</li>
                    <li>???????????????????????????WhatsApp 66929252 Vivian??????????????????????????????</li>
                    <li>?????????????????????????????????</li>
                    <li>????????????????????????????????????????????????????????????</li>
                </ol>

                <div>
                    ????????????????????????WhatsApp?????????6692 9252 Vivian
                </div>
                <div class="mt-4 text-start">

                    <img class="" style="width: 155px;"
                        src="https://sweetdate.com.hk/wp-content/uploads/2022/04/Payme.jpg" alt="" width="140"
                        height="155"><img style="width: 200px;"
                        src="https://sweetdate.com.hk/wp-content/uploads/2022/04/payme-code.jpeg" alt="">&nbsp; <span
                        style="color: var(--global--color-primary); font-family: var(--global--font-secondary); font-size: var(--global--font-size-base);"><strong>Payme</strong>:
                        payme.hsbc/sweetdate</span>

                    &nbsp;
                    <div class="mt-4 text-start">

                        <img class="" style="width: 138px;"
                            src="https://sweetdate.com.hk/wp-content/uploads/2022/04/FPS.jpg" alt="" width="128"
                            height="130">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;<strong
                            style="color: var(--global--color-primary); font-family: var(--global--font-secondary); font-size: var(--global--font-size-base);">FPS
                            ID</strong><span
                            style="color: var(--global--color-primary); font-family: var(--global--font-secondary); font-size: var(--global--font-size-base);">:
                            7420482</span>

                    </div>
                </div>

            </div>

            <!-- <div class="mt-4">???????????????????????????/Payme??????($<?php echo $_POST['final-price']?>)<br>???????????????payme qrcode ???fps id ??????
                <br>
                ???????????????????????????WhatsApp 66929252 Vivian????????????(???????????????????????????)?????????????????????????????? <br>




            </div>
            <div>
                <div>FPS ID: 7420482</div> <br>
                <img src="https://sweetdate.com.hk/wp-content/uploads/2022/04/payme-code.jpeg" alt="">
            </div> -->


            <?php
}
else
{
    ?>
            <h4 class="pink">????????????????????????????????????????????????????????????</h4>

            <?php
}
            ?>



        </div>

    </div>



</div>




</div>

<script type="text/javascript">
$(function() {

    $('input[name="payment-method"]').change(function() {

        if ($(this).val() == '???????????????') {
            $('.payment-method-tr').fadeOut(0);
            $('.payment-method-tr.payment-method-tr-1').fadeIn(0);
        }


        if ($(this).val() == '?????????/Payme??????') {

            $('.payment-method-tr').fadeOut(0);
            $('.payment-method-tr.payment-method-tr-2').fadeIn(0);

        }

        // alert($(this).val());
    })


    var jump_to_step_2 = <?php if($_SESSION['login_member_id']) { echo 'true';}else{
        echo 'false';
    }  ?>;

    if (jump_to_step_2) {
        // $('.step').fadeOut(0);
        $('.step.step-2').fadeIn(0);
        $('#is-member').val(1);

        if (localStorage.getItem('any-date')) {
            $('.any-date').val(localStorage.getItem('any-date'))
            $('#agree-decide-other-date').click();
            $('#agree-decide-other-date').attr('disabled', 'disabled');
            $('#any-date').attr('disabled', 'disabled');
        }

    }

    $('.first.login-form').submit(function() {

        var login_email = $('#login-email').val();
        var login_password = $('#login-password').val();
        $.ajax({
            type: "POST",
            url: '<?php echo get_site_url();?>/wp-json/api/member-login',
            data: {
                login_email: login_email,
                login_password: login_password
            },
            dataType: "json",
            success: function(data) {
                // console.log(data);
                if (data.status === '1') {

                    // $('.lightbox').fadeIn(200);
                    // $('.lightbox-msg-txt').html('????????????');
                    localStorage.setItem('any-date', $('.any-date').val());

                    // localStorage.setItem('loginned', true);

                    location.reload();


                    // alert('logined');
                    // window.location = "";
                }

                if (data.status === '-1') {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html('??????????????????????????????');


                    // alert('??????????????????????????????');
                    // alert('!');
                    // $('#captcha-txt').next().next('.error').html(err8_str);
                }
            }
        });

        return false;
    })


    $('.reg-btn').click(function() {

        if ($('#agree-decide-other-date').is(":checked") && $('#any-date').val() == '') {
            $('.lightbox').fadeIn(200);
            $('.lightbox-msg-txt').html('???????????????????????????');
        } else {


            $('#agree-decide-other-date').attr('disabled', 'disabled');
            $('#any-date').attr('disabled', 'disabled');
            $('.step').fadeOut(0);
            $('.step.step-2').fadeIn(200);
        }


    })


    $('#any-date').change(function() {

        if ($('.any-date').val() != '') {
            $('#agree-decide-other-date').attr('checked', 'checked');
        } else {
            $('#agree-decide-other-date').removeAttr('checked');
        }
        $('.any-date').val($(this).val());

    })
})


// Create a Stripe client.
var stripe = Stripe(
    'pk_live_51L23KcCOVE1KjROYXG38bBoNpN9ZFz42DxTO3v9l85pJDz9i34SKBypef52Yii1PeGQirm3sOR8cbAJZc2npHwKN006eK0tEwT');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

// Create an instance of the card Element.
var card = elements.create('card', {
    hidePostalCode: true,
    style: style
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {

    if ($('input[name="payment-method"]:checked').val() == '???????????????') {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    }

});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {

    if (!$('#agree-tnc').is(":checked")) {
        error_txt = "";
        error_txt += '??????????????????SweetDate???????????????????????? </br>';
        if (error_txt) {
            $('.lightbox').fadeIn(200);
            $('.lightbox-msg-txt').html(error_txt);
            event.preventDefault();
        }
    } else
    if ($('input[name="payment-method"]:checked').val() == '???????????????') {
        event.preventDefault();


        stripe.createToken(card).then(function(result) {

            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }

        });
    }



});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form




    var error_txt = '';
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#register-email').val()))) {
        error_txt +=
            '?????????????????????</br>';
    }

    if (!(/^[0-9]{8}$/.test($('#tel').val()))) {
        error_txt += '???????????????????????????</br>';
    }


    <?php
            if($_GET['person'] == 2)
            {
                ?>
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#register-email-2').val()))) {
        error_txt +=
            '???????????????????????????????????????</br>';
    }

    if (!(/^[0-9]{8}$/.test($('#tel-2').val()))) {
        error_txt += '?????????????????????????????????????????????</br>';
    }
    <?php
            }
    ?>



    if (error_txt) {
        $('.lightbox').fadeIn(200);
        $('.lightbox-msg-txt').html(error_txt);

    } else {

        $('.lightbox').fadeIn(200);
        $('.lightbox-msg-txt').html('?????????????????????????????????');





        form.submit();
    }



}
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