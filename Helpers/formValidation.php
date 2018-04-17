<?php

function check_email($email)
{
    $email_error = false;
    $Email = htmlspecialchars(stripslashes(strip_tags(trim($email)))); //parse unnecessary characters to prevent exploits
    if ($Email == '') { $email_error = true; }
    elseif (!eregi('^([a-zA-Z0-9._-])+@([a-zA-Z0-9._-])+\.([a-zA-Z0-9._-])([a-zA-Z0-9._-])+', $Email)) { $email_error = true; }
    else {
        list($Email, $domain) = split('@', $Email, 2);
        if (! checkdnsrr($domain, 'MX')) { $email_error = true; }
        else {
            $array = array($Email, $domain);
            $Email = implode('@', $array);
        }
    }

    if ($email_error) { return false; } else{return true;}
}
function validStringAndNumber($string)
{
    return ctype_alnum ($string);
}
function validStringAndSpace($string)
{
    #letters and space only
    return preg_match('/^[A-Za-z\s ]+$/', $string);
}

function deActiveSqlEnjection($superGlobal){
        return is_array($superGlobal) ? array_map('deActiveSqlEnjection', $superGlobal) : str_replace('\\', '\\\\', htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($superGlobal) : $superGlobal), ENT_QUOTES));
}
function deActiveXss($superGlobal){
        return is_array($superGlobal) ? array_map('deActiveXss', $superGlobal) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($superGlobal) : $superGlobal), ENT_QUOTES))));
}
function validPhoneNumber($phoneNumber){
    return preg_match('/(^(09|9|98)[1][1-9]\d{7}$)|(^(09|9|989)[3][12456]\d{7}$)/',$phoneNumber);
}