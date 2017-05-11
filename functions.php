<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $tongji = new Typecho_Widget_Helper_Form_Element_Textarea('message', NULL, 'Powered by typecho-Theme By <a href="http://txiner.top">jrotty</a>-神ICP备00001号', _t('底部声明什么的'), _t('填入备案链接或者统计代码或者版权什么的'));
    $form->addInput($tongji);
}

/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

