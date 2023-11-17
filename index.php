<?php
  include 'koneksi.php';

  $query =  "SELECT * FROM tb_siswa;";
  $sql = mysqli_query($conn, $query);
  $no = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>    

    <!-- font awesome -->
    <link rel="stylesheet" href="fontAwesome/css/font-awesome.min.css">

    <title>CRUD</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            UTS-PBO
          </a>
        </div>
    </nav>

    <!-- judul -->
    <div class="container">
        <h1 class="mt-3">Data Siswa SMK JJK</h1>
        <figure>
            <blockquote class="blockquote">
              <p>data yang telah disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
          <i class="fa fa-plus"></i>
          Tambah Data
        </a>
        
        <!-- tabel -->
        <div class="table-responsive" >
            <table class="table align-middle table-bordered table-hover">
              <thead class="table-dark">
                <th><center>No.</center></th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Foto Siswa</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                  while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                  <td><center><?php echo ++$no; ?></center></td>
                  <td><?php echo $result['nisn']; ?></td>
                  <td><?php echo $result['nama_siswa']; ?></td>
                  <td><?php echo $result['jenis_kelamin']; ?></td>
                  <td><img src="img/<?php echo $result['foto_siswa']; ?>" style="width: 100px;"></td>
                  <td><?php echo $result['alamat']; ?></td>
                
                  <!-- button -->
                  <td>
                    <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                    <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><i class="fa fa-trash"></i></a>
                  </td>

                </tr>
              <?php
                  }
              ?>      
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>
