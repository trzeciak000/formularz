<?php
	//$connect = mysqli_connect("host","user","pass", "db_name");
	//$connect->query("SET CHARSET utf8");
	
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$voivodeship = $_POST['voivodeship'];
		if ($phone != "" || $email != ""){
			$sql = "INSERT INTO kontakty (Imie, Nazwisko, Telefon, Email, Wojewodztwo) VALUES ('" . $name . "', '" . $surname . "', '" . $phone . "', '" . $email . "', '" . $voivodeship . "');";
			//mysqli_query($connect, $sql);
			echo "Dane wysłane poprawnie";
		} else {
			echo "Podaj telefon lub adres e-mail";
		}
	}
?>
<html>
<head>
</head>
<body>
	<div>
            <div>
                <div>
                    <form class="" method="post" action="index.php">
                        <div>
			    Imię<br/>
                            <input name="name" type="text" placeholder="imię">
                        </div>
                        <div>
			    Naziwsko<br/>
                            <input name="surname" type="text" placeholder="nazwisko">
                        </div>
                        <div>
			    Numer telefonu<br/>
                            <input name="phone" type="text" placeholder="">
			</div>
			<div>
			    Adres e-mail<br/>
			    <input name="email" type="text" placehorder="">
			</div>
			<div>
			    Województwo<br/>
			    <select name="voivodeship" type="text">
				<option>dolnośląskie</option>
				<option>kujawsko-pomorskie</option>
				<option>lubelskie</option>
				<option>lubuskie</option>
				<option>łódzkie</option>
				<option>małopolskie</option>
				<option>mazowieckie</option>
				<option>opolskie</option>
				<option>podkarpackie</option>
				<option>podlaskie</option>
				<option>pomorskie</option>
				<option>śląskie</option>
				<option>świętokrzyskie</option>
				<option>warmińsko-mazurskie</option>
				<option>wielkopolskie</option>
				<option>zachodniopomorskie</option>
			    </select>
			</div>
 			<div>
			    <input type="checkbox" id="accept" name="accept" value="accept">
			    <label for="accept">Akceptuję regulamin: <a href="">Link do regulaminu</a></label>
			</div>
                        <button name="submit" type="submit">Wyślij</button>
                    </form>
                </div>
            </div>
	 </div>
</body>
</html>
