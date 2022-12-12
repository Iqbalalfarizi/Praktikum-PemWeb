<?php
$x = $_POST['id'];
$x = trim($x);
include "connect.php";
$query = "SELECT * FROM mahasiswa WHERE prodi='{$x}' ORDER BY nim ASC";
$result = mysqli_query($connect, $query);
$no = 0;
while ($row = mysqli_fetch_array($result)) {
    $no++;
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["prodi"]; ?></td>
    </tr>
<?php
}

echo $query;
?>