<?php $this->need('header.php'); ?>
<header class="main-header author-head cover" style="background-image: url(<?php $this->options->themeUrl('img'); ?>/<?php $this->author() ?>.jpg)">
    <nav class="main-nav overlay clearfix">
        <?php if ($this->options->logo): ?>
            <a class="blog-logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logo() ?>)">" alt="Blog Logo" /></a>
        <?php endif; ?>
        <a class="menu-button icon-menu" href="#">
            <span class="word">Menu</span>
        </a>
    </nav>
</header>

    <section class="author-profile inner">
        <figure class="author-image">
            <div class="img" style="background-image: url(<?php $this->options->themeUrl('img'); ?>/<?php $this->author() ?>.jpg)">
                <span class="hidden">
                    <?php $this->author() ?>'s Picture
                </span>
                <?php $this->author->gravatar(400); ?>
            </div>
        </figure>
        <script>
               var authorimgurl = $('.author-image div img').attr('src');
               $(".author-image .img").css({'background-image': "url( " + authorimgurl + ")" });
               $('.author-image .img img').remove();
        </script>
        <h1 class="author-title"><?php $this->author() ?></h1>
    </section>

<main class="content" role="main">
    <?php $this->need('loop.php'); ?>
</main>

<?php $this->need('footer.php'); ?>
