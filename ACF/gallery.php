<?php 
  $gallery = get_field('my_gallery');
  if($gallery);
?>
  <div class="my-gallery">
    <ul>
      <?php foreach($gallery as $image) : ?>
        <li>
          <a href="<?php echo $image['url']; ?>" class="my-gallery-item" alt="<?php echo $image['alt']; ?>">
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div><!-- /.my-gallery -->
<?php endif; ?>

