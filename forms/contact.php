<?php
date_default_timezone_set("America/Mexico_City");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../');
    exit;
}


if(isset($_POST["g-recaptcha-response_contact"]) && !empty($_POST["g-recaptcha-response_contact"])){
	// clave secreta recaptcha
	#-- Envia datos para validacíón de recaptcha de google
	#-- Devuelve en la posicion $data["success"] = true
	$secret = "6Ld9I5wrAAAAAJoX99IyzDPSwk_BXAWJBvhQbl22";
	$url    = 'https://www.google.com/recaptcha/api/siteverify';
	$ch     = curl_init($url);
	$options = array(
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER => array('application/x-www-form-urlencoded'),
		CURLOPT_HTTPHEADER => array('accept: application/json'),
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => "secret=".$secret."&response=".$_POST["g-recaptcha-response_contact"]."&remoteip=".$_SERVER["REMOTE_ADDR"]
	);
	curl_setopt_array( $ch, $options );
	$response = curl_exec($ch); // Getting jSON result string
	curl_close($ch);
	$data = json_decode($response, true);

	$status_captcha = $data["success"];
	$score_captcha  = $data["score"];

	if($status_captcha == false && $score_captcha <= 0.6 ){
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(['estatus' => false, 'error' => 'Captcha inválido']);
        exit;
	}
}else{
	header('Location: index.php');
	die;
}//end if

// Seguridad: Función para limpiar y escapar entradas
function limpiar($valor) {
    return htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, 'UTF-8');
}

//FUNCION PARA OBTENER IP REAL
function getRealIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	return $_SERVER['REMOTE_ADDR'];
}


// Conexión a la base de datos
$host     = 'localhost';
$dbname   = 'ohts';
$username = 'root';
$password = 'Movdx09hint21h32$.-';

/* $host     = 'sql211.infinityfree.com';
$dbname   = 'if0_39627634_ohts';
$username = 'if0_39627634';
$password = 'Movdx09h';*/

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("DB Error: " . $e->getMessage());
    http_response_code(500);
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(['estatus' => false, 'error' => 'Error en la conexión de base de datos']);
    exit;
}

// Validar y limpiar datos
$campos = [
  'name'       => limpiar($_POST['nombre'] ?? ''),
  'email'      => filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL),
  'subject'    => limpiar($_POST['subject'] ?? ''),
  'comments'   => limpiar($_POST['comentarios'] ?? ''),
  'ip'         => getRealIP(),
  'browser'    => $_SERVER['HTTP_USER_AGENT'] ?? 'N/A',
  'created_at' => date("Y-m-d H:i:s")
];

// Validar email
if (!$campos['email'] || preg_match("/[\r\n]/", $campos['email'])) {
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(['estatus' => false, 'error' => 'Correo inválido']);
    exit;
}

// Guardar en la base de datos
try {
    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, comments, ip, browser, created_at) VALUES (:name, :email, :subject, :comments, :ip, :browser, :created_at)");
    $stmt->execute([
        ':name'       => $campos['name'],
        ':email'      => $campos['email'],
        ':subject'    => $campos['subject'],
        ':comments'   => $campos['comments'],
        ':ip'         => $campos['ip'],
        ':browser'    => $campos['browser'],
        ':created_at' => $campos['created_at']
    ]);
} catch (PDOException $e) {
    error_log("DB Insert Error: " . $e->getMessage());
    header('Content-Type: application/json; charset=UTF-8');
    echo  json_encode(['estatus' => false, 'error' => 'Error al guardar en base de datos']);
    exit;
}


header('Content-Type: application/json; charset: UTF-8');
echo json_encode(["estatus" => true]);
exit;
?>
