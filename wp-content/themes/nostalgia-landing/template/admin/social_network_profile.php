		<ul class="to-form-field-list">
<?php
		foreach($this->data['dictionary']['socialNetwork']['type'] as $index=>$value)
		{
?>
			<li>
				<h5><?php echo esc_html($value[0]); ?></h5>
				<span class="to-legend"><?php echo sprintf(esc_html__('Settings for %s'),$value[0]); ?>.</span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" class="to-infield"><?php esc_html_e('Enter URL',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" id="<?php NLThemeHelper::getFormName('social_network_'.$index.'_url'); ?>" value="<?php echo esc_attr($this->data['option']['social_network_'.$index.'_url']); ?>"/>
				</div>
				<div>
					<label for="<?php NLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" class="to-infield"><?php esc_html_e('Default order',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" id="<?php NLThemeHelper::getFormName('social_network_'.$index.'_order'); ?>" value="<?php echo esc_attr($this->data['option']['social_network_'.$index.'_order']); ?>" maxlength="3"/>
				</div>
			</li>
<?php
		}
?>
		</ul>