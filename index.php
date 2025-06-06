<?php get_header();?>

<div class="page-banner">
<h1 class="headline headline--medium">Welcome to Our Blog</h1>
<p>Keep up with our latest news.</p>
</div>
<!-- Blog Posts Container -->
<div class="container container--narrow page-section">
<?php
while (have_posts()) {
the_post();
?>
<div class="post-item">
<!-- Post Title (Linked) -->
<h2 class="headline headline--medium headline--post-title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<!-- Post Meta (Author, Date, Category) -->
<div class="metabox">
<p>
Posted by <?php the_author_posts_link(); ?> on
<?php the_time('y'); ?> in
<?php echo get_the_category_list(', '); ?>
</p>
</div>
<!-- Post Excerpt & Read More -->
<div class="generic-content">
<?php the_excerpt(); ?>
<p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
</div>
</div>
<?php } ?>
</div>
<?php
get_footer();
?>
<?php get_footer();?>

 
