		<form id="<?php echo 'newsletter_form_'.esc_attr($this->data['id']); ?>" method="post" class="clear-fix newsletter-form">
			<div class="clear-fix">
				<ul class="no-list form-line">
					<li class="clear-fix block">
						<div><label for="newsletter_form_mail_<?php echo esc_attr($this->data['id']); ?>"><?php esc_html_e('Your e-mail address',THEME_DOMAIN); ?></label></div>
						<div><input type="text" name="newsletter_form_mail_<?php echo $this->data['id']; ?>" id="newsletter_form_mail_<?php echo esc_attr($this->data['id']); ?>" value=""/></div>
					</li>
					<li class="clear-fix form-submit-line block">
						<input type="hidden" name="action" value="newsletter_form"/>
						<input type="submit" id="newsletter_form_submit_<?php echo esc_attr($this->data['id']); ?>" name="newsletter_form_submit_<?php echo esc_attr($this->data['id']); ?>" class="button" value="<?php esc_attr_e('Add',THEME_DOMAIN); ?>"/>
					</li>
				</ul>
			</div>
		</form>
		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				jQuery('#<?php echo 'newsletter_form_'.esc_attr($this->data['id']); ?> label').inFieldLabels();
				var form=new NLThemeNewsletterForm('<?php echo esc_attr($this->data['id']); ?>');
				form.init();
			});
			</script>
		</div>
