		<ul class="no-list social-list clear-fix">
<?php
		foreach($this->data['profile'] as $index=>$value)
		{
?>
			<li><a href="<?php echo esc_attr($value['url']); ?>" class="social-list-<?php echo esc_attr($index); ?> target-blank"></a></li>
<?php
		}
?>
		</ul>