<?php $this->need('header.php'); ?>
<header class="main-header post-head <?php if ($this->fields->Picture): ?>" style="background-image: url(<?php $this->fields->Picture(); ?>)<?php else: ?>no-cover<?php endif; ?>">
    <nav class="main-nav overlay clearfix">
        <?php if ($this->options->logo): ?>
            <a class="blog-logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logo() ?>)">" alt="Blog Logo" /></a>
        <?php endif; ?>
        <a class="menu-button icon-menu" href="#">
            <span class="word">Menu</span>
        </a>
    </nav>
</header>
        <article class="post" id="<?php $this->cid() ?>">
            <header class="post-header">
                <h1 href="<?php $this->permalink() ?>" class="post-title">
                    <?php $this->title() ?>
                </h1>
                <section class="post-meta">
                    <time class="post-date" datetime="<?php $this->date(); ?>">
                        <?php $this->date(); ?>
                    </time>
                    <?php $this->category(' , '); ?>
                </section>
            </header>
            <section class="post-content">
                    <?php $this->content(); ?>
            </section>
        <footer class="post-footer">
            <figure class="author-image">
                <a class="img" href="<?php $this->author->permalink(); ?>"><?php $this->author->gravatar(400); ?></a>
            </figure>
            <script>
               var authorimgurl = $('.author-image a img').attr('src');
               $(".author-image a").css({'background-image': "url( " + authorimgurl + ")" });
               $('.author-image a img').remove();
            </script>
            <section class="author">
                <h4><a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a></h4>
                    <p>Read <a href="<?php $this->author->permalink(); ?>">more posts</a> by this author.</p>
            </section>

            <section class="share">
                <h4>Share this post</h4>
                <a class="icon-twitter" href="https://twitter.com/share?text=<?php $this->title() ?>&amp;url=<?php $this->permalink() ?>"
                    onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                    <span class="hidden">Twitter</span>
                </a>
                <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>"
                    onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                    <span class="hidden">Facebook</span>
                </a>
                <a class="icon-google-plus" href="https://plus.google.com/share?url=<?php $this->permalink() ?>"
                   onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                    <span class="hidden">Google+</span>
                </a>
            </section>
        </footer>
        </article>
        <nav class="post-nav clearfix">
                <?php prevpost($this); ?>
                <?php nextpost($this); ?>
        </nav>
        
<?php $this->need('footer.php'); ?>