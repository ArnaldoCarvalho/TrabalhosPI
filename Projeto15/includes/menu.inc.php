<?php

function menu(){
    include './includes/config.inc.php';
    @session_start();
    $sql = "SELECT * FROM menu WHERE pai = 0 AND ativo = 1";
    $results = my_query($sql);
    
    if ($results != 0) {
        ?>
        <div id="logo" class="fl_left">
            <h1><a href=<?php echo $arrConfig['url_site'] .'/index.php'?>>AirTenis</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
        <ul class="clear">
            <?php
            foreach ($results as $Key => $Value) {
                $sql = "SELECT * FROM menu WHERE pai = " . $results[$Key]['id'] . " AND ativo = 1 ";
                $SubMeno = my_query($sql);

                if ($SubMeno != null) {
                    echo '<li><a href="'.$arrConfig['url_site'] .'/'. $results[$Key]['url'] . '">' . $results[$Key]['nome'] . '</a><ul>';

                    foreach ($SubMeno as $KeySub => $ValueSub) {
                        echo "<li><a href=".$arrConfig['url_site'] .'/'. $SubMeno[$KeySub]['url'] . ">" . $SubMeno[$KeySub]['nome'] . "</a></li>";
                    }
                    echo '</ul></li>';
                } else {
                    echo '<li><a href="'.$arrConfig['url_site'] .'/'. $results[$Key]['url'] . '">' . $results[$Key]['nome'] . '</a></li>';
                }
            }
            ?>
        </ul>
      </nav>
    <?php
    }
}
?>
