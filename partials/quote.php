<?php if(get_field('show_quote')): ?>
  <section id="quote">
    <?php 
      if(get_field('quote')){
        the_field('quote');
      }
      else{
        the_field('default_quote', 'option');
      }
    ?>
  </section>
<?php endif; ?>