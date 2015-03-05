		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Google Analytics',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Don\'t enter <script> tags. These tags will be added automatically.',THEME_DOMAIN); ?></span>
				<div>
					<textarea id="<?php NLThemeHelper::getFormName('google_analytics_code'); ?>" name="<?php NLThemeHelper::getFormName('google_analytics_code'); ?>" rows="1" cols="1"><?php echo esc_html($this->data['option']['google_analytics_code']); ?></textarea>
				</div>						
			</li>
		</ul>