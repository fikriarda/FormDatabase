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
        <table>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Produk ID</th>
                <th>Area</th>
                <th>Lokasi</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Type</th>
                <th>Category</th>
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $tampil = mysqli_query($kon, "SELECT * FROM db_db");
            while ($data = mysqli_fetch_array($tampil)) {
            ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $data['item'] ?> </td>
                    <td><?php echo $data['produk'] ?></td>
                    <td><?php echo $data['area'] ?></td>
                    <td><?php echo $data['lokasi'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['type'] ?></td>
                    <td><?php echo $data['category'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>