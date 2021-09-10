<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" media="print" href="https://www.michaeltrio.com/pub/static/frontend/Jewel/Michaeltrio_SG/en_US/css/print.css"><link rel="stylesheet" type="text/css" media="all" href="https://www.michaeltrio.com/pub/static/frontend/Jewel/Michaeltrio_SG/en_US/css/animate/animate.css"><link rel="stylesheet" type="text/css" media="all" href="https://www.michaeltrio.com/pub/static/frontend/Jewel/Michaeltrio_SG/en_US/mage/calendar.css">

<meta charset="utf-8">
<meta name="title" content="Contact Us">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>Page Template</title>

<link rel="stylesheet preload" type="text/css" media="all" href="//fonts.googleapis.com/css?family=Montserrat:200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" />
<link rel="stylesheet preload" type="text/css" media="screen and (min-width: 768px)" href="https://www.michaeltrio.com/pub/static/version1627529234/frontend/Jewel/Michaeltrio_SG/en_US/css/styles-l.min.css">
<link rel="stylesheet preload" type="text/css" media="all" href="https://www.michaeltrio.com/pub/static/version1627529234/_cache/merged/f72b3a08832f61a436f1638f6b3cbd48.min.css">


<link id="cdz-header-css" rel="stylesheet preload" type="text/css" media="all" href="//www.michaeltrio.com/pub/media/jewel/themelayout/header/header-style-09/header-styles.css?version=60345485994d2" />
<link id="cdz-footer-css" rel="stylesheet preload" type="text/css" media="all" href="//www.michaeltrio.com/pub/media/jewel/themelayout/footer/footer-style-10/footer-styles.css?version=6077f5c43e436" />
<link id="cdz-maincontent-css" rel="stylesheet preload" type="text/css" media="all" href="//www.michaeltrio.com/pub/media/jewel/themelayout/main/main-content-style07/main-styles.css?version=6077fc9f155f5" />

<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" data-cfasync="false" src="https://www.michaeltrio.com/pub/static/frontend/Jewel/Michaeltrio_SG/en_US/jquery.js"></script>

<body data-container="body" class="cms-home cms-index-index page-layout-1column yotpo-yotpo-is-enabled cdz-fullwidth-fix-left">

<main id="maincontent" class="page-main page-main-full">

<!--content here-->

<div class="container-fluid">

<?php 

    if (isset($_GET['p'])) {
        if (file_exists($_GET['p']) && $content = $_GET['p']) {
            include($content);
        }
    }

?>

</div>

<!--content here-->

</main>  

</body>
</html>