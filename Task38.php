<?php
function getFreeDomainsCount($emails)
{
        define('FREE_EMAIL_DOMAINS', [
        'mail.ru',
        'mail.com',
        'email.com',
        'e-mail.ru',
        'pochta.ru',
        'yandex.ru',
        'rambler.ru',
        'gmail.com',
        'hotmail.com',
        'hotmail.ru',
        'yahoo.com',
        'gawab.com',
        'pookmail.com',
        'spam.lv',
        'BigMailBox.com',
        'e-mail.am',
        'Gala.NET',
        'AOL.com',
        'Box.az',
        'EveryoneMail.net',
        'mymail-in.net',
        'E1.ru',
        'gmail.ru',
        'inet.ua',
        'itua.info',
        'bigmir.net',
        'meta.ua',
        '1Ru.net',
        'HotPOP.com'
    ]);
    foreach ($emails as $key => $email) {
        $emails[$key] = ltrim(substr($emails[$key], strpos($emails[$key], '@')), '@');
        if (in_array($emails[$key], FREE_EMAIL_DOMAINS) === false) {
            unset($emails[$key]);
        }
    }
    $res_arr = array_count_values($emails);
    return $res_arr;
}

