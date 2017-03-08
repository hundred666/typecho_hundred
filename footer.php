<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    <p class="text-center">
        &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    </p>

</footer><!-- end #footer -->

<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" type="text/javascript"></script>
<?php $this->footer(); ?>
</body>
</html>
