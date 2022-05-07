<?php

$data = file_get_contents('data.json');
$array = json_decode($data, true);

$today = date_create();
$grade = 'A';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        caption,
        tbody,
        tfoot,
        thead,
        th,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 2;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        .tr-1 td {
            font-weight: bold;
        }
    </style>
</head>

<body style="margin: 0px 0px 10px 0px;">
    <h1 style="background-color: coral; padding: 10px; margin-bottom: 30px;">Daftar Nilai</h1>
    <center>

        <table border=" 1" cellpadding="10" cellspacing="0">
            <tr class="tr-1">
                <td>No</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Nilai</td>
                <td>Hasil</td>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($array as $arr) : ?>
                <?php $tglLahir = $arr['tanggal_lahir']; ?>
                <?php $tgl = date_create($tglLahir); ?>
                <?php $umur = date_diff($tgl, $today)->y; ?>

                <?php $nilai = $arr['nilai']; ?>
                <?php
                if ($nilai > 85 && $nilai <= 100) {
                    $grade = 'A';
                } else if ($nilai > 70 && $nilai <= 85) {
                    $grade = 'B';
                } else if ($nilai > 55 && $nilai <= 70) {
                    $grade = 'C';
                } else if ($nilai > 0 && $nilai <= 55) {
                    $grade = 'D';
                } else {
                    $grade = '-';
                }
                ?>


                <tr>
                    <?php if ($i % 2 == 1) : ?>
                <tr style="background-color: #ddd">
                <?php endif; ?>
                <td>
                    <?= $i; ?>
                </td>
                <td><?= $arr['nama']; ?></td>
                <td><?= $arr['tanggal_lahir']; ?></td>
                <td><?= $umur; ?></td>
                <td><?= $arr['alamat']; ?></td>
                <td><?= $arr['kelas']; ?></td>
                <td><?= $arr['nilai']; ?></td>
                <td><?= $grade; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </center>

</body>

</html>