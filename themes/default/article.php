<?php theme_include('header'); ?>

		<section class="content wrap" id="article-<?php echo article_id(); ?>">
			<h1><?php echo article_title(); ?></h1>

			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<p>To jest mój <?php echo numeral(total_articles()); ?> artykuł.<?php if(comments_open()): ?> Użytkownicy napisali <?php echo total_comments() . pluralise(total_comments(), ' komentarzy'); ?>.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
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
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Twój nick:</label>
					<?php echo comment_form_input_name('placeholder="Twój nick"'); ?>
				</p>

				<p class="email">
					<label for="email">Twój adres email:</label>
					<?php echo comment_form_input_email('placeholder="Twój adres email"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Twój komentarz:</label>
					<?php echo comment_form_input_text('placeholder="Twój komentarz"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

<?php theme_include('footer'); ?>