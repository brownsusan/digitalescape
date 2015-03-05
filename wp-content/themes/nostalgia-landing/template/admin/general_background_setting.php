		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Background content',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select active background element.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('background_type'); ?>" id="<?php NLThemeHelper::getFormName('background_type'); ?>">
<?php
		foreach($this->data['dictionary']['background']['type'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['background_type'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php esc_html_e('Background overlay',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background overlay style.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('background_overlay'); ?>" id="<?php NLThemeHelper::getFormName('background_overlay'); ?>">
<?php
		foreach($this->data['dictionary']['background']['overlay'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['background_overlay'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background color',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background color (in HEX).',THEME_DOMAIN); ?></span>
				<div>
					<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('background_color'); ?>" id="<?php NLThemeHelper::getFormName('background_color'); ?>" value="<?php echo esc_attr($this->data['option']['background_color']); ?>" maxlength="6"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background image',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select image for background.',THEME_DOMAIN); ?><br/></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_image'); ?>" id="<?php NLThemeHelper::getFormName('background_image'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['background_image']); ?>" />
					<input type="button" name="<?php NLThemeHelper::getFormName('background_image_browse'); ?>" id="<?php NLThemeHelper::getFormName('background_image_browse'); ?>" class="to-button-browse to-button" value="<?php echo esc_attr('Browse',THEME_DOMAIN); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background image postion',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Set image background position. Eg. 0px 0px.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_position'); ?>" id="<?php NLThemeHelper::getFormName('background_position'); ?>" value="<?php echo esc_attr($this->data['option']['background_position']); ?>" maxlength="100"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background image repeat',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background image repeat.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('background_repeat'); ?>" id="<?php NLThemeHelper::getFormName('background_repeat'); ?>">
<?php
		foreach($this->data['dictionary']['background']['repeat'] as $index=>$value)
			echo '<option value="'. esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['background_repeat'],$index,false).'>'. esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.bindBrowseMedia('#<?php NLThemeHelper::getFormName('background_image_browse'); ?>');
			});
		</script>