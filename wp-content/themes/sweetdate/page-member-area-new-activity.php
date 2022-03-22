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
        <h2 class="title-type-pink-line">會員專區</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>

    <ul class="filter-ul mt-4">
        <li>
            <a class="active" href="<?php echo get_site_url();?>/member-area-new-activity" rel="login-form">最新活動
            </a>
        </li>
        <li>
            <a class="" href="<?php echo get_site_url();?>/member-area-joined-activity" rel="detail-form">已參加活動
            </a>
        </li>

        <li>
            <a class="" href="<?php echo get_site_url();?>/member-info" rel="detail-form">會員資料
            </a>
        </li>




    </ul>


    <div class="main-content mt-5">



        fdsf






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