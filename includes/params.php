<?php 
$header_title = 'ON HAND Tech Solutions | Expertos en SAP Business One en México';
$header_description = 'En ON HAND Tech Solutions somos especialistas en SAP Business One en México. Ofrecemos soluciones personalizadas para optimizar la gestión empresarial de PYMEs con tecnología de clase mundial.';

$dev = true;
/*
    Función para identificar la URL / Dominio y definir la ruta <base>
*/
function url_origin($server, $use_forwarded_host=false) {
    $ssl = (!empty($server['HTTPS']) && $server['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($server['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');

    $port = $server['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    
    $host = ($use_forwarded_host && isset($server['HTTP_X_FORWARDED_HOST'])) ? $server['HTTP_X_FORWARDED_HOST'] : (isset($server['HTTP_HOST']) ? $server['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $server['SERVER_NAME'] . $port;

    return $protocol . '://' . $host;
}

function full_url($server, $use_forwarded_host=false) {
    return url_origin($server, $use_forwarded_host) . $server['REQUEST_URI'];
}

$base_url = full_url($_SERVER);
?>