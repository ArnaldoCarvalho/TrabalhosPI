<?php

function menu(){
    $meno = "0";
    $sql = "SELECT * FROM menucake WHERE pai = 0 AND ativo = 1";
    $results = my_query($sql);
    
    if ($results != 0) {
        $meno = "<nav class='navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0' id='menu'>";
        $meno = $meno . '<a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>';
        $meno = $meno . '<div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto mx-lg-auto py-0">';
    
        foreach ($results as $Key => $Value) {
            $sql = "SELECT * FROM menucake WHERE pai = " . $results[$Key]['id'] . " AND ativo = 1 ";
            $SubMeno = my_query($sql);
    
            if ($SubMeno != null) {
                $meno = $meno . '<div class="nav-item dropdown">
                <a href=' . $results[$Key]['url'] . ' class="nav-link dropdown-toggle" data-bs-toggle="dropdown">' . $results[$Key]['nome'] . '</a>
                <div class="dropdown-menu m-0">';
    
                foreach ($SubMeno as $KeySub => $ValueSub) {
                    $meno = $meno . "<a class='dropdown-item' href=" . $SubMeno[$KeySub]['url'] . ">" . $SubMeno[$KeySub]['nome'] . "</a>";}
                $meno = $meno . "</div></div>";
    
            } else {
                $meno = $meno . "<a class='nav-item nav-link' href=" . $results[$Key]['url'] . ">" . $results[$Key]['nome'] . "</a>";
            }
        }
    
        $meno = $meno . "</div></div></nav>";
    }
    
    echo $meno;
}
?>

