<?php
		if(!is_null($this->data['tweet']))
		{
?>
		<div id="<?php echo esc_attr($this->data['id']); ?>" class="twitter-carousel">
			<ul>
<?php
			foreach($this->data['tweet'] as $value)
			{
?>
				<li><p><?php echo $value->text; ?></p></li>
<?php			
			}
?>
			</ul>
		</div>	
		<div class="hidden">
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					var theme=new NLTheme();
					theme.createTwitterCarousel('#<?php echo esc_attr($this->data['id']); ?>');
				});
			</script>
		</div>
<?php
		}