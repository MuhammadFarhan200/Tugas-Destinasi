<?php
$bayar = $_POST['bayar'];
$totalbayar = $_POST['totalbayar'];
$kembalian = $bayar - $totalbayar;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Destinasi Wisata</title>
  </head>
  <body style="margin-top:50px;">
  <?php if($bayar < $totalbayar) : ?>
    
    <center><div class="card" style="width: 50rem; padding: 20px; border-radius: 10px">
            <h4 style="margin-top:40px;" align="center">Uang Tidak Mencukupi! Silahkan Kembali Untuk Menginput Ulang Uang Pembayaran!!</h4>
            <a href="home.php" class="text-end" style="text-decoration: none;"><button style="border: 1px solid black; padding: 5px, 5px, 5px, 5px; border-radius: 3px">Home</button></a>
    </div></center>
            <?php else : ?>
                <center><div class="card" style="width: 50rem; padding: 20px; border-radius: 10px">
                <h3 align="center" style="padding-bottom: 2rem; margin-top:30px">Transaksi Berhasil</h3>
            <table align="center">
                <tr>
                    <td>Total yang harus di bayar</td>
                    <td>&nbsp;: Rp. <?= $totalbayar?></td>
                </tr>
                <tr>
                    <td>Uang Anda</td>
                    <td>&nbsp;: Rp. <?= $bayar?></td>
                </tr>
                <tr>
                    <td>Kembalian</td>
                    <td>&nbsp;: Rp. <?= $kembalian?></td>
                </tr>
            </table>
            <a href="home.php" class="text-end" style="text-decoration: none;"><button style="border: 1px solid black; padding: 5px, 5px, 5px, 5px; border-radius: 3px">Home</button></a>
            </center>
            <?php endif?>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>