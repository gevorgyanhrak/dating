<?php


function sessionIdentification($last_id = false)
{
    $secret_key = '^8IhW?@jr.NF%Ca@Qh)pNcx`G8}0^h)gC[#NA5Wp';
    $secret_iv = '%CaO9CuG@3S@L69Qec"47@Qh)pNcx`G8}0^h)g';

    if (is_array($last_id))
        $last_id = json_encode($last_id);

    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $sessionIdentification = openssl_encrypt($last_id, 'AES-256-CBC', $key, 0, $iv);
    $sessionIdentification = urlencode(base64_encode($sessionIdentification));

    return $sessionIdentification;
}

function getSessionLastId($session = false)
{
    $secret_key = '^8IhW?@jr.NF%Ca@Qh)pNcx`G8}0^h)gC[#NA5Wp';
    $secret_iv = '%CaO9CuG@3S@L69Qec"47@Qh)pNcx`G8}0^h)g';

    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $sessionIdent = base64_decode(urldecode($session));
    $stat_id = openssl_decrypt($sessionIdent, 'AES-256-CBC', $key, 0, $iv);

    return json_decode($stat_id);
}
