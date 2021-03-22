		<footer>
			&copy; <?=date('Y', time());?> Telegraphics, Inc. All Rights Reserved. <a href="<?=bloginfo('url')?>/privacy-policy">Privacy Policy</a>
		</footer> <!-- end footer -->
		<?php include( get_template_directory().'/includes/scripts.php'); ?>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>

</html>