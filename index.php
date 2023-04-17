<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        h3,h1{
            text-align: center;
        }
        body {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
            background-color: aliceblue;
        }
        .button{
            background-color: #4CAF50; 
            border: none;
            color: white;
            border-radius: 25px;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
        }
        .buttonlist {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }
        nav{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>
    <div class="buttonlist">
        <a href="form-daftar.php" class="button">Daftar Baru</a>
        <a href="list-siswa.php" class="button">Pendaftar</a>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </body>
</html>