		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Google Font',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter name of Google Font and select it from list.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_family_google_h5'); ?>" id="<?php NLThemeHelper::getFormName('font_font_family_google_h5'); ?>" value="<?php echo esc_attr($this->data['option']['font_font_family_google_h5']); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php esc_html_e('System font',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter name of system font.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_family_system_h5'); ?>" id="<?php NLThemeHelper::getFormName('font_font_family_system_h5'); ?>" value="<?php echo esc_attr($this->data['option']['font_font_family_system_h5']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Font size',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Font size (in px).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_4_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_4'); ?>" id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_4'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php esc_html_e('For page width greater/equal than 970px.',THEME_DOMAIN); ?></label>
				</div>
				<div>
					<div id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_3_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_3'); ?>" id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_3'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php esc_html_e('For page width between 768px and 969px.',THEME_DOMAIN); ?></label>
				</div>
				<div>
					<div id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_2_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_2'); ?>" id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_2'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php esc_html_e('For page width between 480px and 767px.',THEME_DOMAIN); ?></label>
				</div>
				<div>
					<div id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_1_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_1'); ?>" id="<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_1'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php esc_html_e('For page width less/equal than 479px.',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Font style',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Font style.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('font_font_style_h5'); ?>" id="<?php NLThemeHelper::getFormName('font_font_style_h5'); ?>">
<?php
		foreach($this->data['dictionary']['font']['style'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['font_font_style_h5'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Font weight',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Font weight.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('font_font_weight_h5'); ?>" id="<?php NLThemeHelper::getFormName('font_font_weight_h5'); ?>">
<?php
		foreach($this->data['dictionary']['font']['weight'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['font_font_weight_h5'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.createGoogleFontAutocomplete('#<?php NLThemeHelper::getFormName('font_font_family_google_h5'); ?>');
				element.createSlider('#<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_4_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_font_size_h5_responsive_4']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_3_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_font_size_h5_responsive_3']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_2_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_font_size_h5_responsive_2']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('font_font_size_h5_responsive_1_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_font_size_h5_responsive_1']; ?>);
			});
		</script>