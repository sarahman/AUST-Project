
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style2.css') ?>" type="text/css" />

    <div class="content-body">
        <div class="left">
            <?php $this->load->view('partials/about-left-bar') ?>
        </div>

        <div class="mid">
        <?php if (!empty($pageItem)) {
            $path = site_url('assets/images/' . $pageItemImage['name']);
            echo <<<EOF

            <div class='heading1'>{$pageItem['title']}</div>
            <div class='mid-content'>
                <p><img src="{$path}" alt="" style="height:250px" /></p>
                {$pageItem['detail']}
            </div><br />";
EOF;
        } ?>
        </div>

        <div class="right">
            <div class="headline">
                <h3><?php echo $rightBarItem['title'] ?></h3>
            </div>
            <div class="right-content">
                <div class="rank">
                    <?php echo $rightBarItem['detail']; ?>
                </div>
            </div>
        </div>
    </div>