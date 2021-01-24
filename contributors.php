<?php
function get_user_src($userId) {
    $fileName = ABSPATH . 'profile-pics/' . $userId;
    $relativeUrl = '/profile-pics/' . $userId;
    if (file_exists($fileName . '.jpg')) {
        return $relativeUrl . '.jpg';
    } else if (file_exists($fileName . '.png')) {
        return $relativeUrl . '.png';
    } else if (file_exists($fileName . '.gif')) {
        return $relativeUrl . '.gif';
    }
}
?>
<div id="container">
  <div id="post_wrapper">
      <div id="post">
            <?php
            $contributors = get_users();
            if ($contributors) {
                foreach ($contributors as $contributor) {
                    $author_id = $contributor->ID;
                    ?>
                    <div class="card mt-3">
                      <div class="card-body">
                        <img style="float:right; margin-left: 1em; max-width: 96px; height: auto;" src="<?php echo get_avatar_url($author_id) ?>" alt="<?php echo get_the_author_meta('display_name', $author_id) ?>"/>
                        <em>About <?php echo get_the_author_meta('display_name', $author_id); ?></em>
                        <p style="margin-top: 5px; text-align: justify;">
                            <?php the_author_meta('description', $author_id); ?>
                        </p>
                        <p>
                          <a href="?author=<?php echo $author_id; ?>">Read more by this author on 30POV</a>
                            <?php if(strlen(get_the_author_meta('user_url')) > 5) : ?>
                              <a target="_blank" href="<?php the_author_meta('user_url', $author_id); ?>"><br>...or elsewhere on the web.</a>
                            <?php else : ?>
                              .
                            <?php endif; ?>
                        </p>
                      </div>
                    </div>
                    <?php
                }
            }
            ?>
      </div>
  </div>
</div>
