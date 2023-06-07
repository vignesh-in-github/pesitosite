<?php
/*
*@package Pesito version 1.0
*
*/

get_header();
?>
<main id="maincontent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>