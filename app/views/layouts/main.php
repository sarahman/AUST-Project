<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $this->config->item('siteTitle') ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/css/style.css') ?>" media="all" />
    <link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/css/BarackSlideshow.css') ?>" media="screen" title="Stylesheet" charset="utf-8" />

    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/mootools-1.2.1-core-yc.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/mootools-1.2.2.2-more.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/Fx.MorphList.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/BarackSlideshow.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/jquery.js') ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo site_url('assets/js/jquery.aslidertext.js') ?>"></script>

    <script type="text/javascript">
        window.addEvent('domready', function(){
             new BarackSlideshow('menu', 'pictures', 'loading', {transition: 'fade', auto: true ,autostart: true});
        });
        jQuery.noConflict();
        jQuery(document).ready(function(){
            jQuery('#newsticke').aSliderText({
                    updateTime: 2000,
                    height: 70
                    //element: 'li'
            });
        });
    </script>
</head>

<body>
<div id="wrapper">

    <div id="top-menu">
        <?php $this->load->view('layouts/top-menu.php') ?>
    </div>

    <div id="header">
        <?php $this->load->view('layouts/header.php') ?>
    </div>

    <div id="main-menu">
        <?php $this->load->view('layouts/main-menu.php') ?>
    </div>

    <div id="content">
        <?php echo $content_for_layout ?>
    </div>

</div>

<div id="footerDiv">

    <div id="footer">
        <?php $this->load->view('layouts/footer.php') ?>
    </div>

</div>
</body>
</html>