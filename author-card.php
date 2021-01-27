<?php $author_id = $args['author_id']; ?>
<div class="card mt-3">
  <div class="card-body">
    <img style="float:right; margin-left: 1em; max-width: 96px; height: auto;" src="<?php echo get_avatar_url($author_id) ?>" alt="<?php echo get_the_author_meta('display_name', $author_id) ?>"/>
    <em>About <?php echo get_the_author_meta('display_name', $author_id); ?></em>
    <p style="margin-top: 5px; text-align: justify;">
    <?php the_author_meta('description', $author_id); ?>
</p>
<?php if (! $args['is_single_author']): ?>
<p>
    <a href="<?php echo get_author_posts_url($author_id);  ?>">Read more by this author on 30POV</a>
    <?php if(strlen(get_the_author_meta('user_url')) > 5) : ?>
        <a target="_blank" href="<?php the_author_meta('user_url', $author_id); ?>"><br>...or elsewhere on the web.</a>
    <?php else : ?>
        .
    <?php endif; ?>
</p>
<?php endif; ?>
  </div>
</div>
