		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Enable contact form',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable contact form.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Recipient name',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Recipient name of the mail message.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_recipient_name'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_recipient_name'); ?>" value="<?php echo  esc_attr($this->data['option']['contact_form_recipient_name']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Recipient e-mail address',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Recipient e-mail address of the mail message.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_recipient_address'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_recipient_address'); ?>" value="<?php echo  esc_attr($this->data['option']['contact_form_recipient_address']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Enable SMTP',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable SMTP.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_smtp_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_smtp_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_smtp_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_smtp_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_smtp_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_smtp_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Username',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Username.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_smtp_username'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_username'); ?>" value="<?php echo ($this->data['option']['contact_form_smtp_enable']==1 ?  esc_attr($this->data['option']['contact_form_smtp_username']) : ''); ?>" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?> maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Password',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Password.',THEME_DOMAIN); ?></span>
				<div>
					<input type="password" name="<?php NLThemeHelper::getFormName('contact_form_smtp_password'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_password'); ?>" value="" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?> maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Host',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Host.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_smtp_host'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_host'); ?>" value="<?php echo ($this->data['option']['contact_form_smtp_enable']==1 ?  esc_attr($this->data['option']['contact_form_smtp_host']) : ''); ?>" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?> maxlength="255"/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Port',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Port.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_smtp_port'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_port'); ?>" value="<?php echo ($this->data['option']['contact_form_smtp_enable']==1 ?  esc_attr($this->data['option']['contact_form_smtp_port']) : ''); ?>" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?> maxlength="4"/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Secure connection type',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Secure connection type.',THEME_DOMAIN); ?></span>
				<div>
					<select name="<?php NLThemeHelper::getFormName('contact_form_smtp_secure_type'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_smtp_secure_type'); ?>" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?>>
<?php
		foreach($this->data['dictionary']['contactForm']['SMTPSecureType'] as $index=>$value)
			echo '<option value="'. esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['contact_form_smtp_secure_type'],$index,false).'>'. esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Debug contact form',THEME_DOMAIN); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Enable this option if you have problems with working of contact form.',THEME_DOMAIN); ?><br/>
					<?php esc_html_e('Then, you can check the result of processing request via Fire- or Chromebug console.',THEME_DOMAIN); ?>
				</span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_debug_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_debug_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_debug_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_debug_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_debug_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_debug_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_debug_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_debug_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Reset contact form',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable this option if you would like to reset all fields in contact form after sending message.',THEME_DOMAIN); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_reset_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_reset_enable_1'); ?>" value="1" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_reset_enable'],1); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_reset_enable_1'); ?>"><?php esc_html_e('Enable',THEME_DOMAIN); ?></label>
					<input type="radio" name="<?php NLThemeHelper::getFormName('contact_form_reset_enable'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_reset_enable_0'); ?>" value="0" <?php NLThemeHelper::checkedIf($this->data['option']['contact_form_reset_enable'],0); ?>/>
					<label for="<?php NLThemeHelper::getFormName('contact_form_reset_enable_0'); ?>"><?php esc_html_e('Disable',THEME_DOMAIN); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Subject',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Message subject.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('contact_form_subject'); ?>" id="<?php NLThemeHelper::getFormName('contact_form_subject'); ?>" value="<?php echo esc_attr($this->data['option']['contact_form_subject']); ?>" maxlength="255"/>
				</div>
			</li>							
			<li>
				<h5><?php esc_html_e('Message',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Message.',THEME_DOMAIN); ?></span>
				<div>
					<?php wp_editor($this->data['option']['contact_form_message'],THEME_OPTION_PREFIX.'_contact_form_message',THEME_DOMAIN); ?>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$('input[name="<?php NLThemeHelper::getFormName('contact_form_smtp_enable'); ?>"]').bind('change',function() 
				{
					var object=$(this);
					var element=['contact_form_smtp_username','contact_form_smtp_password','contact_form_smtp_host','contact_form_smtp_port','contact_form_smtp_secure_type'];
					$(element).each(function(index,value) 
					{
						var element=$('#<?php echo THEME_OPTION_PREFIX; ?>_'+value);
						if(parseInt(object.val())===1) element.removeAttr('disabled',THEME_DOMAIN);
						else 
						{
							if(element.is('select')) element.val(element.children().first().val());
							else element.val('');
							element.attr('disabled','disabled');
						}
					});
				});
			});
		</script>