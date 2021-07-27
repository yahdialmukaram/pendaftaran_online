<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title?>
    </title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        table,
        th,
        td {
            border: 1px solid black;
        }
        
        th,
        td {
            padding: 10px;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>


    <!-- <img style=" width: 80px;height: 80px;" src="uploads/original_image/lambang.png" align="left"> -->


    <img src="uploads/original_image/lam.jpg" style="float:left; width: 90px; height: 90px;">
    <h3 style="text-align: center;">YAYASAN PENDIDIKAN DAN DAKWAH ISLAM WIHTADUL UMMAH<br>SEKOLAH DASAR ISLAM TERPADU
        <br>DATA NILAI SISWA SDIT QURRATA A'YUN BATUSANGKAR<br>Komp.Perum. Asam Kapeh Malana Batusangkar Telp. (0752) 711
        <hr>
    </h3>


    <!-- <p style="text-align: center;">DATA PEMILIH TETAP (DPT) KECAMATAN BATIPUH SELATAN</p>
  <p style="text-align: center;"><u>KABUPATEN TANAH DATAR</u></p> -->



    <!-- <br> -->
    <h5>Tanggal Print :
        <?= date('d-m-Y');?>
    </h5>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 15%;">No Registrasi</th>
                <th style="width: 15%;">Nama Siswa</th>
                <th style="width: 10%;">Tes Qiroah</th>
                <th>Wawancara Ortu</th>
                <th>Paquyuban</th>
                <th>Nilai Akhir</th>
                <th style="width: 15%;">Rangking</th>
                <th style="width: 15%;">Status</th>

            </tr>
        </thead>
        <tbody>

            <?= $no =1 ;$peringkat=2;
foreach ($nilai as $key => $value):?>

                <tr>
                    <td>
                        <?= $no++?>
                    </td>
                    <td>
                        <?= $value['no_registrasi']?>
                    </td>
                    <td>
                        <?= $value['nama']?>
                    </td>
                    <td style="text-align: center; ">
                        <?= $value['qiroah']?>
                    </td>
                    <td style="text-align: center; ">
                        <?= $value['wawancara_ortu']?>
                    </td>
                    <td style="text-align: center; ">
                        <?= $value['paquyuban']?>
                    </td>
                    <td style="text-align: center; ">
                        <?= number_format( $value  ['nilai_akhir'])?>
                    </td>
                    <td style="text-align: center; ">
                        <label for=" " class="label label-danger ">Peringkat <?=$value['peringkat']?>
					</label>

                    </td style="text-align: center; ">
                    <td style="text-align: center;">
                        <?php if ($value['peringkat']<=$limit_lulus):?>
                        <label for="" class="label label-success">Lulus</label>
                        <?php else:?>
                        <label for="" class="label label-danger">Tidak Lulus</label>
                        <?php endif;?>
                    </td>







                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <br>
    <h5 style="text-align: right;">Batusangkar,
        <?= date('d-m-Y')?>
    </h5>
    <br>
    <h5 style="text-align: right;">Petugas</h5>

</body>

</html>