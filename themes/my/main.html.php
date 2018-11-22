<!-- Main Content -->
<div class="container" id="content-body">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php if (config('category.info') === 'true'):?>
            <?php if (!empty($category)): ?>
                <div class="category-info">
                    <blockquote class="category">                                   
                        <?php echo $category->body; ?>
                    </blockquote>
                    <hr>
                </div>
            <?php endif; ?>
        <?php endif; ?>
		<?php $i = 0; $len = count($posts); ?> 
        <?php foreach ($posts as $p): ?>
			<?php if ($i == 0) {
				$class = 'post-preview first';
			} elseif ($i == $len - 1) {
				$class = 'post-preview last';
			} else {
				$class = 'post-preview';
			}
			$i++; ?> 		
			<div class="row">
            <div class="<?php echo $class ?> col-sm-12" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting"> 			
                <a href="<?php echo $p->url; ?>">
                    <h2 class="post-title" itemprop="name">
                        <?php echo $p->title; ?>
                    </h2>
                </a>
                <p class="post-meta">
					<span itemprop="datePublished"><?php echo strftime(config("date_format"), $p->date); ?></span> - <?php echo i18n('Published_in');?>
					<span itemprop="articleSection"><?php echo $p->category ?></span> <?php echo i18n('Author');?>
					<span itemprop="author"><a href="<?php echo $p->authorUrl ?>"><?php echo $p->author ?></a></span> 
					<?php if (disqus_count()) { ?> - 
						<span><a href="<?php echo $p->url ?>#disqus_thread"> <?php echo i18n('Comments');?></a></span>
					<?php } elseif (facebook()) { ?> -
						<a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count>  <?php echo i18n('Comments');?></span></a>
					<?php } ?> 
				</p>
				    <p itemprop="articleBody">
						<?php echo get_thumbnail($p->body) ?>
						<?php echo get_teaser($p->body, $p->url) ?>
						<?php if (config('teaser.type') === 'trimmed'):?><a href="<?php echo $p->url;?>"><?php echo i18n('More');?></a><?php endif;?>
					</p> 
				<hr>
			</div> 	
			</div>
        <?php endforeach; ?>
        <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
            <!-- Pager -->
            <ul class="pager">
                <?php if (!empty($pagination['prev'])): ?>
                <li class="prev pull-left">
                    <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>" rel="prev">&larr; <?php echo i18n('Newer');?> <?php echo i18n('Posts');?></a>
                </li>
                <?php endif;?>
                <?php if (!empty($pagination['next'])): ?>
                <li class="next pull-right">
                    <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>" rel="next"> <?php echo i18n('Older');?> <?php echo i18n('Posts');?> &rarr;</a>
                </li>
                <?php endif;?>
            </ul>
        <?php endif; ?>
        </div>
    </div>
</div>