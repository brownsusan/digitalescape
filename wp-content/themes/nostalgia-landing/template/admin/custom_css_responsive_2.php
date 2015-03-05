		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('CSS styles',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('CSS styles for page width between 768px and 959px.',THEME_DOMAIN); ?></span>
				<div>
					<textarea id="<?php NLThemeHelper::getFormName('custom_css_responsive_2'); ?>" name="<?php NLThemeHelper::getFormName('custom_css_responsive_2'); ?>" rows="1" cols="1" class="css-editor"><?php echo esc_html($this->data['option']['custom_css_responsive_2']); ?></textarea>
				</div>						
			</li>
		</ul>