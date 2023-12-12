
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "form";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

if(isset($_POST['submit']))
{    
     $name = $_POST['imie'];
     $surname = $_POST['nazwisko'];
     $date = $_POST['data'];
     $email = $_POST['email'];
     $phone = $_POST['telefon'];
     $area = $_POST['wojewodztwo'];
     $sex = $_POST['plec'];
     $agr = isset($_POST['zgoda']) ? 1 : 0;
     $sql = "INSERT INTO formularz (Imię, Nazwisko, Data, Email, Telefon, Województwo, Płeć, Zgoda)
     VALUES ('$name','$surname','$date','$email','$phone','$area','$sex','$agr')";
     if (mysqli_query($conn, $sql)) {
        echo "Dodano dane";
     } else {
        echo "Błąd: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>