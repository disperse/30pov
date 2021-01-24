<?php
  global $cur_category;
?>
<img
  style="max-width:100%; height: auto;"
  src="<?php echo get_template_directory_uri()?>/images/<?php echo $cur_category['name'] ?>.jpg"
  alt="Cover for <?php echo $cur_category['month'] ?> <?php echo $cur_category['year'] ?> issue" />
