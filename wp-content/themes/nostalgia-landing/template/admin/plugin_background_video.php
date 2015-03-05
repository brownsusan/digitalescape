		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable Audio Player on mobile and tablet devices',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable Audio Player on mobile and tablet devices.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_video_mobile_tablet_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable'); ?>" id="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_video_mobile_tablet_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_video_mobile_tablet_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>	
			<li>
				<h5><?php esc_html_e('Poster',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Poster (image) is displayed in browsers that don\'t support the HTML5 video.',THEME_DOMAIN); ?><br/></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('background_video_poster'); ?>" id="<?php NLThemeHelper::getFormName('background_video_poster'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['background_video_poster']); ?>" />
					<input type="button" name="<?php NLThemeHelper::getFormName('background_video_poster_browse'); ?>" id="<?php NLThemeHelper::getFormName('background_video_poster_browse'); ?>" class="to-button-browse to-button" value="<?php echo esc_attr('Browse'); ?>"/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Loop',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Loop.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_video_loop'); ?>" id="<?php NLThemeHelper::getFormName('background_video_loop_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['background_video_loop'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_video_loop_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('background_video_loop'); ?>" id="<?php NLThemeHelper::getFormName('background_video_loop_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['background_video_loop'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('background_video_loop_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>				
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement();
				element.bindBrowseMedia('#<?php NLThemeHelper::getFormName('background_video_poster_browse'); ?>');
			});
		</script>