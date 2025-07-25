<?php get_header(); ?>

  <main>

    <?php get_template_part('inc/header-nav'); ?>

    <div class="post-content_wrap page-single">

      <div class="inner">
        <div class="main-content">

          <div class="post-ttl">
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
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="post-content">
            <?php the_content(); ?>
          </div>

          <div class="single-pagenation">
            <div class="pagenation-wrap">
              <?php 
                $prev_post = get_previous_post();
                if (!empty($prev_post)) : 
              ?>
              <div class="prev">
                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                  d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                  fill="white" />
                </svg>
                </a>
              </div>
              <?php endif; ?>
              <div class="back"><a href="<?php echo home_url('/'); ?>">一覧へ戻る</a></div>
              <?php 
                $next_post = get_next_post();
                if (!empty($next_post)) : 
              ?>
              <div class="next">
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                  d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                  fill="white" />
                </svg>
                </a>
              </div>
              <?php endif; ?> 
            </div>
          </div>

        </div>

        <?php get_template_part('inc/sidebar'); ?>
      </div>

    </div>




    <?php get_template_part('inc/common-info'); ?>

  </main>

  <?php get_footer(); ?>