		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable Google Map',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable google map.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>	
			<li>
				<h5><?php esc_html_e('Enable company info box',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable company info box on Google Map.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_company_info_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_company_info_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_company_info_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_company_info_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_company_info_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_company_info_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_company_info_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_company_info_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>
			<li>
				<h5><?php esc_html_e('Show company info box at start',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show or hide company info box at start.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start'); ?>" id="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_company_info_enable_start'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start'); ?>" id="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_company_info_enable_start'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_company_info_enable_start_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>
			<li>
				<h5><?php esc_html_e('Map type',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Map type.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_map_type_id'); ?>" id="<?php NLThemeHelper::getFormName('google_map_map_type_id'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['mapTypeId'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_map_type_id'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Point coordinates',THEME_DOMAIN); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Coordinates, in order: latitude, longitude.',THEME_DOMAIN); ?><br/>
					<?php esc_html_e('You can designate coordinates using this tool:',THEME_DOMAIN); ?> <a href="http://www.birdtheme.org/useful/googletool.html">http://www.birdtheme.org/useful/googletool.html</a>
				</span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('google_map_coordinate_lat'); ?>" class="to-infield"><?php esc_html_e('Latitude',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_coordinate_lat'); ?>" id="<?php NLThemeHelper::getFormName('google_map_coordinate_lat'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_coordinate_lat']); ?>" maxlength="255"/>
				</div>
				<div>
					<label for="<?php NLThemeHelper::getFormName('google_map_coordinate_lng'); ?>" class="to-infield"><?php esc_html_e('Longitude',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_coordinate_lng'); ?>" id="<?php NLThemeHelper::getFormName('google_map_coordinate_lng'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_coordinate_lng']); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php esc_html_e('Marker coordinates',THEME_DOMAIN); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Coordinates of marker, in order: latitude, longitude.',THEME_DOMAIN); ?><br/>
					<?php esc_html_e('You can designate coordinates using this tool:',THEME_DOMAIN); ?> <a href="http://www.birdtheme.org/useful/googletool.html">http://www.birdtheme.org/useful/googletool.html</a>
				</span>
				<div>
					<label for="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lat'); ?>" class="to-infield"><?php esc_html_e('Latitude',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lat'); ?>" id="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lat'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_coordinate_marker_lat']); ?>" maxlength="255"/>
				</div>
				<div>
					<label for="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lng'); ?>" class="to-infield"><?php esc_html_e('Longitude',THEME_DOMAIN); ?></label>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lng'); ?>" id="<?php NLThemeHelper::getFormName('google_map_coordinate_marker_lng'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_coordinate_marker_lng']); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php esc_html_e('Width',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Width of the map (in % of the parent selector).',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('google_map_width_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_width'); ?>" id="<?php NLThemeHelper::getFormName('google_map_width'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Height',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Height of the map (in px).',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_height'); ?>" id="<?php NLThemeHelper::getFormName('google_map_height'); ?>" value="<?php echo esc_attr($this->data['option']['google_map_height']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Map type control',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable map type control.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_map_type_control_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_map_type_control_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_map_type_control_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>						
			<li>
				<h5><?php esc_html_e('Map type control style',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Map type control style.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_map_type_control_style'); ?>" id="<?php NLThemeHelper::getFormName('google_map_map_type_control_style'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['mapTypeControlStyle'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_map_type_control_style'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php esc_html_e('Map type control position',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Map type control position.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_map_type_control_position'); ?>" id="<?php NLThemeHelper::getFormName('google_map_map_type_control_position'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['position'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_map_type_control_position'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>						
			<li>
				<h5><?php esc_html_e('Zoom control',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable zoom control.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_zoom_control_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_zoom_control_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_zoom_control_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>						
			<li>
				<h5><?php esc_html_e('Zoom level',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Zoom level.',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('google_map_zoom_level_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('google_map_zoom_level'); ?>" id="<?php NLThemeHelper::getFormName('google_map_zoom_level'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Zoom style',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Zoom style.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_zoom_style'); ?>" id="<?php NLThemeHelper::getFormName('google_map_zoom_style'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['zoomControlStyle'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_zoom_style'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php esc_html_e('Zoom position',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Zoom position.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_zoom_position'); ?>" id="<?php NLThemeHelper::getFormName('google_map_zoom_position'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['position'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_zoom_position'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php esc_html_e('Pan control',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable pan control.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_pan_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_pan_control_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_pan_control_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_pan_control_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_pan_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_pan_control_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_pan_control_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_pan_control_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php esc_html_e('Pan control position',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Pan control position.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_pan_control_position'); ?>" id="<?php NLThemeHelper::getFormName('google_map_pan_control_position'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['position'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_pan_control_position'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>	
			<li>
				<h5><?php esc_html_e('Scale control',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable scale control.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_scale_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_scale_control_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_scale_control_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_scale_control_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_scale_control_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_scale_control_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_scale_control_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_scale_control_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php esc_html_e('Scale control position',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Scale control position.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_scale_control_position'); ?>" id="<?php NLThemeHelper::getFormName('google_map_scale_control_position'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['position'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_pan_control_position'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>
			<li>
				<h5><?php esc_html_e('Street View control',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable street view control.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_street_view_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_street_view_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_street_view_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_street_view_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('google_map_street_view_enable'); ?>" id="<?php NLThemeHelper::getFormName('google_map_street_view_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['google_map_street_view_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('google_map_street_view_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>				
			<li>
				<h5><?php esc_html_e('Street View position',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Street View position.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('google_map_street_view_position'); ?>" id="<?php NLThemeHelper::getFormName('google_map_street_view_position'); ?>">
<?php
		foreach($this->data['dictionary']['googleMap']['position'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['google_map_street_view_position'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>							
			</li>	
		</li>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.createSlider('#<?php NLThemeHelper::getFormName('google_map_width_slider'); ?>',0,100,<?php echo (int)$this->data['option']['google_map_width']; ?>);
				element.createSlider('#<?php NLThemeHelper::getFormName('google_map_zoom_level_slider'); ?>',0,21,<?php echo (int)$this->data['option']['google_map_zoom_level']; ?>);
			});
		</script>