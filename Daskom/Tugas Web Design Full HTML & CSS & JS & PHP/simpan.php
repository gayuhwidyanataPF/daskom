<?php
// if (isset($_POST['fsubmit'])) {
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $alamat = $_POST['address'];
//     $komen = $_POST['subject'];
// }

if(isset($_POST['fsubmit'])){
    $jeneng = $_POST['fnama'];
    $mail = $_POST['femail'];
    $adres = $_POST['faddress'];
    $psan = $_POST['fpesan'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hasil</title>
    <style type="text/css">
       body{
          background-color: #2A3A45;
          font-family: verdana;
          color: #EFF6F8;
      }
      #daftarTamu {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      #daftarTamu td, #daftarTamu th {
          border: 2px solid #A2BCBF;
          padding: 8px;
      }

      #daftarTamu th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #347991;
          color: whitesmoke;
      }
  </style>
</head>
<body>
    <h1 align="center">Buku Contact</h1>

    <table id="daftarTamu">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Address</th>
        <th>Pesan</th>
    </tr>
    <tr>
        <td><?php echo "$jeneng";?></td>
        <td><?php echo "$mail";?></td>
        <td><?php echo "$adres";?></td>
        <td><?php echo "$psan";?></td>
    </tr>
</table>

<button style="float: right; margin: 20px; padding: 5px 10px; background-color: transparent; border-radius: 5px; border-color: #1e7685;">
    <a href="index.html" style="text-decoration: none; color: white;">Kembali</a>
</button>

</body>
</html>