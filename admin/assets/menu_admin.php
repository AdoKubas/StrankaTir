<?php
    $active_page = basename(dirname($_SERVER['SCRIPT_NAME']));
    $riadky = file('assets/menu.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($riadky as $riadok) {
        list($k,$h) = explode('::', $riadok);
        $menu[$k] = $h;
    }   
?>
<div class="row">              
    <div class="col-md-2 py-3 px-3">
        <div>
            <img src="https://icon-library.com/images/icon-user/icon-user-15.jpg" alt="" class="img-thumbnail rounded-circle mx-auto d-block w-75">
            <h2 class="text-center mt-2"><?php echo $_SESSION["user"]; ?></h2>

        </div>
        <div class="mt-5 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php                

            foreach($menu as $key => $value){

                echo '<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">'.$value.'</a>';
            }          
        ?>
          <a class="nav-link" href="odhlasenie.php" role="tab">Odhlásiť sa</a>
        </div>
    </div> 
    <div class="col-md-9">
        <?php 
        include'cms/index.php';
         ?>
    </div>