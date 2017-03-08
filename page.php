<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-md-8 col-md-push-2 col-sm-12" id="main" role="main">
    <article class="post">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>


    <div class="panel-group" id="comment-form">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#comment-form"
                       href="#comment">
                        查看评论
                    </a>
                </h4>
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
