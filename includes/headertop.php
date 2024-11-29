<section class="top-header">
    <a href="javascript:void(0);" onclick="toggleMenu()" class="menu-icon">
        <img src="<?=$app_path;?>assets/images/pngkey.png" alt="">
    </a>
    <div>
        <img class="" src="<?=$app_path;?>assets/images/logo.png" alt="custom sheds ">
    </div>
    <nav>
        <div class="contain-nav">

            <ul id="menu" class="topnav">
                <li class="first"><a href="<?=$app_path;?>index.php">Home</a></li>
                <li><a href="<?=$app_path;?>sheds.php">Sheds</a></li>
                <li><a href="<?=$app_path;?>one-two-story-garages.php">1-2 Story Garages</a></li>
                <li><a href="<?=$app_path;?>poolhouse.php">Pool Houses</a></li>
                <li><a href="<?=$app_path;?>dealers.php">Dealers</a></li>
                <li><a href="<?=$app_path;?>contact.php">Contact Us</a></li>
                <?php
                if($page_title == "home"){?>
                    <li class="last"><a href="<?=$app_path;?>backroom/index.php">Log In</a></li>
                <?php
                }else{?>
                    <li><a href="<?=$app_path;?>about.php">About Us</a></li>
                <?php }
                ?>
            </ul>
        </div>
    </nav>
</section>