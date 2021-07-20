<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
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


<img src="uploads/original_image/lam.jpg" style="float:left; width: 90px; height: 90px;"><h3 style="text-align: center;">YAYASAN PENDIDIKAN DAN DAKWAH ISLAM WIHTADUL UMMAH<br>SEKOLAH DASAR ISLAM TERPADU<br>DATA SISWA SDIT QURRATA A'YUN BATUSANGKAR<br>Komp.Perum. Asam Kapeh Malana Batusangkar Telp. (0752) 711 <hr></h3>
  

  <!-- <p style="text-align: center;">DATA PEMILIH TETAP (DPT) KECAMATAN BATIPUH SELATAN</p>
  <p style="text-align: center;"><u>KABUPATEN TANAH DATAR</u></p> -->
                
                
              
                <!-- <br> -->
                <h5>Tanggal Print : <?= date('d-m-Y');?> </h5>
              
                    <table>
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nik</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tempat lahir</th>
                          <th>Tanggal lahir</th>
                          <th>Jenis kelamin</th>
                          <th>Anak Ke</th>
                          <th>Jumlah Keluarga</th>
                          <th>Gol Darah</th>
                          <th>Nama Ayah</th>
                          <th>No Hp Ortu</th>
                          <th>Agama</th>
                          <th>Status Perkawinan</th>
                          <th>Status Rumah</th>
                          <th>Pendidikan Ayah</th>
                          <th>Pekerjaan Ayah</th>
                          <th>Penghasilan Ayah</th>
                          <th>Nama Ibu</th>
                          <th>Pendidikan Ibu</th>
                          <th>Pekerjaan Ibu</th>
                          <th>Penghasilan Ibu</th>
                    </tr>
                  </thead>
               <?php
               $no = 1;
               foreach ($siswa as $key => $value):?>
                  <tbody>
                  <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['nik'];?></td>
                          <td><?=$value['nama'];?></td>
                          <td><?=$value['alamat'];?></td>
                          <td><?=$value['tempat_lahir'];?></td>
                          <td><?=$value['tanggal_lahir'];?></td>
                          <td><?=$value['jenis_kelamin'];?></td>
                          <td><?=$value['anak_ke'];?></td>
                          <td><?=$value['jumlah_keluarga'];?></td>
                          <td><?=$value['golongan_darah'];?></td>
                          <td><?=$value['nama_ayah'];?></td>
                          <td><?=$value['no_hp_ortu'];?></td>
                          <td><?=$value['agama'];?></td>
                          <td><?=$value['status_perkawinan'];?></td>
                          <td><?=$value['status_rumah'];?></td>
                          <td><?=$value['pendidikan_ayah'];?></td>
                          <td><?=$value['pekerjaan_ayah'];?></td>
                          <td><?=$value['penghasilan_ayah'];?></td>
                          <td><?=$value['nama_ibu'];?></td>
                          <td><?=$value['pendidikan_ibu'];?></td>
                          <td><?=$value['pekerjaan_ibu'];?></td>
                          <td><?=$value['penghasilan_ibu'];?></td>
                          </tr>
        </tbody>
               <?php endforeach;?>
    </table>
<br>
<br>
    <h5 style="text-align: right;">Batusangkar, <?= date('d-m-Y')?> </h5> 
    <br>
    <h5 style="text-align: right;">Petugas</h5>
   
</body>
</html>