<?php get_header() ?>
<main class="site__main">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#CF59D3" fill-opacity="1"
            d="M0,32L34.3,69.3C68.6,107,137,181,206,186.7C274.3,192,343,128,411,133.3C480,139,549,213,617,250.7C685.7,288,754,288,823,266.7C891.4,245,960,203,1029,160C1097.1,117,1166,75,1234,90.7C1302.9,107,1371,181,1406,218.7L1440,256L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>

    <section class="animation">
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc"></div>
    </section>

    <!-- <h1>---- Front-page.php ------</h1> -->
    <?php if (have_posts()): the_post(); ?>

    <?php the_content() ?>
    <?php endif ?>

    <section>

        <div class="anim2">
            <div class="ligneCercle" id="ligne1">
                <div class="ligneCercle" id="ligne2">
                    <div class="ligneCercle" id="ligne3">
                        <div class="ligneCercle" id="ligne4"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#CF59D3" fill-opacity="1"
            d="M0,32L40,58.7C80,85,160,139,240,149.3C320,160,400,128,480,101.3C560,75,640,53,720,64C800,75,880,117,960,160C1040,203,1120,245,1200,234.7C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>


</main>
<?php get_footer() ?>