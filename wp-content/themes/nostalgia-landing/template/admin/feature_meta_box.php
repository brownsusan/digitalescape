		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Icon',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select icon.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('feature_icon'); ?>" id="<?php NLThemeHelper::getFormName('feature_icon'); ?>">
<?php
		foreach($this->data['dictionary']['icon'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['feature_icon'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$('.to').themeOptionElement({init:true});	
			});
		</script>