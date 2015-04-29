<?php 
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'page') !== false) {
    $paged = true;
} else {
    $paged = false;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($this->_currentPage>1) echo '第'.$this->_currentPage.'页 | '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' | '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-1.11.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.fitvids.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
    <?php if ($this->is('post')): ?>
    <link rel="canonical" href="<?php $this->permalink() ?>" />
    <?php endif; ?>
    <?php if ($this->is('index')): ?>
    <link rel="canonical" href="<?php $this->options->siteUrl(); ?>" />
    <?php endif; ?>
    <?php $this->header("generator=&template="); ?>
  </head>
<body> 
<body class="nav-closed <?php if ($this->is('post') or $this->is('page')): ?>post-template<?php endif; ?> <?php if ($this->is('archive') or $paged === true): ?>paged archive-template<?php endif; ?>">
<div class="nav">
    <h3 class="nav-title">Menu</h3>
    <a href="#" class="nav-close">
        <span class="hidden">Close</span>
    </a>
    <ul>
        <li class="nav-home" role="presentation">
            <a href="<?php $this->options->siteUrl(); ?>">
                Home
            </a>
        </li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li class="nav-<?php $pages->slug(); ?><?php if($this->is('page', $pages->slug)): ?>current<?php endif; ?>" role="presentation"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                <?php $pages->title(); ?>
            </a></li>
        <?php endwhile; ?>
    </ul>
    <a class="subscribe-button icon-feed" href="<?php $this->options->siteUrl(); ?>/feed">Subscribe</a>
</div>
<span class="nav-cover"></span>


<div class="site-wrapper">