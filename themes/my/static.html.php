<!-- Post Content -->
                <?php if (login()) { echo tab($p); } ?> 
                <?php echo $p->body;?>
				<div class="toolbox">
                    <span class="share pull-right">
                        <a target="_blank" class="first" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="fab fa-facebook fa-lg"></i></a> 
                        <a target="_blank" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fab fa-twitter fa-lg"></i></a> 
                        <a target="_blank" href="http://vk.com/share.php?url=<?php echo $p->url ?>&title=<?php echo $p->title ?>&noparse=true"><i class="fab fa-vk fa-lg"></i></a> 
                        <a target="_blank" href="https://plus.google.com/share?url=<?php echo $p->url ?>"><i class="fab fa-google-plus fa-lg"></i></a> 
                        <a target="_blank" class="last" href="http://pinterest.com/pin/create/button/?url=<?php echo $p->url ?>"><i class="fab fa-pinterest fa-lg"></i></a> 
                    </span>
                </div>

