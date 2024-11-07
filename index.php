<?php  
  require_once 'mahasiswa.php';
  $data1 = new Mahasiswa("test", 12, "SI", 4);
  $data2 = new Mahasiswa("test1", 13, "TIF", 3.7);
  $data3 = new Mahasiswa("test2", 14, "TI", 5);
  $data = [$data1, $data2, $data3];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
  </head>
  <body>
    <table border="1" style="margin-top: 20px;">
      <thead>
        <td>Nama</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>IPK</td>
      </thead>
      <tbody>
        <?php  
          foreach ($data as $key => $value) {
            echo "<tr>
                <td>{$value->getNama()}</td>
                <td>{$value->getNim()}</td>
                <td>{$value->getJurusan()}</td>
                <td>{$value->getIpk()}</td>
              </tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>