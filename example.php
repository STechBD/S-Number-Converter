<?php


/*
    # Project: S Number Converter (SNC)
    # Description: A free PHP library for number conversion in different languages.
    # Version: 1.0.0
    # Version Code: 1
    # File: Example File
    # Created: December 23, 2019
    # Modified: December 23, 2019
    # Developer: Md. Ashraful Alam Shemul
    # Email: ceo@stechbd.net
    # Publisher: S Technologies Limited
    # Website: https://project.stechbd.net/number-converter/
    # Homepage: https://www.stechbd.net
    # Contact: opensource@stechbd.net
*/

include 'lib/numberConverter.class.php';

// Here is two example of 'Bengali to English' and 'English to Bengali' number conversation

echo SNC::do('<strong>S Technologies</strong> was founded on August ১৪, ২০১৩<br>', 'en', 'bn');
echo SNC::do('2013 সালের 14ই আগস্ট <strong>এস টেকনোলজিস</strong> প্রতিষ্ঠিত হয়েছিল', 'bn');


?>