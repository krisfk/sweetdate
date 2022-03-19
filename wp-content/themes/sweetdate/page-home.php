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
<div class="container mt-4">


    <div class="row gx-5">

        <div class="col-6">

            <img class="w-100" src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-img.jpg"
                alt="">

            <ul class="thumbanil-slide-ul">
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-2.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-3.jpg"
                            alt="">
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);">

                        <img class="w-100"
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-4.jpg"
                            alt="">
                    </a>

                </li>
            </ul>

        </div>

        <div class="col-6">

            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-1.png" alt="">
                        </div>
                        <div class="d-table-cell  align-middle">

                            <h2 class="d-inline-block m-0 ps-2">
                                關於蜜遇
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <a href="<?php echo get_site_url();?>/about-us" class="more-btn">詳細簡介 〉</a>
                </div>
            </div>

            <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>


            <div class="sep-line mt-4 mb-4"></div>

            <div class="row align-items-center">
                <div class="col-6">

                    <div class="d-table">
                        <div class="d-table-cell">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-2.png" alt="">
                        </div>
                        <div class="d-table-cell  align-middle">

                            <h2 class="d-inline-block m-0  ps-2">
                                最新資訊
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <a href="<?php echo get_site_url();?>/news" class="more-btn">更多資訊 〉</a>
                </div>
            </div>
            <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>

        </div>

    </div>

    <div class="successful-story-container mt-5">

        <div class="position-relative">
            <h2 class="title-type-pink-line">成功故事</h2>
            <!-- <a href="javascript:void(0);" class="more-btn position-absolute top-0 end-0">全部故事 〉</a> -->

        </div>


        <div class="successful-story-carousel mt-4">

            <div class="s-case-div">
                <a href="javascript:void(0);" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-1.jpg" alt="">
                    <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>
                </a>
            </div>
            <div class="s-case-div">
                <a href="javascript:void(0);" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-2.jpg" alt="">
                    <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>
                </a>
            </div>
            <div class="s-case-div">
                <a href="javascript:void(0);" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-3.jpg" alt="">
                    <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>
                </a>
            </div>
            <div class="s-case-div">
                <a href="javascript:void(0);" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-1.jpg" alt="">
                    <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>
                </a>
            </div>



        </div>
    </div>

    <div class="news-act-container mt-5">

        <div class="position-relative">
            <h2 class="title-type-pink-line">最新活動</h2>
            <a href="<?php echo get_site_url();?>/new-activities" class="more-btn position-absolute top-0 end-0">過往活動
                〉</a>

        </div>

        <div class="row mt-3">

            <?php
      
    $query_args = array(
        'post_type' => 'activity',
        'posts_per_page' => -1
     );
    
    // The Query
    $the_query = new WP_Query( $query_args );
    
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="col-6 mb-2">

                <a href="javascript:void(0);" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-1.jpg" alt="">
                    <div class="mt-4">


                        <h2><?php echo get_field('activity_title');?></h2>

                        <!-- wp_get_attachment_image()  -->
                        <?php echo wp_get_attachment_image_src(get_field('activity_main_image','full'));?>
                        <div>
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
                                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/pin-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">

                                            <?php echo get_field('activity_place');?></div>
                                    </div>
                                </li>
                            </ul>



                        </div>

                        <div class="mt-3">

                            <?php echo get_field('activity_short_content');?>

                            <!-- 來結織同樣希望以組織家庭為前題的對象! <br>
                            飲品及精美下午茶 <br>
                            創配對遊戲, 助你極速了解對象, 送精美奬品 <br>
                            一對一論流傾談時段 (每組4-6分鐘) <br>
                            使用Dating自動配對系統 (全電腦操作// 保證100% )
                         -->
                        </div>

                        <div class="gender-div male">
                            <table>
                                <tr>
                                    <td class="gender-icon-td">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png"
                                            alt="">


                                    </td>
                                    <td class="">
                                        <div class="row">

                                            <div class="col-5">名額 : <?php echo get_field('male_quota');?>人
                                                (<?php echo get_field('male_age_range');?>歲)</div>
                                            <div class="col-7">餘額 : <?php echo get_field('male_remain_quota');?>人</div>
                                            <div class="col-12 mt-1"><?php echo get_field('male_requirement');?></div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>


                        <div class="gender-div female">
                            <table>
                                <tr>
                                    <td class="gender-icon-td">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/f-icon.png"
                                            alt="">


                                    </td>
                                    <td class="">
                                        <div class="row">

                                            <div class="col-5">名額 : <?php echo get_field('female_quota');?>人
                                                (<?php echo get_field('female_age_range');?>歲)</div>
                                            <div class="col-7">餘額 : <?php echo get_field('female_remain_quota');?>人
                                            </div>
                                            <div class="col-12 mt-1"><?php echo get_field('female_requirement');?></div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>


                    </div>
                </a>
            </div>
            <?php
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }
            
            ?>




        </div>

    </div>


</div>




</div>

<script type="text/javascript">
$(function() {
    // successful - story - carousel

    $('.successful-story-carousel').slick({
        infinite: true,
        // slidesToShow: 3,
        // slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

})
// successful-story-carousel
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