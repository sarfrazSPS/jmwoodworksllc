<?php $page_title = "images"; ?>
<?php include("../includes/variables.php"); ?>
<!doctype html>
<html>

<head>

    <title>Dealer Page</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="J&M Woodworks is an Amish wholesale shed manufacturer located in Lancaster, PA. We offer custom wholesale sheds, wood sheds, vinyl sheds, wholesale pool houses, and even garages." />
    <meta name="keywords" content="pool houses, custom pool houses, wholesale pool houses, amish built pool houses, usa," />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("../includes/headlinks.php"); ?>

</head>

<body class="images">
    <header>
        <?php include("../includes/headertop.php"); ?>
        <section class="header-image">
            <img src="<?=$app_path;?>assets/images/poolhouse-header.jpg" alt="custom pool houses">
        </section>
    </header>
    <section class="bkgd-5">
        <h1>Images </h1>
    </section>
    <section class="bkgd-6">
        <section class="product-header">
            <h2>Image Gallery</h2>
            <hr>
            <p>
                J&amp;M Woodworks is happy to offer several tools that you find helpful when selling our product line. Below you find different images of our products that can be used on your website, marketing material, or for marketing. </p>
            <p>We also have a marketing plan that helps you to increase sales utilizing social media. We are here to assist you every step of the way</p>
        </section>
        <div class="contain-products">
            <section class="across-4 no-border">
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
                <aside class="">
                    <a href="<?=$app_path;?>assets/images/1-shedtestimage.png" rel="prettyPhoto" title="This is the description">
                        <img src="<?=$app_path;?>assets/images/1-shedtestimage.png" alt="This is the title" />
                    </a>
                </aside>
            </section>

            <section class="across-3 "></section>
        </div>

        <section></section>
        </div>
        </div>
    </section>
    
    <?php include("../includes/footer.php"); ?>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>
</body>

</html>