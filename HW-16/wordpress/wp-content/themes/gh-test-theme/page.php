<?php
    get_header();
    $get_page = 'post_page';
    $page = $_GET[$get_page] ?: 1;
    $per_page = 6;
    $count = ceil(wp_count_posts()->publish / $per_page);
    $posts = get_posts([
        'posts_per_page' => $per_page,
        'offset'         => ($page - 1) * $per_page,
    ]);
    $url = get_permalink(2) . '&' . $get_page . '=';
?>
    <main>
        <div class="container">
            <div class="mar row">
                <?php foreach ($posts as $post) :?>
                <div class="col-lg-4 col-md-12 col-xs-12 mar">
                    <div class="post">
                        <?php echo get_the_post_thumbnail($post->ID, array(360, 360)); ?>
                        <div class="post-content">
                            <h2><?php
                                $text = get_the_title($post->ID);
                                $trimmed_content = wp_trim_words($text, 15, "...");
                                echo $trimmed_content;
                                ?>
                            </h2>
                            <p> <?php
                                $text = $post->post_content;
                                $trimmed_content = wp_trim_words($text, 30, "...");
                                echo $trimmed_content;
                                ?></p>
                            <a href=<?php echo get_permalink($post->ID); ?>>
                                <button>Read more</button>
                            </a>
                            <div class="dcl dcl-blog">
                                <span class="dcl-item"><i class="far fa-calendar"></i> <?php
                                    echo get_the_date('d.m.Y', $post->ID);
                                    ?></span>
                                <span class="dcl-item"><i class="fas fa-comment"></i>201</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="pagination">
                <a href=" <?php echo $url . '1' ?>"><button>First</button></a>
                <?php if($page > 1) : ?>
                    <a href=" <?php echo $url . ($page-1) ?>"><button>Prev</button></a>
                <?php endif;?>
                <?php if($page < $count) : ?>
                    <a href=" <?php echo $url . ($page + 1) ?>"><button>Next</button></a>
                <?php endif;?>
                <a href=" <?php echo $url . $count ?>"><button>Last</button></a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>