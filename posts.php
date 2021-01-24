<div>
<?php
global $cur_category;
$cur_post_id = get_the_ID();
$category_name = get_the_category_by_ID($cur_category['id']);
$is_single_post = is_singular();
?>
  <div class="cur_category">
    <div class="mb-3">
      <h3 style="text-align: left;"><?php echo $category_name; ?></h3>
      <em><?php echo ($cur_category['month'] . " " . $cur_category['year']); ?></em>
    </div>
<?php

//The Query
query_posts(array('cat' => $cur_category['id'], 'posts_per_page' => -1));

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
        echo <<<EOF
<div class="post" style="max-width: 285px;" id="post-$the_id">
  <span class="rightbar_date">$the_date</span>
  <div class="text-wrap rightbar_post_title"><a $selected href="$the_permalink" title="$the_title">$the_title</a></div>
  <div style="text-align: right;">
    <span class="rightbar_author" style=""><a href="?author=$the_author_id">$the_author</a></span>
  </div>
</div>
EOF;
    }
}
?>
</div>
