<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="main-photo">
                <img class="popup-img" src="<?php echo S_IMG_DIR; ?>/indexph.png" alt="Main photo">
                <div class="info-popup">
                    <div class="roll">
                        <button><i class="fas fa-compress"></i></button>
                    </div>
                    <div class="about">
                        <h2>Morgan Freeman</h2>
                        <p class="whois">Actor</p>
                        <div class="row button-description">
                            <div class="col-8">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci,
                                    ac
                                    venenatis
                                    ante
                                    venenatis eget.
                                </p>
                            </div>
                            <div class="col-4">
                                <button><i class="fas fa-angle-left"></i></button>
                                <button><i class="fas fa-angle-right"></i></button>
                                <p>1/10</p>
                            </div>
                        </div>
                    </div>
                    <div class="social social-popup">
                        <ul>
                            <li><a href="#" class="fb"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" class="tw"><i class="fas fa-reply"></i></a></li>
                            <li><a href="#" class="inst"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-news">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="workshop">
                            <img src="<?php echo S_IMG_DIR; ?>/workshop.png" alt="Workshop photo">
                            <p>fashion workshop</p>
                            <p>NOV 21-23</p>
                            <p>9:00am - 4:00pm</p>
                            <div class="logo-style">
                                <p>RSVP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12 news-list">
                        <h3>News</h3>
                        <?php $news = get_posts('post', 3); ?>
                        <a href=<?php echo get_permalink($news[0]->ID); ?>>
                            <div class="news">
                                <?php echo get_the_post_thumbnail($news[0]->ID, array(67, 67)); ?>
                                <div class="news-desc">
                                    <h4 class="news-header">
                                        <?php
                                        $text = get_the_title($news[0]->ID);
                                        $trimmed_content = wp_trim_words($text, 7, "...");
                                        echo $trimmed_content;
                                        ?>
                                    </h4>

                                    <p class="news-date">
                                        <?php
                                        echo get_the_date('d.m.Y', $news[0]->ID);
                                        ?>
                                    </p>
                                    <p class="news-info">
                                        <?php
                                        $text = $news[0]->post_content;
                                        $trimmed_content = wp_trim_words($text, 10, "...");
                                        echo $trimmed_content;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href=<?php echo get_permalink($news[1]->ID); ?>>
                            <div class="news">
                                <?php
                                echo get_the_post_thumbnail($news[1]->ID, array(67, 67));
                                ?>
                                <div class="news-desc">
                                    <h4 class="news-header"><?php
                                        $text = get_the_title($news[1]->ID);
                                        $trimmed_content = wp_trim_words($text, 7, "...");
                                        echo $trimmed_content;
                                        ?></h4>
                                    <p class="news-date"><?php
                                        echo get_the_date('d.m.Y', $news[1]->ID);
                                        ?></p>
                                    <p class="news-info"><?php
                                        $text = $news[1]->post_content;
                                        $trimmed_content = wp_trim_words($text, 10, "...");
                                        echo $trimmed_content;
                                        ?></p>
                                </div>
                            </div>
                        </a>
                        <a href=<?php echo get_permalink($news[2]->ID); ?>>
                            <div class="news">
                                <?php
                                echo get_the_post_thumbnail($news[2]->ID, array(67, 67));
                                ?>
                                <div class="news-desc">
                                    <h4 class="news-header"><?php
                                        $text = get_the_title($news[2]->ID);
                                        $trimmed_content = wp_trim_words($text, 7, "...");
                                        echo $trimmed_content;
                                        ?></h4>

                                    <p class="news-date"><?php
                                        echo get_the_date('d.m.Y', $news[2]->ID);
                                        ?></p>
                                    <p class="news-info"><?php
                                        $text = $news[2]->post_content;
                                        $trimmed_content = wp_trim_words($text, 10, "...");
                                        echo $trimmed_content;
                                        ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12 news-list">
                        <div class="contacts">
                            <img src="<?php echo S_IMG_DIR; ?>/logo-black.png" alt="Black logo">
                            <div class="contacts-list">
                                <div class="contacts-item">
                                    <i class=" ihover fas fa-phone-square"></i>
                                    <span>+ 00 123 456 7890</span>
                                </div>
                                <div class="contacts-item">
                                    <i class="ihover far fa-envelope"></i>
                                    <span>info@square.com</span>
                                </div>
                                <div class="social social-bot contacts-item">
                                    <ul>
                                        <li><a href="#" class="ihover"><i class="fab fa-facebook-f"></i> </a></li>
                                        <li><a href="#" class="ihover"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ihover"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" class="ihover"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#" class="ihover"><i class="fab fa-flickr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="twit">
                            <p><a href="#" class="ihover"><i class="fab fa-twitter"></i></a></p>
                            <p>Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake
                                <a href="#"> @cheesecake</a> tootsie roll.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands-list">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="<?php echo S_IMG_DIR; ?>/brand1.png" alt="Brand 1">
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="<?php echo S_IMG_DIR; ?>/brand2.png" alt="Brand 1">
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="<?php echo S_IMG_DIR; ?>/brand3.png" alt="Brand 1">
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <img src="<?php echo S_IMG_DIR; ?>/brand4.png" alt="Brand 1">
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>