
<?php
require("PHPMailer-PHPMailer-cd72ef3/src/PHPMailer.php");
require("PHPMailer-PHPMailer-cd72ef3/src/SMTP.php");
require("PHPMailer-PHPMailer-cd72ef3/src/Exception.php");

  $name = $_POST['name'];
  $class = $_POST['class'];
  $cccd = $_POST['cccd'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];
  $options = isset($_POST['options']) ? $_POST['options'] : [];
  $message = implode(", ", $options);
  $tohop = $_POST['tohop'];
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); // enable SMTP
  
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "tranvuhoaphat1@gmail.com";
  $mail->Password = "atloxwhxrlflcdws"; // mật khẩu được mã hoá rồi đừng cố vào nhé:D
  $mail->SetFrom("tranvuhoaphat1@gmail.com");
  $mail->Subject = "Thong Tin Bieu Mau Dang Ky Thi THPT Quoc Gia";
  $mail->Body = "Họ và tên: $name. \r \n
Lớp: $class.\r \n
Căn Cước Công Dân: $cccd.\r \n
Ngày sinh: $birthday.\r \n
Giới tính: $gender.\r \n
Môn thi: $message \r \n.
Tổ Hợp thi: $tohop";
  $mail->AddAddress("tranvuhoaphat1@gmail.com");

   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      echo "Message has been sent";
   }

?>
</body>
</html>


