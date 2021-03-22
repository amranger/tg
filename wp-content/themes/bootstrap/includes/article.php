<?php 
	if($x==2 || $x==5 || $x==8 || $x==11):
	$color = " blue";
	
	elseif($x==3 || $x==6 || $x==9 || $x==12):
	$color = " green";
	
	else:
	$color = "";
	endif;
?>
	<!--<aside class="block<?php //if($x==1) echo " sticky";?>">-->
	<div class="block<?php if($x==1) echo " sticky";?>">
		<div class="inner">

			<?php if(is_home()): ?>
				<?php if(is_sticky()): ?>
<!-- 					<a href="<?=bloginfo('url')?>/how-does-this-all-work/"> -->
						<div class="text_box<?=$color?>">
							<h1><?php the_title();?></h1>
							<?php the_content(); ?>
						</div>	<!-- /.text_box -->
<!-- 					</a> -->
				<?php else:  ?>
					<a href="<?php the_permalink(); ?>">
						<div class="text_box<?=$color?>">
							<h1><?php the_title();?></h1>
							<?php the_excerpt(); ?>
						</div>	<!-- /.text_box -->
					</a>
				<?php endif; ?>
			<?php else: ?>
				<div class="text_box<?=$color?>">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
					<?php the_excerpt(); ?>
				</div>	<!-- /.text_box -->
			<?php endif; ?>
				
			<div class="arrowhead<?=$color?>"></div>
		</div>
		
	<!--</aside>-->
	</div>
