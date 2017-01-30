<?php
/**
 * @package WordPress
 * @subpackage org.whatwg.awesome
 */

get_header(); ?>

<div id="content">
<?php if (have_posts()) : ?>

 <?php while (have_posts()) : the_post(); ?>
 <article <?php post_class() ?>>
  <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <div class="entry-meta"><time timedate="<?php echo get_the_date(); ?>"><?php the_time('F jS, Y') ?></time> by <span class="author vcard"><?php if (get_the_author_url()) { ?><a class="url fn" href="<?php the_author_url(); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?></span></div>

  <?php the_content('Read the rest of this entry &raquo;'); ?>

  <p class="meta"><?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
 </article>
 <?php endwhile; ?>

 <div class="navigation">
  <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
  <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
 </div>

<?php else : ?>

 <h2>Not Found</h2>
 <p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
