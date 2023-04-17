<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
            background-color: #4CAF50; 
            border: none;
            color: white;
            border-radius: 25px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
        }
        .button:hover{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2>Formulir Pendaftaran Siswa Baru</h2>
        </header>
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" class="button" />
            </p>

            </fieldset>

        </form>
    </div>
    </body>
</html>