		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable newsletter',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable newsletter form.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('newsletter_form_enable'); ?>" id="<?php NLThemeHelper::getFormName('newsletter_form_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['newsletter_form_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('newsletter_form_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('newsletter_form_enable'); ?>" id="<?php NLThemeHelper::getFormName('newsletter_form_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['newsletter_form_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('newsletter_form_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
		</ul>