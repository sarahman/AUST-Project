<div class="logo">
    <a href="<?php echo site_url('home') ?>"><img src="<?php echo site_url('assets/images/logo.gif') ?>" alt='AUST Logo' /></a>
</div>

<div class="search">
    <form action="" method="post">
        <input id="search-text" class="search-text" type="text" name="search" value="search..." />
        <button class="search-button" type="submit" name="submit"></button>
    </form>
</div>

<script type="text/javascript">
    jQuery(function($) {
        $('#search-text').focus(function() {
            if ($(this).val() == 'search...') {
                $(this).val('');
            }
        });
        $('#search-text').blur(function() {
            if ($(this).val() == '') {
                $(this).val('search...');
            }
        });
    });
</script>