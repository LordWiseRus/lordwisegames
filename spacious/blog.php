<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
get_header(); ?>

<?php do_action( 'spacious_before_body_content' ); ?>

<?php  the_post(); ?>
			
<h1>Дневник разработки:</h1>
			
				
<?php
global $post;
$args = array( 'numberposts' => 999999999 , 'category' => 1, 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
?>
<div class="post">
<div class="post-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<div class="post-txt">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_content( $more_link_text, $strip_teaser ); ?>
<div class="post-date"><?php echo get_the_date('d.m.Y H:i'); ?></div>
<br>
<br>
</div>
</div>
<?php
}
wp_reset_postdata();
?>

<?php spacious_sidebar_select(); ?>

<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
