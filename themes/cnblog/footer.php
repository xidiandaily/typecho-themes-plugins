<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="col-xs-12 text-center">
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动'); ?>.
            Themed <a href="https://github.com/xidiandaily/typecho-themes-plugins.git" target="_blank">Tcnblog </a> edit by <a href="http://blog.chiyl.info/index.php/start-page.html" target="_blank">LawrenceChi</a>
        </div>
    </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
