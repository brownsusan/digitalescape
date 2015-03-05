		<ul class="to-form-field-list">
			<li>	
				<h5><?php esc_html_e('Pages margin',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Margin between pages (in px).',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['page_margin']); ?>" id="<?php NLThemeHelper::getFormName('page_margin'); ?>" name="<?php NLThemeHelper::getFormName('page_margin'); ?>" maxlength="3"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('First page margin',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Top margin of first page (in px).',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['page_first_margin_top']); ?>" id="<?php NLThemeHelper::getFormName('page_first_margin_top'); ?>" name="<?php NLThemeHelper::getFormName('page_first_margin_top'); ?>" maxlength="3"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Last page margin',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Bottom margin of last page (in px).',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['page_last_margin_bottom']); ?>" id="<?php NLThemeHelper::getFormName('page_last_margin_bottom'); ?>" name="<?php NLThemeHelper::getFormName('page_last_margin_bottom'); ?>" maxlength="3"/>
				</div>							
			</li>
		</ul>