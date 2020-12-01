<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php
    if(rehub_option('theme_subset') == 'rething') {
        return include(rh_locate_template('rethingsub/inc/parts/query_type3.php'));
    }
    elseif(rehub_option('theme_subset') == 'repick') {
        return include(rh_locate_template('repicksub/inc/parts/query_type3.php'));
    }
?>
<?php 
global $post;
if (isset($aff_link) && $aff_link == '1') {
    $link = rehub_create_affiliate_link ();
    $target = ' rel="nofollow sponsored" target="_blank"';
}
else {
    $link = get_the_permalink();
    $target = '';  
}
?>
<article class="small_post col_item<?php if(is_sticky()) {echo " sticky";} ?>">
    <div class="top width-100p">
        <div class="cats_def">
            <?php
            if(rehub_option('exclude_cat_meta') != 1) {
                if ('post' == get_post_type($post->ID)) {
                    $category = get_the_category();
                    if($category){
                         if ( class_exists( 'WPSEO_Primary_Term' ) ) {
                            $wpseo_primary_term = new WPSEO_Primary_Term( 'category', $post->ID );
                            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
                            //$termyoast               = get_term( $wpseo_primary_term );
                            if (!is_numeric($wpseo_primary_term )) {
                                $first_cat = $category[0]->term_id;
                            }else{
                                $first_cat = $wpseo_primary_term; 
                            }
                        }else{
                            $first_cat = $category[0]->term_id; 
                        }
                        $output='';
                        $output .= '<a href="'.get_category_link($first_cat ).'" class="cat-'.$first_cat.'"';
                        $output .='>'.$category[0]->cat_name.'</a>';               
                        echo ''.$output;
                    }
                }
                elseif ('blog' == get_post_type($post->ID)) {
                    $term_list = get_the_term_list( $post->ID, 'blog_category', '', ' ', '' );
                    if($term_list && !is_wp_error($term_list)){
                        echo ''.$term_list;
                    }
                }                

            }
            ?>
         </div>
        <?php if (rehub_option('exclude_comments_meta') == 0) : ?><?php comments_popup_link( 0, 1, '%', 'comment_two', ''); ?><?php endif ;?>
    </div>
    <h2><?php if(is_sticky()) {echo "<i class='rhicon rhi-thumbtack'></i>";} ?><a href="<?php echo ''.$link;?>"<?php echo ''.$target;?>><?php the_title();?></a></h2>
    <div class="post-meta"> <?php meta_all( true, false, true ); ?> </div>
    <?php do_action( 'rehub_after_masonry_grid_meta' ); ?>
    <div class="mb10"><?php rehub_format_score('small') ?></div>
    <?php if(vp_metabox('rehub_post.rehub_framework_post_type') == 'music') : ?>
        <?php if(vp_metabox('rehub_post.music_post.0.music_post_source') == 'music_post_soundcloud') : ?>
            <div class="music_soundcloud mb15">
                <?php echo vp_metabox('rehub_post.music_post.0.music_post_soundcloud_embed'); ?>
            </div>       
        <?php elseif(vp_metabox('rehub_post.music_post.0.music_post_source') == 'music_post_spotify') : ?>
            <div class="music_spotify mb15">
                <iframe src="https://embed.spotify.com/?uri=<?php echo vp_metabox('rehub_post.music_post.0.music_post_spotify_embed'); ?>" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
            </div>
        <?php endif; ?>   
    <?php else : ?>   
        <figure class="mb15">
            <?php if(rehub_option('repick_social_disable') !='1' && function_exists('rehub_social_share')) :?> <?php echo rehub_social_share('minimal'); ?> <?php endif;?>
            <?php echo re_badge_create('ribbonleft'); ?>
            <div class="pattern"></div>
            <a href="<?php echo ''.$link;?>"<?php echo ''.$target;?>><?php wpsm_thumb ('grid_news') ?></a>
        </figure>                                       
    <?php endif; ?>
    <?php do_action( 'rehub_after_masonry_grid_figure' ); ?>
    <p><?php kama_excerpt('maxchar=200'); ?></p>
    <?php do_action( 'rehub_after_masonry_grid_text' ); ?>
	<?php if(rehub_option('disable_btn_offer_loop')!='1')  : ?><?php rehub_generate_offerbtn('wrapperclass=block_btnblock width-100p mobile_block_btnclock&btn_more=no');?><?php endif; ?>   
</article>