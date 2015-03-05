		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Base text color',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Base text color (in HEX).',THEME_DOMAIN); ?></span>
					<div>
						<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('page_schema_text_color_base'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_text_color_base'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_text_color_base']); ?>" maxlength="6" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Headers text color',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Headers text color (in HEX).',THEME_DOMAIN); ?></span>
					<div>
						<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('page_schema_text_color_header'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_text_color_header'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_text_color_header']); ?>" maxlength="6" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Background color',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Background color (in HEX).',THEME_DOMAIN); ?></span>
					<div>
						<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('page_schema_background_color'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_background_color'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_background_color']); ?>" maxlength="6" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Background opacity',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Background opacity (in %).',THEME_DOMAIN); ?></span>
					<div>
						<div id="<?php NLThemeHelper::getFormName('page_schema_background_opacity_slider'); ?>"></div>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_background_opacity'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_background_opacity'); ?>" class="to-slider-range" readonly/>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Padding',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Padding in px (top, right, bottom, left).',THEME_DOMAIN); ?></span>
					<div>
						<label for="<?php NLThemeHelper::getFormName('page_schema_padding_top'); ?>" class="to-infield"><?php esc_html_e('Top',THEME_DOMAIN); ?></label>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_padding_top'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_padding_top'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_padding_top']); ?>" maxlength="3"/>
					</div>
					<div>
						<label for="<?php NLThemeHelper::getFormName('page_schema_padding_right'); ?>" class="to-infield"><?php esc_html_e('Right',THEME_DOMAIN); ?></label>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_padding_right'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_padding_right'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_padding_right']); ?>" maxlength="3"/>
					</div>
					<div>
						<label for="<?php NLThemeHelper::getFormName('page_schema_padding_bottom'); ?>" class="to-infield"><?php esc_html_e('Bottom',THEME_DOMAIN); ?></label>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_padding_bottom'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_padding_bottom'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_padding_bottom']); ?>" maxlength="3"/>
					</div>
					<div>
						<label for="<?php NLThemeHelper::getFormName('page_schema_padding_left'); ?>" class="to-infield"><?php esc_html_e('Left',THEME_DOMAIN); ?></label>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_padding_left'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_padding_left'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_padding_left']); ?>" maxlength="10"/>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Min height',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Min height (in px).',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_min_height'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_min_height'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_min_height']); ?>" maxlength="4" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Additional class name',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Additional class name',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_schema_class_name'); ?>" id="<?php NLThemeHelper::getFormName('page_schema_class_name'); ?>" value="<?php echo esc_attr($this->data['option']['page_schema_class_name']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Custom CSS classes',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php sprintf(esc_html_e('Each CSS class need to be prefixed with .page-schema-%s class. E.g:',THEME_DOMAIN),$this->data['postId']); ?></span>
<pre>
<?php echo '.page-schema-'.$this->data['postId']; ?> a
{
	color:red;
}
</pre>
					<div>
						<textarea id="<?php NLThemeHelper::getFormName('page_schema_custom_class'); ?>" name="<?php NLThemeHelper::getFormName('page_schema_custom_class'); ?>" rows="1" cols="1"><?php echo esc_html($this->data['option']['page_schema_custom_class']); ?></textarea>
					</div>						
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement({init:true});	
				element.createSlider('#<?php NLThemeHelper::getFormName('page_schema_background_opacity_slider'); ?>',0,100,<?php echo (int)$this->data['option']['page_schema_background_opacity']; ?>);
			});
		</script>