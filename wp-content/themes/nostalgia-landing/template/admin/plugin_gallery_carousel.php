		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Autoplay',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Autoplay.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_autoplay'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_autoplay'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_autoplay_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Circular',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Determines whether the carousel should be circular.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_circular'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_circular_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_circular'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_circular_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_circular'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_circular_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_circular'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_circular_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Infinite',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Determines whether the carousel should be infinite.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_infinite'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_infinite_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_infinite'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_infinite_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('gallery_carousel_infinite'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_infinite_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['gallery_carousel_infinite'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('gallery_carousel_infinite_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Direction',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('The direction to scroll the carousel, determines whether the carousel scrolls horizontal or vertical and -when the carousel scrolls automatically- in what direction.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('gallery_carousel_direction'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_direction'); ?>">
<?php
		foreach($this->data['dictionary']['carouFredSel']['direction'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['gallery_carousel_direction'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Number of visible items',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('The number of visible items.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_carousel_item_visible'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_item_visible'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_carousel_item_visible']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php esc_html_e('Minimum number of items',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('The minimum number of items needed to create a carousel.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_carousel_item_minimum'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_item_minimum'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_carousel_item_minimum']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php esc_html_e('Start item number',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Start item number.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_carousel_item_start'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_item_start'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_carousel_item_start']); ?>" maxlength="3"/>
				</div>					
			</li>	
			<li>
				<h5><?php esc_html_e('Number of sroll items',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('The number of items to scroll.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_item'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_item'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_carousel_scroll_item']); ?>" maxlength="3"/>
				</div>					
			</li>	
			<li>
				<h5><?php esc_html_e('Effect',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Indicates which effect to use for the transition.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_effect'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_effect'); ?>">
<?php
		foreach($this->data['dictionary']['carouFredSel']['effect'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['gallery_carousel_scroll_effect'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Easing',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Indicates which easing function to use for the transition.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_easing'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_easing'); ?>">
<?php
		foreach($this->data['dictionary']['easing']['type'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['gallery_carousel_scroll_easing'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Duration',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Determines the duration of the transition in milliseconds.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_duration'); ?>" id="<?php NLThemeHelper::getFormName('gallery_carousel_scroll_duration'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_carousel_scroll_duration']); ?>" maxlength="5"/>
				</div>					
			</li>
		</ul>