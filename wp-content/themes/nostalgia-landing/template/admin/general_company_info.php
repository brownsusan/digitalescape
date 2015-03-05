		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Company name',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Company name.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_name'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_name'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_name']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Street',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Street.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_street'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_street'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_street']); ?>" maxlength="255"/>
				</div>
			</li>						
			<li>
				<h5><?php esc_html_e('Postcode',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Postcode.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_postcode'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_postcode'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_postcode']); ?>" maxlength="255"/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('City',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('City.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_city'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_city'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_city']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Country',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Country.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_country'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_country'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_country']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Phone number',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Phone number.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_phone'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_phone'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_phone']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Fax number',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Fax number.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_fax'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_fax'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_fax']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('E-mail address',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('E-mail address.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('company_info_company_email'); ?>" id="<?php NLThemeHelper::getFormName('company_info_company_email'); ?>" value="<?php echo esc_attr($this->data['option']['company_info_company_email']); ?>" maxlength="255"/>
				</div>
			</li>
		</ul>