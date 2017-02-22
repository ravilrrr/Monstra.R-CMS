
    <footer>
    <hr>    
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                        <div class="col-xs-12 text-center">All Right Reserved &copy; <?php echo Site::name(); ?></div>
                        <div class="col-xs-12 text-center"><?php echo Chunk::get('footer-links'); ?> | <a href="http://monstra.org/" title = "<?php echo __('Powered by', 'system') . ' Monstra.R'?>">Monstra.R</a></div>
            </div>          
        </div>
    <?php Action::run('theme_footer'); ?>
    </footer>    

    <?php // echo Snippet::get('google-analytics'); ?>    

    <script src="<?php echo Site::url(); ?>/public/themes/default/js/default.js"></script>
    <script src="<?php echo Site::url(); ?>/public/themes/default/js/contact_me.js"></script>

    </body>
</html>
