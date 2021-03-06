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
        <h2 class="title-type-pink-line">最新資訊</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>



    <div class="main-content-2 mt-4">



        <ul class="filter-ul">
            <li>
                <a class="active" href="javascript:void(0);" ref="all">顯示全部</a>
            </li>
            <!-- <li>
                <a href="javascript:void(0);" ref="activity">最新活動</a>
            </li> -->

            <?php

            $categories = get_categories();
            for($i=0;$i<count($categories);$i++)
            {
             ?>
            <?php if($categories[$i]->slug !='uncategorized')
             {

                ?>

            <li>
                <a href="javascript:void(0);"
                    ref="<?php echo $categories[$i]->slug;?>"><?php echo $categories[$i]->name;?></a>
            </li>
            <?php
             }
             ?>
            <?php   
            }
            // print_r( get_categories());
            ?>

            <!-- 
            <li>
                <a href="javascript:void(0);">約會資訊</a>
            </li>
            <li>
                <a href="javascript:void(0);">約會貼士</a>
            </li>
            <li>
                <a href="javascript:void(0);">成功故事</a>
            </li> -->

        </ul>

        <div class="row mt-5">

            <?php
        
        $args = array(
            'posts_per_page'   => -1,
            'post_type'        => 'post',
        );
        $the_query = new WP_Query( $args );
        
        
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            // go ahead
          ?>

            <?php
$category = get_the_category(); 

?>

            <div
                class="col-lg-4 col-md-6 col-sm-12 col-12  mb-4 position-relative article-div <?php echo $category[0]->slug;?>">

                <div class="news-label"><?php echo $category[0]->cat_name;?></div>
                <a href="<?php echo get_permalink();?>" class="s-case-div-a"><img
                        src="<?php echo wp_get_attachment_image_url(get_field('article_main_image'),'full');?>" alt="">
                    <div class="mt-4">

                        <h2><?php echo get_the_title();?></h2>

                        <div class="mt-3">
                            <?php
                echo get_field('article_short_content');
                ?>
                            <!-- 來結織同樣希望以組織家庭為前題的對象! <br>
                            飲品及精美下午茶 <br>
                            創配對遊戲, 助你極速了解對象, 送精美奬品 <br>
                            一對一論流傾談時段 (每組4-6分鐘) <br>
                            使用Dating自動配對系統 (全電腦操作// 保證100% ) -->

                        </div>


                    </div>
                </a>
            </div>


            <?php
        }
        
        
        
        ?>




        </div>




    </div>



</div>




</div>
<script type="text/javascript">
$(function() {

    $('.filter-ul li a').click(function() {

        $('.filter-ul li a').removeClass('active');
        $(this).addClass('active');

        if ($(this).attr('ref') == 'all') {
            $('.article-div').fadeIn(0);
        } else {
            $('.article-div').fadeOut(0);

        }

        $('.article-div.' + $(this).attr('ref')).fadeIn(0);
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