  <footer class="footer">
    <div class="container">
      <a href="tel:<?php the_field ('phone') ?>" class="phone"><?php the_field ('phone') ?>
      </a>
      <div class="footer__email">
       <span>
<?php the_field ('email') ?>
       </span>
      </div>
    </div>

  </footer>

<?php wp_footer(); ?>

</body>


</html>