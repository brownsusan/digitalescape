		<ul class="no-list clear-fix feature-list-<?php echo esc_attr($this->data->meta->layout); ?> <?php echo esc_attr($this->data->meta->css_class); ?>">
<?php
		global $post;
		$bPost=$post;

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$option=NLThemeOption::getPostMeta($post);		
			$order=in_array($option['feature_icon'],array('empty-red')) ? $post->menu_order : null;
?>
			<li class="clear-fix">
<?php
			if($this->data->meta->layout==1)
			{
?>
				<h3><?php the_title(); ?></h3>
				<div class="icon-1 icon-1-<?php echo esc_attr($option['feature_icon']); ?>"><?php echo esc_html($order); ?></div>
<?php
			}
			else
			{
?>
				<div class="icon-1 icon-1-<?php echo esc_attr($option['feature_icon']); ?>"><?php echo esc_html($order); ?></div>
				<h5><?php the_title(); ?></h5>
<?php		
			}
?>
				<div><?php the_content(); ?></div>
			</li>
<?php	
		}
		
		$post=$bPost;
?>
		</ul>