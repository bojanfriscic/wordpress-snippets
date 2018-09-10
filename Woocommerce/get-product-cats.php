<?php
      $args = array(
        'number'      =>    $number,
        'orderby'     =>    'ID',
        'order'       =>    'asc',
        'hide_empty'  =>    1,
        'include'     =>    $ids
      );
      $prod_cats = get_terms('product_cat', $args);
      $parents = array();
      $count = count($prod_cats);
      if($count > 0) {
        foreach($prod_cats as $pc) {
          if($pc->parent == 0) {
            array_push($parents, $pc);
          }
        }
      }

      foreach($parents as $parent) :
        $id = $parent->term_id;
        $name = $parent->name;
        $thumbnail_id = get_woocommerce_term_meta($id, 'thumbnail_id', true);
        $image = wp_get_attachment_url($thumbnail_id);
        $link = get_term_link($parent);
        $child_args = array(
          'taxonomy'      =>    'product_cat',
          'parent'        =>    $id,
          'hide_empty'    =>    0,
          'orderby'       =>    'ID'
        );
        $children = get_categories($child_args);
    ?>
        <div class="box">
          <h2 class="category-title">
            <a href="<?php echo $link; ?>">
              <?php echo $name; ?>
            </a>
          </h2>
          <div class="img-container">
            <ul>
            <?php
              foreach($children as $child) :
            ?>
                <li><a href="<?php echo $link; ?>"><?php echo $child->name; ?></a></li>
            <?php
              endforeach;
            ?>
            </ul>
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
          </div><!-- /.img-container -->
        </div><!-- /.box -->
    <?php
      endforeach;
    ?>
  </div><!-- /.container -->
</section><!-- /.product-categories -->