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

    <h2 class="title-type-pink-line">最新資訊</h2>


    <div class="main-content mt-4">





        <div class="row mt-3">

            <?php
for($i=0;$i<4;$i++)
{
    ?>
            <div class="col-6 mb-2">

                <a href="#" class="s-case-div-a"><img
                        src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/s-foto-1.jpg" alt="">
                    <div class="mt-4">


                        <h2>成熟人士. 婚活族New Year Wish下午茶</h2>



                        <div>
                            <ul class="news-act-info-ul">
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-cal-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">
                                            12月9日</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/small-clock-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">
                                            15:30 - 17:00</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-table">
                                        <div class="d-table-cell pe-1">
                                            <img src="http://64.227.13.14/sweetdate/wp-content/uploads/2022/03/pin-icon.png"
                                                alt="">
                                        </div>
                                        <div class="d-table-cell">
                                            上環西餐廳 (鄰近MTR)</div>
                                    </div>
                                </li>
                            </ul>



                        </div>

                        <div class="mt-3">來結織同樣希望以組織家庭為前題的對象! <br>
                            飲品及精美下午茶 <br>
                            創配對遊戲, 助你極速了解對象, 送精美奬品 <br>
                            一對一論流傾談時段 (每組4-6分鐘) <br>
                            使用Dating自動配對系統 (全電腦操作// 保證100% )</div>

                        <div class="gender-div male">
                            <table>
                                <tr>
                                    <td class="gender-icon-td">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/m-icon.png"
                                            alt="">


                                    </td>
                                    <td class="">
                                        <div class="row">

                                            <div class="col-5">名額 : 10人 (36 ~ 41歲)</div>
                                            <div class="col-7">餘額 : 2人</div>
                                            <div class="col-12 mt-1">大學程度或以上, 穏定職業及希望組織家庭</div>
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

                                            <div class="col-5">名額 : 10人 (36 ~ 41歲)</div>
                                            <div class="col-7">餘額 : 2人</div>
                                            <div class="col-12 mt-1">大學程度或以上, 穏定職業及希望組織家庭</div>
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
?>


        </div>




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