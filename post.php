<div id="post">
<?php while(have_posts()) : the_post();?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <h3><em><?php the_date(); ?></em></h3>
    <div class="entry">
      <?php the_content(); ?>
      <p class="postmetadata" style="clear: both;">
        <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
      </p>
    </div>
    <div class="comments-template">
      <?php comments_template(); ?>
    </div>
  </div>
<?php endwhile; ?>
</div>
