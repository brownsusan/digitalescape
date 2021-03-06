<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeValidation
{
	/**************************************************************************/

	function NLThemeValidation($Notice=null) 
	{ 
		$this->Notice=$Notice;
	}

	/**************************************************************************/

	function isNumber($value,$minValue,$maxValue,$empty=false)
	{
		if(($empty) && ($this->isEmpty($value))) return(true);
		if(!preg_match('/^[0-9]{1,}$/',$value,$result)) return(false);
		if(!(($value>=$minValue) && ($value<=$maxValue))) return(false);

		return(true);
	}

	/**************************************************************************/

	function isEmpty($value)
	{
		return(strlen(trim(strval($value))) ? false : true);
	}
	
	/**************************************************************************/

	function isNotEmpty($value)
	{
		return(!$this->isEmpty($value));
	}
	
	/**************************************************************************/
	
	function isEmailAddress($value,$empty=false)
	{
		if(($empty) && ($this->isEmpty($value))) return(true);
        if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i',$value,$result)) return(false);
        
		return(true);
	}
	
	/**************************************************************************/
	
	function isHexColor($value,$empty=false)
	{
		if(($empty) && ($this->isEmpty($value))) return(true);
		if(!preg_match('/^[a-f0-9]{6}$/i',$value,$result)) return(false);

		return(true);
	}
	
	/**************************************************************************/

	function notice($functionName,$functionArgument,$noticeArgument)
	{
		$result=call_user_func_array(array($this,$functionName),$functionArgument);
		if(!$result) $this->Notice->addError($noticeArgument[0],$noticeArgument[1]);
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/