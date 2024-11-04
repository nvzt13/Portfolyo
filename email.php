
   <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['name'];
    $lastName = $_POST['lastName'];
    $message = $_POST['message'];
    
    $to = "nevzatatalay79@gmail.com";
    $subject = "Yeni Form Mesajı";
    $body = "İsim: $firstName\nSoyisim: $lastName\nMesaj: $message";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesaj başarıyla gönderildi!";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
    echo $firstName.$lastName.$message;
}


?>