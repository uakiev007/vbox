
<a href="index.php">назад</a><br>
    <?php
         $count_ch = 9; // количество сиволов в пароле
	 $count_ch1 = $count_ch -1;
         $pass = '';
	 // доступный набор символов в пароле
         $accepted = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP+-()*!.,';
        // srand(((int)((double)microtime()*10000000))); // меняем начальное число генератора случайных чисел
	for($z=0; $z<10; $z++) {
	    for ($i=0; $i<=$count_ch1; $i++) { //формируем случайный символ для каждой составляющей пароля
	    $random = rand(0, (strlen($accepted) -1)); // берем случайный индекс из строки $accepted
	    $pass .= $accepted[$random]; // дописываем в конец генерируемого пароля полученный символ
	        }
	echo " <font face=verdana color=red size=4><b>".$pass."</b></font>"; // выводим на экран
	echo "<br />";
	$pass = '';
         }
    ?>
<br>
<a href=&#63;><b>Создать новый пароль.</b></a>
<hr>
    <?php
         $count_ch = 9; // количество сиволов в пароле
	 $count_ch1 = $count_ch -1;
         $pass = '';
	 // upset($masivPass);
	 // доступный набор символов в пароле
         $accepted = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP+-()*!.,';
        // srand(((int)((double)microtime()*10000000))); // меняем начальное число генератора случайных чисел
	for($z=0; $z<10; $z++) {
	    for ($i=0; $i<=$count_ch1; $i++) { //формируем случайный символ для каждой составляющей пароля
	    $random = rand(0, (strlen($accepted) -1)); // берем случайный индекс из строки $accepted
	    $pass .= $accepted[$random]; // дописываем в конец генерируемого пароля полученный символ
	        }
	echo " <font face=verdana color=red size=4><b>".$pass."</b></font>"; // выводим на экран
	echo "<br />";
	$masivPass [] = $pass;//добавляем пароль в масив
	$pass = '';
         }
	print_r($masivPass[1]);
	echo "<br />";
	print_r($masivPass);
	echo "<br />";
	//echo $masivPass ' - ';
	echo "<br />";
	echo "<hr>";
	echo "END";
?>

<table cellpadding="5" cellspacing="0" border="1">
    <?php foreach ($masivPass as $value) { ?>
<tr>
    <?php
	        foreach ($value as $data){ ?>
<td>".$data."</td>
		 <?php    } ?>
</tr>
		<?php } ?>
</table>
    <?php
	upset($masivPass); //clear masiv
    ?>
