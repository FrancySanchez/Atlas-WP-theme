<?php
	// questions stored in variables
		// questions
		// 1- 10
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		$q6 = $_POST['q6'];
		$q7 = $_POST['q7'];
		$q8 = $_POST['q8'];
		$q9 = $_POST['q9'];
		$q10 = $_POST['q10'];
		// 11 - 20
		$q11 = $_POST['q11'];
		$q12 = $_POST['q12'];
		$q13 = $_POST['q13'];
		$q14 = $_POST['q14'];
		$q15 = $_POST['q15'];
		$q16 = $_POST['q16'];
		$q17 = $_POST['q17'];
		$q18 = $_POST['q18'];
		$q19 = $_POST['q19'];
		$q20 = $_POST['q20'];
		// 21 - 30
		$q21 = $_POST['q21'];
		$q22 = $_POST['q22'];
		$q23 = $_POST['q23'];
		$q24 = $_POST['q24'];
		$q25 = $_POST['q25'];
		$q26 = $_POST['q26'];
		$q27 = $_POST['q27'];
		$q28 = $_POST['q28'];
		$q29 = $_POST['q29'];
		$q30 = $_POST['q30'];
		// 31 - 40
		$q31 = $_POST['q31'];
		$q32 = $_POST['q32'];
		$q33 = $_POST['q33'];
		$q34 = $_POST['q34'];
		$q35 = $_POST['q35'];
		$q36 = $_POST['q36'];
		$q37 = $_POST['q37'];
		$q38 = $_POST['q38'];
		$q39 = $_POST['q39'];
		$q40 = $_POST['q40'];
		// 41 - 50
		$q41 = $_POST['q41'];
		$q42 = $_POST['q42'];
		$q43 = $_POST['q43'];
		$q44 = $_POST['q44'];
		$q45 = $_POST['q45'];
		$q46 = $_POST['q46'];
		$q47 = $_POST['q47'];
		$q48 = $_POST['q48'];
		$q49 = $_POST['q49'];
		$q50 = $_POST['q50'];
	// score set to 0 everytime	quiz is submitted
	$score = 0;
	$score2 = 0;
	
	// Calulate the answers
	// ----------------------------------------------------------------
	
// The text box questions

							//------------part one------------------
							
	//question 1	
	if ( $q1 == "what" )
		$score = $score + 1;
	else if ( $q1 == "What" )
		$score = $score + 1;
	else if ( $q1 == "WHAT" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 2		
	if ( $q2 == "where" )
		$score = $score + 1;
	else if ( $q2 == "WHERE" )
		$score = $score + 1;
	else if ( $q2 == "Where" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 3
	if ( $q3 == "how" )
		$score = $score + 1;
	else if ( $q3 == "HOW" )
		$score = $score + 1;
	else if ( $q3 == "How" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 4
	if ( $q4 == "how many" )
		$score = $score + 1;
	else if ( $q4 == "How Many" )
		$score = $score + 1;
	else if ( $q4 == "How many" )
		$score = $score + 1;
	else if ( $q4 == "HOW MANY" )
		$score = $score + 1;
	else if ( $q4 == "how Many" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 5
	if ( $q5 == "your" )
		$score = $score + 1;
	else if ( $q5 == "Your" )
		$score = $score + 1;
	else if ( $q5 == "YOUR" )
		$score = $score + 1;
	else
		$score = $score + 0;
		
// The radio button questions
	
	//question 6
	if ( $q6 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 7
	if ( $q7 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 8
	if ( $q8 == "1" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 9
	if ( $q9 == "3" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 10
	if ( $q10 == "1" )
		$score = $score + 1;
	else
		$score = $score + 0;
	
	//question 11
	if ( $q11 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 12
	if ( $q12 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 13
	if ( $q13 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 14
	if ( $q14 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 15
	if ( $q15 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 16
	if ( $q16 == "3" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 17
	if ( $q17 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 18
	if ( $q18 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 19
	if ( $q19 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 20
	if ( $q20 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
		
	//question 21
	if ( $q21 == "3" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 22
	if ( $q22 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 23
	if ( $q23 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 24
	if ( $q24 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 25
	if ( $q25 == "3" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 26
	if ( $q26 == "1" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 27
	if ( $q27 == "1" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 28
	if ( $q28 == "4" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 29
	if ( $q29 == "2" )
		$score = $score + 1;
	else
		$score = $score + 0;
	//question 30
	if ( $q30 == "1" )
		$score = $score + 1;
	else
		$score = $score + 0;

							//------------part two------------------
	
	//question 31
	if ( $q31 == "1" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 32
	if ( $q32 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 33
	if ( $q33 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 34
	if ( $q34 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 35
	if ( $q35 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 36
	if ( $q36 == "2" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 37
	if ( $q37 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 38
	if ( $q38 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 39
	if ( $q39 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 40
	if ( $q40 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
		
	//question 41
	if ( $q41 == "2" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 42
	if ( $q42 == "2" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 43
	if ( $q43 == "1" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 44
	if ( $q44 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 45
	if ( $q45 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 46
	if ( $q46 == "2" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 47
	if ( $q47 == "4" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 48
	if ( $q48 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 49
	if ( $q49 == "3" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//question 50
	if ( $q50 == "1" )
		$score2 = $score2 + 1;
	else
		$score2 = $score2 + 0;
	//-----------------------------------------------------------------------
			
	//calculate the final score
	$scorefinal = ($score + $score2);
	$result = '';
	$level = '';
	
	//calculate the skill level of the user
	if($scorefinal <= 19)
	{
		$result = 'Elementary';
		$level = 'Level 1';
	}
	else if($scorefinal <= 25)
	{
		$result = 'Pre-Intermediate';
		$level = 'Level 2';
	}
	else if($scorefinal <= 33)
	{
		$result = 'Intermediate';
		$level = 'Level 3';
	}
	else if($scorefinal <= 41)
	{
		$result = 'Upper-Intermediate';
		$level = 'Level 4';
	}
	else if($scorefinal <= 50)
	{
		$result = 'Advanced';
		$level = 'Level 5';
	}
	// administrators email set
	//$admin_email = 'info@atlaslanguageschool.com';

	include_once("./phpmailer/class.phpmailer.php");
	
	// email functions called
	admin_result_email($score, $score2, $scorefinal, $result, $level);
	user_result_email($score, $score2, $scorefinal, $result, $level);
	
	// email the quiz's administrator
	function admin_result_email($score, $score2, $scorefinal, $result, $level)
	{
		// quiz user name and email address
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$date = date("Y-m-d H:i:s");
		$email = $_POST['user_email'];
		$admin_email = 'info@atlaslanguageschool.com';
        $to_email = 'englishtest@cookiewebconsulting.com';
		$subject = "Assessment Result: ".$user_name;

		/*
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "From: ".$admin_email."\r\n";
		*/

		$message = '<html>
				<body>
					<h3>The Online Placement Test has been taken by '.$user_name.'</h3><br />
					Date: '.$date.'<br /><br />
					<b>Score:</b><br />
					Section 1 - '.$score.'/30 <br />
					Section 2 - '.$score2.'/20 <br />
					Full score - '.$scorefinal.'/50 <br /><br />
					<b>Result:</b><br />
					'.$level.' - '.$result.'.<br /><br />
					<b>User Details:</b><br />
					Name: '.$user_name.'<br />
					Email: '.$user_email.'<br />
				</body>
			</html>';

		$mail             = new PHPMailer();
		$mail->IsHTML(TRUE);
		$mail->From       = $admin_email;
		$mail->FromName   = $admin_email;
		$mail->Subject    = $subject;
		$mail->Body       = $message;
		$mail->AddAddress($to_email);
		$mail->AddAddress('enda@bamboodigital.co');
		$mail->Send();

		//mail($admin_email, $subject, $message, $headers);
	}
	
	// email the user their result
	 function user_result_email($score, $score2, $scorefinal, $result, $level)
	{
		// quiz user name and email address
		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$admin_email = 'info@atlaslanguageschool.com';
		$date = date("Y-m-d H:i");
		$subject = "Thank you for taking our test ".$name;

		/*
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "From: ".$admin_email."\r\n";
		*/

		$message = '<html>
				<body>
					<h3>Hello '.$name.',</h3><br />
					
					Thank you for completing our on-line test. You scored '.$scorefinal.'/50. From this score we estimate you to have a '.$result.' level of English.<br />
					
					If you haven&rsquo;t already registered for a course and would like to do so you can complete our on-line application form by clicking the link below:<br />
					<a href="http://www.atlaslanguageschool.com/booking-enquiry/">On-line Booking Enquiry</a><br /><br />
					
					If you need any more info please do not hesitate to contact us
					(you can email, skype, or telephone the school using the details below).<br /><br />
					
					Hope to see you soon!<br /><br />
					Kind regards,<br />
					Atlas Language School<br />
					Portobello House,<br />
					Portobello,<br />
					Dublin 2<br /><br />
					
					Tel: +(353) 1 4782845<br />
					Email: <a href="mailto:info@atlaslanguageschool.com">info@atlaslanguageschool.com</a><br />
					Web: <a href="http://www.atlaslanguageschool.com">http://www.atlaslanguageschool.com</a><br />
					Skype: atlas.reception<br />
				
				</body>
			</html>';

		$mail             = new PHPMailer();
		$mail->IsHTML(TRUE);
		$mail->From       = $admin_email;
		$mail->FromName   = $admin_email;
		$mail->Subject    = $subject;
		$mail->Body       = $message;
		$mail->AddAddress($email);
		$mail->Send();

		//mail($email, $subject, $message, $headers);
	}
	//echo $scorefinal;
	header('Location: http://atlaslanguageschool.com/results');
?>