<?php
/**
 * 显示下一篇
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function nextpost($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created > ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_ASC)
              ->limit(1);
    $content = $db->fetchRow($sql);
 
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" class="next-post"></a>';
        echo $link;
    } else {
        echo $default;
    }
}
 
/**
 * 显示上一篇
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function prevpost($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created < ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_DESC)
              ->limit(1);
    $content = $db->fetchRow($sql);
 
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" class="prev-post"></a>';
        echo $link;
    } else {
        echo $default;
    }
}
function themeConfig($form) {
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('网站Logo'), _t('在这里填入一个Logo地址，留空则为无'));
    $form->addInput($logo);

    $background = new Typecho_Widget_Helper_Form_Element_Text('background', NULL, NULL, _t('背景图片地址'), _t('在这里填入一个背景图片地址，留空则为默认'));
    $form->addInput($background);
}