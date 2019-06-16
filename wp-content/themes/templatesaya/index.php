<?php get_header();?>
	
<!-- content-wrap -->
<div id="content-wrap">

    <!-- content -->
    <div id="content" class="clearfix">

   	    <!-- main -->
        <div id="main">
		
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      	    <article class="post" id="post-<?php the_ID(); ?>">

      		    <div class="primary">

                    <h2><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>

                    <p class="post-info"><span>filed under</span> <?php the_category(', ')?></p>

               	    <div class="image-section">
              		    <img src="<?php bloginfo('template_url');?>/images/img-post.jpg" alt="image post" height="206" width="498"/>
         	        </div>

                    <?php the_content();?>

                    <p><a class="more" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>

                </div>

                <aside>

            	    <p class="dateinfo"><?php the_time('M') ?><span><?php the_time('d') ?></span></p>

               	    <div class="post-meta">
                  	    <h4>Post Info</h4>
                     	<ul>
                           <li class="user"><a href="#"><?php the_author() ?></a></li>
                           <li class="time"><a href="#"><?php the_time('j/M/Y') ?></a></li>
                           <li class="comment"><?php comments_popup_link('No Comments &#187; ', '1 Comment &#187; ', '% Comments &#187;'); ?></li>
                           <li class="permalink"><a href="<?php the_permalink() ?>">Permalink</a></li>
                        </ul>
					</div>

                </aside>

		    </article>
			<?php endwhile; ?>
			<?php else : ?>
			<h2>Not Found</h2>
			<?php endif; ?>
		<!--/main-->

        </div>
		
		<?php get_sidebar();?>

    <!-- content -->
	</div>

<!-- /content-out -->
</div>
		
<?php get_footer();?>
