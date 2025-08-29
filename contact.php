<?php
include 'header.php';
?>
<h2>Hubungi Kami</h2>
<form>
    <label>Nama:</label><br>
    <input type="text" name="name"><br><br>

    <label>Pesan:</label><br>
    <textarea name="pesan"></textarea><br><br>

    <button type="submit">Kirim</button>
</form>
<?php
require 'footer.php';
?>