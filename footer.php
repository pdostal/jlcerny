		<div class="clear"></div>
		<footer>
			<span>
				<a href="?screentype=<?php if($screentype == 'mobile') { echo 'desktop'; } else { echo 'mobile'; } ?>">
				<?php if($screentype == 'mobile') { echo 'Klasické'; } else { echo 'Mobilní'; } ?> zobrazení</a> | 
			</span>
			<span>
				Powered by <a href="http://wordpress.org/">Wordpress</a>
				&copy; <a itemprop="url" href="http://pdostal.cz/">Pavel Dostál</a>
				(<a href="mailto:pdostal@pdostal.cz">pdostal@pdostal.cz</a>)
			</span>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>