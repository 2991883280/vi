



<?php get_header(); ?>

<style>
p{
	text-indent : 20px;
	letter-spacing:6px;
line-height:140%;

}

.zbt{
	border:2px solid;
padding:10px;
border-color:red;
border-bottom-right-radius:1em;
border-top-right-radius:1em;
border-bottom-left-radius:1em;
border-top-left-radius:1em;
margin-left:10px;
margin-right:10px
}

a:link {color: blue; text-decoration:none;} //δ���ʣ���ɫ�����»��� 
a:active:{color: red; } //�����ɫ 
a:visited {color:purple;text-decoration:none;} //�ѷ��ʣ���ɫ�����»��� 
a:hover {color: red; text-decoration:underline;} //��

	
</style>
		<!-- RIGHTPART -->
		<div class="arlo_tm_rightpart">
			<div class="rightpart_inner">
				<div class="arlo_tm_section" id="home">
					<div class="arlo_tm_hero_header_wrap">
						<div class="arlo_tm_universal_box_wrap">
							<div class="bg_wrap" >
								<div class="overlay_image hero jarallax" data-speed="0.1"></div>
								<div class="overlay_color hero"></div>
							</div>
							<div class="content hero" id="bg" style="background-image: url(http://boey.coding.me/vifanapp/Mobey/<?php echo rand(1,24);?>.jpg);background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;">
								<div class="inner_content">
									<div class="image_wrap">
									<img src="http://q.qlogo.cn/headimg_dl?bs=qq&dst_uin=2991883280&src_uin=www.jlwz.cn&fid=blog&spec=100">

									</div>
									<div class="name_holder">
										<h3><?php bloginfo('name'); ?></h3>
									</div>
									<div class="text_typing">
										<p><?php bloginfo('description'); ?></p>
									</div>
								</div>
							</div>
						<div class="arlo_tm_arrow_wrap bounce anchor">
								<a href="#main"><img src="<?php bloginfo('template_url'); ?>/img/down1.png" width="40px" height="40px"></a>
							</div>

						</div>
						
					</div>
				</div>
<div  style="margin-left:10px;
margin-right:10px;" >
		<!-- Column 1 / Content -->
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	
	<div class="grid_8" >
		<?php the_content(); ?>
		<?php comments_template(); ?>
	</div>
	<?php else : ?>
	<div class="grid_8">
		
	</div>
	<?php endif; ?>
	
	<div style="display:none;">
	<?php get_sidebar(); ?>
	</div>
									
							</div>	
						
	<?php get_footer(); ?>
<!-- SCRIPTS -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie8.js"></script> <![endif]-->	
<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
<!-- /SCRIPTS -->
		
						
</body>
</html>






	