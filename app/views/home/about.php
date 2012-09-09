
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style2.css') ?>" type="text/css" />

    <div class="content-body">
        <div class="left">
            <?php $this->load->view('partials/about-left-bar') ?>
        </div>

        <div class="mid">
        <?php if (!empty($pageItems)) {
                foreach ($pageItems AS $pageItem) {
                    echo "<div class='heading1'>{$pageItem['title']}</div>";
                    echo "<div class='mid-content'>{$pageItem['detail']}</div><br />";
                }
        } ?>
        </div>

        <div class="right">

            <div class="headline">
                <h3>
                    <?php echo $rightBarItem['title']; ?>
                </h3>
            </div>
            <div class="right-content">
                <div class="img">
                    <img src="<?php echo site_url('assets/images/' . $pageItemImage['name']) ?>" width="200" />
                </div>
                <div class="box">
                    <?php echo $rightBarItem['detail']; ?>
                </div>
            </div>
        </div>
    </div>