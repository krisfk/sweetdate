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
        <h2 class="title-type-pink-line">titletitletitletitletitle</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>



    <div class="main-content mt-4">




        <div class="row mt-3">

            <div class="col-12 mb-4 position-relative">

                <div class="news-label">約會資訊</div>
                <a href="#" class="s-case-div-a"><img
                        src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/s-foto-1.jpg" alt="">
                    <div class="mt-4">


                        <h2>成熟人士. 婚活族New Year Wish下午茶</h2>





                        <div class="mt-3">來結織同樣希望以組織家庭為前題的對象! <br>
                            飲品及精美下午茶 <br>
                            創配對遊戲, 助你極速了解對象, 送精美奬品 <br>
                            一對一論流傾談時段 (每組4-6分鐘) <br>
                            使用Dating自動配對系統 (全電腦操作// 保證100% )</div>




                    </div>
                </a>
            </div>



        </div>




    </div>



</div>




</div>
<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $('.filter-ul li a').removeClass('active');
        $(this).addClass('active');
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