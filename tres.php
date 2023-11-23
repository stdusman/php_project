<?php

# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}
echo "ให้กรอกค่าฐาน" . PHP_EOL;
$x = input();
echo "ให้กรอกค่าสูง" . PHP_EOL;
$y = input();
$z = 0.5 * $x * $y;
echo "พื้นที่สามเหลียมเท่ากับ" . $z . PHP_EOL;
?>
