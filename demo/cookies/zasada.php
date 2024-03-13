<?php
    ob_start();
    echo "hello ";
    echo 'world!';
    $a = ob_get_contents();
    ob_clean();
    echo $a;