<?php $page_title = "contact"; ?>
<?php include("includes/variables.php"); ?>
<!doctype html>
<html>

<head>
   
    <title>Contact Us | JM Woodworking</title>
    <meta name="description" content="J&M Woodworks is an Amish wholesale shed manufacturer located in Lancaster, PA. We offer custom wholesale sheds, wood sheds, vinyl sheds, wholesale pool houses, and even garages." />
    <meta name="keywords" content="sheds, vinyl sheds, wholesale garden sheds, custom sheds, wholesale quaker sheds, two-story garages,carriage sheds, sheds, yard sheds, backyard sheds, pool houses,Custom Garages, usa," />
    
    <?php include("includes/headlinks.php"); ?>

</head>

<body class="products">
    <header>
        <?php include("includes/headertop.php"); ?>
        <section class="header-image">
            <img src="<?=$app_path;?>assets/images/sheds-header.jpg" alt="">
        </section>
    </header>
    <section class="bkgd-5">
        <h1>Contact JM Woodworks</h1>
    </section>
    <section class="bkgd-6">
        <div class="content">
            <div class="content_fullwidth mar35">
                <p>Welcome to our contact page. We want to answer any questions you may have about our company or products. You may call us directly at (717) 529-4082 or complete the form below.</p>
                <div class="one_half">
                    <div class="address_info orange_texbg">
                        <ul>
                            <li>
                                <h3 class="white">JM Woodworks</h3>
                                1644 Georgetown Road
                                Christiana, PA 17509<br>
                                <i class="fa fa-phone"></i>&nbsp; (717) 529-4082<br>
                                <br>
                                <br>
                                <i class="fa fa-globe white"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:http://www.jmwoodworks.com" class="white">http://www.jmwoodworks.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="one_half last">
                    <div class="cforms">
                        <form action="sendemail2.php" method="post" id="sky-form" class="sky-form">
                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="label">Name</label>
                                        <label class="input">
                                            <input type="text" name="name" id="name" required="">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label">E-mail</label>
                                        <label class="input">
                                            <input type="email" name="email" id="email" required="">
                                        </label>
                                    </section>
                                </div>
                                <section>
                                    <label class="label">Phone</label>
                                    <label class="input">
                                        <input type="text" name="phone" id="phone" required="">
                                    </label>
                                </section>
                                <section>
                                    <label class="label">Message</label>
                                    <label class="textarea">
                                        <textarea rows="3" name="message" id="message"></textarea>
                                    </label>
                                </section>
                            </fieldset>
                            <button type="submit" name="send" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <p>
                <a href="dealers.php" class="membership-button">
                    <span>Interested in selling our products? Simply click here to complete a Dealer Application</span>
                </a>
            </p>
            <p>&nbsp;</p>
        </section>
    </section>
    
    <?php include("includes/footer.php"); ?>

</body>

</html>