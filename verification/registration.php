<?php 

    require ('connection.php');
    mysqli_select_db($sql,"project");
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
        
        require('PHPmailer/Exception.php');
        require('PHPmailer/SMTP.php');
        require('PHPmailer/PHPMailer.php');

        function sendmail($email,$v_cod){
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;            
            $mail->Username   = 'thilinipremathilaka97@gmail.com';
            $mail->Password   = 'vzcendzzlmaqzdfe';                    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
            $mail->Port       = 465;                           

            $mail->setFrom('thilinipremathilaka97@gmail.com', 'Test');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'email verification from aatmaninfo';
            $mail->Body    = "Thanks for registration.<br>click the link bellow to verify the email address
            <a href='http://localhost/hall-reservation-system/verification/verify.php?email=$email&v_cod=$v_cod'>verify</a>";

            $mail->send();
                return true;
        } catch (Exception $e) {
                return false;
        }
    }





    if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $email =$_POST['email'];
        $password =$_POST['password'];
       


        

        $sql3="SELECT * FROM user WHERE username = '$username' AND password = '$password' AND verification_status = '1'";
        $result = $sql->query($sql3);
        
        if ($row = $result->fetch_assoc()) {
            $_SESSION['logged_in']=TRUE;
            $_SESSION['email']=$row['email'];
            $_SESSION['username']= $row['username'];
            $userid = $row['user_id'];
            $_SESSION['role_id'] = $row['role_id'];
            header('location:booking.php');


        }else{
            echo "
                <script>
                    alert('user name or password does not match!!');
                    window.location.href='index.php'
                </script>";
        } 

        if($_SESSION['role_id']==0)
        {
            $sqltocustomertbl = "SELECT * FROM customer WHERE user_id = '$userid'";
            $querytocustbl = $sql->query($sqltocustomertbl);

        }
        else
        {
            //null
        }

        if($row = $querytocustbl->fetch_assoc())
        {
            $_SESSION['customer_id'] = $row['customer_id'];
        }
        else
        {
            //null
        }


    }

    if (isset($_POST['registration'])) {

        $f_name = mysqli_real_escape_string($sql,$_POST['first_name']);
        $l_name = mysqli_real_escape_string($sql,$_POST['last_name']);
        $tel_num = mysqli_real_escape_string($sql,$_POST['telnum']);
        $username =mysqli_real_escape_string($sql,$_POST['username']);
        $email =$_POST['email'];

        echo ($f_name);


        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         die("Your email is in invalid format");
 
 }

        $password =mysqli_real_escape_string($sql,$_POST['password']);
        $confirm_password=mysqli_real_escape_string($sql,$_POST['confirmpassword']);
        $user_exist_query="SELECT * FROM user WHERE username= '$username' AND email = '$email' ";
        $result1 = $sql->query($user_exist_query);
        
        if($password===$confirm_password){
        if ($result1) {
            
            if ($result1->num_rows > 0) {
                $row = $result1->fetch_assoc();
                
                if ($row['username'] === $username && $row['email'] === $email) {
                    echo "
                        <script>
                            alert('username alredy taken!');
                            window.location.href='index.php'
                        </script>";
                }else{
                    echo "
                        <script>
                            alert('email alredy register');
                            window.location.href='index.php'
                        </script>";
                }
            
            }else{
                
                $v_cod=bin2hex(random_bytes(16));
                
                $query ="INSERT INTO user(username, email, password,verification_id, verification_status) VALUES('$username','$email','$password','$v_cod','0')";


                if (($sql->query($query)===TRUE) && sendmail($email,$v_cod )===TRUE) {

                    $user_id = mysqli_insert_id($sql);
                    echo "user id=".$user_id;

                    $insertcustomer = "INSERT INTO customer(first_name, last_name, telephone_num, user_id) VALUES('$f_name','$l_name',$tel_num,$user_id)";
                    $insertcustomerquery = mysqli_query($sql,$insertcustomer);

                    echo "
                        <script>
                            alert('register successful.chack your mailbox in inbox or spam and verify your account.');
                            window.location.href='index.php'
                        </script>"; 
                }else{
                    echo "
                        <script>
                            alert('query can not run');
                            window.location.href='index.php'
                        </script>";
                }
            }
        }else{
            echo "
            <script>
                alert('cant run query exist user');
                window.location.href='index.php'
            </script>";
        }
    }}
    else{
       echo " <script>
        alert('password and confirmed password are mismatch');
        window.location.href='index.php'
    </script>";
    }
 ?>