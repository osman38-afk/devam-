<?php
try{ /*hataları ayıklamak için*/
$db =new PDO("mysql:host=localhost;dbname=soruceo;charset=utf8","root","");

    

}

catch (PDOException $mesaj ){          /* veri tabanına bağlanamazsa bunlarla yakalıyoruz*/
    echo $mesaj->getmessage();

}

?>