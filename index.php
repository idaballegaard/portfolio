<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
            $myname = get_field("my_name");
            $jobtitle = get_field("job_title");
            ?>

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="banner">
                            <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo-red.svg" alt="">
                            <h1 class="my-name"><?php echo $myname ?></h1>
                            <p><?php echo $jobtitle ?></p>
                            <!-- <img src="<?php echo get_template_directory_uri() ?>/img/portfolio-background.svg" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>