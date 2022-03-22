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

if($_POST)
{
    $login_email=$_POST['login-email'];
    $login_password=$_POST['login-password'];   


    $query_args = array(
        'post_type' => 'member',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'   => 'login_email',
                'value' => $login_email,
            ),
            array(
                'key'   => 'login_password',
                'value' => $login_password,
            )
        )
        
    );
    
    $loginned =false;

    $the_query = new WP_Query( $query_args );
    if ( $the_query->have_posts() ) {
        // $the_query->the
        $loginned=true;
        $the_query->the_post();

        // echo 222;
        // echo get_field('member_id');
        $_SESSION['login_member_id']=get_field('member_id');
        ?>
<script type="text/javascript">
$(function() {

    $('.login-form').addClass('text-center');
    $('.login-form').html('登入成功，三秒後返回主頁。');
    setTimeout(() => {
        window.location = '<?php echo get_site_url();?>'
    }, 3000);

})
</script>
<?php
    }
    else
    {
        ?>
<script type="text/javascript">
$(function() {

    $('.error-msg').html('登入電郵或密碼不正確。');
})
</script>
<?php
    }
    
    
}
?>
<div class="container mt-3">


    <div class="relative">
        <h2 class="title-type-pink-line">會員登入</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>



    <div class="main-content mt-4">

        <div class="text-center">已登出，三秒後返回主頁</div>
        <script type="text/javascript">
        $(function() {
            // $('.login-form').addClass('text-center');
            // $('.login-form').html('登入成功，三秒後返回主頁。');
            // $_SESSION['member']
            $_SESSION['login_member_id'] = '';
            // get_field('member_id');

            setTimeout(() => {
                window.location = '<?php echo get_site_url();?>'
            }, 3000);

        })
        </script>


    </div>



</div>




</div>
<script type="text/javascript">
$(function() {


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