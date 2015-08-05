<?php

namespace PaulVL\Helpers;

class PhpHelper
{
	public static function empty_ignoring_zero($var)
	{
	    return !( $var === "0" || $var || $var === 0 );
	}
}