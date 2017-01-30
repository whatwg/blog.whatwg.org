<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <article class="post">
  <h2 class="entry-title"><?php the_title(); ?></h2>
  <p class="meta">
   <time timedate="<?php echo get_the_date(); ?>"><?php the_time('F jS, Y') ?></time> by
   <?php if (get_the_author_url()) { ?><a href="<?php the_author_url(); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?>
   in <?php the_category(', ') ?>
   <?php edit_post_link('(edit this post)','',''); ?>

  <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

  <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

 <p class="meta"><?php previous_post_link('%link') ?> ↔ <?php next_post_link('%link') ?>
 </article>

 <?php comments_template(); ?>

<?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
