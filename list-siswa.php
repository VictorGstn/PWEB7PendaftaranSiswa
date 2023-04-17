<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        header{
            text-align: center;
        }
        .container{
            background-color: aliceblue;
            padding: 16px;
            width: 50%;
        }
        body{
            display: flex;
            justify-content: center;
        }
        .button{
            border: none;
            color: white;
            border-radius: 25px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
        }
        .edit{
            background-color: #54cee6;
        }
        .hapus{
            background-color: #eb1025;
        }
        .daftar{
            background-color: #4CAF50; 
        }
        .button:hover{
            cursor: pointer;
        }
        .buttonlist{
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2>Siswa yang sudah mendaftar</h2>
        </header>

        <nav>
            <a class = "button daftar" href="form-daftar.php">[+] Tambah Baru</a>
        </nav>

        <br>

        <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<div class=buttonlist>";
                echo "<a class='button edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
                echo "<a class='button hapus' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</div>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>  
</body>
</html>