<?php

$pass="nitin"; /*------ user assing the password ---------- */

$str_pass=password_hash($pass,PASSWORD_BCRYPT);  /*-----password_hash(password by registration field($_POST['pass']), BLOWFISH Hashing Algoritham)--------*/

echo $str_pass;
$pass_check = password_verify($pass,$str_pass);/*---value assing for checking login and db hashing password ---*/
if($pass_check)
{
	echo "<br> login successful";

}
else
{
	echo"Erro: Password Does not Match";
}




?>