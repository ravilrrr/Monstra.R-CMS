<?php Chunk::get('header'); ?>
<?php Chunk::get('header-content'); ?>
<div class="container-wide">

    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <?php Action::run('theme_pre_content'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo Blog::getPosts(3); ?>
            </div>
            <div class="col-xs-12 col-sm-2 tags">
                <h3>Tags</h3>
                <?php echo Blog::getTags(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php Action::run('theme_post_content'); ?>
            </div>
        </div>

    </div>
    
</div>
<?php Chunk::get('footer'); ?>
