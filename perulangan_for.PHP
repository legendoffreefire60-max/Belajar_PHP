<?php
echo "Perulangan FOR:\n";
for ($i = 100; $i <= 1000; $i++) {
    echo $i . " ";
    if($i % 10 == 0) {
        echo "<br />";
        }
}

?>