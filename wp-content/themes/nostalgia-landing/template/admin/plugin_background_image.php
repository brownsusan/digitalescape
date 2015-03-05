		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable Fullscreen Image Slider on mobile and tablet devices',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable Fullscreen Image Slider on mobile and tablet devices.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_mobile_tablet_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_mobile_tablet_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_mobile_tablet_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>		
			<li>
				<h5><?php esc_html_e('Autoplay',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Determines whether slideshow begins playing when page is loaded.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_autoplay'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_autoplay_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_autoplay'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_autoplay_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_autoplay'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_autoplay_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_autoplay'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_autoplay_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Slide interval',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Time between slide changes in milliseconds.',THEME_DOMAIN); ?></span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('background_slider_slide_interval'); ?>" class="to-infield"><?php esc_html_e('Time in milliseconds',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_slider_slide_interval'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_slide_interval'); ?>" value="<?php echo  esc_attr($this->data['option']['background_slider_slide_interval']); ?>" maxlength="5"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Start slide',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('The slide the slideshow starts on.',THEME_DOMAIN); ?></span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('background_slider_start_slide'); ?>" class="to-infield"><?php esc_html_e('Number of image',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_slider_start_slide'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_start_slide'); ?>" value="<?php echo  esc_attr($this->data['option']['background_slider_start_slide']); ?>" maxlength="5"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Stop loop',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Pauses slideshow upon reaching the last slide.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_stop_loop'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_stop_loop_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_stop_loop'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_stop_loop_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_stop_loop'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_stop_loop_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_stop_loop'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_stop_loop_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Random',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Slides are shown in a random order.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_random'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_random_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_random'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_random_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_random'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_random_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_random'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_random_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Slideshow',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Turns the slideshow on/off.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_slideshow'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_slideshow_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_slideshow'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_slideshow_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_slideshow'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_slideshow_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_slideshow'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_slideshow_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Transition',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Controls which effect is used to transition between slides.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('background_slider_transition'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_transition'); ?>">
<?php
		foreach($this->data['dictionary']['supersized']['transition'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['background_slider_transition'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Transition speed',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Speed of transitions in milliseconds.',THEME_DOMAIN); ?></span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('background_slider_transition_speed'); ?>" class="to-infield"><?php esc_html_e('Time in miliseconds',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_slider_transition_speed'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_transition_speed'); ?>" value="<?php echo esc_attr($this->data['option']['background_slider_transition_speed']); ?>" maxlength="5"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Fit always',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Prevents the image from ever being cropped.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_always'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_always_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_always'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_always_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_always'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_always_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_always'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_always_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Fit landscape',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Prevents the image from being cropped by locking it at 100% width.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_landscape'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_landscape_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_landscape'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_landscape_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_landscape'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_landscape_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_landscape'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_landscape_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Fit portrait',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Prevents the image from being cropped by locking it at 100% height.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_portrait'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_portrait_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_portrait'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_portrait_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_fit_portrait'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_fit_portrait_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_fit_portrait'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_fit_portrait_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Horizontal center',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Centers image horizontally. When turned off, the images resize/display from the left of the page.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_horizontal_center'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_horizontal_center_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_horizontal_center'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_horizontal_center_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_horizontal_center'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_horizontal_center_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_horizontal_center'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_horizontal_center_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Vertical center',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Centers image vertically. When turned off, the images resize/display from the top of the page.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_vertical_center'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_vertical_center_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_vertical_center'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_vertical_center_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_vertical_center'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_vertical_center_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_vertical_center'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_vertical_center_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Keyboard navigation',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Allows control via keyboard.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_keyboard_nav'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_slider_keyboard_nav'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_slider_keyboard_nav_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Performance',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Uses image rendering options in Firefox and Internet Explorer to adjust image quality. This can speed up/slow down transitions. Webkit does not yet support these options.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('background_slider_performance'); ?>" id="<?php NLThemeHelper::getFormName('background_slider_performance'); ?>" class="width-400">
<?php
		foreach($this->data['dictionary']['supersized']['performance'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['background_slider_performance'],$index,false).'>'. esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>