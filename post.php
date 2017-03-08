<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-md-8 col-md-push-2 col-sm-12" id="main" role="main">

    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <ol class="breadcrumb">
            <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
            <li><?php $this->category(','); ?></li>
            <li class="active"><a
                        href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </li>
        </ol>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><span class="label label-info"><?php $this->tags('</span>  <span class="label label-info"> ', true, 'none'); ?></span></p>
    </article>


    <ul class="pager">
        <li class="previous"><?php $this->thePrev('%s', '没有了'); ?></li>
        <li class="next"><?php $this->theNext('%s', '没有了'); ?></li>
    </ul>


    <div class="panel-group" id="comment-form">
        <div class="panel panel-info">
            <div class="panel-heading">
                <p class="panel-title text-center">
                    <a data-toggle="collapse" data-parent="#comment-form"
                       href="#comment">
                        查看评论
                    </a>
                </p>
            </div>
            <div id="comment" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
        </div>
    </div>

</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
