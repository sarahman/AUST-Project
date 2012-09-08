
<div id="content-top">
    <div class="banner">
        <div class="welcome">
            <?php echo $pageDetail ?>
        </div>
        <div id="slideshow">
            <div id="loading">Loading</div>

            <?php if (!empty($sliderImages)) : ?>

            <ul id="pictures">
                <?php foreach ($sliderImages AS $image) : ?>
                <li>
                    <img src="<?php echo site_url("assets/images/campus/{$image['name']}") ?>"
                         alt="<?php echo $image['name'] ?>" width="400" height="250" />
                </li>
                <?php endforeach ?>
            </ul>

            <ul id="menu">
                <?php foreach ($sliderImages AS $image) : ?>
                <li><a href=""><?php echo $image['caption'] ?></a></li>
                <?php endforeach ?>
            </ul>

            <?php endif ?>

        </div>
    </div>
</div>
<div id="content-bottom">
    <div class="aust">
        <div class="heading2">
            <?php echo $pageItems[0]['title']; ?>
        </div>

        <div class="box">
        <?php if (!empty($leadershipImages)) : $i = 0; foreach ($leadershipImages AS $image) : ?>
            <ul>
                <li>
                    <div class="img">
                        <img src="<?php echo site_url('assets/images/leadership/'.$image['name']) ?>" width="60" height="70" />
                    </div>
                    <?php echo $pageItems[$i++]['detail'] ?>
                </li>
            </ul>
        <?php endforeach; endif ?>
        </div>
    </div>
    <div class="news">
        <div class="heading2">
            University News
        </div>
        <div class="news-box">

        <?php if (!empty($latestNews)) {
            foreach($latestNews AS $news) {
                echo <<<EOF

                <div class="news-txt">
                    <p><a href="#">{$news['title']}</a></p>
                </div>
                <div class="date">
                    {$news['date']}<br/>{$news['time']}
                </div>
EOF;
            }
        } ?>

            <div class="link">
                <a href="<?php echo site_url('news') ?>">more news...</a>
            </div>
        </div>
    </div>
    <div class="spotlight">
        <div class="heading2">
            Spotlight
        </div>
        <div class="spotlight-box">
            <ul id="newsticker">
                <marquee scrollamount="1" direction="down" onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=1">
                <?php if (!empty($latestEvents)) {
                    foreach ($latestEvents AS $event) {
                        echo "<li><a href='#'>{$event['event_title']}</a></li>";
                    }
                } ?>
                </marquee>
            </ul>
        </div>
    </div>
</div>