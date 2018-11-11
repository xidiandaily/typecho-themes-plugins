<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="col-xs-12 text-center">
            <?php _e('版权所有'); ?> &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('|粤ICP备16000124号-1|虚无之地'); ?>.
            <?php _e('|由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 | Themed'); ?>
            <a href="https://github.com/xidiandaily/typecho-themes-plugins.git" target="_blank">Tcnblog </a> edit by <a href="http://blog.chiyl.info/index.php/start-page.html" target="_blank">LawrenceChi</a>
        </div>
    </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>

<script>
    $(function() {
        //增强table的展示效果
        $("table",".post-content").addClass("table-condensed");
        $("table",".post-content").addClass("table-hover");
        $("table",".post-content").addClass("table-bordered");
        $("table",".post-content").addClass("table-striped");
    });
</script>
</html>
