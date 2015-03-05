		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable navigation bar',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable navigation bar.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Position of navigation bar',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Position of navigation bar.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('navigation_bar_position'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_position'); ?>">
<?php
		foreach($this->data['dictionary']['navigationBar']['position'] as $index=>$value)
			echo '<option value="'. esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['navigation_bar_position'],$index,false).'>'. esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background color',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background color (in HEX).',THEME_DOMAIN); ?></span>
				<div>
					<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color'); ?>" value="<?php echo esc_attr($this->data['option']['navigation_bar_background_color']); ?>" maxlength="6" />
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Opacity for background color',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Opacity for background color (in %).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_opacity'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_opacity'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_opacity'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background color - on hover',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background hover color (in HEX).',THEME_DOMAIN); ?></span>
				<div>
					<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover'); ?>" value="<?php echo esc_attr($this->data['option']['navigation_bar_background_color_hover']); ?>" maxlength="6" />
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Opacity for background color - on hover',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Opacity for background color - on hover (in %).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover_opacity'); ?>"></div>
					<input  type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover_opacity'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover_opacity'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background color - selected element',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background color - selected element (in HEX).',THEME_DOMAIN); ?></span>
				<div>
					<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected'); ?>" value="<?php echo esc_attr($this->data['option']['navigation_bar_background_color_selected']); ?>" maxlength="6" />
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Opacity for background color - selected element',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Opacity for background color - selected element (in %).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected_opacity'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected_opacity'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected_opacity'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Background color - visible element',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Background color - visible element (in HEX).',THEME_DOMAIN); ?></span>
				<div>
					<input class="color-picker" type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible'); ?>" value="<?php echo esc_attr($this->data['option']['navigation_bar_background_color_visible']); ?>" maxlength="6" />
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Opacity for background color - visible element',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Opacity for background color - visible element (in %).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible_opacity'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible_opacity'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible_opacity'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Easing of scroll animation',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Easing type of scroll animation.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('navigation_bar_animation_easing'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_animation_easing'); ?>">
<?php
		foreach($this->data['dictionary']['easing']['type'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['navigation_bar_animation_easing'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Speed of scroll animation',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Speed of scroll animation in milliseconds.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('navigation_bar_animation_speed'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_animation_speed'); ?>" value="<?php echo esc_attr($this->data['option']['navigation_bar_animation_speed']); ?>" maxlength="5"/>
				</div>					
			</li>
			<li>
				<h5><?php esc_html_e('Hide navigation bar',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Hide navigation bar when content is stretched to full width.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_full_width_hide'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_full_width_hide'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_full_width_hide_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Enable animations of navigation bar items',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable animations of navigation bar items.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_item_animation_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_item_animation_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_item_animation_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Enable titles of navigation bar items',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable showing titles (on hover) of navigation bar items.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_item_title_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable'); ?>" id="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['navigation_bar_item_title_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('navigation_bar_item_title_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.createSlider('#<?php NLThemeHelper::getFormName('navigation_bar_background_color_opacity'); ?>',0,100,<?php echo (int)$this->data['option']['navigation_bar_background_color_opacity']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('navigation_bar_background_color_hover_opacity'); ?>',0,100,<?php echo (int)$this->data['option']['navigation_bar_background_color_hover_opacity']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('navigation_bar_background_color_visible_opacity'); ?>',0,100,<?php echo (int)$this->data['option']['navigation_bar_background_color_visible_opacity']; ?>);		
				element.createSlider('#<?php NLThemeHelper::getFormName('navigation_bar_background_color_selected_opacity'); ?>',0,100,<?php echo (int)$this->data['option']['navigation_bar_background_color_selected_opacity']; ?>);	
			});
		</script>