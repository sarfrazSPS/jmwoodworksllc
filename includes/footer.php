<footer>
    <div>
        <img class="initial" src="<?=$app_path;?>assets/images/logo.png" alt="">
    </div>
    <aside>
        <span>1644 Georgetown Rd, Christiana, PA 17509</span>
        <a href="tel:717-529-4082">
            Phone: (717) 529-4082
        </a>
    </aside>
    <div class="contain-footer-nav">
        <ul>
            <li>
                <a href="<?=$app_path;?>index.php">
                    Home
                </a>
            </li>
            <li>
                <a href="<?=$app_path;?>sheds.php">
                    Sheds
                </a>
            </li>
            <li>
                <a href="<?=$app_path;?>one-two-story-garages.php">
                    1-2 Story Garages
                </a>
            </li>
            <li>
                <a href="<?=$app_path;?>poolhouse.php">
                    Pool Houses
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="<?=$app_path;?>dealers.php">
                    Dealers
                </a>
            </li>
            <li>
                <a href="<?=$app_path;?>contact.php">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="<?=$app_path;?>about.php">
                    About Us
                </a>
            </li>
        </ul>
        <ul>

        </ul>
    </div>
</footer>

<script type="text/javascript">
    function toggleMenu() {

        var x = document.getElementById("menu");
        if (x.className === "topnav") {
            x.className += " visible";
            console.log("open");

        } else {
            x.className = "topnav";
            console.log("closed");
        }
    }
</script>