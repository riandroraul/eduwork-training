<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style="background-color: dodgerblue;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <tr>
                <?php if ($i % 2 == 1) : ?>
            <tr style="background-color: #ddd">
            <?php endif; ?>

            <td><?= $i; ?></td>
            <td>Nama ke <?= $i; ?></td>
            <td>Kelas ke <?= $i; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>