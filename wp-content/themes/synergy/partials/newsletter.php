<?php

$newsletter_text = get_field('newsletter_text', 'options');
$newsletter_button_text = get_field('newsletter_button_text', 'options');

echo '<form class="form newsletterform" action="//fondfolio.us13.list-manage.com/subscribe/post?u=65e81a3fa309924ed7ff3fd68&amp;id=fb444d9189" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">';

  echo '<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_65e81a3fa309924ed7ff3fd68_fb444d9189" tabindex="-1" value=""></div>';

  echo '<label for="mce-EMAIL" class="newsletterform__label label">';

    echo '<input required placeholder="' . 'Enter your email address...' . '" type="email" value="" name="EMAIL" class="newsletterform__input input input__base" id="mce-EMAIL">';

  echo '</label>';

  echo '<button class="button button--inverted">' . $newsletter_button_text . '</button>';
  
echo '</form>';

echo '<p class="note">' . $newsletter_text . '</p>';
