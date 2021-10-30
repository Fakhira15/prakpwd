<html>
<head>
	<title>Data Mahasiswa</title>
<style type="text/css">
	body{
		background:#FE8103 ;
	}

</style>
</head>
<body>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>

	<body>
	
	<?php
// define variables and set to empty values
	$namaErr = $emailErr = $genderErr = $NIMErr = $ProdiErr = $FakultasErr = "";
	$nama = $email = $gender = $Alamat = $NIM = $Prodi = $Fakultas = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nama"])) {
	$namaErr = "Nama harus diisi";
	}else {
		$nama = test_input($_POST["nama"]);
	}
	if (empty($_POST["email"])) {
		$emailErr = "Email harus diisi";
	}else {
		$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Email tidak sesuai format";
	}
	}
	if (empty($_POST["NIM"])) {
		$NIM = "";
	}else {
		$NIM = test_input($_POST["NIM"]);
	}
	
	if (empty($_POST["Prodi"])) {
		$Prodi = "";
	}else {
		$Prodi = test_input($_POST["Prodi"]);
	}
	if (empty($_POST["Fakultas"])) {
		$Fakultas = "";
	}else {
		$Fakultas = test_input($_POST["Fakultas"]);
	}
	if (empty($_POST["Alamat"])) {
		$Alamat = "";
	}else {
		$Alamat = test_input($_POST["Alamat"]);
	}
	if (empty($_POST["gender"])) {
		$genderErr = "Gender harus dipilih";
	}else {
		$gender = test_input($_POST["gender"]);
	}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
	<h2>Data Mahasiswa </h2>

	<p><span class = "error">* Harus Diisi.</span></p>
		<form method = "post" action = "<?php
		echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
	<tr>
	<td>Nama:</td>
		<td><input type = "text" name = "nama">
			<span class = "error">* <?php echo $namaErr;?></span>
		</td>
	</tr>
	<tr>
		<td>E-mail: </td>
			<td><input type = "text" name = "email">
			<span class = "error">* <?php echo $emailErr;?></span>
		</td>
	</tr>
	<tr>
		<td>NIM:</td>
		<td> <input type = "text" name = "NIM">
			<span class = "error"><?php echo $NIMErr;?></span>
		</td>
	</tr>
	<tr>
		<td>Prodi:</td>
		<td> <input type = "text" name = "Prodi">
			<span class = "error"><?php echo $ProdiErr;?></span>
		</td>
	</tr>
	<tr>
		<td>Fakultas:</td>
		<td> <input type = "text" name = "Fakultas">
			<span class = "error"><?php echo $FakultasErr;?></span>
		</td>
	</tr>
	<tr>
		<td>Alamat:</td>
		<td> <textarea name = "Alamat" rows = "5" cols = "40"></textarea></td>
	</tr>

<tr>
<td>Gender:</td>
<td>
<input type = "radio" name = "gender" value = "L">Laki-Laki
<input type = "radio" name = "gender" value = "P">Perempuan
<span class = "error">* <?php echo $genderErr;?></span>
</td>
</tr>
<td>
<input type = "submit" name = "submit" value = "Submit" href>
</td>
</table>
</form>
<h2> Data yang sudah anda isi : </h2>
	<table width='80%' border= 1>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>NIM</th>
			<th>Prodi</th>
			<th>Fakultas</th>
			<th>Alamat</th>
			<th>Gender</th>
		</tr>

<?php
echo "<tr>";
echo "<td>".$nama."</td>";
echo "<td>".$email."</td>";
echo "<td>".$NIM."</td>";
echo "<td>".$Prodi."</td>";
echo "<td>".$Fakultas."</td>";
echo "<td>".$Alamat."</td>";
echo "<td>".$gender."</td>";
?>
</table>
</body>
</html>
