<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if (login()) { echo tab($p); } ?> 
                <?php if (!empty($p->video)) { ?>
                    <div class="featured featured-video embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php } ?>
                <?php if (!empty($p->audio)) { ?>
                    <div class="featured featured-audio embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
                    </div>
                <?php } ?>
                <?php if (!empty($p->quote)) { ?>
                    <div class="featured featured-quote">
                        <blockquote class="quote"><i class="fas fa-quote-left"></i> <?php echo $p->quote ?> <i class="fas fa-quote-right"></i></blockquote>
                    </div>
                <?php } ?>
                <?php if (!empty($p->link)) { ?>
                    <div class="featured featured-link">
                        <a target="_blank" href="<?php echo $p->link ?>"><i class="fas fa-external-link"></i> <?php echo $p->link ?></a>
                    </div>
                <?php } ?>
                <?php echo $p->body; ?>
                <div class="toolbox">
                    <span class="category"><i class="fas fa-folder"></i> <?php echo $p->category;?></span> 
                    <span class="tags"><i class="fas fa-tags"></i> <?php echo $p->tag;?></span> 
                    <span class="share pull-right">
                        <a target="_blank" class="first" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="fab fa-facebook fa-lg"></i></a> 
                        <a target="_blank" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fab fa-twitter fa-lg"></i></a> 
                        <a target="_blank" href="http://vk.com/share.php?url=<?php echo $p->url ?>&title=<?php echo $p->title ?>&noparse=true"><i class="fab fa-vk fa-lg"></i></a> 
                        <a target="_blank" href="https://plus.google.com/share?url=<?php echo $p->url ?>"><i class="fab fa-google-plus fa-lg"></i></a> 
                        <a target="_blank" class="last" href="http://pinterest.com/pin/create/button/?url=<?php echo $p->url ?>"><i class="fab fa-pinterest fa-lg"></i></a> 
                    </span>
                </div>
                <?php if (disqus()): ?>
                    <?php echo disqus($p->title, $p->url) ?>
                <?php endif; ?>
                <?php if (disqus_count()): ?>
                    <?php echo disqus_count() ?>
                <?php endif; ?>
                <?php if (!empty($next) || !empty($prev)): ?>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <?php if (!empty($next)): ?>
                    <li class="next pull-left">
                        <a href="<?php echo($next['url']); ?>" rel="next">&larr; <?php echo i18n('Newer');?> <?php echo i18n('Posts');?></a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($prev)): ?>
                    <li class="prev pull-right">
                        <a href="<?php echo($prev['url']); ?>" rel="prev"><?php echo i18n('Older');?> <?php echo i18n('Posts');?> &rarr;</a>
                    </li>
                    <?php endif;?>
                </ul>
                <?php endif; ?>
                <?php if (facebook() || disqus()): ?>
                   <div id="comments">
                        <?php if (facebook()): ?>
                            <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
                        <?php endif; ?>
                        <?php if (disqus()): ?>
                            <div id="disqus_thread"></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article>