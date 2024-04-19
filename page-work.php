<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <div class="container-fluid work-hero">
            <div class="row">
                <div class="col-12">
                    <div class="work-hero-content">
                        <div class="work-hero-text">
                            <h2>Everything we do is a</h2>
                            <h1>visual interaction</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <ul class="work-nav">
            <li class="work-nav-text"><a href="javascript:filterProjects(0)">All</a></li>
            <?php 
            $projectLoop = new WP_Query(array(
                "post_type" => "project-category",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($projectLoop->have_posts()): ?>
                <?php while($projectLoop->have_posts()): $projectLoop->the_post() ?>
                    <?php
                    $id = get_the_ID();
                    $title = get_the_title();
                    ?>

                    <li class="work-nav-text"><a href="javascript:filterProjects(<?php echo $id ?>)"><?php echo $title; ?></a></li>
                <?php endwhile ?>
            <?php endif ?>
            <?php wp_reset_postdata() ?>
        </ul>

        <?php 
            $projectLoop = new WP_Query(array(
                "post_type" => "project",
                "posts_per_page" => -1
            ));
            ?>
            <?php if($projectLoop->have_posts()): ?>
                <?php while($projectLoop->have_posts()): $projectLoop->the_post() ?>

                    <?php
                    $title = get_the_title();
                    $category = get_field("category");
                    $information = get_field("information");
                    $description = get_field("description");
                    $projectImage = get_field("project-image");
                    ?>

                        <div class="container-fluid project-container project-category-<?php echo $category->ID ?>">
                            <div class="project-box">
                                <div class="row project-animation">
                                    <div class="col-12 col-md-6">
                                        <div class="project-text">
                                            <h2 class=""><?php echo $title ?></h2>
                                            <p class="info"><?php echo $information ?></p>
                                            <p class="text-description"><?php echo $description ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 img-position">
                                        <div class="project-img" style="background-image: url(<?php echo $projectImage["url"] ?>);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   

                <?php endwhile ?>
            <?php endif ?>
            <?php wp_reset_postdata() ?>






        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>