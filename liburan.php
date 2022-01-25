<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-top:50px">
    <h1 align="center">Selamat Datang</h1>
    <form action="" method="post">
        <table align="center" cellpadding="3">
            <tr>
                <td>Destinasi / Harga Tiket</td>
                <td>:</td>
                <td><select name="destinasi" id="">
                    <option selected> Pilih Destinasi </option>
                    <option value="1">Bukit Bintang / Rp. 10.000</option>
                    <option value="2">Pantai Sadranan / Rp. 15.000</option>
                    <option value="3">Candi Borobudur / Rp. 50.000</option>
                    <option value="4">Candi Prambanan / Rp. 50.000</option>
                    <option value="5">Keraton Yogyakarta / Rp. 5.000</option>
                    <option value="6">Malioboro / Rp. 5.000</option>
                    <option value="7">Pendopo Lawas -> Cafe</option>
                    <option value="8">Goa Pindul / Rp. 100.000</option>
                </select></td>
            </tr>
            <tr><td colspan="3"><center><input type="submit" value="  Pilih  " name="hitung"></center></td></tr>
        </table>
        <?php
            if(isset($_POST['hitung'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "1"){
        ?>
                  <h2 align="center">Bukit Bintang</h2>
                  <table align="center" cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kirim" value="Total"></td>
                    </tr>
                  </table>
    
          <?php }elseif($destinasi == "2"){ ?>
                  <h2 align="center">Pantai Sadrana</h2>
                  <table align="center"cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Pantai Sadrana</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="submit" value="Total"></td>
                    </tr>
                  </table>
                    
          <?php }elseif($destinasi == "3"){ ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center" cellpadding="4"> 
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="Total" value="Total"></td>
                    </tr>
                  </table>
                
          <?php }elseif($destinasi == "4"){ ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <table align="center" cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="Total" value="Total"></td>
                    </tr>
                  </table>
                 
          <?php }elseif($destinasi == "5"){ ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <table align="center" cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Total"></td>
                    </tr>
                  </table>
           
          <?php }elseif($destinasi == "6"){ ?>
                  <h2 align="center">Malioboro</h2>
                  <table align="center" cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Total"></td>
                    </tr>
                  </table>
                
         <?php }elseif($destinasi == "7"){ ?>
                  <h2 align="center">Pendopo Lawas</h2>
                  <table align="center" cellpadding="4" border="1" style="border-radius:5px; padding:10px">
                      <style>
                          th, td {
                              border: none;
                          }
                      </style>
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Daftar</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Gudeg</td>
                      <td>Rp.17.000</td>
                    </tr>
                    <tr>
                      <td>Sate Kere</td>
                      <td>Rp.15.000</td>
                    </tr>
                    <tr>
                      <td>Lumpia</td>
                      <td>Rp.20.000</td>
                    </tr>
                    <tr>
                      <td>Soto Ayam</td>
                      <td>Rp.20.000</td>
                    </tr>
                    <tr>
                      <td>Wedang Uwuh</td>
                      <td>Rp.25.000</td>
                    </tr>
                    <tr>
                      <td>Kopi</td>
                      <td>Rp.5.000</td>
                    </tr>
                  </table>
                  <div  class="cafe">
                  <center><br>
                        <select name="pilih">
                        <option selected> Pilih Menu </option>
                        <option value="Gudeg">Gudeg</option>
                        <option value="Sate Kere">Sate Kere</option>
                        <option value="Lumpia">Lumpia</option>
                        <option value="Soto Ayam">Soto Ayam</option>
                        <option value="Wedang Uwuh">Wedang Uwuh</option>
                        <option value="Kopi">Kopi</option>
                      </select>
                     <input type="number" name="jumlah" placeholder="Jumlah Pemesanan"><br><br>
                     <input type="number" name="bayar" placeholder="Bayar">
                     <input type="submit" name="cafe" value="Total"></center>
                  </div>
         <?php }elseif($destinasi == "8"){ ?>
                  <h2 align="center">Goa Pindul</h2>
                  <table align="center" cellpadding="4">
                    <tr>
                      <td>Tempatr Wisata</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="Total"></td>
                    </tr>
                  </table>
                    
          <?php }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?> 
                <br>
                <table align="center" cellpadding="4">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['submit'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*15000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center" cellpadding="4">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
         <?php }
            if(isset($_POST['Total'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*50000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center" cellpadding="4">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['ya'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*5000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          
          ?>
                <br>
                <table align="center" cellpadding="4">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['goa'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*100000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >= 5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center" cellpadding="4">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['cafe'])){
              $pilih = $_POST['pilih'];
              $jumlah = $_POST['jumlah'];
              $bayar = $_POST['bayar'];
              
              if($pilih == "Gudeg"){
                $total = $jumlah * 17000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == "Sate Kere"){
                $total = $jumlah * 15000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == "Lumpia"){
                $total = $jumlah * 20000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == "Soto Ayam"){
                $total = $jumlah * 20000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == "Wedang Uwuh"){
                $total = $jumlah * 25000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == "Kopi"){
                $total = $jumlah * 5000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }
              $kembalian = $bayar - $totalakhir;
          ?>
               <br><table align="center" cellpadding="4">
               <tr>
                   <td>Nama Pesanan</td>
                   <td>:</td>
                   <td><?php echo $_POST['pilih'];?></td>
                 </tr>
                 <tr>
                   <td>Total Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $totalakhir;?></td>
                 </tr>
                 <tr>
                   <td>Potongan Harga</td>
                   <td>:</td>
                   <td><?php echo $diskon1;?></td>
                 </tr>
                 <tr>
                   <td>Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar;?></td>
                 </tr>
                 <tr>
                   <td>Kembali</td>
                   <td>:</td>
                   <td><?php echo $kembalian;?></td>
                 </tr>
               </table>
          <?php }
          ?>
    </form>    
</body>
</html>