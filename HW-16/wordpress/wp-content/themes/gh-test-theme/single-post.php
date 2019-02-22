<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="main-photo">
                <?php
                $id = $post->ID;
                $img = get_the_post_thumbnail($id);
                ?>
                <?php echo $img; ?>
            </div>

            <h1><?php $title = $post->post_title;
                echo $title;
                ?></h1>

            <div class="dcl">
                <span class="dcl-item"><i class="far fa-calendar"></i><?php echo get_the_date('d.m.Y', $news[0]->ID); ?></span>
                <span class="dcl-item"><i class="fas fa-comment"></i>201</span>
                <span class="dcl-item"><i class="fas fa-heart"></i>400</span>
            </div>
            <article>
                <?php
                $post = get_post($id);
                $content = $post->post_content;
                echo $content;
                ?>
            </article>
            <?php
                if(comments_open(get_the_ID()))
                {
                    comments_template();
                }
            ?>
            <div class="share">
                <div class="social">
                    <span>Share</span>
                    <ul>
                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="#" class="tw border-lines"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="pn"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <a href="#" class="retweet"><i class="fas fa-retweet"></i></a>
            </div>
            <form method="POST" action="#" class="foot-form">
                <ul class="form_list">
                    <div class="row">
                        <li class="col-md-12 col-lg-6">
                            <label for="name1" hidden>Your name</label>
                            <input id="name1" required name="name" placeholder="Name*">
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <label for="email1" hidden>Email</label>
                            <input id="email1" required type="email" name="email" placeholder="E-mail*">
                        </li>
                    </div>
                    <div class="row">
                        <li class="col-md-12 col-lg-6">
                            <label for="website1" hidden>Email</label>
                            <input id="website1" required type="email" name="email" placeholder="Website">
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <label for="job" hidden>Your name</label>
                            <input id="job" name="telephone"
                                   placeholder="Job">
                        </li>
                    </div>
                    <li>
                        <label for="comment" hidden>Comment </label>
                        <textarea id="comment" name="Message" placeholder="Comment "></textarea>
                        <button class="form-btn">Send</button>
                    </li>
                    <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae
                            malesuada massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare
                            non.</p>
                    </li>
                </ul>
            </form>
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
                        <h3>Category</h3>
                        <ul class="categories">
                            <li><a href="#"> Fashion</a></li>
                            <li><a href="#">Collections</a></li>
                            <li><a href="#">World</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">General</a></li>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Showreal</a></li>
                            <li><a href="#">Glamour</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
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