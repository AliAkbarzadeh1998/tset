<?php
// برای همه کنترلر ها باید یک روت تعریف کرد ... خودش دیفالت نداره
//اگه کنترلری نیاز به پارامتر داره موقع تعریف روت باید بصورت
//'route/{param}
//تعریف بشه و اگه اختیاری بود اخرش باید ? گذاشته شود
//---------------------------------
$routes = [
  //'home/salam/{var1}/{var2?}' => 'testController/index',
    '/'=>'pageController/index',
    'home'=>'pageController/index',
    'register'=>'UserController/register',
    'login' => 'userAuthController/login',
    'search'=>'pageController/search'
];