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
                    if($results[$Key]['nome'] == 'Login'){
                        if($_SESSION['SessionType']=='default'){
                            echo '<li><a href="'.$arrConfig['url_site'] .'/'. $results[$Key]['url'] . '">' . $results[$Key]['nome'] . '</a></li>';
                        }
                        else{
                            echo '<li><a href="#">' .$_SESSION['username'] . '</a><ul>';
                            foreach ($SubMeno as $KeySub => $ValueSub) {
                                echo "<li><a href=".$arrConfig['url_site'] .'/'. $SubMeno[$KeySub]['url'] . ">" . $SubMeno[$KeySub]['nome'] . "</a></li>";
                            }
                            echo '</ul></li>';
                        }
                    }
                    else{
                        echo '<li><a href="'.$arrConfig['url_site'] .'/'. $results[$Key]['url'] . '">' . $results[$Key]['nome'] . '</a><ul>';
                        foreach ($SubMeno as $KeySub => $ValueSub) {
                            echo "<li><a href=".$arrConfig['url_site'] .'/'. $SubMeno[$KeySub]['url'] . ">" . $SubMeno[$KeySub]['nome'] . "</a></li>";
                        }
                        echo '</ul></li>';
                    }
                    
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


function NewsHome(){

        include './includes/config.inc.php';
        @session_start();
        $sql = "SELECT * FROM noticias WHERE ativo = 1";
        $results = my_query($sql);

        if ($results != 0) {
            $count = 1;
            if(count($results)==5){
                foreach ($results as $Key => $Value) {
                    if ($count <=5) {
                    
                        echo '<li><a href="' . $arrConfig['url_site'] . '/NoticiaPage.php?id='.$results[$Key]['id'].'"><img src="' . $arrConfig['url_site'] .'/'.$results[$Key]['imgurl'].'" alt=""></a><br><div><p>';
                        if (strlen($results[$Key]['titulo']) >= 20){
                            echo substr($results[$Key]['titulo'], 0, 20) . '...';
                            echo '</p></div><br></li>';
                            $count++;  
                        }
                        else{
                            echo $results[$key]['titulo'].'</p></div><br></li>';
                            $count++;  
                        }
                        
                    }
                }
            } 
            else{
                if(count($results)>=3){
                    foreach ($results as $Key => $Value) {
                        if ($count <=3) {
                            if($count!=1){
                                echo '<li><a href="#"><img classe="img" src="' . $arrConfig['url_site'] .'/images/home/Nnoticias.png" alt=""></a><br><br><br></li>';
                                echo '<li><a href="' . $arrConfig['url_site'] . '/NoticiaPage.php?id='.$results[$Key]['id'].'"><img classe="img" src="' . $arrConfig['url_site'] .'/'.$results[$Key]['imgurl'].'" alt=""></a><br><div><p>';
                                if (strlen($results[$Key]['titulo']) >= 20){
                                    echo substr($results[$Key]['titulo'], 0, 20) . '...';
                                    echo '</p></div><br></li>';
                                    $count++;  
                                }
                                else{
                                    echo $results[$Key]['titulo'].'</p></div><br></li>';
                                    $count++;  
                                }
                            }else{
                                echo '<li><a href="' . $arrConfig['url_site'] . '/NoticiaPage.php?id='.$results[$Key]['id'].'"><img classe="img" src="' . $arrConfig['url_site'] .'/'.$results[$Key]['imgurl'].'" alt=""></a><br><div><p>';
                                if (strlen($results[$Key]['titulo']) >= 20){
                                    echo substr($results[$Key]['titulo'], 0, 20) . '...';
                                    echo '</p></div><br></li>';
                                    $count++;  
                                }
                                else{
                                    echo $results[$key]['titulo'].'</p></div><br></li>';
                                    $count++;  
                                }
                                  
                            }
                        }
                    }
                }
            }
           ?>
            </ul>
          </nav>
        <?php
        }
}

function Admin(){

    include './includes/config.inc.php';
    @session_start();
    $sql = "SELECT * FROM administradores WHERE ativo = 1";
    $results = my_query($sql);

    if ($results != 0) {
        if(count($results)>=2){
        $count = 1;
        foreach ($results as $Key => $Value) {
            if ($count <=2) {
                if($count==1){
                echo '<div class="one_half first">
                        <article class="testimonial clear">
                            <div class="one_third first"><img class="borderedbox inspace-5 circle" src="'.$arrConfig['url_site'].'/'.$results[$Key]['img'].'" alt=""></div>
                            <div class="two_third">
                                <h3 class="nospace"><a href="#">'.$results[$Key]['nome'].'</a></h3>
                                <em>Job Title Here</em>
                                <p class="nospace"><span class="fa fa-phone"></span> '.$results[$Key]['email'].'</p>
                            </div>
                        </article>
                    </div>';
                $count++;
                }
                else{
                echo '<div class="one_half second">
                        <article class="testimonial clear">
                            <div class="one_third first"><img class="borderedbox inspace-5 circle" src="'.$arrConfig['url_site'].'/'.$results[$Key]['img'].'" alt=""></div>
                            <div class="two_third">
                                <h3 class="nospace"><a href="#">'.$results[$Key]['nome'].'</a></h3>
                                <em>Job Title Here</em>
                                <p class="nospace"><span class="fa fa-phone"></span> '.$results[$Key]['email'].'</p>
                            </div>
                        </article>
                    </div>';
                $count++;
                }
            }
        }}
       ?>
        </ul>
      </nav>
    <?php
    }

}

function News(){

}
?>
