<?php

// $ch = curl_init('https://covid.egisz.rosminzdrav.ru/dataset/nr/reg_list/dsReg');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

// $res = curl_exec($ch);
// var_dump($res);

// curl_close($ch);


// $array = array(
//     'content-type'    => 'application/json',
//     'cookie' => 's%3A5qWnGZgpzfO1_vkBHf7XYBTp6WsMysOq.2yFIRnts3%2BL52glVFgeHefZjlCfALxs3x5fKb7v4KHA',
//     'mode' => 'cors'
// );      
 
// $ch = curl_init('https://covid.egisz.rosminzdrav.ru/dataset/nr/reg_list/dsReg');
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $array); 
 
// // Или предать массив строкой: 
// // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
 
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_HEADER, true);
// $html = curl_exec($ch);
// curl_close($ch);    
 
// print_r($html);
// $mysql = new 
// mysqli('localhost','root','','php_base');
// $mysql->query("UPDATE `users` SET `name1` = 'Max' WHERE `id` = 2 ");
// $mysql -> query("ALTER TABLE `users` CHANGE `name1` `name` VARCHAR(50)");
// $arr = array('Bebs','Babs','Bobs');
// foreach ($arr as $val) {
//     echo $val;
//     $mysql -> query("INSERT INTO `users`(`name`) VALUES('$val')");
// }
// // $mysql -> query("TRUNCATE `users`");
// //$mysql -> query("DROP TABLE `users`")
//$res = $mysql->query("SELECT `name` AS 'Name',`id` AS 'ID' FROM `users`");
// $res = $mysql->query("SELECT CONCAT('Имя',`name`,'ИД',`id`) AS 'Инфо' FROM `users`");
//$res = $mysql->query("SELECT COUNT(`id`) FROM `users`");
// $mysql->query("INSERT INTO `users`(`name`) VALUES('Babs')");
// $res = $mysql->query("SELECT `name`, COUNT(`name`) AS 'Количество' FROM `users` GROUP BY `name` HAVING COUNT(`name`) >1");
// print_R($res->fetch_all());
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="auth">
        <form action="reqAuth.php" method="POST">
            <input type="email" name="email" class="form-control auth_email" placeholder="email">
            <input type="password" name="pass" class="form-control auth_password" placeholder="password">
            <input type="submit" class="btn btn-success auth_login" value="Log in">
        </form>    
         <form action="regReq.php" method="GET">
                <input type="submit" class="btn btn-secondary auth_register" value="Register">
        </form>
    </div>
</body>
</html>