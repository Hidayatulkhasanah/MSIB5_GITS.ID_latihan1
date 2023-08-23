<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Hidayatul Khasanah</title>
            <style>
                  body {
                        background-color: #d4c199;
                  }
                  h1 {
                        text-align: center;
                        color: chocolate;
                        font-family: "Times New Roman", Times, serif;
                  }
                  table {
                        width: 800px;
                  }
            </style>
      </head>
      <body>
            <?php
            include "koneksi.php";
            $query = mysqli_query($conn, "SELECT * FROM biodata");
            ?>
            <h1>Biodata Diri</h1>
            <hr width="800px" />
            <table align="center" cellpadding="10px">
                <?php 
                while ($data = mysqli_fetch_array($query)){
                ?>
                       
                  <tr>
                        <td width="100px">Nama Lengkap</td>
                        <td>: <?php echo $data['nama']?></td>
                  </tr>
                  <tr>
                        <td>Jurusan</td>
                        <td>: <?php echo $data['jurusan']?></td>
                  </tr>
                  <tr>
                        <td>Asal Kampus</td>
                        <td>: <?php echo $data['kampus']?></td>
                  </tr>

                  <tr>
                        <td>Hobi</td>
                        <td>: <?php echo $data['hobi']?></td>
                  </tr>
                  <tr>
                        <td>Motto Hidup</td>
                        <td>: <?php echo $data['motto']?></td>
                  </tr>
                  <?php }?>
            </table>
      </body>
</html>
