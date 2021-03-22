		<footer>
			&copy; <?=date('Y', time());?> Telegraphics, Inc. All Rights Reserved. <a href="<?=bloginfo('url')?>/privacy-policy">Privacy Policy</a>
		</footer> <!-- end footer -->
		<?php include( get_template_directory().'/includes/scripts.php'); ?>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
		
		
        <script src="<?php bloginfo('template_directory'); ?>/gfi/js/vendor/bootstrap.min.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/gfi/js/waypoints.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/gfi/js/waypoints-sticky.js" type="text/javascript"></script>
		

        <script src="<?php bloginfo('template_directory'); ?>/gfi/js/jquery.cycle2.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/gfi/js/jquery.cycle2.scrollVert.min.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/gfi/js/grid.js"></script>
		<script>
            $('#slider').cycle({
                fx : 'scrollVert',
                timeout: 3000,
                speed: 300,
                slides: '.slide'
            });

			$('.navbar').waypoint('sticky');

			$('.navbar a, a.scrollto, a#arrow_down').click(function(e){
				$('html,body').scrollTo(this.hash, this.hash);
				e.preventDefault();
			});

			$(function() {
				Grid.init();
			});
		</script>
        <script src="<?php bloginfo('template_directory'); ?>/gfi/js/main.js"></script>		
        
		<script type="text/javascript">
			(function($){
			$(document).ready(function(){
			var required = $('.gfield_contains_required');
			var controlGroup = $('.gfield');
			required.each(function(){
			    $(this).find('input').attr('required', 'true');
			    $(this).find('textarea').attr('required', 'true');
			    $(this).find('select').attr('required', 'true');
			});
			$(this).find("input[type='submit']").addClass('btn');
			$('.gfield_label').each(function(){
			    $(this).addClass('control-label');
			});
			$("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
			    filter: function () {
			        return $(this).is(":visible");
			    },
			    preventSubmit: false,
			}); 
			console.log('form rendered');
			$(this).find('.gfield_error').removeClass('gfield_error').addClass('has-error');
			$('.validation_message').each(function(){
			    var sib = $(this).prev();
			    $(this).appendTo(sib);
			});
			});
			}(jQuery));
			$('.gform_wrapper').css('display', 'block');
			$('#gform_fields_4').addClass('list-unstyled');
			$('<div class="clearfix"></div>').insertAfter('#field_4_3');
			$('.gfield input').addClass('form-control ');
				$('.gfield .gfield_checkbox input').removeClass('form-control ');			
			$('textarea').addClass('form-control ');
			
			$('#field_4_1').removeClass('gfield');
			$('#field_4_3').removeClass('gfield');			
			$('#field_4_8').removeClass('gfield');
			$('#field_4_4').removeClass('gfield');
			$('#field_4_5').removeClass('gfield');
			
			
			
		</script>

        
	</body>
</html>