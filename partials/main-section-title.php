<?php if(get_field('main_section_title')): ?>
  <h1><?php the_field('main_section_title'); ?></h1>
<?php else: ?>
  <h1><?php the_field('default_main_section_title', 'option'); ?></h1>
<?php endif; ?>