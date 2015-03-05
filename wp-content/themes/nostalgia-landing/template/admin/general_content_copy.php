		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Right click',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable right click.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('right_click_enable'); ?>" id="<?php NLThemeHelper::getFormName('right_click_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['right_click_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('right_click_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('right_click_enable'); ?>" id="<?php NLThemeHelper::getFormName('right_click_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['right_click_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('right_click_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Text selection',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable text selection.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('text_select_enable'); ?>" id="<?php NLThemeHelper::getFormName('text_select_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['text_select_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('text_select_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('text_select_enable'); ?>" id="<?php NLThemeHelper::getFormName('text_select_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['text_select_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('text_select_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
		</ul>