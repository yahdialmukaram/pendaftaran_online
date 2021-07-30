
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url();?>images/qur.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Ditails Informasi</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('c_user')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?=base_url('c_user/informasi')?>">Informasi <i class="ion-ios-arrow-forward"></i></a></span> </p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <?php foreach ($ditails_informasi as $key => $value) :?>
            <div class="col-lg-8 ftco-animate">
              <h3><b><?= $value['judul']?></b></h3>
              <h6><?= $value['tanggal']?></h6>
           
              <div class="col-sm-12 padding_all">
                <ul>
                  <a href="" class="icon-facebook"> Share Facebook</i></a> </li>
                  |
                  <a href="" class="icon-instagram"> Share Instagram</i></a> </li>
										</ul>
						</div>
                 <div class="col-sm-10  padding_all">
                    <div class="center_7">
            <p> <a href="#"><img src="<?= base_url();?>./uploads/original_image/<?=$value['image'];?>" width="120%"></a></p>
            <h5 class="mb-3"><?= $value['judul']?></h5>
            <p><?= $value['isi']?><p>
          </div>
                  </div>
            <img src="images/image_2.jpg" alt="" class="img-fluid">

            <?php endforeach;?>

            <div class="pt-5 mt-5">           
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
     
          </div>
            <style>
						.warna {
							background-color: rgb(224, 178, 24);
							color: black;
						}

						.warna1 {
							background-color: rgb(235, 165, 15);
							color: black;
						}

					</style>
            <div class="col-sm-12 padding_all">
							<div class="center_6">
								<h5><b>Pimpinan Yayasan Qurrata A'yun</b></h5>
                <hr>
								<p><a href="#"><img src="<?= base_url();?>images/ustad.jpg" style="width: 320px;height: 250px; "></a></p>
							</div>
						</div>
            <br>
            <div class="sidebar-box ftco-animate">
            <h3><b>Profil Qurrata A'yun</b></h3>
            <hr>
						<table rules="rows">

							<tr class="warna">
								<th>Provinsi</th>
								<td></td>
								<td></td>
								<td>Sumatra Barat</td>
							</tr>

							<tr>
								<th>Kabupaten</th>
								<td></td>
								<td></td>
								<td>Tanah Datar</td>
							</tr>
							<!-- <tr>
								<th>Jumlah Kecamatan</th>
								<td></td>
								<td></td>
								<td></td>
							</tr> -->
						
							<tr>
								<th>Jumlah Sekolah</th>
								<td></td>
								<td></td>
								<td>3</td>
							</tr>
							<tr>
								<th>Jumlah Seluruh Siswa</th>
								<td></td>
								<td></td>
								<td>-</td>
							</tr>
							<tr>
								<th>Jumlah Laki-Laki</th>
								<td></td>
								<td></td>
								<td>-</td>
							</tr>
							<tr>
								<th>Jumlah Prempuan</th>
								<td></td>
								<td></td>
								<td>-</td>
							</tr>
							<tr>
								<th>Pendaftaran Siswa</th>
								<td></td>
								<td></td>
								<td><a href="<?= base_url();?>c_login"> Klik disini</td>
							</tr>

						</table>
						<br>
						<br>

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18455.68079556716!2d100.59037758558128!3d-0.46418086905477174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52d6aefdccbad%3A0xf65d2d89fb2510b4!2sSDIT%20QURRATA%20A&#39;YYUN%20BATUSANGKAR!5e1!3m2!1sid!2sid!4v1625814490003!5m2!1sid!2sid" width="300" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18455.68079556716!2d100.59037758558128!3d-0.46418086905477174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52d6aefdccbad%3A0xf65d2d89fb2510b4!2sSDIT%20QURRATA%20A&#39;YYUN%20BATUSANGKAR!5e1!3m2!1sid!2sid!4v1625814490003!5m2!1sid!2sid" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>
      

            <div class="center_main clearfix">
					</div>

            <div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">December 2021 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2021 <span>(20)</span></a></li>
                <li><a href="#">September 2021 <span>(6)</span></a></li>
                <li><a href="#">August 2021 <span>(8)</span></a></li>
              </ul>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Pemukiman</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div><!-- END COL -->
        </div>
			</div>
		</section>
