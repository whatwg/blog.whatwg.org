<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>


<div class="navigation">
 <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
 <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
</div>

<?php while (have_posts()) : the_post(); ?>
<div class="post">
 <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
 <p class="meta"><?php the_time('l, F jS, Y') ?></p>

 <?php the_content() ?>

 <p class="meta">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
</div>

<?php endwhile; ?>

<div class="navigation">
 <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
 <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
</div>

<?php else : ?>

 <h2 class="center">Not Found</h2>
 <p>Oops, nothing here.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
