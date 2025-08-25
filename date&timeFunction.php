<?php
/* date function is devided into four parts 
day , month , year , week
day has three formate 
d (01 to 31)
j(1 to 31)
s(st,nd,rd,or th)
months has 4 formate 
F(january)
m(01)
M(jan)
n(1)
year has 2 formate 
Y(2019)
y(19) 
week has 4 formate 
D((mon)
l(monday)
N(1 day start with mon )
W(1 day start with sunday)*/

echo date("d/F/Y/l/m/i/s");
echo "<br>";
echo "today is " . date("d") . "<br>";
echo "week day is " . date("N") . "<br>";
echo "year day is " . date("z") . "<br>";
echo "week of the year is " . date("W") . "<br>";
echo "days of the months is " . date("t") . "<br>";
echo "is leap year" . date("L") . "<br>";

//  time has only 1 parameter that is formate
/* time has devided into 4 parts 
hour , minutes ,second , meridiem 
hour 
h(01 to 12)
H(00 to 23)
g(1 to 12)
G(0 to 23)

minutes 
i(00 to 59)

seconds 
s(00 to 59)

meridiem
a(am or pm )
A(AM or PM)*/
date_default_timezone_set("Asia/kolkata");
echo "time is " . date("h:i:sa e") . "<br>";
// e stands for current country time 

// MKtime & GmmKtime 
/* mktime stands for make time  shows the old time when things done it contain 6 parameter 
mktime(hour,minute,second,month,day,year) 

gmmktime stands for greenwich mean time
gmmktime(hour,minute,second,month,day,year) */
echo "time & date :" . date("d-m-Y h:i:sa") . "<br>";
echo date("l" , mktime(0,0,0,8,23,2025));

//  date create & date formate 
/* date crete is used for show the past and future date it contain 2 parameter
date _create (time , timezone)
date_formate (object ,format) */

$date = date_create("2026-03-15");
echo "<br>";
echo date_format($date,"l");
echo "<br>";

//  check date & date difference
/* check date is used for check the date is valid or not it contain 3 parameter 
checkdate(month,day,year) 
date difference is used for differnce between 2 days it contai 3 parameter
date_diff(datetime1,datetime2,absolute) aboulte  return true and false */

echo checkdate(2,15,2024);
echo "<br>";

$date1 = date_create("2025-08-24");
$date2 = date_create("2025-08-25");

$diff = date_diff($date1, $date2);

echo "<pre>";
print_r($diff);
echo "</pre>";

//  date_add & date_sub and date_modify
/* date_add is used for add  the new days in existing date it contain 2 parameter 
date_add(object,interval)
date_sub is used for remove  the new days in existing date it contain 2 parameter 
date_add(object,interval) 
date_modify is used for add or remove the new days in existing date it contain 2 parameter 
date_modify(object,interval)*/

$date = date_create("2015-05-15");
date_add($date,date_interval_create_from_date_string("10 days"));
echo date_format($date,"d-m-Y");

// getdate , lacaltime , gettimeofday
/* getdate is used for fetch the dates time months years etc it contai 1 parameter
gatdate(timestamps) 
gettimeofday return the current time of the day 
gettimeofday(return_float)
localtime it shows the local server time 
localtime(timestamps,is_assoc)*/
echo "<pre>";
print_r(getdate());
echo "</pre>";

//  date_parse 
/* date parse is used for fetching the all information frmo given date it contain 1 parameter date
date_parse(date)
date_parse_from_format(format,date)
  */
echo "<pre>";
print_r(date_parse("2025-08-24 30:25:5"));
echo "</pre>";

// strtotime & strftime 
/* strtotime is convert the string to the date it contain 1 parameter
strtotime(time)
strftime is convert the time to string it contain 2 parameter
strftime (format, timestamps) */

echo date("d-m-Y",strtotime("now"));
echo "<br>";
echo strftime("%B %d %Y , %X %Z");
echo "<br>";


//  date_time_set 
/* date time set is used for add the time in existing date it contai 5 parameter
date_time_set(object,hour,minute,second,microsecond)
 */

$date = date_create("2015-05-15");

// Set time to 13:20:00
date_time_set($date, 13, 20, 0);

echo date_format($date , "d-m-Y H:i:s");
echo "<br>";

//  timezone 
/* following are the time zones list 
get_default_timezone_get(locar server time )
date_default_timezone_set(set the local server time )
timezone_open(existing timezone add date )
timezone_name_open(get the timezone name)
timezone_location_get(check the timezone location longitude and latitude )
timezone_identifiers_list(timezone for specific country)
 */
echo date_default_timezone_get();
?>


