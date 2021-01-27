<div class="mt-3">
<?php
global $cur_category;
$cur_post_id = get_the_ID();
$category_name = get_the_category_by_ID($cur_category['id']);
$is_single_post = is_singular();
?>
<?php

//The Query
if (is_author()) {
    $author = get_queried_object();
    //var_dump($author);
    query_posts(array('author' => $author->ID, 'posts_per_page' => -1));
?>
<div class="cur_category">
  <div class="mb-3">
    <h2>Posts by <?php echo $author->display_name ?></h2>
  </div>
</div>
<?php
} else {
    query_posts(array('cat' => $cur_category['id'], 'posts_per_page' => -1));
?>
<div class="cur_category">
  <div class="mb-3">
    <h2>Posts</h2>
    <h3 style="text-align: left;"><?php echo $category_name; ?></h3>
    <em><?php echo ($cur_category['month'] . " " . $cur_category['year']); ?></em>
  </div>
</div>
<?php
}

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $the_id = get_the_ID();
        $the_date = the_date('m/d', ' ', ' ', false);
        $the_permalink = get_permalink();
        $the_title = get_the_title();
        $the_author = get_the_author_meta('display_name');
        $the_author_id = get_the_author_meta('ID');
        $selected = ($is_single_post && $cur_post_id == $the_id) ? ' class="selected" ' : '';
        $author_url = get_author_posts_url($the_author_id);
        echo <<<EOF
<div class="post mb-2" style="max-width: 285px;" id="post-$the_id">
  <!--span class="rightbar_date">$the_date</span-->
  <div class="text-wrap rightbar_post_title"><a $selected href="$the_permalink" title="$the_title">$the_title</a></div>
  <div style="text-align: right;">
EOF;
        if (! is_author()):
?>
    <span class="rightbar_author" style=""><em><a href="<?php echo $author_url; ?>"><?php echo $the_author; ?></a></em></span>
<?php endif; ?>
  </div>
</div>
<?php
    }
}
?>
</div>
