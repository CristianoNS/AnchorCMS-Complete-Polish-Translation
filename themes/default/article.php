<?php theme_include('header'); ?>

		<section class="content wrap" id="article-<?php echo article_id(); ?>">
			<h1><?php echo article_title(); ?></h1>

			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo dateV('j f Y',strtotime(article_date())); ?></time>
			</section>
		</section>

		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<div class="content">
							<?php echo comment_text(); ?>
						</div>
						<span class="counter"><?php echo $i; ?></span>
						<footer class="meta">
							<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo dateV('j f Y',strtotime(article_date())); ?></time>
						</footer>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Nick</label>
					<?php echo comment_form_input_name('placeholder="Nick"'); ?>
				</p>

				<p class="email">
					<label for="email">Email</label>
					<?php echo comment_form_input_email('placeholder="Email"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Komentarz</label>
					<?php echo comment_form_input_text('placeholder="Komentarz"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

<?php theme_include('footer'); ?>
