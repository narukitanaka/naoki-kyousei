<header class="<?php echo is_front_page() ? '' : 'fixed'; ?>">
  <div class="header-inner">
    <div class="logo img-box u-pc hover_opacity">
      <a href="<?php echo home_url('/'); ?>">
        <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/logo01.svg" alt="">
        <img class="is_fix" src="<?php echo get_template_directory_uri(); ?>/images/logo02.svg" alt="">
      </a>
    </div>
    <div class="logo img-box u-sp">
      <a href="<?php echo home_url('/'); ?>">
        <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="">
        <img class="is_fix" src="<?php echo get_template_directory_uri(); ?>/images/logo02.svg" alt="">
      </a>
    </div>
    <nav>
      <ul class="hover_opacity">
        <li class="drop-menu">
          <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_kids.svg" alt="">
          子どもの矯正
          <ul class="menu-items hover_opacity">
            <li>
              <a href="<?php echo home_url('/preortho'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                プレオルソ
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/orthodontic-plate'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                床矯正
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/mouthpiece-child'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                マウスピース矯正
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/wire-child'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                ワイヤー矯正
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/headgear-mask'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                ヘッドギア・フェイスマスク
              </a>
            </li>
          </ul>
        </li>
        <li>
          <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_adult.svg" alt="">
          大人の矯正
          <ul class="menu-items hover_opacity">
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                ワイヤー矯正
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                マウスピース矯正
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                部分矯正
              </a>
            </li>
          </ul>
        </li>
        <li>
          <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_information.svg" alt="">
          診療案内
          <ul class="menu-items hover_opacity">
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                セラミック
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                インプラント
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                入れ歯
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                歯周病
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                小児歯科
              </a>
            </li>
            <li>
              <a class="link_none" href="#">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                親知らずの抜歯
              </a>
            </li>
          </ul>
        </li>
        <li>
          <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_clinic.svg" alt="">
          当院について
          <ul class="menu-items hover_opacity">
            <li>
              <a href="<?php echo home_url('/clinic'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                医院情報
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/access'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                アクセス
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/first'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                初めての方へ
              </a>
            </li>
            <li>
              <a href="<?php echo home_url('/news'); ?>">
                <svg width="12" height="12" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.13937 1.60659C5.06851 1.53677 4.97282 1.49796 4.87334 1.4987C4.77386 1.49944 4.67876 1.53966 4.60894 1.61053C4.53912 1.68139 4.50031 1.77708 4.50105 1.87656C4.50179 1.97604 4.54201 2.07115 4.61287 2.14096L6.62662 4.12471L1.5 4.12471C1.40054 4.12471 1.30516 4.16422 1.23483 4.23455C1.16451 4.30487 1.125 4.40026 1.125 4.49971C1.125 4.59917 1.16451 4.69455 1.23483 4.76488C1.30516 4.83521 1.40054 4.87471 1.5 4.87471L6.62438 4.87471L4.6125 6.85734C4.54523 6.92784 4.50804 7.02177 4.50882 7.11922C4.50961 7.21666 4.54829 7.30998 4.61668 7.3794C4.68508 7.44882 4.77781 7.48888 4.87524 7.49111C4.97266 7.49334 5.06713 7.45756 5.13863 7.39134L7.7355 4.83309C7.77972 4.78948 7.81483 4.73752 7.8388 4.68022C7.86276 4.62293 7.8751 4.56144 7.8751 4.49934C7.8751 4.43723 7.86276 4.37575 7.8388 4.31845C7.81483 4.26116 7.77972 4.2092 7.7355 4.16559L5.13937 1.60659Z"
                    fill="white" />
                </svg>
                新着情報
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo home_url('/doctor'); ?>">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_doctor.svg" alt="">
            院長紹介
          </a>
        </li>
        <li>
          <a href="<?php echo home_url('/price'); ?>">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_price.svg" alt="">
            治療費用
          </a>
        </li>
      </ul>
    </nav>
    <div class="contact">
      <div class="tel">
        <a class="font-lora" href="tel:0668485555">
          <span>tel.</span>06-6848-5555
        </a>
      </div>
      <div class="mail">
        <a href="#">
          Web予約はこちら
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.66667 1.6665V4.99984M13.3333 1.6665V4.99984M2.5 8.33317H17.5M6.66667 11.6665H6.675M10 11.6665H10.0083M13.3333 11.6665H13.3417M6.66667 14.9998H6.675M10 14.9998H10.0083M13.3333 14.9998H13.3417M4.16667 3.33317H15.8333C16.7538 3.33317 17.5 4.07936 17.5 4.99984V16.6665C17.5 17.587 16.7538 18.3332 15.8333 18.3332H4.16667C3.24619 18.3332 2.5 17.587 2.5 16.6665V4.99984C2.5 4.07936 3.24619 3.33317 4.16667 3.33317Z"
              stroke="#F7F7F7" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>

    <div class="hamberger-wrap">
      <div class="ham-inner">
        <div class="hambager-content">
          <button type="button" class="hambager">
            <span class="c-line"></span>
            <span class="c-line"></span>
            <span class="c-line"></span>
          </button>
        </div><!-- /.hambager-content -->
      </div>
    </div><!-- hamberger-wrap -->

  </div>
</header>

<div class="drawer-menu">
  <div class="drawer-menu_inner">
    <div class="nav-wrap">
      <nav>
        <ul class="drawer-nav">
          <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
          <li class="parent-menu">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_kids.svg" alt="">
            子どもの矯正
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_10414_124" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                height="12">
                <rect width="12" height="12" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_10414_124)">
                <path
                  d="M10.1827 3L11 3.89235L6.54588 8.75277C6.4745 8.83112 6.38963 8.8933 6.29615 8.93573C6.20266 8.97816 6.10241 9 6.00116 9C5.8999 9 5.79965 8.97816 5.70616 8.93573C5.61268 8.8933 5.52781 8.83112 5.45644 8.75277L1 3.89235L1.81727 3.00084L6 7.56269L10.1827 3Z"
                  fill="#311D04" />
              </g>
            </svg>
            <ul class="child-menu">
              <li><a href="<?php echo home_url('/preortho'); ?>">プレオルソ</a></li>
              <li><a href="<?php echo home_url('/orthodontic-plate'); ?>">床矯正</a></li>
              <li><a href="<?php echo home_url('/mouthpiece-child'); ?>">マウスピース矯正</a></li>
              <li><a href="<?php echo home_url('/wire-child'); ?>">ワイヤー矯正</a></li>
              <li><a href="<?php echo home_url('/headgear-mask'); ?>">ヘッドギア・フェイスマスク</a></li>
            </ul>
          </li>
          <li class="parent-menu">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_adult.svg" alt="">
            大人の矯正
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_10414_124" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                height="12">
                <rect width="12" height="12" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_10414_124)">
                <path
                  d="M10.1827 3L11 3.89235L6.54588 8.75277C6.4745 8.83112 6.38963 8.8933 6.29615 8.93573C6.20266 8.97816 6.10241 9 6.00116 9C5.8999 9 5.79965 8.97816 5.70616 8.93573C5.61268 8.8933 5.52781 8.83112 5.45644 8.75277L1 3.89235L1.81727 3.00084L6 7.56269L10.1827 3Z"
                  fill="#311D04" />
              </g>
            </svg>
            <ul class="child-menu">
              <li><a class="link_none" href="#">ワイヤー矯正</a></li>
              <li><a class="link_none" href="#">マウスピース矯正</a></li>
              <li><a class="link_none" href="#">部分矯正</a></li>
            </ul>
          </li>
          <li class="parent-menu">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_information.svg" alt="">
            診療案内
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_10414_124" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                height="12">
                <rect width="12" height="12" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_10414_124)">
                <path
                  d="M10.1827 3L11 3.89235L6.54588 8.75277C6.4745 8.83112 6.38963 8.8933 6.29615 8.93573C6.20266 8.97816 6.10241 9 6.00116 9C5.8999 9 5.79965 8.97816 5.70616 8.93573C5.61268 8.8933 5.52781 8.83112 5.45644 8.75277L1 3.89235L1.81727 3.00084L6 7.56269L10.1827 3Z"
                  fill="#311D04" />
              </g>
            </svg>
            <ul class="child-menu">
              <li><a class="link_none" href="./">セラミック</a></li>
              <li><a class="link_none" href="./">インプラント</a></li>
              <li><a class="link_none" href="./">入れ歯</a></li>
              <li><a class="link_none" href="./">歯周病</a></li>
              <li><a class="link_none" href="./">小児歯科</a></li>
              <li><a class="link_none" href="./">親知らずの抜歯</a></li>
            </ul>
          </li>
          <li class="parent-menu">
            <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_clinic.svg" alt="">
            当院について
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_10414_124" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="12"
                height="12">
                <rect width="12" height="12" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_10414_124)">
                <path
                  d="M10.1827 3L11 3.89235L6.54588 8.75277C6.4745 8.83112 6.38963 8.8933 6.29615 8.93573C6.20266 8.97816 6.10241 9 6.00116 9C5.8999 9 5.79965 8.97816 5.70616 8.93573C5.61268 8.8933 5.52781 8.83112 5.45644 8.75277L1 3.89235L1.81727 3.00084L6 7.56269L10.1827 3Z"
                  fill="#311D04" />
              </g>
            </svg>
            <ul class="child-menu">
              <li><a href="<?php echo home_url('/clinic'); ?>">医院情報</a></li>
              <li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
              <li><a href="<?php echo home_url('/first'); ?>">初めての方へ</a></li>
              <li><a href="<?php echo home_url('/news'); ?>">新着情報</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo home_url('/doctor'); ?>">
              <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_doctor.svg" alt="">
              院長紹介
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('/price'); ?>">
              <img class="is_top" src="<?php echo get_template_directory_uri(); ?>/images/header_icon_price.svg" alt="">
              治療費用
            </a>
          </li>
        </ul>
      </nav>
    </div><!-- /.nav-wrap -->

    <div class="contact">
      <div class="tel">
        <p>お電話でのご相談はこちら</p>
        <a class="font-lora" href="tel:0668485555">
          <span>tel.</span>06-6848-5555
        </a>
      </div>
      <div class="mail">
        <a href="#">
          Web予約はこちら
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.66667 1.6665V4.99984M13.3333 1.6665V4.99984M2.5 8.33317H17.5M6.66667 11.6665H6.675M10 11.6665H10.0083M13.3333 11.6665H13.3417M6.66667 14.9998H6.675M10 14.9998H10.0083M13.3333 14.9998H13.3417M4.16667 3.33317H15.8333C16.7538 3.33317 17.5 4.07936 17.5 4.99984V16.6665C17.5 17.587 16.7538 18.3332 15.8333 18.3332H4.16667C3.24619 18.3332 2.5 17.587 2.5 16.6665V4.99984C2.5 4.07936 3.24619 3.33317 4.16667 3.33317Z"
              stroke="#F7F7F7" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>

  </div><!-- /.drawer-menu_inner -->
</div><!-- /.drawer-menu -->