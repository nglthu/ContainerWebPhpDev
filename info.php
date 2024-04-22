<html>
    <body>
        <?php
            $username = $_REQUEST["username"];
            $password = $_REQUEST["password"];
            if(isset($username) && isset($password)) {
                echo "Kết quả đăng nhập<br>";
                echo'<span style="color:red;font-weight:bold">' ."Tên đăng nhập là : ". $username ."<br>".'</span>';
                echo'<span style="color:red;font-weight:bold">' ."Mật khẩu là : ". $password . "<br>".'</span>';
			}
            ?>
        
    </body>
</html>