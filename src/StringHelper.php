<?php

namespace PaulVL\Helpers;

class StringHelper
{
	/**
	 * Validate if $string contains $target value.
	 * @param  string $string is the string to be evaluated.
	 * @param  string $target is value to evaluate on $string.
	 * @return Boolean, return true if the target is contained in string, otherwise returns false.
	 */
	public static function contains($string, $target)
	{
		if ( strpos($string, $target) !== false ) {
			return true;
		}
		return false;
	}

	/**
	 * Validate if $string contains all $targets values.
	 * @param  string $string  is the string to be evaluated.
	 * @param  Array  $targets are the values to evaluate on $string.
	 * @return Boolean, return true if all the targets are contained in string, otherwise returns false.
	 */
	public static function containsAnd($string, Array $targets)
	{
		foreach ($targets as $target) {
			if ( strpos($string, $target) === false ) {
				return false;
			}	
		}
		return true;
	}

	/**
	 * Validate if $string contains any $targets values.
	 * @param  string $string  is the string to be evaluated.
	 * @param  Array  $targets are the values to evaluate on $string.
	 * @return Boolean, return true if all the targets are contained in string, otherwise returns false.
	 */
	public static function containsOr($string, Array $targets)
	{
		$values_contained = 0;
		foreach ($targets as $target) {
			if ( strpos($string, $target) === false ) {
				$values_contained++;
			}	
		}
		return ( count($targets) > 0 ) ? ( ( $values_contained == count($targets) ) ? false : true ) : false ;
	}

	public static function concatInOneLine(Array $values, $separator = null)
	{
		$string = '';
		foreach ($values as $key => $value) {
			$string.=$value.$separator;
		}
		return trim( $string );
	}

	/**
	 * Replace last ocurrence of string on subject
	 * @param  [type] $search  [description]
	 * @param  [type] $replace [description]
	 * @param  [type] $subject [description]
	 * @return [type]          [description]
	 */
	public static function str_lreplace($search, $replace, $subject)
	{
	    $pos = strrpos($subject, $search);

	    if($pos !== false)
	    {
	        $subject = substr_replace($subject, $replace, $pos, strlen($search));
	    }

	    return $subject;
	}
}