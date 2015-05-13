		<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. Wszelkie prawa zastrzeżone.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>

	                    <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Panel admina</a></li>

	                    <li><a href="/" title="Return to my website.">Strona główna</a></li>
	                </ul>
	            </footer>

	        </div>
        </div>
    </body>
</html>
