<?php get_header(); ?>

  <main>

    <?php get_template_part('inc/header-nav'); ?>


    <section class="under-head page-archive">
      <div class="sub-ttl">News</div>
      <h1>最新情報</h1>
    </section>

    <div class="post-content_wrap">

      <div class="inner">

        <div class="main-content">

          <?php if (is_category()) : ?>
          <h2><?php single_cat_title(); ?></h2>
          <?php else : ?>
          <h2>すべての記事</h2>
          <?php endif; ?>
          <div class="archive-wrap hover_opacity">

            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            
            <div class="article-item">
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
                <div class="txt-box">
                  <p class="tag">
                    <span class="date"><?php echo get_the_date(); ?></span>｜
                    <span class="cate">
                      <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                      ?>
                    </span>
                  </p>
                  <p class="ttl">
                    <?php the_title(); ?>
                    <span class="arrow">
                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                          fill="white" />
                      </svg>
                    </span>
                  </p>
                </div>
              </a>
            </div>

            <!-- <dl>
              <a href="<?php the_permalink(); ?>">
                <dt>
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
                </dt>
                <dd>
                  <p class="tag">
                    <span class="date"><?php echo get_the_date(); ?></span>｜
                    <span class="cate">
                      <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                      ?>
                    </span>
                  </p>
                  <p class="ttl"><?php the_title(); ?></p>
                  <span class="arrow">
                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                        fill="white" />
                    </svg>
                  </span>
                </dd>
              </a>
            </dl> -->
            <?php endwhile;endif;wp_reset_query(); ?>

          </div>

          <!-- ページネーション -->
            <?php
            $args = array(
              'mid_size' => 2,
              'prev_text' => '<svg width="15" height="15" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z" fill="#66615c"/></svg>',
              'next_text' => '<svg width="15" height="15" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z" fill="#66615c"/></svg>',
              'screen_reader_text' => ' ',
            );
            the_posts_pagination($args);
            ?>

            <div class="popular u-sp">
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

        </div><!-- /.main-content -->

        <?php get_template_part('inc/sidebar'); ?>

      </div><!-- /.inner -->

    </div>

    <?php get_template_part('inc/common-info'); ?>

  </main>

<?php get_footer(); ?>