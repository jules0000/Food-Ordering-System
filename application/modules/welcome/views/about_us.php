<!--About Us Page-->
<section class="privacy-section cs-gray-bg">
    <div class="container">

        <div class="row">

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