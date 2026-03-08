<!DOCTYPE html>
<html>
    <head>
        <title>Form Belanja Warung </title>
    </head>
<body>
    <h2>Input Data Belanja</h2>
    <form action="Tugas5.php" method="POST">
    Memiliki Kartu Member?
    <input type="radio" name="member" value="1" id="ya">YA
    <input type="radio" name="member" value="0" id="tidak">TIDAK
    <br><br>
    
    Nama Pembeli :
    <input type="text" name="nama"><br><br>

    Nama Barang :
    <input type="text" name="barang"><br><br>

    Harga Barang :
    <input type="number" name="harga"><br><br>

    Jumlah Barang :
    <input type="number" name="jumlah"><br><br>

    <button type="submit">Proses Belanja</button>
    </form>
</body>
</html>