<?php 
		get_header(); 

		$Page=new NLThemePage();
		$data=$Page->getPage();

		if($data!==false)
		{
			$count=count($data->query->posts);
			if(($count) && ($count!=count($data->exclude)))
			{
?>
		<div class="main main-body">
	
			<ul class="no-list clear-fix page-list">
<?php
				global $post;
				$bPost=$post;

				while($data->query->have_posts())
				{
					$data->query->the_post();
					if(in_array(get_the_ID(),$data->exclude)) continue;
					
					$optionPage=NLThemeOption::getPostMeta($post);
					$optionSchema=NLThemeOption::getPostMeta($optionPage['page_page_schema']);
?>
				<li class="page-schema page-schema-<?php echo (int)$optionPage['page_page_schema'].' '.esc_attr($optionPage['page_page_layout']).' '.esc_attr($optionSchema['page_schema_class_name']).' '.esc_attr($optionPage['page_class_name']); ?> clear-fix" id="page-<?php echo esc_attr($post->post_name); ?>">
			
					<div class="clear-fix">
<?php
					if($optionPage['page_show_header']==1)
					{
?>
						<h2><?php the_title(); ?></h2>
<?php
					}
				
					the_content();
?>
					</div>
	
				</li>
<?php
				}
				
				$post=$bPost;
			
?>
			</ul>
	
		</div>
<?php
			}
		}

		$Validation=new NLThemeValidation();
		$code=NLThemeOption::getOption('google_analytics_code');

		if($Validation->isNotEmpty($code))
		{
?>
		<script type="text/javascript">
			<?php echo $code; ?>
		</script>
<?php
		}

		get_footer(); 