<?php
include 'koneksi.php';
include 'update.php';
?>

<doctype html>
<html>
    <body>
        <h1>EDIT DATA</h1>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM data ");
        while ($data = mysqli_fetch_array($query)) { 
            ?>
            <form action="update.php" method="POST">
                <input type="hidden" name='id' value="<?php echo $data['id']; ?>">
                <input type="text" name='nama' value="<?php echo $data['projek_name']; ?>">
                <input type="date" name='date' value="<?php echo $data['tanggal']; ?>">
                <input type="text" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
            <button type = "submit" name = "update">update</button>
            </form> <?php } ?>
    </body>
</html>