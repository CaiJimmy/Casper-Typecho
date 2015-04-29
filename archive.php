<?php $this->need('header.php'); ?>

<header class="main-header tag-head <?php if ($this->options->background): ?> cover" style="background-image: url(<?php $this->options->background() ?>)<?php else: ?>no-cover<?php endif; ?>">
    <nav class="main-nav overlay clearfix">
        <?php if ($this->options->logo): ?>
            <a class="blog-logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logo() ?>)">" alt="Blog Logo" /></a>
        <?php endif; ?>
        <a class="menu-button icon-menu" href="#">
            <span class="word">Menu</span>
        </a>
    </nav>
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
        </div>
    </div>
</header>


<main class="content" role="main">

    <?php $this->need('loop.php'); ?>

</main>
<?php $this->need('footer.php'); ?>