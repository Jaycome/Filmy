<?php
include 'db_connection.php';
if(isset($_POST["log"])){
     $mail=$_POST["email"];
     $password=$_POST["password"];
    if($mail&&$password){
        $conn=OpenCon("MIS");
        $sql="SELECT * FROM Supervisor where Account='$mail'and Password='$password'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($result);
        if($rows){
            //$user = mysqli_fetch_assoc($result);
            session_start();
            $row=mysqli_fetch_array($result);
            $S_Name=$row["Name"];
            $_SESSION['is_login'] = TRUE;
            $_SESSION['login_user_id'] = $row['Account'];
            setrawcookie("Account",$mail,time()+60*60*24);
            echo "<script>alert('妳好，$S_Name');</script>";
            echo "<script> window.location.href='../filmy/admin/會員管理new.php';</script>";
        }
        else{
        $sql="SELECT * FROM Member where email='$mail'and Password='$password'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($result);
        if($rows){
            #儲存使用者email
            setrawcookie("email",$mail,time()+60*60*24);
            echo "<script>
            alert('登入成功');</script>";
            echo "<script> window.location.href='filmy_no_like.php';</script>";
        }
            else{
                echo"<script>alert('帳號或密碼輸入錯誤');</script>";
            }
        }
    }
    else{
        echo "alert('fail')";
            echo    "<script>
                    $('div input').val('');
                    var k=document.getElementById('q');
                    k.style.display='block';
                    </script>";
            
        }
        mysqli_close($conn);
    }

?>