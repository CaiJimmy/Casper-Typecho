<?php $this->need('header.php'); ?>
<header class="main-header post-head <?php if ($this->options->background): ?>" style="background-image: url(<?php $this->options->background() ?>)<?php else: ?>no-cover<?php endif; ?>">
    <nav class="main-nav overlay clearfix">
        <?php if ($this->options->logo): ?>
            <a class="blog-logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logo() ?>)">" alt="Blog Logo" /></a>
        <?php endif; ?>
        <a class="menu-button icon-menu" href="#">
            <span class="word">Menu</span>
        </a>
    </nav>
</header>

<main class="content" role="main">
        <article class="post" id="<?php $this->cid() ?>">
            <header class="post-header">
                <h1 href="<?php $this->permalink() ?>" class="post-title">
                    <?php $this->title() ?>
                </h1>
            </header>
            <section class="post-content">
                    <?php $this->content(); ?>
            </section>
        </article>
</main>
<?php $this->need('footer.php'); ?>