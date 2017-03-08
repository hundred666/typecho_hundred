<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-md-8 col-md-push-2 col-sm-12" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
                <article class="post-list">
                    <div>
                        <a class="post-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        <div class="pull-right p-time">
                            <i class="glyphicon glyphicon-time"></i> <?php $this->date('Y-m-d'); ?>
                        </div>
                    </div>
                    <div class="post-content">
                        <?php $this->content('- 阅读剩余部分 -'); ?>
                    </div>
                </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h3 class="post-title"><?php _e('没有找到内容'); ?></h3>
            </article>
        <?php endif; ?>

        <ul class="pager">
            <li class="previous"><?php $this->pageLink('&larr;Previous','prev'); ?></li>
            <li class="next"><?php $this->pageLink('Next&rarr;','next'); ?></li>
        </ul>
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
