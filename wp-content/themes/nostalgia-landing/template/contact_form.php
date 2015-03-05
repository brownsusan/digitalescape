		<form id="<?php echo 'contact_form_'.esc_attr($this->data['id']); ?>" method="post" class="clear-fix">
			<div class="clear-fix">
				<ul class="no-list form-line">
					<li class="clear-fix block">
						<div><label for="contact_form_name_<?php echo esc_attr($this->data['id']); ?>"><?php esc_html_e('Your name',THEME_DOMAIN); ?></label></div>
						<div><input type="text" name="contact_form_name_<?php echo esc_attr($this->data['id']); ?>" id="contact_form_name_<?php echo esc_attr($this->data['id']); ?>" value=""/></div>
					</li>
					<li class="clear-fix block">
						<div><label for="contact_form_mail_<?php echo esc_attr($this->data['id']); ?>"><?php esc_html_e('Your e-mail',THEME_DOMAIN); ?></label></div>
						<div><input type="text" name="contact_form_mail_<?php echo esc_attr($this->data['id']); ?>" id="contact_form_mail_<?php echo esc_attr($this->data['id']); ?>" value=""/></div>
					</li>
					<li class="clear-fix block">
						<div><label for="contact_form_message_<?php echo esc_attr($this->data['id']); ?>"><?php esc_html_e('Your message',THEME_DOMAIN); ?></label></div>
						<div><textarea name="contact_form_message_<?php echo esc_attr($this->data['id']); ?>" id="contact_form_message_<?php echo esc_attr($this->data['id']); ?>" rows="1" cols="1"></textarea></div>
					</li>
					<li class="clear-fix form-submit-line block">
						<input type="hidden" name="action" value="contact_form"/>
						<div><input type="submit" id="contact_form_submit_<?php echo esc_attr($this->data['id']); ?>" name="contact_form_submit_<?php echo esc_attr($this->data['id']); ?>" class="button" value="<?php esc_attr_e('Send',THEME_DOMAIN); ?>"/></div>
					</li>
				</ul>
			</div>
		</form>
		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				jQuery('#<?php echo 'contact_form_'.esc_attr($this->data['id']); ?> label').inFieldLabels();
				var form=new NLThemeContactForm('<?php echo esc_attr($this->data['id']); ?>');
				form.init();
			});
			</script>
		</div>