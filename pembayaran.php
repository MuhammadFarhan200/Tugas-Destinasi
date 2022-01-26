<?php
$pilih = $_POST['pilih'];
$pemesan;
$hargatiket;
$destinasi;
$jumlahtiket;

$totalharga;
$diskon;
$totalbayar;

if($pilih == 'tiket'){
    $pemesan = $_POST['pemesan'];
    $destinasi = $_POST['destinasi'];
    $hargatiket = $_POST['hargatiket'];
    $jumlahtiket = $_POST['jumlah'];
    $totalharga = $hargatiket * $jumlahtiket;
    
    if($jumlahtiket >= 5 && $jumlahtiket < 10){
        $diskon = (10/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    elseif($jumlahtiket >= 6 && $jumlahtiket < 16){
        $diskon = (15/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    elseif($jumlahtiket >= 16 && $jumlahtiket < 21){
        $diskon = (20/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    else{
        $diskon = 0;
    }
    $totalbayar = $totalharga - $diskon;
    }
    else{
        $makanan = $_POST['makanan'];
        $minuman = $_POST['minuman'];
        $porsi = $_POST['porsi'];
        $gelas = $_POST['gelas'];
        if($makanan == "Nasi Padang"){
            $hargamakanan = 10000;
        }
        elseif($makanan == "Soto Ayam"){
            $hargamakanan = 15000;
        }
        elseif($makanan == "Gudeg"){
            $hargamakanan = 8000;
        }
        elseif($makanan == "Lumpia"){
            $hargamakanan = 9000;
        }
        elseif($makanan == "Sate Kere"){
            $hargamakanan = 12000;
        }
        else{
            $hargamakanan = 0;
        }
        if($minuman == "Air Putih"){
            $hargaminuman = 3000;
        }
        elseif($minuman == "Teh Manis"){
            $hargaminuman = 5000;
        }
        elseif($minuman == "Juice Buah"){

            $hargaminuman = 6000;
        }
        elseif($minuman == "Kopi"){
            $hargaminuman = 5000;
        }
        else{
            $hargaminuman = 0;
        }
        $total = ($hargamakanan * $porsi) + ($hargaminuman * $gelas);
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
    <center>
    <div class="card" style="width: 50rem; padding: 40px; border-radius: 10px">
        <?php if($pilih == 'tiket'):?>
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
                <tr>
                    <td>Jumlah Tiket Dibeli</td>
                    <td>&nbsp;: <?= "$jumlahtiket Tiket" ?></td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>&nbsp;: <?= "Rp. $totalharga" ?></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>&nbsp;: <?= "Rp. $diskon" ?></td>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td>&nbsp;: <?= "Rp. $totalbayar" ?></td>
                </tr>
            </table>
            <form action="struk.php" method="post">
                <label for="inputbayar" style="margin-top: 1rem;">Bayar : </label>
                <input type="number" name="bayar" id="bayar">
                <input type="hidden" name="totalbayar" value="<?= $totalbayar?>">
                <button type="submit" style="border: 1px solid black; padding: 5px, 5px, 5px, 5px; border-radius: 3px">Bayar</button>
            </form>
    </div>
    </center>
    <center>
    <div class="card" style="width: 50rem;">
    <?php else : ?>
        <table align="center">
                <tr>
                    <td>Makanan Dipesan</td>
                    <td>&nbsp;: <?= $makanan ?></td>
                </tr>
                <tr>
                    <td>Harga Makanan/porsi</td>
                    <td>&nbsp;: <?= "Rp. $hargamakanan" ?></td>
                </tr>
                <tr>
                    <td>Jumlah Dipesan</td>
                    <td>&nbsp;: <?= $porsi ?></td>
                </tr>
                <tr>
                    <td>Minuman Dipesan</td>
                    <td>&nbsp;: <?= $minuman ?></td>
                </tr>
                <tr>
                    <td>Harga Minuman/gelas</td>
                    <td>&nbsp;: <?= "Rp. $hargaminuman" ?></td>
                </tr>
                <tr>
                    <td>Jumlah Dipesan</td>
                    <td>&nbsp;: <?= $gelas ?></td>
                </tr>
                <tr>
                    <td>Total harga</td>
                    <td>&nbsp;: <?= "Rp. $total" ?></td>
                </tr>
        </table>
        <form action="struk.php" method="post">
                <label for="inputbayar" style="margin-top: 1rem;">Bayar : </label>
                <input type="number" name="bayar" id="bayar">
                <input type="hidden" name="totalbayar" value="<?= $total?>">
                <button type="submit" style="border: 1px solid black; padding: 5px, 5px, 5px, 5px; border-radius: 3px">Bayar</button>
            </form>
    </div>
    
    </center>

    <?php endif?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>