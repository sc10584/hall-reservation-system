<?php 
    require ('connection.php');
    mysqli_select_db($sql,"project");
    if (isset($_GET['email']) && isset($_GET['v_cod'])) {
        
        $email = $_GET['email'];    
        $v_cod = $_GET['v_cod'];

        $sql4="SELECT * FROM user WHERE email = '$email' AND verification_id = '$v_cod'";
        $result = $sql->query($sql4);

        if ($result) {
            
            if ($result->num_rows == 1) {
                
                $row = $result->fetch_assoc();
                $fetch_Email = $row['email'];
                    
                if ($row['verification_status'] == 0) {
                    $update = "UPDATE user SET verification_status='1' WHERE email = '$fetch_Email'";
                    
                    if ($sql->query($update)===TRUE) {
                    echo "
                        <script>
                            alert('verification successful');
                            window.location.href='index.php'
                        </script>"; 
                    }else{
                    echo "
                        <script>
                            alert('query can not run');
                            window.location.href='index.php' 
                        </script>";
                    }
                }else{
                    echo "
                        <script>
                            alert('email alredy register');
                            window.location.href='index.php'
                        </script>";
                }
            }
        }   
    }else{
        echo "
            <script>
                alert('server down!!');
                window.location.href='index.php'
            </script>";
    }
 ?>