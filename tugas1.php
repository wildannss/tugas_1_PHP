<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tugas 1</title>
</head>
<body>
    <?php
        $a="Ayam ";
        $g="Goreng ";
        $t="= Rp. ";
        $r=1000;
        $e="Es ";
    ?>
    <h1>Daftar Menu</h1>
    <table>
        <ul>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo $a.$g ;?></td>
                <td><?php echo  $t."13"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo $a."Bakar " ;?></td>
                <td><?php echo $t."15"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo $a."Sayur " ;?></td>
                <td><?php echo $t."13"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo "Tempe ".$g ;?></td>
                <td><?php echo $t."1"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo "Tahu ".$g ;?></td>
                <td><?php echo $t."1"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo "Soto " ;?></td>
                <td><?php echo $t."3"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo "Nasi Putih" ;?></td>
                <td><?php echo $t."5"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo $e."Teh" ;?></td>
                <td><?php echo $t."4"*$r ;?></td>
            </tr>
            <tr>
                <td></td>
                <td><li></li></td>
                <td><?php echo $e."Tebu" ;?></td>
                <td><?php echo $t."5"*$r ;?></td>
            </tr>
        </ul>
    </table>
</body>
</html>