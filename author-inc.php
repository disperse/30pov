<div id="container">
  <div id="post_wrapper">
      <div id="post">
          <?php
              $author = get_queried_object();
              $author_id = $author->ID;
              get_template_part('author-card', null, array('author_id' => $author_id, 'is_single_author' => true));
          ?>
      </div>
  </div>
</div>
