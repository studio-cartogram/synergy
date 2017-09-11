<?php

$icon = get_query_var( 'icon' );
$context = get_query_var( 'context' );

echo '<svg class="' . $context . '__icon icon icon--' . $icon . '"><use xlink:href="#icon-' . $icon . '"></use></svg>';

?>
