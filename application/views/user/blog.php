
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
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
          foreach ($data->result_array() as $key => $value): ?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="<?=base_url();?>c_user/ditails_blog/<?= $value['id_berita']?>" class="block-20 d-flex align-items-end"><img style="width: 150px;height: 150px; border-radius:50%" src="<?=base_url();?>./uploads/original_image/<?=$value['image'];?>">
                <span class=" "><?= $value['tanggal']?></span>
            </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?=$value['judul']?></a></h3>
                <p><a href=""></a><?=limit_words($value['isi'],9); ?></p> <a href="<?=base_url();?>c_user/ditails_blog/<?=$value['id_berita']?>"> Baca selanjutnya...</a>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?=base_url();?>c_user/ditails_blog/<?=$value['id_berita']?>" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <!-- <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p> -->
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          
        </div>
        <!-- perintah pagination -->
        <div class="row">
          <div class="col">
            <?php echo $pagination; ?>
          </div>
        </div>
        <!-- <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div> -->
			</div>
		</section>

		