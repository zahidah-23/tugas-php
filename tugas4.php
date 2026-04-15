<?php
$conn = mysqli_connect("localhost", "root", "", "db.sql");

// proses update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    mysqli_query($conn, "UPDATE produk SET nama='$nama', harga='$harga' WHERE id=$id");
    echo "Data berhasil diupdate<br><br>";
}

// ambil data
$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<h2>Data Produk</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) : ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td>
        <a href="?edit=<?= $row['id']; ?>">Edit</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

<hr>

<?php
// tampilkan form edit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
    $row = mysqli_fetch_assoc($edit);
?>

<h3>Edit Data</h3>
<form method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    
    Nama: <br>
    <input type="text" name="nama" value="<?= $row['nama']; ?>"><br><br>
    
    Harga: <br>
    <input type="number" name="harga" value="<?= $row['harga']; ?>"><br><br>
    
    <button type="submit" name="update">Update</button>
</form>

<?php } ?>