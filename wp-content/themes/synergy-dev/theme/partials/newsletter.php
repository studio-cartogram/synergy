<?php

$newsletter_text = get_field('newsletter_text', 'options');
$newsletter_button_text = get_field('newsletter_button_text', 'options');

echo '<p class="p--hard p--large secondary ">' . $newsletter_text . '</p>';

echo '<form class="newsletterform" action="//fondfolio.us13.list-manage.com/subscribe/post?u=65e81a3fa309924ed7ff3fd68&amp;id=fb444d9189" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">';

  echo '<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_65e81a3fa309924ed7ff3fd68_fb444d9189" tabindex="-1" value=""></div>';

  echo '<label for="mce-EMAIL" class="newsletterform__label label">';

    echo '<input required placeholder="' . 'Type your email address...' . '" type="email" value="" name="EMAIL" class="newsletterform__input input" id="mce-EMAIL">';

    echo '<span class="p--hard secondary label__inner">' . $newsletter_button_text . '</span>';

    echo '<span class="p--small secondary input__help">' . 'Never shared, never spammed' . '</span>';

  echo '</label>';

  echo '<button class="newsletterform__button ">';

      set_query_var('context', 'newsletterform');
      set_query_var('icon', 'arrow-right');
      get_template_part('partials/icon');

  echo '</button>';

echo '</form>';
