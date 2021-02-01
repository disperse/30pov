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
            $exclude_list = array("admin", "jennie-smash");
            $contributors = get_users();
            if ($contributors) {
                foreach ($contributors as $contributor) {
                    if (! in_array($contributor->display_name, $exclude_list)) {
                        $author_id = $contributor->ID;
                        get_template_part('author-card', null, array('author_id' => $author_id, 'is_single_author' => false));
                    }
                }
            }
            ?>
      </div>
  </div>
</div>
