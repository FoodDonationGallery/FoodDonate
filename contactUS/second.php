<?php 
      $errors = [];
      $errorMessage= '';
      if (!empty ($_POST)){
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $country =$_POST['country'];
        $subject =$_POST['subject'];

        if(empty($first_name)){
            $errors[] ='First name empty';
        }
        if(empty($last_name)){
            $errors[] ='Last name empty';
        }
        if(empty($email)){
            $errors[] = 'Empty email address';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] ='Email not valid';
        }
        if(empty($phone)){
            $errors[]="Phone number empty";
        }
        if (empty($country)){
            $errors[]='Country empty';
        }
        if(empty($subject)){
            $errors[]=" subject are empty";
        }
        if(empty($errors)){
            $toEmail = 'lthanushadimantha2000@gmail.com';
            $emailSubject ="New mail from contact form from FDG";
            $headers =['from'=> $email, 'Reply-To'=>$email, 'content-type'=> 'text/html; charset=utf-8'  ];
            $bodyParagraphs = [" First_Name: {$first_name}","Last_name:{$last_name}", "Email: {$email}", "Phone number:{$phone}","Country:{$country}","Message:", $subject];
            $body = join(PHP_EOL, $bodyParagraphs);

            if (mail($toEmail, $emailSubject, $body, $headers)) {
                header('Location: thankyou.html');
            }else{
                $errorMessage ="oops, something wen to wrong please try again........";
            }
        }else{
            $allErrors =join('<br/>', $errors);
            $errorMessage= "<p style='color:red;'>{$allErrors}<p/>";
        }
       
    }
    
      
    ?> 