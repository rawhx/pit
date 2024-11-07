<?php  
  require_once 'mahasiswa.php';
  $data = new Mahasiswa();
  $data->addData("p", "1", "SI", 3.6);
  $data->addData("?", "2", "TIF", 3.9);
  $data->addData("a", "3", "PTI", 4);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
  </head>
  <body>
    data
    <table border="1" style="margin-top: 20px;">
      <thead>
        <td>Nama</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>IPK</td>
      </thead>
      <tbody>
        <?php  
          foreach ($data->getData() as $key => $value) {
            echo "<tr>
              
                <td>{$value["Nama"]}</td>
                <td>{$value["NIM"]}</td>
                <td>{$value["Jurusan"]}</td>
                <td>{$value["IPK"]}</td>
              </tr>";
          }
        ?>
      </tbody>
    </table>
    update
    <table border="1" style="margin-top: 20px;">
      <thead>
        <td>Nama</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>IPK</td>
      </thead>
      <tbody>
        <?php  
          $data->updateData("1", "ppp",  "PTI", 4);  
          foreach ($data->getData() as $key => $value) {
            echo "<tr>
              
                <td>{$value["Nama"]}</td>
                <td>{$value["NIM"]}</td>
                <td>{$value["Jurusan"]}</td>
                <td>{$value["IPK"]}</td>
              </tr>";
          }
        ?>
      </tbody>
    </table>
    </table>
    delete
    <table border="1" style="margin-top: 20px;">
      <thead>
        <td>Nama</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>IPK</td>
      </thead>
      <tbody>
        <?php  
         $data->deleteData("2");
         foreach ($data->getData() as $key => $value) {
           echo "<tr>
             
               <td>{$value["Nama"]}</td>
               <td>{$value["NIM"]}</td>
               <td>{$value["Jurusan"]}</td>
               <td>{$value["IPK"]}</td>
             </tr>";
         }
        ?>
      </tbody>
    </table>
  </body>
</html>