<?php

	function init() {
		$body = file_get_contents("php://input");
		sendEmail($body);
		reply();
	}

	function sendEmail($body) {
		$bodyArray = json_decode($body, true);
		$name = $bodyArray['name'];
		$email = $bodyArray['email'];
		$message = $bodyArray['message'];

		$header = "From: noreply@example.com" . "\r\n";
		$header .= "Reply-To: noreply@example.com" . "\r\n";
		$header .= "X.Mailer: PHP/" . phpversion();
		$mail = mail($email, $name, $message, $header);
	}

	function reply() {
		$response = [
            'status' => "ok",
            "result" => array("message" => "Enviado existosamente!");
        ];

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($response);
	}

	init();
?>