
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style2.css') ?>" type="text/css" />

    <div class="content-body">
        <div class="left">
            <?php $this->load->view('partials/about-left-bar') ?>
        </div>

        <div class="mid">
        <?php if (!empty($pageItems)) : ?>
            <div class="mid-content">
            <?php foreach ($pageItems AS $pageItem) {
                $ipath = site_url('assets/images/pub/' . $pageItem['image_name']);
                $fpath = site_url('uploads/pub/' . $pageItem['file_name']);

                echo <<<EOF
                <p>
                    <img style="height:100px;width:80px" src="{$ipath}" />
                    <a href="{$fpath}" style="padding:0 0 0 20px">{$pageItem['title']}</a>
                    {$pageItem['detail']}
                </p>
EOF;
                } ?>
            </div>
        <?php endif ?>
        </div>

        <div class="right">
            <?php $this->load->view('partials/publication-right-bar') ?>
        </div>
    </div>