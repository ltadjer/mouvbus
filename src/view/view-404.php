<?php



echo 

    '<div class="title-ligne contact-title">'.

        '<div class="ligne"><hr></div>'.

        '<div class="title-icon">

            <h1 class="point-after">'.get_option(text_404).'</h1><i class="fa-solid fa-tower-broadcast"></i>

        </div>'.

        '<div class="ligne"><hr></div>'.

    '</div>'.

    '<div class="not-found-btn">'.

        '<a class="main-btn" href="'.home_url().'">'.get_option(text_btn_404).'</a>'.

    '</div>';