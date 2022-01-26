<?php
$pemesan = $_POST['pemesan'];
$destinasi = $_POST['destinasi'];
$hargatiket;

if($destinasi == "Bukit Bintang"){
    $hargatiket = 10000;
}
elseif($destinasi == "Pantai Sadranan"){
    $hargatiket = 15000;
}
elseif($destinasi == "Candi Borobudur"){
    $hargatiket = 50000;
}
elseif($destinasi == "Candi Prambanan"){
    $hargatiket = 50000;
}
elseif($destinasi == "Keraton Yogyakarta"){
    $hargatiket = 5000;
}
elseif($destinasi == "Malioboro"){
    $hargatiket = 5000;
}
elseif($destinasi == "Goa Pindul"){
    $hargatiket = 100000;
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Destinasi Wisata</title>
  </head>
  <body style="margin-top:50px">
    <?php if($destinasi == 'Pendopo Lawas') : ?>
        <center>
        <div class="card" style="width: 50rem; padding: 20px; border-radius: 10px">
        <h3>Warung Pendopo Lawas</h3>
    <form action="pembayaran.php" method="post">
    <table align="center">
        <tr>
            <td>Makanan</td>
            <td>
            &nbsp;: <select name="makanan" id="">
                        <option value="Nasi Padang">Nasi Padang - Rp.10.000/porsi</option>
                        <option value="Soto Ayam">Soto Ayam - Rp.15.000/porsi</option>
                        <option value="Gudeg">Gudeg - Rp.8.000/porsi</option>
                        <option value="Lumpia">Lumpia - Rp.9.000/porsi</option>
                        <option value="Sate Kere">Sate Kere - Rp.12.000/porsi</option>
                    </select>
                    <input type="text" name="porsi" style="width:4rem;" placeholder="Porsi">
            </td>
        </tr>
        <tr>
            <td>Minuman</td>
            <td>
            &nbsp;: <select name="minuman" id="">
                        <option value="Air Putih">Air Putih - Rp.3.000/gelas</option>
                        <option value="Teh Manis">Teh Manis - Rp.5.000/gelas</option>
                        <option value="Juice Buah">Juice Buah - Rp.6.000/gelas</option>
                        <option value="Kopi">Kopi - Rp.5.000/gelas</option>
                    </select>
                    <input type="text" name="gelas" style="width:4rem;" placeholder="Gelas">
            </td>
        </tr>
        <tr>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
            </tr>
    </table>
    <input type="hidden" name="pilih" value="warung">
</form>
        </div>
    </center>
    <?php else : ?>
    <center>
        <div class="card" style="width: 50rem; padding: 40px; border-radius: 10px">
            <table align="center">
                <tr>
                    <td>Nama Pemesan</td>
                    <td>&nbsp;: <?= $pemesan ?></td>
                </tr>
                <tr>
                    <td>Tempat Destinasi</td>
                    <td>&nbsp;: <?= $destinasi ?></td>
                </tr>
                <tr>
                    <td>Harga Tiket</td>
                    <td>&nbsp;: <?= "Rp. $hargatiket" ?></td>
                </tr>
            </table>
            <form action="pembayaran.php" method="POST">
                <label for="jumlah" style="margin-top: 1rem;">Input Jumlah tiket :</label>
                <input type="number" name="jumlah" id="jumlah">
                <input type="hidden" name="pemesan" value="<?=$pemesan?>">
                <input type="hidden" name="destinasi" value="<?=$destinasi?>">
                <input type="hidden" name="hargatiket" value="<?=$hargatiket?>">
                <input type="hidden" name="pilih" value="tiket">
                <button type="submit" border="1px" style="border: 1px solid black; padding: 5px, 5px, 5px, 5px; border-radius: 3px">Beli</button>
            </form>
        </div>
    </center>
    <?php endif?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
?>