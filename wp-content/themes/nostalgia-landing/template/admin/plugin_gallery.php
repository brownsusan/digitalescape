		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Limit number of letters in image excerpt',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Limit number of letters in image excerpt.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_excerpt_limit'); ?>" id="<?php NLThemeHelper::getFormName('gallery_excerpt_limit'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_excerpt_limit']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php esc_html_e('Characters after cut excerpt',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Characters after cut excerpt.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('gallery_excerpt_limit_character'); ?>" id="<?php NLThemeHelper::getFormName('gallery_excerpt_limit_character'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_excerpt_limit_character']); ?>" maxlength="10"/>
				</div>					
			</li>
		</ul>