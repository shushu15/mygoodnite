<!-- Main Content -->
<div class="container">
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
					<span itemprop="datePublished"><?php echo date('d F Y', $p->date) ?></span> - опубликовано в
					<span itemprop="articleSection"><?php echo $p->category ?></span> автор
					<span itemprop="author"><a href="<?php echo $p->authorUrl ?>"><?php echo $p->author ?></a></span> 
					<?php if (disqus_count()) { ?> - 
						<span><a href="<?php echo $p->url ?>#disqus_thread"> Комментарии</a></span>
					<?php } elseif (facebook()) { ?> -
						<a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> Комментарии</span></a>
					<?php } ?> 
				</p>
				    <p itemprop="articleBody">
						<?php echo get_thumbnail($p->body) ?>
						<?php echo get_teaser($p->body, $p->url) ?>
						<?php if (config('teaser.type') === 'trimmed'):?><a href="<?php echo $p->url;?>">Дальше</a><?php endif;?>
					</p> 
			</div> 	
            <hr>
			</div>
        <?php endforeach; ?>
        <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
            <!-- Pager -->
            <ul class="pager">
                <?php if (!empty($pagination['prev'])): ?>
                <li class="prev pull-left">
                    <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>" rel="prev">&larr; Следующие Записи</a>
                </li>
                <?php endif;?>
                <?php if (!empty($pagination['next'])): ?>
                <li class="next pull-right">
                    <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>" rel="next"> Прошлые Записи &rarr;</a>
                </li>
                <?php endif;?>
            </ul>
        <?php endif; ?>
        </div>
    </div>
</div>