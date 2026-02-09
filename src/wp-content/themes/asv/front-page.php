<?php get_header(); ?>

<section class="containter-fluid">
    <div class="row">
        <div class="container-sm-12">
            <div class="card text-bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/imagen_fondo.jpg" class="card-img" alt="...">
                <div class="card-img-overlay ms-5 mt-5">
                    <p class="text-small fs-2">POSTED ON <strong>STARTUP</strong></p>
                    <h1 class="titulo">Step-by-step guide to choosing great font pairs</h1>
                    <p class="text-small fs-3 mt-4"> By <span class="text-warning">James West</span> James West | May 23, 2022</p>
                    <p class="text-small fs-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu<br>fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <button class="btn btn-warning btn-lg mt-4 fw-bold ms-2" style="border-radius: 0;">Read More ></button>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-bg-white">
        <div class="card-text3">
            <div class="container custom-container">
                <div class="colm1">
                    <p class="text-large fs-3 mt-4">Featured Post</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/casa_blanca.jpg" class="features-img img-fluid rounded-3">
                    <p class="text-small text-muted">By John Doe | May 23, 2022</p>
                    <p class="text-bold featured-title"><b>Lorem ipsum dolor sit amet, consectetur adipiscing<br>elit, sed do eiusmod tempor.</b></p>
                    <p class="features-description">Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore<br>eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    <button class="btn btn-warning btn-lg fw-bold" style="border-radius: 0; ">Read More ></button>
                </div>

                <div class="colm2">
                    <p class="text-large fs-3 mt-4">All Posts</p>
                    <p class="text-small text-muted">By John Doe | May 23, 2021</p>
                    <p class="text-large">8 Figma design systems that you can download for free today.</p>
                    </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/edificioicono.jpg" class="category-icon" />
                        <p class="category-title">Business</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card highlight">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/coheteicono.jpg" class="category-icon" />
                        <p class="category-title">Startup</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="author-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/persona_1.jpg" class="author-photo" />
                        <p class="author-name">Floyd Miles</p>
                        <div class="social-icons d-flex justify-content-center gap-3 mt-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/Facebook.jpg" class="social-icon" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/Twitter.jpg" class="social-icon" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/Instagram.jpg" class="social-icon" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/css/img(optimitzades)/Linkedln.jpg" class="social-icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>