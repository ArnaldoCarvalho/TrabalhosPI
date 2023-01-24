<?php

function menu(){
    $NT = array('menu','menu_lingua');
    $meno = "";
    $sql = "SELECT * FROM $NT[0] INNER JOIN $NT[1] ON $NT[0].id = $NT[1].id WHERE $NT[0].pai = 0 AND $NT[0].ativo = 1 AND $NT[1].lingua = '" . $_SESSION['lang']."'";
    $results = my_query($sql);
    
    if ($results != 0) {
        ?>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0" id="menu"> 
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-lg-auto py-0">
        <?php
    
        foreach ($results as $Key => $Value) {
            $sql = "SELECT * FROM $NT[0] INNER JOIN $NT[1] ON $NT[0].id = $NT[1].id WHERE $NT[0].pai = " . $results[$Key]['id'] . " AND $NT[0].ativo = 1 AND $NT[1].lingua = '" . $_SESSION['lang']."'";
            $SubMeno = my_query($sql);
            
            if ($SubMeno != null) {
                    $meno = $meno . '<div class="nav-item dropdown">
                    <a href=' . $results[$Key]['url'] . ' class="nav-link dropdown-toggle" data-bs-toggle="dropdown">' . $results[$Key]['nome'] . '</a>
                    <div class="dropdown-menu m-0">';
                
                foreach ($SubMeno as $KeySub => $ValueSub) {
                        $meno = $meno . "<a class='dropdown-item' href=" . $SubMeno[$KeySub]['url'] . ">" . $SubMeno[$KeySub]['nome'] . "</a>";
                }

                $meno = $meno . "</div></div>";
    
            } else {
                $meno = $meno . "<a class='nav-item nav-link' href=" . $results[$Key]['url'] . ">" . $results[$Key]['nome'] . "</a>";
            }
 
        }
            $sql = "SELECT * FROM $NT[0] WHERE pai = 0 AND ativo = 1 AND ". ' url = "#" ';
            $lang = my_query($sql);

                foreach ($lang as $Key => $Value) {
                    $sql = "SELECT * FROM $NT[0] WHERE $NT[0].pai = " . $lang[$Key]['id'] . " AND $NT[0].ativo = 1";
                    $sublang = my_query($sql);

                    if ($sublang != null) {
                            $meno = $meno . '<div class="nav-item dropdown">
                                                <img src="./img/28x21/' . $_SESSION['lang'].'.png" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="dropdown-menu m-0">';


                        foreach ($sublang as $KeySub => $ValueSub) {
                            $meno = $meno . "<a class='dropdown-item' href='index.php?l=" . substr($sublang[$KeySub]['url'],0,2) . "'><img src='./img/28x21/" . $sublang[$KeySub]['url'] . "'></a> ";
                        }
                    }
                    $meno = $meno . "</div></div>";
                }
        $meno = $meno . "</div></div></nav>";
    }
    
    echo $meno;
}

?>

