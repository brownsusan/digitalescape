		<div class="gallery-wrapper gallery-<?php echo esc_attr($this->data->gallery->type); ?>-wrapper">
<?php
		global $post;
		$bPost=$post;

		$Validation=new NLThemeValidation();

		if($this->data->gallery->filter==1)
		{
?>
			<ul class="gallery-filter-list no-list clear-fix">
				<li><a href="#" class="filter-0 <?php echo $this->data->gallery->selected=='0' ? 'selected' : null; ?>"><?php esc_html_e('All items',THEME_DOMAIN); ?></a></li>
<?php
			foreach($this->data->gallery->category as $index=>$value)
			{
?>
				<li><a href="#" class="filter-<?php echo esc_attr($index); ?>  <?php echo $this->data->gallery->selected==$index ? 'selected' : null; ?>"><?php echo esc_html($value[0]); ?></a></li>
<?php
			}
?>
			</ul>
<?php
		}
?>
			<ul class="no-list gallery gallery-<?php echo esc_attr($this->data->gallery->type); ?> gallery-<?php echo esc_attr($this->data->gallery->type); ?>-filter-<?php echo esc_attr($this->data->gallery->filter); ?> gallery-title-<?php echo (int)$this->data->gallery->show_title; ?> gallery-description-<?php echo (int)$this->data->gallery->show_description; ?>" id="gallery-<?php echo $this->data->gallery->id; ?>">
<?php
		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
?>
				<li class="<?php echo 'gallery-item-title-'.(int)$post->post_metadata->show_title.' gallery-item-description-'.(int)$post->post_metadata->show_description; ?> <?php echo ($this->data->gallery->filter==1 ? $post->post_metadata->categoryFilter : null); ?>">
<?php
			if($post->post_metadata->show_title)
			{
?>
					<h3><?php the_title(); ?></h3>
<?php
			}
?>
					<div>
						<a href="<?php echo esc_attr($post->post_metadata->url); ?>" class="<?php echo esc_attr($post->post_metadata->class); ?>" <?php echo $Validation->isEmpty($post->post_metadata->rel) ? null : 'data-fancybox-group="'.$post->post_metadata->rel.'"'; ?>>
							<span>
								<span></span>
								<img src="<?php echo esc_attr($post->post_metadata->thumbnail); ?>" alt="<?php the_title(); ?>" />
							</span>
						</a>
						<div class="title"><?php the_excerpt(); ?></div>
<?php
			if($post->post_metadata->show_description)
			{
?>
						<p><?php echo esc_attr($post->post_metadata->post_excerpt_limit); ?></p>
<?php
			}
?>
					</div>

				</li>
<?php
		}
		
		$post=$bPost;
?>
			</ul>
<?php
		if($this->data->gallery->type=='carousel')
		{
?>
			
				<a href="#" class="navigation-prev navigation-left"></a>
				<a href="#" class="navigation-next navigation-right"></a>
		
		
<?php
		}
?>
		</div>