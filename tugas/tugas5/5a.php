<?php  

$mahasiswa = [
[
    'gambar' => 'maguire.jpg',
    'nrp' => '233040191',
    'nama' => 'Harry Mguire',
    'email' => 'maguire5@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'ronaldo.jpg',
    'nrp' => '233040192',
    'nama' => 'Cristiano Ronaldo',
    'email' => 'cristiano7@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'Messi.jpg',
    'nrp' => '233040193',
    'nama' => 'Lionel Messi',
    'email' => 'messi10@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'neymar.jpg',
    'nrp' => '233040194',
    'nama' => 'Neymar Jr',
    'email' => 'neymarjr@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'mbappe.jpg',
    'nrp' => '233040195',
    'nama' => 'Kylian Mbappe',
    'email' => 'mbappe@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'haaland.jpg',
    'nrp' => '233040196',
    'nama' => 'Erling Haaland',
    'email' => 'haaland@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'hazard.jpg',
    'nrp' => '233040197',
    'nama' => 'Eden Hazard',
    'email' => 'hazard@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'ibra.jpg',
    'nrp' => '233040198',
    'nama' => 'Zlatan Ibrahimovic',
    'email' => 'ibra@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'bale.jpg',
    'nrp' => '233040199',
    'nama' => 'Gareth Bale',
    'email' => 'bale11@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'bellingham.jpg',
    'nrp' => '233040200',
    'nama' => 'Jude Bellingham',
    'email' => 'bellingham@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>