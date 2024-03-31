<pre>
<?php
    $link = mysqli_connect('localhost', 'root', '', 'web');
    $id = 3;
    $sql = "SELECT * FROM teachers WHERE id={$id}";
    $res = mysqli_query($link, $sql);

    if(!$res){
        echo mysqli_error($link);
    }
    else{
         print_r(mysqli_fetch_all($res, MYSQLI_ASSOC));
    }

    mysqli_close($link);