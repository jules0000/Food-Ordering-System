<!--About Us Page-->
<section class="fc-identity fc-bottom fc-menu-wrapper">
    <div class="container">

        <div class="row">

        </div>
        <div class="container">
            <div class="section-header text-left">
                <h1><?php if (isset($pagetitle)) echo $pagetitle; ?></h1>

            </div>
            <div class="about-text-more">
                <?php if (isset($record->description)) echo $record->description;?>
            </div>
        </div>
    </div>


    </div>
</section>