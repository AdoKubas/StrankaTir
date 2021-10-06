    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container sticky-top">
            <a class="navbar-brand" href="../public/theme/domov">Stránka - Admin</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto">
                <?php
                    $active_page = basename(dirname($_SERVER['SCRIPT_NAME']));
                    /*$menu = [
                        'index'=>'Domov',
                        'onas'=>'O nás',
                        'fotogaleria'=>'Fotogaléria',
                        'blog'=>'Blog',
                        'kontakt'=>'Kontakt'
                    ];*/
                    //$menu = [];

                    $riadky = file('assets/menu.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                    foreach ($riadky as $riadok) {
                        list($k,$h) = explode('::', $riadok);
                        $menu[$k] = $h;
                    }                    

                    foreach($menu as $key => $value){

                        echo '<li class="nav-item">
                                <a class="nav-link '.($active_page == $key ?"active":"").'" href="../public/theme/'.$key.'">'.$value.'</a>
                             </li>';
                    }
                    
                ?>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">