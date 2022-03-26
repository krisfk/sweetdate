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

if($_POST['form-type']=='reg' && $_SESSION['paid'])
{
     $_SESSION['paid'] ='';
    //  $_POST = array();


     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['postdata'] = $_POST;
        unset($_POST);
        // header("Location: ".$_SERVER['PHP_SELF']);
        // exit;
        global $wp;
        $current_url = home_url(add_query_arg(array(), $wp->request));
        
        header('Location: '.$current_url);


    }



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

                <h2 class="mt-3 text-center"> 成熟人士. 婚活族New Year Wish下午茶</h2>
            </div>
            <div class="col-12 mt-1  text-center">
                <ul class="news-act-info-ul">
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-cal-icon.png"
                                    alt="">
                            </div>
                            <div class="d-table-cell">
                                <?php echo get_field('activity_date');?></div>
                        </div>
                    </li>
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-clock-icon.png"
                                    alt="">
                            </div>
                            <div class="d-table-cell">
                                <?php echo get_field('activity_time');?></div>
                        </div>
                    </li>
                    <li>
                        <div class="d-table">
                            <div class="d-table-cell pe-1">
                                <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/pin-icon.png" alt="">
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

            <div class="col-6 gender-div-col male">
                <div class="gender-div male">
                    <table>
                        <tr>
                            <td class="gender-icon-td">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png" alt="">


                            </td>
                            <td class="">
                                <div class="row">

                                    <div class="col-7">名額 : <?php echo get_field('male_quota');?>人
                                        (<?php echo get_field('male_age_range');?>歲)</div>
                                    <div class="col-5">餘額 : <?php echo get_field('male_remain_quota');?>人</div>
                                    <div class="col-12 mt-1"><?php echo get_field('male_requirement');?></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-6 gender-div-col female">
                <div class="gender-div female">
                    <table>
                        <tr>
                            <td class="gender-icon-td">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/f-icon.png" alt="">


                            </td>
                            <td class="">
                                <div class="row">

                                    <div class="col-7">名額 : <?php echo get_field('female_quota');?>人
                                        (<?php echo get_field('female_age_range');?>歲)</div>
                                    <div class="col-5">餘額 : <?php echo get_field('female_remain_quota');?>人
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
            <?php 
                if($_GET['person']==2)
                {
                    ?>
            <span class="price me-2">二人同行優惠價: <span class="line-through">$<?php echo get_field('price');?></span>
                $<?php echo get_field('two_people_discount_price');?>/位</span>

            <?php
                }
                ?>

            <?php 
                if($_GET['person']==1)
                {
                    ?>
            <span class="price me-2">$<?php echo get_field('price');?>/位</span>

            <?php
                }
                ?>



        </div>


        <div class="step step-1">
            <div class="mt-3 text-center"> <a href="javascript:void(0);" class="reg-btn">活動報名</a>
            </div>


            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">活動詳情</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>

            </div>

            <div class="mt-3">

                <?php echo get_field('activity_long_content');?>
            </div>






            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">注意事項</h3>

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
                <span class="price me-2">二人同行優惠價: <span class="line-through">$<?php echo get_field('price');?></span>
                    $<?php echo get_field('two_people_discount_price');?>/位</span>

                <?php
                }
                ?>

                <?php 
                if($_GET['person']==1)
                {
                    ?>
                <span class="price me-2">$<?php echo get_field('price');?>/位</span>

                <?php
                }
                ?>

                <div class="mt-3"> <a href="javascript:void(0);" class="reg-btn">活動報名</a>
                </div>
            </div> -->
        </div>


        <div class="step step-2">

            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">活動報名</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>
            </div>

            <div class="position-relative mt-4">


                <form action="" class="login-form">
                    <input type="hidden" name="form-type" value="login">
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-end"><label for="login-email">登記電郵：</label></td>
                                <td><input type="text" class="form-control" id="login-email" name="login-email"></td>
                            </tr>
                            <tr>
                                <td class="text-end"><label for="login-password">登入密碼：</label> </td>
                                <td><input type="text" class="form-control" id="login-password" name="login-password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-0 text-start pb-0">(會員登入後會自動填寫以下個人資料及儲存報名記錄)</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-end align-top pt-0">
                                    <div class="pe-3 d-inline-block"> <a href="javascript:void(0);"
                                            class="pink">忘記密碼</a>
                                    </div>
                                    <div class="pe-3 d-inline-block"> <a
                                            href="<?php echo get_site_url();?>/member-register" class="pink">會員註冊</a>
                                    </div>
                                    <input type="submit" class="form-submit-btn" value="會員登入">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>


            <div class="position-relative mt-5">
                <h3 class="title-type-pink-line">個人資料</h3>

                <div class="text-center">
                    <div class="title-pink-line"></div>
                </div>
            </div>

            <div class="position-relative mt-4">
                <form action="" class="login-form" id="payment-form" method="post">
                    <input type="hidden" name="form-type" value="reg">
                    <table>
                        <tbody>


                            <tr>
                                <td class="text-end"><label for="register-email">登記電郵：*</label></td>
                                <td><input required type="text" class="form-control" id="register-email"
                                        name="register-email"></td>
                            </tr>

                            <tr>
                                <td class="text-end"><label for="tel">登記電話：*</label></td>
                                <td><input required type="text" class="form-control" id="tel" name="tel"></td>
                            </tr>


                            <tr>
                                <td class="text-end">姓別：*</td>
                                <td>
                                    <label class="me-2"><input required class="me-1" type="radio" name="gender"
                                            value="男">男</label>
                                    <label class="me-2"><input class="me-1" type="radio" name="gender"
                                            value="女">女</label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <label for="first-name">稱呼：*</label>

                                </td>
                                <td>
                                    <input required type="text" class="form-control" id="first-name" name="first-name">

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
                                <td class="  text-end">
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
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>

                        <tbody class="another-friend-tbody">
                            <tr>
                                <td colspan="2" class="border-0">

                                    <div class="position-relative mt-3">
                                        <h3 class="title-type-pink-line">另一位朋友的個人資料</h3>

                                        <div class="text-center">
                                            <div class="title-pink-line"></div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-end"><label for="register-email-1">登記電郵：*</label></td>
                                <td><input required type="text" class="form-control" id="register-email-2"
                                        name="register-email-2"></td>
                            </tr>

                            <tr>
                                <td class="text-end"><label for="tel-2">登記電話：*</label></td>
                                <td><input required type="text" class="form-control" id="tel-2" name="tel-2"></td>
                            </tr>


                            <tr>
                                <td class="text-end">姓別：*</td>
                                <td>
                                    <label class="me-2"><input required class="me-1" type="radio" name="gender-2"
                                            value="男">男</label>
                                    <label class="me-2"><input class="me-1" type="radio" name="gender-2"
                                            value="女">女</label>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <label for="first-name-2">稱呼：*</label>

                                </td>
                                <td>
                                    <input required type="text" class="form-control" id="first-name-2"
                                        name="first-name-2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="age-2">年齡：*</label>
                                </td>
                                <td>
                                    <select required id="age-2" name="age-2" class="form-select" aria-label="">
                                        <option value="" selected="">選擇</option>
                                        <option value="20-29">20-29</option>
                                        <option value="30-34">30-34</option>
                                        <option value="35-39">35-39</option>
                                        <option value="40或以上">40或以上</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td class="  text-end">
                                    <label for="like-food-2">最喜歡吃的食物：*</label>
                                </td>
                                <td>
                                    <select required id="like-food-2" name="like-food-2" class="form-select"
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

                                <td class=" text-end">
                                    <label for="dislike-food-2">最不喜歡吃的食物：*</label>
                                </td>
                                <td>

                                    <select required id="dislike-food-2" name="dislike-food-2" class="form-select"
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
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan="2" class="border-0">

                                    <div class="position-relative mt-3">
                                        <h3 class="title-type-pink-line">信用咭付款</h3>

                                        <div class="text-center">
                                            <div class="title-pink-line"></div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>報名費用：</td>
                                <td class="">$<?php 
                                if($_GET['person']==2)
                                {
                                    echo get_field('two_people_discount_price').' x 2 = $'.get_field('two_people_discount_price')*2;
                                    $final_price=   get_field('two_people_discount_price')*2;
                                }
                                ?>
                                    <input type="hidden" name="final-price" value="<?php echo $final_price; ?>">
                                    <input type="hidden" name="person" value="<?php echo $_GET['person'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>信用咭付款</td>
                                <td>
                                    <div class="form-row">

                                        <div id="card-element">
                                        </div>

                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-end">
                                    <button class="form-submit-btn">送出表格</button>
                                    <!-- <input type="submit" value="送出表格" class="form-submit-btn"> -->
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </form>



            </div>



            <?php
if($_POST['form-type']=='reg')
{

  
//   echo 11;  
//   echo $final_price*100;
    ?>
            <script type="text/javascript">
            $(function() {
                $('.step.step-1').fadeOut(0);
            })
            </script>
            <?php
    
    
    require_once('./stripe-test/stripe/init.php');

    \Stripe\Stripe::setApiKey('sk_test_g9irmT4kYqGJ7bZi4Z6bw4j100ZM9jPv5o');

    $token = $_POST['stripeToken'];

    $IMEI = $_POST['ImeiNum'];
    // echo $_POST['name'];
    // Number($_POST['final-price']*100)
    try {
        $charge = \Stripe\Charge::create(array(
        //   "amount" => $_POST('final-price')*100,
        "amount" => '3000',

          "currency" => "hkd",
          "source" => $token,
          "description" => '',
          "metadata" => array("IMEI" => $IMEI))
          

        //   '['.get_field('activity_title').']'.' '.$_POST['first-name'])
          //get_field('activity_title').' '.$_POST['first-name'].' '.$_POST('register-email').' '.$_POST('tel'))
        //   "metadata" => array("IMEI" => $IMEI))
        );

        // print_r()
        // echo 1234567;

        
        if($charge->paid)
        {

            $balance_transaction = $charge->balance_transaction;


            if($_POST['person']==2)
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
                    'transaction_id'   => $balance_transaction,
                    'date_of_purchase' => date('d-m-y h:i:s'),
                    'non_member_info_url' => $post_id
                );
                add_row('applied_non_member', $row);
                
                
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
                    'transaction_id'   => $balance_transaction,
                    'date_of_purchase' => date('d-m-y h:i:s'),
                    'non_member_info_url' => $post_id
                );
                add_row('applied_non_member', $row);
                
                


         
    

                
                

                
    
            }
            

         
            
            $_SESSION['paid']=1;
            ?>
            <script type="text/javascript">
            $(function() {
                $('.step').fadeOut(0);
                $('.step.step-3').fadeIn(200);

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

            ?>
            <h4 class="pink">我們已收到你的報名！會盡快聯絡您！謝謝！</h4>


        </div>

    </div>



</div>




</div>

<script type="text/javascript">
$(function() {

    $('.reg-btn').click(function() {
        $('.step').fadeOut(0);
        $('.step.step-2').fadeIn(200);

    })
})


// Create a Stripe client.
var stripe = Stripe('pk_test_yDDkdm4SUJ3xMn0veUBLRH6a00zg0gPxaT');

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
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
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
    form.submit();
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