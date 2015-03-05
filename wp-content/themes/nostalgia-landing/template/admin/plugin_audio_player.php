		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable Audio Player',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable audio player.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_enable'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_enable'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>	
			<li>
				<h5><?php esc_html_e('Enable Audio Player on mobile and tablet devices',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable Audio Player on mobile and tablet devices.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_mobile_tablet_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_mobile_tablet_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_mobile_tablet_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>	
			<li>
				<h5><?php esc_html_e('Play at start',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Play at start.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_autostart'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_autostart_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_autostart'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_autostart_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_autostart'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_autostart_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_autostart'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_autostart_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>
			<li>
				<h5><?php esc_html_e('Loop',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Loop.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_loop'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_loop_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_loop'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_loop_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('audio_player_loop'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_loop_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['audio_player_loop'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('audio_player_loop_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>
			<li>
				<h5><?php esc_html_e('Volume',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Volume.',THEME_DOMAIN); ?></span>
				<div>
					<div id="<?php NLThemeHelper::getFormName('audio_player_volume_slider'); ?>"></div>
					<input type="text" name="<?php NLThemeHelper::getFormName('audio_player_volume'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_volume'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>	
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.createSlider('#<?php NLThemeHelper::getFormName('audio_player_volume_slider'); ?>',0,100,<?php echo (int)$this->data['option']['audio_player_volume']; ?>);
			});
		</script>