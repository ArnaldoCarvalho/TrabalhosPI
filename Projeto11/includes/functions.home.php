<?php

$meno = "0";
$sql = "SELECT * FROM menu WHERE pai = 0 AND ativo = 1";
$results = my_query($sql);

if ($results != 0) {
    $meno = "<nav id='menu'>";
    $meno = $meno . '<header class="major">
                <h2>Menu</h2>
            </header>';
    $meno = $meno . "<ul>";

    foreach ($results as $Key => $Value) {
        $sql = "SELECT * FROM menu WHERE pai = " . $results[$Key]['id'] . " AND ativo = 1 ";
        $SubMeno = my_query($sql);

        if ($SubMeno != null) {
            $meno = $meno . "<li><span class='opener'>" . $results[$Key]['nome'] . "</span><ul>";

            foreach ($SubMeno as $KeySub => $ValueSub) {
                $meno = $meno . "<li><a href='#'>" . $SubMeno[$KeySub]['nome'] . "</a></li>";}
            $meno = $meno . "</li></ul>";

        } else {
            $meno = $meno . "<li><a href='#'>" . $results[$Key]['nome'] . "</a></li>";
        }
    }

    $meno = $meno . "</ul></nav>";
}

echo $meno;
?>