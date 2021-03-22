<!-- TYPEKIT INTEGRATION --> 
<script type="text/javascript" src="http://use.typekit.com/dzr7vij.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- CUSTOM JS FROM OPTIONS PAGE -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	myDivWidth = $('#portfolio').width();
	    if ($('#portfolio').width() > 780) {
	       var newscript = document.createElement('script');
	           newscript.type = 'text/javascript';
	           newscript.src = 'http://zhcoa1szx8c1jm0414amj6a1ee4.wpengine.netdna-cdn.com/wp-content/themes/bootstrap/library/js/scrollhome.js';
	       (document.getElementsByTagName('body')[0]).appendChild(newscript);
	    }
	});		
</script>

<?php if(is_single(232)): // Extended Warranty Page ?>
	<script type="text/javascript">
		$(document).ready( function() {
			$('.pricing-table a').toggle( function() {
				$('.warranty-form').show("blind", { direction: "vertical" }, 1000);
				$(this).html('SIGN UP');
			}, function() {
				$('.warranty-form').hide("blind", { direction: "vertical" }, 1000);
				$(this).html('SIGN UP');
			});
		});
	</script>
	<script type="text/javascript">
		$('#annual').click(
			function() {
				$('#input_1_4').val('Annual ($200/yr)');
			}
		);
		$('#semi').click(
			function() {
				$('#input_1_4').val('Semi Annual ($250/yr)');
			}
		);	
		$('#quarter').click(
			function() {
				$('#input_1_4').val('Quarterly ($400/yr)');
			}
		);	
		$('#month').click(
			function() {
				$('#input_1_4').val('Monthly ($600/yr)');
			}
		);	
	</script>
<?php endif; ?>
<?php if(is_page(1057)): // Retainer Page ?>
	<script type="text/javascript">
		$(document).ready( function() {
			$('.retainer-table a').toggle( function() {
				$('.retainer-form').show("blind", { direction: "vertical" }, 1000);
				$(this).html('SIGN UP');
			}, function() {
				$('.retainer-form').hide("blind", { direction: "vertical" }, 1000);
				$(this).html('SIGN UP');
			});
		});
	</script>
	<script type="text/javascript">
		$('#starter').click(
			function() {
				$('#input_5_4').val('Starter ($830/5hr)');
			}
		);
		$('#pro').click(
			function() {
				$('#input_5_4').val('Pro ($1,620/10hr)');
			}
		);	
		$('#premium').click(
			function() {
				$('#input_5_4').val('Premium ($3,170/20hr)');
			}
		);	
		$('#ultimate').click(
			function() {
				$('#input_5_4').val('Ultimate ($7,740/50hr)');
			}
		);	
	</script>
<?php endif; ?>

<?php if(is_page(943) || is_page(1082)): // Get A Quote Page ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap-slider.js"></script>
<script type="text/javascript">

/*	$(document).ready( function() {
		$('#input_4_8').attr({
			class: 'span2',
			placeholder: '2,500'
		});
		$('#input_4_8').before('<span class="input-prepend input-append"><span class="add-on">$</span>');
		$('#input_4_8').after('<span class="add-on">.00</span></span>');
*/
$(document).ready( function() {
		$('#input_4_8').attr({class: 'gfield_checkbox'});

		$('.wrapme').wrapAll('<div class="well" />');

		$('#field_4_4').attr({class: 'span12 form-group'});
		$('#field_4_5').attr({class: 'span12 form-group'});
		$('#field_4_6').attr({class: 'span12 form-group'});
		$('#field_4_8').attr({class: 'span12 form-group'});

		$('.well').append('<div class="clearfix" />');
		
		$('#field_4_1').removeClass('gfield');
		$('#field_4_3').removeClass('gfield');			
		$('#field_4_8').removeClass('gfield');
		$('#field_4_4').removeClass('gfield');
		$('#field_4_5').removeClass('gfield');

		
	});
</script>

<?php endif; ?>