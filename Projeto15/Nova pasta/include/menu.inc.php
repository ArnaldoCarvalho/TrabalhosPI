<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            
        
        <?php
        $sql = "SELECT * FROM menus WHERE ativo = '1'";
        $res = my_query($sql);
        foreach($res as $value) {
            $sel = ( '/'.$value['url'] == $_SERVER['PHP_SELF'] ? 'active' : '' );
        ?>        
            <a href="<?php echo $value['url']; ?>" class="nav-item nav-link <?php echo $sel; ?>"><?php echo $value['nome']; ?></a>
        <?php
        }
        ?>





        </div>
    </div>
</nav>