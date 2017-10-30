<?php
echo '<div class="loader">';
  echo '<svg class="filter" version="1.1">
      <defs>
        <filter id="gooeyness">
          <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 10 -5" result="gooeyness" />
          <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
        </filter>
      </defs>
    </svg>
  <div class="dots">
    <div class="dot mainDot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>';
echo '</div>';
?>