<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeNewsletterForm
{
	/**************************************************************************/

	function __construct()
	{
		
	}

	/**************************************************************************/

	function createNewsletterForm($attr,$content)
	{
		if(NLThemeOption::getOption('newsletter_form_enable')!=1) return(null);

		$data=array();
		
		$data['id']=NLThemeHelper::createId();
		
		$Template=new NLThemeTemplate($data,THEME_PATH_TEMPLATE.'newsletter_form.php');
		return($Template->output(true));
	}

	/**************************************************************************/
	
	function createNewsletterFormResponse()
	{
		global $wpdb,$table_prefix;
		
		$id=$_POST['id'];
		$response=array('error'=>0,'info'=>null);

		$data=array('newsletter_form_mail'=>null);
		
		foreach($data as $index=>$value) $data[$index]=$_POST[$index.'_'.$id];

		$Validation=new NLThemeValidation();
	
		if(NLThemeOption::getOption('newsletter_form_enable')!=1) return;
		
		if(!$Validation->isEmailAddress($data['newsletter_form_mail']))
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'newsletter_form_mail_'.$id,'message'=>esc_html__('Please enter valid e-mail address.',THEME_DOMAIN));
			$this->createResponse($response);
		}
		
		if($this->isGPC()) $data=array_map('stripslashes',$data);
		
		$result=$wpdb->get_row('select count(*) as number from '.$table_prefix.'posts where post_title="'.esc_sql($data['newsletter_form_mail']).'" and post_type="'.esc_sql(THEME_CONTEXT.'_email_address').'"');

		if($result->number!=0)
		{
			$response['error']=1;
			$response['info'][]=array('fieldId'=>'newsletter_form_mail_'.$id,'message'=>esc_html__('Sorry. Your e-mail address exists.',THEME_DOMAIN));
			$this->createResponse($response);			
		}
		
		$post=array
		(
			'post_title'	=>	$data['newsletter_form_mail'],
			'post_type'		=>	THEME_CONTEXT.'_email_address',
			'post_status'	=>	'publish'
		);
		
		wp_insert_post($post);
		
		$response['error']=0;
		$response['info'][]=array('fieldId'=>'newsletter_form_submit_'.$id,'message'=>esc_html__('Your address has been added.',THEME_DOMAIN));
	
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
        echo json_encode($response);
        exit;
    }
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/