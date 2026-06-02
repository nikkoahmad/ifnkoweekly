<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <table>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type ="text" id="Nama" name="nama" /></td>
        </tr>
        <tr>
            <td><label for="photo">Foto</label></td>
            <td>:</td>
            <td><input type ="file" id="photo" name="photo" /></td>
        </tr>
        <tr>
            <td><label for="UTS">UTS</label></td>
            <td>:</td>
            <td><input type ="number" id="UTS" name="UTS" /></td>
        </tr>
        <tr>
            <td><label for="UAS">UAS</label></td>
            <td>:</td>
            <td><input type ="number" id="UAS" name="UAS" /></td>
        </tr>
        <tr>
            <td><label for="tugas">Tugas</label></td>
            <td>:</td>
            <td><input type ="number" id="tugas" name="tugas" /></td>
        </tr>
        </table>
    </form>
    <input type="submit" value="Submit"
        <br>
        <hr/>
        <table>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type ="text" id="Nama" name="nama" /></td>
        </tr>
        <tr>
            <td><label for="NIM">NIM</label></td>
            <td>:</td>
            <td><input type ="number" id="NIM" name="NIM" /></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type ="password" id="password" name="password" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td><input type ="email" id="email" name="email" /></td>
        </tr>
        <tr>
            <td><label for="nomor hp">No HP</label></td>
            <td>:</td>
            <td><input type ="tel" id="nomor hp" name="nomor hp" /></td>
        </tr>
        <tr>
            <td><label for="website pribadi">Website Pribadi</label></td>
            <td>:</td>
            <td><input type ="url" id="website pribadi" name="website pribadi" /></td>
        </tr>
        <tr>
            <td><label for="tanggal lahir">Tanggal Lahir</label></td>
            <td>:</td>
            <td><input type ="date" id="tanggal lahir" name="tanggal lahir" /></td>
        </tr>
        <tr>
            <td><label for="warna favorit">Warna Favorit</label></td>
            <td>:</td>
            <td><input type ="color" id="warna favorit" name="warna favorit" /></td>
        </tr>
        <tr>
            <td><label for="Tingkat Kepuasan">Tingkat Kepuasan</label></td>
            <td>:</td>
            <td><input type ="range" id="Tingkat Kepuasan" name="Tingkat Kepuasan" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" id="pria" name="jk" value="Laki-laki"> <label for="pria">Laki-laki</label>
                <input type="radio" id="wanita" name="jk" value="Perempuan"> <label for="wanita">Perempuan</label>
        </td>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" id="hobi1" name="hobi" value="Memancing"> <label for="hobi1">Memancing</label><br>
                <input type="checkbox" id="hobi2" name="hobi" value="Nonton Drakor"> <label for="hobi2">Nonton Drakor</label><br>
                <input type="checkbox" id="hobi3" name="hobi" value="Nonton YT"> <label for="hobi3">Nonton YT</label><br>
                <input type="checkbox" id="hobi4" name="hobi" value="Rebahan"> <label for="hobi4">Rebahan</label>
        </td>
        <tr>
            <td><label for="photo">Foto</label></td>
            <td>:</td>
            <td><input type ="file" id="photo" name="photo" /></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td>:</td>
            <td><textarea id="alamat" name="alamat" rows="3" cols="22"></textarea></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td>
                <select id="jurusan" name="jurusan">
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="DKV">DKV</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Kirim Data"></td>
        </tr>
        </table>
    </body>       
</html>