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
        <h2 class="title-type-pink-line">Q & A</h2>
        <div class="text-center">
            <div class="title-pink-line"></div>
        </div>
    </div>


    <div class="main-content mt-4">

        <?php
    // WP_Query arguments
    $args = array(
        'post_type'              => array( 'qnas' ),
        'num_of_posts' => -1
    );

    // The Query
    $query = new WP_Query( $args );
    if($query->have_posts())
    {
        $idx=1;
        while($query->have_posts())
        {
            $query->the_post();
       
            while( have_rows('qna') ){
                the_row(); 
                ?>
        <div class="qt-ans-group mb-3">

            <a href="javascript:void(0);" class="qt position-relative">

                <table>
                    <tr>
                        <td class="pe-3">
                            <span class="symbol">Q<?php echo $idx;?></span>
                        </td>
                        <td><?php echo get_sub_field('question');?></td>
                    </tr>
                </table>


                <img class="arrow" src="<?php echo get_template_directory_uri()?>/assets/images/down-arrow.png" alt="">
            </a>

            <div class="ans position-relative">

                <table>
                    <tr>
                        <td class="pe-3">
                            <span class="symbol">A<?php echo $idx;?></span>
                        </td>
                        <td><?php echo get_sub_field('answer');$idx++;?></td>
                    </tr>
                </table>



            </div>
        </div>
        <?php


                
            }  
        }
    }

    
    ?>








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