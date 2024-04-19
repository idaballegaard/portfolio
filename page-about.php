<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
            $myName = get_field("my_name");
            $statement = get_field("statement");
            $introduction = get_field("introduction");
            $skills = get_field("skills");
            $profilePicture = get_field("profile_picture");
            $videoUrl = get_field("video");
            $cv = get_field("cv");
            ?>

            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 profile">
                        <div class="profile-content">
                            <img class="profile-pic" src="<?php echo $profilePicture["url"] ?>" alt="Profile picture">
                            <div>
                                <h1 class="my-name-about"><?php echo $myName ?></h1>
                                <p class="statement"><?php echo $statement ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid about-container">
                <div class="about">
                    <div class="row about-animation">
                        <div class="col-12 col-md-5">
                            <h2 class="about-heading">A brief introduction</h2>
                            <p class="about-paragraph"><?php echo $introduction ?> </p>
                            <a class="cv-download" href="<?php echo $cv["url"] ?>">Download my CV</a>
                        </div>
                        <div class="col-12 col-md-7">
                            <h2 class="about-heading video">My video CV</h2>
                            <iframe class="video-frame" width="560" height="315" src="<?php echo $videoUrl ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>  
            </div>
                
            <div class="container-fluid about-container">
                <div class="skills">
                    <div class="row about-animation">
                        <div class="col-12 col-md-6">
                            <h2 class="about-heading">Skills</h2>
                            <p class="about-paragraph"><?php echo $skills ?> </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="about-heading tools">Tools</h2>
                            <?php 
                            $toolsLoop = new WP_Query(array(
                                "post_type" => "tool",
                                "posts_per_page" => -1
                            ));
                            ?>
                            <?php if($toolsLoop->have_posts()): ?>
                                <?php while($toolsLoop->have_posts()): $toolsLoop->the_post() ?>
                                    <?php
                                    $img = get_field("img");
                                    ?>
                                
                                    <img class="tool-img" src="<?php echo $img["url"] ?>" alt="Picture of tool">

                                <?php endwhile ?>
                            <?php endif ?>
                            <?php wp_reset_postdata() ?>
                        </div>
                    </div>
                </div>
            </div>
                    
                
           

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>