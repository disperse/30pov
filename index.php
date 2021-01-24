<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="various">
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/styles.css?v=1.0">

</head>
<body>
  <script src="<?php echo get_template_directory_uri()?>/js/scripts.js"></script>
<?php
  // all global includes here
  include 'categories.php';
  include 'includes.php';
  global $assigned_categories, $cur_category;
  // $terms = get_the_terms(get_the_ID(), 'category');
  //var_dump($terms);
  //$categories = get_categories();
  //var_dump($categories);
?>
  <div class="container thirty-pov">
    <div class="row">
      <div class="col-xl-6 col-lg-9 col-md-12 col-sm-12">
        <div style="width: 533px;" class="mx-auto">
          <div class="text-start">
              <?php get_template_part('navbar'); ?>
          </div>
          <div>
            <?php if(is_singular() && $post->post_name == 'contributor-bios') : ?>
                <?php get_template_part('contributors'); ?>
            <?php elseif (is_singular()): ?>
                <?php get_template_part('navigation'); ?>
                <?php get_template_part('post'); ?>
              <div class="back_top"><a href="javascript:window.scrollTo(0,0);">Top</a></div>
                <?php get_template_part('navigation'); ?>
            <?php else: ?>
              <?php get_template_part('cover'); ?>
            <?php endif; ?>
          </div>
          <div class="text-end">
              <?php get_template_part('bottom-links'); ?>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <?php get_template_part('issues'); ?>
      </div>
      <div class="col-xl-3 col-lg-12 col-md-6 col-sm-6">
          <?php get_template_part('posts'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <?php get_template_part('footer'); ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

