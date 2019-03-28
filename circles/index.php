<?php 
function drawCircles($box, $percentage, $radius, $margin, $color) {
    /* Calculate x and y */
    $x = floor(-$radius * cos(deg2rad(90 + 3.6 * $percentage)));
    $y = floor(-$radius * sin(deg2rad(90 + 3.6 * $percentage)));
    echo '<svg width="' . $box . '" height="' . $box . '" viewBox="0 0 ' . $box . ' ' . $box . '">
  <g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')" stroke="#fff" stroke-width="1">
    <path class="flashy" d="M0 0 0-' . $radius . 'A' . $radius . ' ' . $radius . ' 0 ' . ($percentage > 49 ? 1 : 0) . ' 1' . ($x < 0 ? '' : ' ') . $x . ($y < 0 ? '' : ' ') . $y . 'Z" fill="' . $color . '"/>
    <path d="M0 0' . ($x < 0 ? '' : ' ') . $x . ($y < 0 ? '' : ' ') . $y . 'A' . $radius . ' ' . $radius . ' 0 ' . ($percentage > 49 ? 0 : 1) . ' 1 0-' . $radius . 'Z" fill="#fff"/>
  </g>
  <g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')" stroke="#fff" stroke-width="1">
    <path d="M0 0 0-' . ($radius - $margin) . 'A' . ($radius - $margin) . ' ' . ($radius - $margin) . ' 0 1 1-' . ($radius - $margin) . ' 0Z" fill="#fff"/>
    <path d="M0 0-' . ($radius - $margin) . ' 0A' . ($radius - $margin) . ' ' . ($radius - $margin) . ' 0 0 1 0-' . ($radius - $margin) . 'Z" fill="#fff"/>
  </g>
  <g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')">
    <text class="big" x="' . '-90' . '" y="' . 47 . '" fill="' . $color . '">' . $percentage . '%</text>
  </g>
</svg>';
}
?>

<!DOCTYPE html>
<head>
  <title>Test circles</title>
  <style>
    svg {display: flex; align-items:center;}
    .big {font: italic 80px sans-serif}
    svg:hover text {fill: #F9CF00}
    svg:hover .flashy {fill: #F9CF00}
  </style>
</head>
<body>
  <div class="target">
    <!-- drawCircles($box,$percentage, $radius, $margin, $color) -->
    <?php drawCircles(300, 89, 149, 20, '#4484CE')?>
  </div>
</body>

</html>
<!--
General case:
<g transform="translate(150,150)" stroke="#fff" stroke-width="1">
  <path class="flash" d="M0 0 0-149A149 149 0 1 1 x yZ" fill="#0f0"/>
  <path d="M0 0 x yA149 149 0 0 1 0-149Z" fill="#fff"/>
</g>
<g transform="translate(150,150)" stroke="#fff" stroke-width="1">
  <path d="M0 0 0-129A129 129 0 1 1-129 0Z" fill="#fff"/>
  <path d="M0 0-129 0A129 129 0 0 1 0-129Z" fill="#fff"/>
</g>
where
  x = -r * cos( 90 + 3.6 * percentage ) [in degrees]
  y = -r * sin( 90 + 3.6 * percentage ) [in degrees]

Note: This should be easy to implement in PHP. Work more on the css.
-->