<?php 
$header_title = 'ONHAND Tech Solutions | Expertos en SAP Business One en México';
$header_description = 'En ONHAND Tech Solutions somos especialistas en SAP Business One en México. Ofrecemos soluciones personalizadas para optimizar la gestión empresarial de PYMEs con tecnología de clase mundial.';


/*
    Función para identificar la URL / Dominio y definir la ruta <base>
*/
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    return $protocol . $host . $uri . '/';
}


function getCanonicalUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];              // localhost o dominio
    $requestUri = $_SERVER['REQUEST_URI'];      // /ohts/aviso-de-privacidad.php

    return $protocol . $host . $requestUri;
}

$base_url =  getBaseUrl();
$canonical_url = getCanonicalUrl();
?>