		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Person',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Person name (surname).',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('testimonial_person'); ?>" id="<?php NLThemeHelper::getFormName('testimonial_person'); ?>" value="<?php echo esc_attr($this->data['option']['testimonial_person']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Company',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Company name.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('testimonial_company'); ?>" id="<?php NLThemeHelper::getFormName('testimonial_company'); ?>" value="<?php echo esc_attr($this->data['option']['testimonial_company']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Caption',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Testimonial caption.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('testimonial_caption'); ?>" id="<?php NLThemeHelper::getFormName('testimonial_caption'); ?>" value="<?php echo esc_attr($this->data['option']['testimonial_caption']); ?>" maxlength="255" />
					</div>
				</li>
			</ul>
		</div>