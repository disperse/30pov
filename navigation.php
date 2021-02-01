<div style="display: flex; margin: 10px;">
  <?php if (! is_page()): ?>
  <span><?php previous_post_link('&laquo; %link', 'Previous'); ?></span>
  <span style="margin-left: auto;"><?php next_post_link('%link &raquo; ', 'Next'); ?></span>
  <?php endif; ?>
</div>
