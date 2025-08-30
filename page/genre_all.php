<?php include 'component/navbar.php'; ?>
	
	<section id="featured-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						
						<h2 class="section-title">Shop For Book</h2>
					</div>

					<div class="product-list" data-aos="fade-up">
						<div class="row">

							<table class="table">
                                <tr>
                                    <th class="text-center">
                                            #
                                    </th>
                                    <th class="text-center">
                                        Nama Genre
                                    </th>
                                </tr>
                            <?php
                            if(isset($genres)){
                                foreach($genres as $genre){
                            ?>
                                <tr>
                                    <td><?= $genre['id'] ?></td>
                                    <td><?= $genre['nama'] ?></td>
                                </tr>
                            <?php }
                            } else { ?>
                                <tr>
                                    <td class="text-center" colspan="2">Data Kosong</td>
                                </tr>
                            <?php } ?>
                            </table>
						</div><!--ft-books-slider-->
					</div><!--grid-->
				</div><!--inner-content-->
			</div>
		</div>
	</section>
	<section id="quotation" class="align-center pb-5 mb-5">
		<div class="inner-content">
			<h2 class="section-title divider">Quote of the day</h2>
			<blockquote data-aos="fade-up">
				<q>“The more that you read, the more things you will know. The more that you learn, the more places
					you’ll go.”</q>
				<div class="author-name">Dr. Seuss</div>
			</blockquote>
		</div>
	</section>
