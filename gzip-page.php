<?php
	//enable or disable
	if($_GET['enable-gzip'] == 1) {
		$tb->enableGZIPCompression();
		$gzipCheck->result->gzipenabled = 1;
		$gzipCheck->result->summary = 'GZIP is enabled. Enjoy!';

	} elseif($_GET['disable-gzip']) {
		$tb->disableGZIPCompression();
		$gzipCheck->result->gzipenabled = 0;
		$gzipCheck->result->summary = 'GZIP is disabled.';
	}
?>

<div class="wrap">
	<?php if(!$gzipCheck->error) : ?>
		<h2><?php echo $gzipCheck->result->gzipenabled ? "You're blessed! It's GZIP Enabled.": "GZIP is not enabled :("; ?></h2>
		<p><?php echo $gzipCheck->result->summary; ?></p>
		<?php if( $gzipCheck->result->gzipenabled != 1) : ?>
			<p class="submit">
				<a href="?page=richards-toolbox-gzip&enable-gzip=1">
					<input type="submit" name="submit" id="submit" class="button button-primary" value="Enable GZIP
					Compression">
				</a>
			</p>
		<?php elseif(get_option('richards-toolbox-gzip-enabled')) : ?>
			<p class="submit">
				<a href="?page=richards-toolbox-gzip&disable-gzip=1">
					<input type="submit" name="submit" id="submit" class="button button-primary" value="Disable GZIP
					Compression">
				</a>
			</p>
		<?php endif; ?>
	<?php else:
		?>
		<h2>GZIP check</h2>
		<p>Oops! Something went wrong :( It could be that you are on a local development environment, or that we couldn't contact <a href="http://checkgzipcompression.com">checkgzipcompression.com</a></a></p>
		<p>We checked the url: <?php echo "<a href='$siteUrl'>$siteUrl</a>"; ?></p>
	<?php endif; ?>
		<p><br><br><em>Powered by <a href="http://richardstoolbox.com/" target=_blank>richardstoolbox.com</a> &amp The Marketing Gang</em></p>
</div>