<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Informatika</title>
</head>
<body>
     <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        <br>
        <hr/>
        <h2>Data Mahasiswa</h2>
        <a href="tambahdata.php">
            <button>Tambah data</button>
        </a>
        <table Border="1" cellspacing="10px">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Foto</th>
                <th colspan="3">Nilai</th>
            </tr>
            <tr>
                <th> UTS</th>
                <th> UAS</th>
                <th> TUGAS</th>
            </tr>
            <tr>
                <td align="center">1</td>
                <td>Windah Basudara</td>
                <td><img src="asets/wb.jpg" alt="foto" width="60px"></td>
                <td align="center">90</td>
                <td align="center">85</td>
                <td align="center">40</td>
            </tr>
             <tr>
                <td align="center">1</td>
                <td>Reza Arap</td>
                <td><img src="asets/yb.jpg" alt="foto" width="60px"></td>
                <td align="center">90</td>
                <td align="center">85</td>
                <td align="center">40</td>
            </tr>
             <tr>
                <td align="center">1</td>
                <td>Setiawan Ade</td>
                <td><img src="asets/seti.jpg" alt="foto" width="60px"></td>
                <td align="center">90</td>
                <td align="center">85</td>
                <td align="center">40</td>
            </tr>
        </table>
        <br>
        <hr/>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td align="center" colspan="2" rowspan="2" class="center-cell">?</td>
                <td>2,4</td>

            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>



</body>
</html>