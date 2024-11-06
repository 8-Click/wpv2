<?php

get_header();
?>

<div class="page-wrapper">
    <h1 class="page-header">Trending Posts!</h1>
    <hr class="horizontal-row">
    <div class="news-container">
    </div>
</div>

<div id="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
            <?php
        endwhile;
    else:
        echo '<p>Geen berichten gevonden.</p>';
    endif;
    ?>
<div class="page-wrapper">
    <div class="news-container">
        <div class="news-post">
            <div class="news-content-wrapper"> <!-- Wrapper for image and text -->
                <h2 class="news-title">Ado Staff Twitter Post </h2>
                <hr class="horizontal-row">
                <p class="news-content">「Ado JAPAN TOUR 2024
                    『モナ・リザの横顔』」ポートメッセなごや公演・振替公演及びチケット払い戻し方法・物販整理券についてのお知らせをいたします。

                    発表までにお時間をいただいてしまい申し訳ございませんでした。

                    Ado JAPAN TOUR 2024 『モナ・リザの横顔』」ポートメッセなごや公演のチケットをお持ちのお客様は必ずご一読いただきますようお願いいたします。

                    この度は多大なるご心配とご迷惑をおかけいたしましたことを重ねて深くお詫び申し上げます。


                    Translation:

                    We would like to inform you about the "Ado JAPAN TOUR 2024 'Profile of Mona Lisa'" Port Messe Nagoya
                    performance, rescheduled performances, ticket refund procedures, and merchandise tickets.

                    I apologize for taking so long to make this announcement.

                    If you have a ticket for the Ado JAPAN TOUR 2024 "Profile of Mona Lisa" Port Messe Nagoya
                    performance, please be sure to read this.

                    Once again, we would like to offer our deepest apologies for the great concern and inconvenience
                    caused.</p>
            </div>

            <p class='news-date'>08/24/2024 3:00 PM</p>
        </div>

        <div class="news-post blog-post"> <!-- Add blog-post class for specific styling -->
            <div class="news-content-wrapper"> <!-- Wrapper for image and text -->
                <img src="/adowebsite/ado/public/assets/img/blogs/__chando_ado_and_1_more_drawn_by_riseno__sample-ed6445291854f6792729fda8c3bdfb70.jpg"
                    alt="" class="news-img">
                <div class="news-text">
                    <h2 class="news-title">Blogs Update</h2>
                    <hr class="horizontal-row">
                    <p class="news-content">The blogs are officially working! I just need to create a system so I can
                        edit and delete certain posts when needed, but the creating has been completed and it's
                        connected to a database</p>

                    <p class='news-date'>By 8Click, 07/23/2024 5:43 PM</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>