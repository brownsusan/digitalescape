<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeContactForm
{
	/**************************************************************************/

	function __construct()
	{
		$this->SMTPSecureType=array
		(
			'ssl'				=>	array(__('SSL',THEME_DOMAIN)),
			'tls'				=>	array(__('TLS',THEME_DOMAIN))
		);
		
		$this->reset=NLThemeOption::getOption('contact_form_reset_enable');
		$this->debug=NLThemeOption::getOption('contact_form_debug_enable');
	}

	/**************************************************************************/

	function createContactForm($attr,$content)
	{
		if(NLThemeOption::getOption('contact_form_enable')!=1) return(null);

		$data=array();
		
		$data['id']=NLThemeHelper::createId();
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'contact_form.php');
		return($Template->output(true));
	}

	/**************************************************************************/
	
	function createContactFormResponse()
	{
		if(ob_get_contents()) ob_clean();
		
		$id=$_POST['id'];
		$response=array('error'=>0,'info'=>null,'reset'=>$this->reset);

		$data=array('contact_form_name'=>null,'contact_form_mail'=>null,'contact_form_message'=>null);
		
		foreach($data as $index=>$value) $data[$index]=$_POST[$index.'_'.$id];

		$Validation=new NLThemeValidation();
	
		if(NLThemeOption::getOption('contact_form_enable')!=1) return;
		
		if($Validation->isEmpty($data['contact_form_name']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'contact_form_name_'.$id,'message'=>esc_html__('Please enter your name.',THEME_DOMAIN));
		}
	
		if(!$Validation->isEmailAddress($data['contact_form_mail']))
		{
			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'contact_form_mail_'.$id,'message'=>esc_html__('Please enter valid e-mail.',THEME_DOMAIN));
		}
	
		if($Validation->isEmpty($data['contact_form_message']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'contact_form_message_'.$id,'message'=>esc_html__('Please enter your message.',THEME_DOMAIN));
		}	
	
		if($response['error']==1) $this->createResponse($response);
		if($this->isGPC()) $data=array_map('stripslashes',$data);
	
		NLThemeInclude::includeClass(THEME_PATH_LIBRARY.'phpMailer/class.phpmailer.php',array('PHPMailer'));
		
		$mail=new PHPMailer();
	
		$mail->CharSet='UTF-8';
	
		$mail->SetFrom($data['contact_form_mail'],$data['contact_form_name']); 
		$mail->AddReplyTo($data['contact_form_mail'],$data['contact_form_name']); 
	
		$mail->AddAddress(NLThemeOption::getOption('contact_form_recipient_address'),NLThemeOption::getOption('contact_form_recipient_name'));

		if(NLThemeOption::getOption('contact_form_smtp_enable')==1)
		{
			if($this->debug==1) $mail->SMTPDebug=true;
			
			$mail->IsSMTP();

			$mail->SMTPAuth=true; 
			$mail->SMTPSecure=NLThemeOption::getOption('contact_form_smtp_secure_type');

			$mail->Port=NLThemeOption::getOption('contact_form_smtp_port');
			$mail->Host=NLThemeOption::getOption('contact_form_smtp_host');
			$mail->Username=NLThemeOption::getOption('contact_form_smtp_username');
			$mail->Password=NLThemeOption::getOption('contact_form_smtp_password');
		}

		$mail->Subject=NLThemeOption::getOption('contact_form_subject');
		
		$value=array_map('htmlspecialchars',$data);
		
		$body=NLThemeOption::getOption('contact_form_message');
		$body=preg_replace(array('/\[name\]/','/\[address\]/','/\[message\]/'),array($data['contact_form_name'],$data['contact_form_mail'],$data['contact_form_message']),$body);
		
		$mail->MsgHTML($body);

		if(!$mail->Send())
		{
			$response['error']=1;	
			$response['info'][]=array('fieldId'=>'contact_form_submit_'.$id,'message'=>esc_html__('Sorry, we cannot send this message.',THEME_DOMAIN));			
			$this->createResponse($response);		
		}

		$response['error']=0;
		$response['info'][]=array('fieldId'=>'contact_form_submit_'.$id,'message'=>esc_html__('Thank you for contacting us.',THEME_DOMAIN));
	
		$this->createResponse($response);			
	}
	
    /**************************************************************************/

    function isGPC()
    {
        return((bool)ini_get('magic_quotes_gpc'));
    }

	/**************************************************************************/

    function createResponse($response)
    {
        $json=json_encode($response);
		$buffer=ob_get_clean();
		
		if(ob_get_contents()) ob_end_clean();
		
		echo $json;
		if($this->debug==1) echo "\n\n".$buffer;
        exit;
    }
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/