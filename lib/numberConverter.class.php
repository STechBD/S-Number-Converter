<?php


/*
    # Project: S Number Converter (SNC)
    # Description: A free PHP library for number conversion in different languages.
    # Version: 1.0.0
    # Version Code: 1
    # File: Main Class File
    # Created: December 23, 2019
    # Modified: December 23, 2019
    # Developer: Md. Ashraful Alam Shemul
    # Email: ceo@stechbd.net
    # Publisher: S Technologies Limited
    # Website: https://project.stechbd.net/number-converter/
    # Homepage: https://www.stechbd.net
    # Contact: opensource@stechbd.net
*/

class SNC
{
    // Listing digits in different languages
    
    private static $en = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    private static $bn = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    private static $ar = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    private static $hi = array('०', '१', '२', '३', '४', '५', '६', '७', '८', '९');
    private static $ur = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
    
    // Main function to replace digits
    
    public static function do($string, $to, $from = 'en')
    {
        if(isset($to))
        {
            return str_replace(self::$$from, self::$$to, $string);
        }

	    return false;
    }
}