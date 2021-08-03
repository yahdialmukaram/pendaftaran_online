

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url();?>images/qur.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Informasi Qurrata A'yun</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('c_user')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Informasi <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <?php
           function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
					}
					$no = $this->uri->segment('3') + 1;
          foreach ($berita as $key => $value): ?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
            <a href="<?=base_url();?>c_user/ditails_informasi/<?= $value['id_berita']?>" class="block-20 d-flex align-items-end"><img style="width: 250px;height: 250px; border-radius:300%" src="<?=base_url();?>./uploads/original_image/<?=$value['image'];?>">
								<div class="meta-date text-center p-12">
                  <span class=""><?=$value['tanggal']?></span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="<?=base_url();?>c_user/ditails_informasi/<?= $value['id_berita']?>"><?=$value['judul']?></a></h3>
                <p><?=limit_words($value['isi'],30); ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?=base_url();?>c_user/ditails_informasi/<?= $value['id_berita']?>" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	             
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
  
        </div>
        
        
        <div class="row no-gutters my-5">
         
          	<!-- perintah pagination -->
            <div class="row">
            <div class="col">
              <!--Tampilkan pagination-->
              <!-- <?php echo $pagination; ?> -->
            </div>
          </div>
          <!-- <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div> -->
        </div>
			</div>
		</section>
