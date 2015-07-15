                <?php while($this->next()): ?>
                    <article class="post" id="<?php $this->cid() ?>">
                        <header class="post-header">
                            <h2 class="post-title">
                                <a href="<?php $this->permalink() ?>" class="post-title">
                                    <?php $this->title() ?>
                                </a>
                            </h2>
                        </header>
                        <section class="post-excerpt">
                            <?php $this->excerpt(400,'.....'); ?>
                        </section>
                        <footer class="post-meta">
                            <?php $this->author->gravatar(48); ?>
                            <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a>
                            <?php $this->category(' , '); ?>
                            <time class="post-date" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
                        </footer>
                    </article>
                    <?php endwhile; ?>
            <nav class="pagination" role="pagination">
                <?php $this->pageLink('← Newer Posts','prev'); ?>
                <?php $this->pageLink('Older Posts →','next'); ?>
            </nav>
