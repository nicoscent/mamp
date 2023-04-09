<?php
function toto2($b) {
    if ($b <= 1)
        return 1;
    return $b * toto2($b-1);
}

?>