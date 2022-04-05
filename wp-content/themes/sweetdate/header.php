<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
session_start();
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <script type="text/javascript">
    $(function() {


        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) { // ESC
                $('.lightbox').fadeOut(0);


            }
        });
        $('.close-btn,.lightbox-bg-btn').click(function() {
            $('.lightbox').fadeOut(0);
        })
    })
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="lightbox" style="">
        <div class="lightbox-bg-btn ">
        </div>
        <div class="lightbox-content lightbox-msg" style="">
            <a href="javascript:void(0);" class="close-btn">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/close-btn.png" alt="">
            </a>
            <span class="lightbox-msg-txt d-block p-3"></span>
        </div>
    </div>




    <?php

// $args = array(  
//     'post_type' => 'config',
//     'post_status' => 'publish',
//     'posts_per_page' => -1, 
// );

// $query = new WP_Query( $args ); 
 
// $query->the_post(); 
// $wts=get_field('whatsapp_no');
?>


    <a href="javascript:void(0);" class="menu-close-btn"></a>

    <div id="page" class="site">


        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'sweetdate' ); ?></a>


        <div class=" top-menu-div pt-1 container">
            <div class="row align-items-center">

                <a href="<?php echo get_site_url();?>" class="logo-a col-2">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/sd-logo-new.jpg" alt="">
                </a>


                <ul class=" top-menu-ul col-8">

                    <li class="mobile-logo-li"> <a href="<?php echo get_site_url();?>" class="logo-a col-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/sd-logo-new.jpg" alt="">
                        </a></li>
                    <?php
                                    $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
// $class = $menu_item['class'];

 $class = '';

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
  
    echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title.'</a>';

 
    echo '<ul class="mobile-menu-submenu">';
?>

                    <?php
    
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}



?>


                    <!-- <ul class="user-menu-ul"> -->

                    <?php

if(!$_SESSION['login_member_id'])
{
?>

                    <li><a href="<?php echo get_site_url();?>/member-register"><img
                                src="<?php echo get_template_directory_uri()?>/assets/images/reg-icon.png" alt="">
                            會員註冊f</a></li>

                    <?php
}
?>
                    <?php
if($_SESSION['login_member_id'])
{
    ?>
                    <li><a href="<?php echo get_site_url();?>/member-area-new-activity"><img
                                src="<?php echo get_template_directory_uri()?>/assets/images/account-icon.png" alt="">
                            會員專區</a></li>
                    <?php
}
?>


                    <?php

if($_SESSION['login_member_id'])
{
   ?>
                    <li><a href="<?php echo get_site_url();?>/member-logout"><img
                                src="<?php echo get_template_directory_uri()?>/assets/images/logout-icon.png" alt="">
                            登出</a></li>
                    <?php
}
else
{
   ?>
                    <li><a href="<?php echo get_site_url();?>/member-login"><img
                                src="<?php echo get_template_directory_uri()?>/assets/images/login-icon.png" alt="">
                            登入</a></li>
                    <?php
}

?>

                    <!-- </ul> -->



                    <li class="m-0 ms-2">
                        <a class="sns-a" href="javascript:void()">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/ig-icon.png" alt="">
                        </a>
                        <a class="sns-a" href="javascript:void(0);">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/fb-icon.png" alt="">
                        </a>
                    </li>




                </ul>





                </ul>

                <div class="col-8 text-end mobile-menu-btn-div">
                    <a href="#" class="mobile-menu-btn"> <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="col-2 user-menu-div">

                    <ul class="user-menu-ul">

                        <?php

if(!$_SESSION['login_member_id'])
{
?>

                        <li><a href="<?php echo get_site_url();?>/member-register"><img
                                    src="<?php echo get_template_directory_uri()?>/assets/images/reg-icon.png" alt="">
                                會員註冊</a></li>

                        <?php
}
?>
                        <?php
                        if($_SESSION['login_member_id'])
                        {
                            ?>
                        <li><a href="<?php echo get_site_url();?>/member-area-new-activity"><img
                                    src="<?php echo get_template_directory_uri()?>/assets/images/account-icon.png"
                                    alt="">
                                會員專區</a></li>
                        <?php
                        }
                        ?>


                        <?php
                       
                       if($_SESSION['login_member_id'])
                       {
                           ?>
                        <li><a href="<?php echo get_site_url();?>/member-logout"><img
                                    src="<?php echo get_template_directory_uri()?>/assets/images/logout-icon.png"
                                    alt="">
                                登出</a></li>
                        <?php
                       }
                       else
                       {
                           ?>
                        <li><a href="<?php echo get_site_url();?>/member-login"><img
                                    src="<?php echo get_template_directory_uri()?>/assets/images/login-icon.png" alt="">
                                登入</a></li>
                        <?php
                       }

                       ?>

                    </ul>
                </div>
            </div>

        </div>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">