<?php
/*
*@package Pesito version 1.0
*
*/
get_header();
?>
<div class="hideonmobile">
<main id="maincontent">
    <div class="container-fluid p-0" id="dynamic-bg">
        <div class="container main-con">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6" id="logo-con">
                        <img src="/wp-content/uploads/2023/06/logo.png" alt="logo" width="135">
                        <h1>Order from restaurants near you</h1>
                        <?php the_content(); ?>
                        <a class="btn btn-primary" id="use-app" role="button">Use App Now</a>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px;">
                        <div class="phone-wrapper">
                            <div class="phone-notch">
                            </div>
                            <div class="iframe-contents">
                                <div id="overlay" class="overlay-wrapper"></div>
                                <?php get_template_part("templates/iframe-contents"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="custom-form">
            <?php //get_template_part("templates/form-data"); ?>
        </div>
        <div id="dish-con-ajax">
        </div>
    </div>
    <div class="container-fluid res-con-fluid">
        <div class="container">
            <div class="col-md-12 res-data-main">
                <div class="row">
                    <div class="col-xl-3 res-data-cols">
                        <div class="res-data">
                            <h3>Restaurants</h3>
                            <h4>2300+</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 res-data-cols">
                        <div class="res-data">
                            <h3>Items</h3>
                            <h4>65000+</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 res-data-cols">
                        <div class="res-data">
                            <h3>Customers</h3>
                            <h4>1M+</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 res-data-cols">
                        <div class="res-data">
                            <h3>Deliveries</h3>
                            <h4>5M+</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    get_footer();
?>
</div>
<div class="showonmobile">
    <?php get_template_part("templates/mobile-app-con"); ?>
</div>