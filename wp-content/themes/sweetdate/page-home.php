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
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
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
                            src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/video-dummy-thumbnail-img-1.jpg"
                            alt="">
                    </a>

                </li>
            </ul>

        </div>

        <div class="col-6">

            <div class="row align-items-center">
                <div class="col-6">
                    <h2 class="d-inline-block m-0">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/icon-1.png" alt=""> 關於蜜遇
                    </h2>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="more-btn">詳細簡介 〉</a>
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
                        <div class="d-table-cell">

                            <h2 class="d-inline-block m-0">
                                最新資訊
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6 text-end">
                <a href="#" class="more-btn">更多資訊 〉</a>
            </div>
        </div>

        <div class="mt-4">為你成就緣份的專業配對團隊。尋找你人生伴侶。高端約會，交友，婚姻介紹。專業團隊，絕對保密。</div>


        <div class="sep-line mt-4 mb-4"></div>
    </div>
</div>

</div>
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