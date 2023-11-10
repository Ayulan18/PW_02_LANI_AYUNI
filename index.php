<!DOCTYPE html>
<html lang="en">

<?php
  include 'proses.php';
?>


<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
    <img src="Logo_UPG.png" alt="Logo" class="logo">
        Form Mahasiswa <font color="orange">UPG</font>
       
</div>
    

    <div class="content">
        <form method="post" action="proses.php">
            <table  border="2" style="width: 400px;">
                <tr>
                    <td align="center" colspan="3" bgcolor="black">
                        <font color="pink" size="3px">
                            <b>Isi Data Anda Di Bawah Ini Dengan Lengkap!</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nama Mahasiswa</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nim</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nim">
                    </td>
                </tr>

                <tr>
                <td bgcolor="#DEDEDE">Jenis kelamin</td>
                <td bgcolor="#DEDEDE">:</td>
                <td bgcolor="#DEDEDE"><input type='radio' name='jenis_kelamin' value='laki-laki' />Laki-Laki
                <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</td>
                </tr>

                <tr>
                    <td bgcolor="#DEDEDE">Alamat</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <select name="alamat">
                            <option value="kota/kabupaten">kota/kabupaten</option>
                            <option value="Kabupaten Lebak">Kabupaten Lebak</option>
                            <option value="Kabupaten Pandeglang">Kabupaten Pandeglang</option>
                            <option value="Kabupaten Serang">Kabupaten Serang</option>
                            <option value="Kabupaten Tangerang">Kabupaten Tangerang</option>
                            <option value="Kota Cilegon">Kota Cilegon</option>
                            <option value="Kota Serang">Kota Serang</option>
                            <option value="Kota Tangerang">Kota Tangerang</option>
                            <option value="Kota Tangerang Selatan">Kota Tangerang Selatan</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#DEDEDE">Agama</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <select name="agama">
                            <option value="agama">Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value=" Konghucu"> Konghucu</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#DEDEDE">Tlpn</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="tlpn">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue">
                        <input type="submit" name="submit" value="SIMPAN">
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        <table border="1" style="width: 900px;">
            <tr>
                <th bgcolor="blue">#</th>
                <th bgcolor="blue">Nama Mahasiswa</th>
                <th bgcolor="blue">Nim</th>
                <th bgcolor="blue">Jenis kelamin</th>
                <th bgcolor="blue">Alamat</th>
                <th bgcolor="blue">agama</th>
                <th bgcolor="blue">tlpon</th>
                <th bgcolor="blue">Aksi</th>
            </tr>
            <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td bgcolor="white"><?php echo $no++ ?></td>
          <td bgcolor="white"><?php echo $d['nama']?></td>
          <td bgcolor="white"><?php echo $d['nim']?></td>
          <td bgcolor="white"><?php echo $d['jenis_kelamin']?></td>
          <td bgcolor="white"><?php echo $d['alamat']?></td>
          <td bgcolor="white"><?php echo $d['agama']?></td>
          <td bgcolor="white"><?php echo $d['tlpn']?></td>
          <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nama']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $d['nama']; ?>">Edit</a></td>
        </tr>

        <?php
        }
        ?>
        </table></br>
    </div>

   

    <script>feather.replace();</script>

</body>
</html>
