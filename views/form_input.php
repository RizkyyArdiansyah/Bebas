<!-- application/views/form_input.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Transaksi Sepatu</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <div class="container">
    <h1>Form Input Transaksi Sepatu</h1>
    <form action="<?php echo site_url('sepatu/proses'); ?>" method="post">
        <label for="nama">Nama Pembeli:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" required><br><br>

        <label for="merk_sepatu">Merk Sepatu:</label>
        <select id="merk_sepatu" name="merk_sepatu" required>
            <option value="Nike">Nike</option>
            <option value="Adidas">Adidas</option>
            <option value="Kickers">Kickers</option>
            <option value="Eiger">Eiger</option>
            <option value="Bucherri">Bucherri</option>
        </select><br><br>

        <label for="ukuran_sepatu">Ukuran Sepatu:</label>
        <select id="ukuran_sepatu" name="ukuran_sepatu" required>
            <?php for ($i = 32; $i <= 44; $i++) {
                echo "<option value=\"$i\">$i</option>";
            } ?>
        </select><br><br>

        <label for="jumlah_beli">Jumlah Beli:</label>
        <input type="text" id="jumlah_beli" name="jumlah_beli" required><br><br>

        <button type="submit">Submit</button>
    </form>
    </div>
    
</body>
</html>
