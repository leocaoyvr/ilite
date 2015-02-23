<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
	<div id="error404" class="post">
		<h1><?php _e('OMG! THEY KILLED KENNEY!'); ?></h1>
		<div class="post-content">
			<div style="position: relative;">
					<script language="javascript" type="text/javascript">  
								var j= 9;
								var intervalid = 0;
								var Url= "<?php bloginfo('url'); ?>"; 
								intervalid = setInterval("fun()", 1000);  
								function fun() {  
									if (j == 0) {  
										window.location.href = Url;  
										clearInterval(intervalid);  
									}  
									else
									{
										document.getElementById("mes").innerHTML = j;  
										j--;   
									}
								}  
							</script>  
					<div style="margin:0 auto">
						<div id="404" style="color:#ccc"><p style="font-size:96px; font-family:Helvetica, Arial; line-height: 75px;margin: 0 0;">404</p></div>
						<p style="font-size:16px; color: #444; margin: 30px 0 15px 0;">Error 404, Page Not Found.</p>
						<p style="font-size: 14px color: #444; margin: 5px 0;">I am sending you back HOME in <span id="mes" style="color:#2D96BD;">10</span> seconds.</p>
					</div>
				</div>
		</div><!--.post-content-->
	</div><!--#error404 .post-->
</div><!--#content-->
<?php get_footer(); ?>