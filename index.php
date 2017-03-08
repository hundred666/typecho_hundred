<?php
/**
 * 这是 Hundred 主题
 *
 * @package Hundred
 * @author Hundred
 * @version 1.0
 * @link http://txiner.top
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>


<div class="col-md-8 col-md-push-2 col-sm-12" id="main" role="main">
    <?php while ($this->next()): ?>
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

    <ul class="pager">
        <li class="previous"><?php $this->pageLink('&larr;Previous','prev'); ?></li>
        <li class="next"><?php $this->pageLink('Next&rarr;','next'); ?></li>
    </ul>

</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
