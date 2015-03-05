		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable tweets carousel',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable tweets carousel.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable'); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['social_network_twitter_carousel_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable'); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['social_network_twitter_carousel_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('social_network_twitter_carousel_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>	
				<h5><?php esc_html_e('Twitter username',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Twitter username.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_name']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_name'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_name'); ?>"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Consumer key',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Consumer key.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_consumer_key']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_consumer_key'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_consumer_key'); ?>"  maxlength="255"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Consumer secret key',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Consumer secret key.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_consumer_secret_key']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_consumer_secret_key'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_consumer_secret_key'); ?>"  maxlength="255"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Access token',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Access token.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_access_token']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_access_token'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_access_token'); ?>"  maxlength="255"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Access secret token',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Access secret toke.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_access_secret_token']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_access_secret_token_'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_access_secret_token'); ?>"  maxlength="255"/>
				</div>							
			</li>
			<li>	
				<h5><?php esc_html_e('Number of tweets',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Number of tweets.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" value="<?php echo esc_attr($this->data['option']['social_network_twitter_count']); ?>" id="<?php NLThemeHelper::getFormName('social_network_twitter_count'); ?>" name="<?php NLThemeHelper::getFormName('social_network_twitter_count'); ?>"  maxlength="3"/>
				</div>							
			</li>
		</ul>