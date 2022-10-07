<?php	
	function sendCOTP($C_Email ,$otp) {
            		$to      = $C_Email;
                        $subject = 'Luxurito Event Login OTP';
                        $message = $otp;
                        $headers = 'From: yashchauhhan67@gmail.com'       . "\r\n" .
                                     'Reply-To: yashchauhhan67@gmail.com' . "\r\n" .
                                     'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
	}
?>