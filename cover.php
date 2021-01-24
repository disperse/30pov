<?php
  global $cur_category;
?>
<img
  class="cover"
  src="<?php echo get_template_directory_uri()?>/images/<?php echo $cur_category['name'] ?>.jpg"
  alt="Cover for <?php echo $cur_category['month'] ?> <?php echo $cur_category['year'] ?> issue"
  width="533"
  height="600" />
