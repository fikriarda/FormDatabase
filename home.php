<html>

<head>
    <title>Management Basis Data</title>
    <style type="text/css" media="screen">
        table {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px;
        }

        input {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 11px;
            height: 20px;
        }
    </style>
</head>

<body>
    <div style="border:0; padding:10px; width:760px; height:auto;">
        <form action="" method="POST" name="form-input-data">
            <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr height="46">
                    <td width="10%"> </td>
                    <td width="25%"> </td>
                    <td width="65%">
                        <font color="orange" size="2">Tugas MDB</font>
                    </td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Item</td>
                    <td><input type="text" name="item" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Produk ID</td>
                    <td><input type="text" name="produk" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Area</td>
                    <td><input type="text" name="area" size="20" maxlength="60" /></td>
                </tr>

                <tr height="46">
                    <td> </td>
                    <td>Lokasi</td>
                    <td><input type="text" name="lokasi" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Stok</td>
                    <td><input type="text" name="stok" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Harga</td>
                    <td><input type="text" name="harga" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Type</td>
                    <td><input type="text" name="type" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td>Category</td>
                    <td><input type="text" name="category" size="20" maxlength="60" /></td>
                </tr>
                <tr height="46">
                    <td> </td>
                    <td> </td>
                    <td><input type="submit" name="simpan" value="Submit">
                        <input type="reset" name="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<?php
//Include file koneksi ke database
include "koneksi.php";


//menerima nilai dari kiriman form input-barang 
if (isset($_POST['simpan'])) {
    $item = $_POST['item'];
    $produk = $_POST['produk'];
    $area = $_POST['area'];
    $lokasi = $_POST['lokasi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $type = $_POST['type'];
    $category = $_POST['category'];

    //Query input menginput data kedalam tabel barang
    mysqli_query($kon, "INSERT INTO db_db VALUES('','$item','$produk','$area','$lokasi','$stok','$harga','$type','$category')") or die(mysqli_error($kon));

    echo "<div align='center'><h5> Silahkan tunggu, data sedang disimpan  .. </h5></div>";
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/basisdata/data.php'>";
}
?>