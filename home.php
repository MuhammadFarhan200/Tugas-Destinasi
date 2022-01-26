<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Destinasi</title>
  </head>
  <body style="margin-top:50px">
    <center>
        <div class="card" style="width: 50rem; padding: 40px; border-radius: 10px">
        <h3>Selamat Datang</h3><hr><br>
        <form action="proses.php" method="POST">
        <table align="center" cellpadding="3" style="border-radius:10px; padding:20px">
            <style>
              th, td {
                  border:none;
              }
          </style>
            <tr>
                <th></th>
                <th align="left">Destinasi</th>
                <th>Harga Tiket</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Bukit Bintang</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Pantai Sadranan</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Candi Borobudur</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Candi Prambanan</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Keraton Yogyakarta</td>
                <td>Rp. 5.000</td>
           </tr>
            <tr>
                <td>6.</td>
                <td>Malioboro</td>
                <td>Rp. 5.000</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Pendopo Lawas</td>
                <td> -> Cafe</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Goa Pindul</td>
                <td>Rp. 100.000</td>
            </tr>
        </table><br>
            <table align="center" cellpadding="5">
            <tr>
                <td>Nama Pemesan</td>
                <td>&nbsp;: <input type="text" name="pemesan"></td>
            </tr>
            <tr>
                <td>Tempat Destinasi</td>
                <td>
                &nbsp;: <select name="destinasi" id="">
                        <option value="">- Pilih Destinasi -</option>
                        <option value="Bukit Bintang">Bukit Bintang - Rp.10.000/orang</option>
                        <option value="Pantai Sadranan">Pantai Sadranan - Rp.15.000/orang</option>
                        <option value="Candi Borobudur">Candi Borobudur - Rp.50.000/orang</option>
                        <option value="Candi Prambanan">Candi Prambanan - Rp.50.000/orang</option>
                        <option value="Keraton Yogyakarta">Keraton Yogyakarta - Rp.5.000/orang</option>
                        <option value="Malioboro">Malioboro - Rp.5.000/orang</option>
                        <option value="Pendopo Lawas">Pendopo Lawas - Cafe</option>
                        <option value="Goa Pindul">Goa Pindul - Rp.100.000/orang</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
            </tr>
            </table>
        </form>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
?>