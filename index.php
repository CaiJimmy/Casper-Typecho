<?php
/**
 * Ghost default theme.
 * 
 * @package Casper
 * @author Ghost & Jimmy
 * @version 1.0
 * @link http://jimmycai.org
 */
 
 $this->need('header.php');
 ?>    
<header class="main-header <?php if ($this->options->background): ?>" style="background-image: url(<?php $this->options->background() ?>)<?php else: ?>no-cover<?php endif; ?>">
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
            <h1 class="page-title"><?php $this->options->title(); ?></h1>
            <h2 class="page-description"><?php $this->options->description(); ?></h2>
        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>
<main id="content" class="content" role="main">
    <?php $this->need('loop.php'); ?>
</main>
<?php $this->need('footer.php'); ?>