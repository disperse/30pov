<?php
  global $cur_category, $categories;
  function display_year($year, $cur_category) {
      $returnString = '<a title="' . $year . '" ';
      if ($cur_category['year'] == $year) { $returnString .= 'class="selected" '; }
      $returnString .= 'href="/category/' . $year . '">' . $year . '</a>';
      echo $returnString;
  }
?>
<div id="rightbar_bio">
  <div id="bio">
    <div class="mb-3">
      <h2>Issues</h2>
      <div><?php display_year('2021', $cur_category); ?> | <?php display_year('2011', $cur_category); ?> | <?php display_year('2010', $cur_category); ?> | <?php display_year('2009', $cur_category); ?></div>
    </div>
      <?php
      for ($i = 0; $i < sizeof($categories); $i++) {
          $category = $categories[$i];
          if ($category['year'] == $cur_category['year']) {
              $category_name = get_the_category_by_ID($category['id']);
              echo "<div class='collapsed_category'>";
              echo("<em style='text-align: left;'>" . $category['month'] . " " . $category['year'] . "</em>");
              echo("<h5 style='text-align: left;'><a " . (($cur_category['id'] == $category['id']) ? 'class="selected" ' : '') . " href='" . get_category_link($category['id']) . "'>" . $category_name . "</a></h5>");
              echo "</div>";
          }
      }
      ?>
  </div>
  <hr/>
</div>

