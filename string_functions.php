<?php
//1 str_split & chunk
/* str_split is used for store the string word on each array positions with the index positions  */
$str1 = "hello world";
$split = str_split($str1);
echo "<pre>";
print_r($split);
echo "</pre>";
echo "<br>";
/* str_chunk function is used for trim the string with the space symbol etc */
$str2 = "hello world";
$chunk = chunk_split($str2,2,"."); 
echo "<pre>";
print_r($chunk);
echo "</pre>"; 
echo "<br>";

// 2 str cases 
/*  str cases is used for change the formating of the text style  
following are the string cases functions 
strtolower (string to olwecase)
strtoupper (string to uppercase)
ucfirst (first character of string is uupercase )
ucwords ( string first words to be uppercase )
lcfirst (first character of string to be lowercase )
*/
$str3 = "yahoo baba";
// $newstr = strtoupper($str3);
$newstr = lcfirst($str3);
echo $newstr;
echo "<br>";

// 3 str_len & count 
/* str len function is used for count the lenght of the string character 
str count function is used for count the word in the string   */
$str4 = " hello yahoo baba";
// echo strlen($str4);
// echo str_word_count($str4,2,);
echo substr_count($str4,"bab");
echo "<br>";

// 4 str_search & find position
/*find position is used for find the positions in the string 
following are the find positions functions 
strpos(find str pos with 3 parameter str name word and start)
strrpos(find the word in reverse )
stripos( case insecetive)
strripos( reverse case insencetive) */ 
$srt5 = "i love php ,i love php too";
echo strpos($srt5,"love");
echo "<br>";
/* following are the str search functions 
strstr(this is return the new string after find the world and retrn the left words it contain 3 parameter str name word and before search )
stristr(it case incensetive )
strchr(is same as strstr functions)
strrchr(it is start in reverse order )
strpbrk(it used find the single nad multiple character ) */
$str6 = "welcome to my world";
// echo strstr($str6,"my",true);
echo strpbrk($str6,"my");
echo "<br>";

// 5 string substr 
/*this function is used removing the selected word in the string it contain 3 parameter str name , start ,and length */
$str7 = "i vove php, php to";
echo substr($str7,2,8);
echo "<br>";

// 6 string replace functions 
/* this functions is used for replace world it contain the 3 parameter
(find ,replace,string and it is case sensitive)
str_ireplace(it is case insensitive )
substr_replace(this is used for removing the multiple words )
strtr(this function is used for removing the character in the string it contain 3 parameter str name from and to and is work with associative array) */
$str8 = "hello world. the world is nice ";
echo str_replace("php","python",$str8);
echo "<br>";
echo substr_replace($str8,"earth",6,10);
echo "<br>";

// 7 string compare functions
/* this function is used for compare the two strings it shows three types of result 0 less then and greater the 
following are the list of compare functions 
strcmp(it is used for compare str1 & str2)
strncmp(it used for some character compare)
strcasecmp(it case insensitive)
strncasecmp(it used for compare character case insensitive)
strnatcmp(it compare the algorithms value )
strnatcasecmp()
substr_compare(it is used for compare substring )
similar_text(it is used for check spaces and similar character)
*/ 
echo strcmp("hello","hello");
// echo strncmp("hello world","hello world",6);
echo "<br>";

// 8 str reverse and shuffle
$str9 = "hello world";
echo strrev($str9);
echo "<br>";
echo str_shuffle($str9);
echo "<br>";

//  9 str_pad & str_repeat
/* string pad is used for increase the size of string without adding any character it contain 4 parameter str name ,length,pad_srting like which character,pad_type */
$str10 = "hello";
echo str_pad($str10,8,".",(STR_PAD_RIGHT));
echo "<br>";
$str11 = "wow";
echo str_repeat($str11,5);
echo "<br>";

// 10 string trim & chop 
/* trim is used for cutting the string there are 2 way of trim
rtrim(right trim)
ltrim(left trim)
chop(rihgt trim)
 */
$str12 = "hello yahoo baba";
echo trim($str12,"a");
echo "<br>";

// 11 add slashes & stripslashes
/* addslashes is used for secure the string for sql injection with adding the slashes 
stripslashes is uesd for remove the slashes and make the string readable form  
addcslashes is used for adding the slash in after particular charachter
stripclashes
*/
$str13 = "hello world 'welcome'";
$newstr = addslashes($str13);
echo stripslashes($newstr);
echo "<br>";
$newstr = addcslashes($str13,"m");
echo $newstr;
echo "<br>";

// 12 html entities & special characters 
/* html entities is used for hide the html tag and convert into special characters it contain 2 parameter str name and flag
following are the flags functions 
ent_compat(default encodes only double quotes)
ent_quotes(encoeds single and double quotes )
ent_no quotes(does not encode any quotes ) */
$str14 = "hello 'yahoo'<b>baba</b>";
echo $str14;
echo "<br>";
// echo htmlentities($str14,ENT_QUOTES)
// echo htmlspecialchars($str14,ENT_QUOTES);
$result =htmlspecialchars($str14,ENT_QUOTES);
echo html_entity_decode($result);
echo htmlspecialchars_decode($result);
echo "<br>";

// find the list of html special character 
echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>"; 
echo "<br>";

// 13 chr() & ord()
/* chr is used for convert the ascii value into character values  
ord is used for conevert the string value into ascii value   */
$str15 = chr(65);
echo "<br>";
$str15 = ord("a");
echo $str15;
echo "<br>";


// strip & wordwrap
/* strip tag is used for removing all the html tags it contain 2 parameter str name and allow . allow is used for allowing tags  
word wrap is used for braking the string it contain 4 parameter str name , width , break , cut */
$str16 = "hello<b>world</b>,hello<i>earth</i>";
echo strip_tags($str16,"<b>");
echo "<br>";
echo wordwrap($str16,3,"<br>",true);


























?>
