<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tugas 1</title>
</head>
<body>
    <?php
        $t="Rp. ";
        $r=1000;
        $e="Es ";
        $n=1;
    ?>
    <h1>DAFTAR MENU</h1>
    <table border="1">
        <ul>
            <tr>
                <td>No</td>
                <td>Nama Menu</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td><?php echo $n++ ;?></td>
                <td><?php echo "Cireng" ;?></td>
                <td><?php echo $t."1"*$r ;?></td>
            </tr>
            <tr>
                <td><?php echo $n++ ;?></td>
                <td><?php echo $e."Duren" ;?></td>
                <td><?php echo $t."15"*$r ;?></td>
            </tr>
            <tr>
                <td><?php echo $n++ ;?></td>
                <td><?php echo $e."Milo" ;?></td>
                <td><?php echo $t."20"*$r ;?></td>
            </tr>
            <tr>
                <td><?php echo $n++ ;?></td>
                <td><?php echo $e."Teh" ;?></td>
                <td><?php echo $t."5"*$r ;?></td>
            </tr>
            <tr>
                <td><?php echo $n++ ;?></td>
                <td><?php echo "Piscok" ;?></td>
                <td><?php echo $t."1"*$r ;?></td>
            </tr>
        </ul>
    </table>
</body>
</html>