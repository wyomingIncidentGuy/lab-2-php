<ol>
    <?php
        $log_lines = file(PATH_LOG);
        foreach($log_lines as $elem){
            echo "<li>";
            echo $elem;
            echo "</li>";
        }
    ?>
</ol>

