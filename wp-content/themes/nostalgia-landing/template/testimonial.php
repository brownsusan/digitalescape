		<ul class="no-list clear-fix testimonial-list layout-p-50x50 <?php echo esc_attr($this->data->meta->css_class); ?>">
<?php
		global $post;
		$bPost=$post;

		$index=0;
		$Validation=new NLThemeValidation();
		
		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;	
			
			$option=NLThemeOption::getPostMeta($post);

			$layout=$index%2==0 ? 'left' : 'right';
?>
			<li class="column-<?php echo esc_attr($layout); ?>">
<?php
			if($Validation->isNotEmpty(get_the_title()))
			{
?>
				<p><?php the_title(); ?></p>
<?php
			}
			if(($Validation->isNotEmpty($option['testimonial_caption'])) || ($Validation->isNotEmpty($option['testimonial_company'])) || ($Validation->isNotEmpty($option['testimonial_person'])))
			{
?>
				<div>
<?php
				if(($Validation->isNotEmpty($option['testimonial_company'])) || ($Validation->isNotEmpty($option['testimonial_person'])))
				{			
?>
					<span class="testimonial-list-author">
<?php
					if($Validation->isNotEmpty($option['testimonial_person']))
					{
?>
						<span class="bold"><?php echo esc_html($option['testimonial_person']); ?></span>
<?php
					}
					if(($Validation->isNotEmpty($option['testimonial_company'])) && ($Validation->isNotEmpty($option['testimonial_person'])))
					{
?>
						,
<?php
					}

					if($Validation->isNotEmpty($option['testimonial_company']))
						echo esc_html($option['testimonial_company']);
?>
					</span>
<?php
				}

				if($Validation->isNotEmpty($option['testimonial_caption']))
				{
?>
					<span class="testimonial-list-caption"><?php echo esc_html($option['testimonial_caption']); ?></span>
<?php
				}
?>
				</div>
<?php
			}
?>
			</li>
<?php
			$index++;
		}
		
		$post=$bPost;
?>
		</ul>