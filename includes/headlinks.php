<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=$app_path;?>assets/css/styles.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149851311-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-149851311-1');
</script>


<?php
if($page_title == "images"){?>
    <script src="<?=$app_path;?>assets/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="<?=$app_path;?>assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
    <script src="<?=$app_path;?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<?php
}
?>

