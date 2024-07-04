<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maukan Data</title>
</head>
<body>
  <h1>masukan identitas</h1>
<form action ="<?php echo $_SERVER['PHP_SELF';?>"method='post"
  <pre>
    isikan nama     :<input type="teks"name="nama">
    isikan no telp         :<input type="teks"name="notelp">
    isikan alamat   :<textarea name="alamat"rows="5"cols="40"></textarea>
    <input type="submit"value="Tampil"><input type="reset"value="batal">
  </pre>
  </form>
<?php
</body>
</html>