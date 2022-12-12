<?php
include "connect.php";
$sql = "SELECT DISTINCT prodi from mahasiswa";
$result = mysqli_query($connect, $sql);
?>

<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Praktikum 5</title>
</head>

<body>
    Prodi
    <Select id="mahasiswa" onchange="pilihprodi()">
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <option value="<?php echo $row['prodi']; ?>"><?php echo $row['prodi']; ?></option>
        <?php
        }
        ?>
    </Select>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody id="output"></tbody>
    </table>
    <script>
        function pilihprodi() {
            var x = document.getElementById("mahasiswa").value;
            $.ajax({
                url: "tampil.php",
                method: "POST",
                data: {
                    id: x,
                },
                success: function(data) {
                    $("#output").html(data);
                },
            });
        }
    </script>
</body>

</html>