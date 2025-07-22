<aside>
  <div class="side-wrap">

    <div class="category">
      <div class="ttl">カテゴリー</div>
      <div class="side-category_wrap">
        <select class="pulldown_box" name="category-dropdown" id="category_dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value="<?php echo esc_url(home_url('/news')); ?>"><?php echo esc_attr( __( 'すべての記事' ) ); ?></option>
          <?php 
          $current_category_id = get_queried_object_id(); 
          $args = array(
            'hide_empty' => true, 
            'orderby'    => 'name',
            'order'      => 'ASC',
          );
          $categories = get_categories($args); 

          // Recursive function to display categories with hierarchy
          function display_category_hierarchy($categories, $parent_id = 0, $depth = 0, $current_category_id = null) {
            foreach ($categories as $category) {
              if ($category->parent == $parent_id) {
          $selected = ($current_category_id == $category->term_id) ? 'selected' : ''; 
          $prefix = str_repeat('- ', $depth); // Add prefix for child categories
          echo '<option value="' . get_category_link($category->term_id) . '" ' . $selected . '>' . $prefix . $category->name . '</option>';
          display_category_hierarchy($categories, $category->term_id, $depth + 1, $current_category_id); // Recursive call
              }
            }
          }

          display_category_hierarchy($categories, 0, 0, $current_category_id);
          ?>
        </select>
      </div>
    </div>

    <div class="popular hover_opacity u-pc">
      <div class="ttl">人気の記事</div>

      <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'meta_key'       => 'post_views_count',
          'orderby'        => 'meta_value_num',
          'order'          => 'DESC'
        );
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
      ?>
        <div class="popular-item">
          <a href="<?php the_permalink(); ?>">
            <div class="img-box obj-fit">
              <?php
                if ( has_post_thumbnail() ) {
                  // アイキャッチ画像が設定されている場合に実行するコード
                  echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
                } else {
                  // アイキャッチ画像が設定されていない場合に実行するコード
                  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/eyecatch-noimage.jpg" />'; 
                }
              ?>
            </div>
            <p><?php the_title(); ?></p>
          </a>
        </div>
      <?php
        }
        wp_reset_postdata();
      ?>

    </div>
    <!-- <div class="month">
      <div class="ttl">月刊アーカイブ</div>
      <div class="side-month_wrap">
        <select class="pulldown_box" name="archive-dropdown" id="past_article" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( '過去の記事一覧' ) ); ?></option>
          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
        </select>
      </div>
    </div> -->
  </div>
</aside>