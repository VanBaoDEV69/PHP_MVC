


<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
		    <?php foreach ($slides as $slide) : ?>
          <div class="swiper-slide context-dark" data-slide-bg="../images/thuanphat/<?php echo $slide['img']; ?>">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span style="color: white" class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0"><?php echo $slide['caption']; ?></span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300"><?php echo $slide['content']; ?></p>
                    <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">Xem thêm</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
		    <?php endforeach; ?>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>
      <!-- What We Offer-->
      <section class="section section-xl bg-default">
        <div class="container">
          <h3 class="wow fadeInLeft">Sản phẩm nổi bật</h3>
        </div>
        <div class="container container-style-1">
          <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
            <!-- Quote Tara-->
            <?php foreach ($products as $product) : ?>
            <article class="quote-tara">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
                  <p class="q">
                    <div class="product-figure">
                      <img src="../images/maymoc/<?php echo $product['main_image']; ?>" alt="" width="161" height="162"/>
                    </div>
                  </p>
                </div>
                <div class="quote-tara-figure"><img src="../images/logo/ThuanPhat_Logo.png" alt="" width="105" height="105"/>
                </div>
              </div>
              <h6 class="quote-tara-author"><?php echo $product['name_product']; ?></h6>
              <div class="quote-tara-status">$<?php echo $product['price']; ?></div>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>    

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="../images/thuanphat/Doanh-nghiep.jpg">
        <div class="parallax-content section-xl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title wow fadeInRight">Best atmosphere</h3>
                  <p class="lead">PizzaHouse is the place of the best pizza and high-quality service.</p>
                  <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInDown">Ben Smith, Founder</span></p><a class="button button-md button-secondary-2 button-winona wow fadeInUp" href="#" data-wow-delay=".2s">View Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Shop-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Sản phẩm mới</span></h3>
          <div class="row row-lg row-30">
          <?php foreach ($products as $product) : ?>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="../images/maymoc/<?php echo $product['main_image']; ?>" alt="" width="161" height="162"/>
                </div>
                
                <h6 class="product-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $product['name_product']; ?></h6>
                <div class="product-price-wrap">
                  <div class="product-price product-price-old">
                    <?php 
                      if($product['discount'] == 0){
                        echo '';
                      }else{
                        echo $product['price'];
                      }
                    ?>
                  </div>
                  <div class="product-price">
                  $ <?php 
                      if($product['discount'] == 0){
                        echo $product['price'];
                      }else{
                        $total = $product['price']-($product['price']*$product['discount']/100);
                        echo $total;
                      }
                    ?>
                  </div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Thêm vào giỏ hàng</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="#">Chi tiết sản phẩm</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="../images/thuanphat/thuanphat_home3.jpg">
        <div class="parallax-content section-xxl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">-30% on all salads & drinks</span></h3>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span class="d-inline-block wow slideInUp">Taste some of the best PizzaHouse salads!</span></p><a class="button button-lg button-secondary button-winona wow fadeInRight" href="contacts.html" data-wow-delay=".2s">contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- What We Offer-->
      

      <section class="section section-last bg-default">
        <div class="container-fluid container-inset-0 isotope-wrap">
          <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="../images/gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-1-310x585.jpg" alt="" width="310" height="585"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Best Ingredients</a></h6>
                    <div class="thumbnail-mary-location">Tasty Pizza</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight"><a class="thumbnail-mary-figure" href="../images/gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-2-631x587.jpg" alt="" width="631" height="587"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Comfortable interior</a></h6>
                    <div class="thumbnail-mary-location">Modern Design</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown"><a class="thumbnail-mary-figure" href="../images/gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-3-311x289.jpg" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">quality Dishware</a></h6>
                    <div class="thumbnail-mary-location">Top-notch utensils</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary wow slideInUp"><a class="thumbnail-mary-figure" href="../images/gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-4-631x289.jpg" alt="" width="631" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Refreshing cocktails</a></h6>
                    <div class="thumbnail-mary-location">Exclusive selection</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp"><a class="thumbnail-mary-figure" href="../images/gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-5-311x289.jpg" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Exotic Salads</a></h6>
                    <div class="thumbnail-mary-location">Summer Taste</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a class="thumbnail-mary-figure" href="../images/gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-6-311x289.jpg" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">All Types of pizza</a></h6>
                    <div class="thumbnail-mary-location">Special Recipes</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="../images/gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="../images/gallery-7-311x289.jpg" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Diverse menu</a></h6>
                    <div class="thumbnail-mary-location">Pick Your Favorite dish</div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      

      <!-- Section Services  Last section-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-bag"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Delivery</a></h5>
              <p class="box-icon-megan-text">If you order more than 3 pizzas, we will gladly deliver them to you for free.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-map2"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Convenient Location</a></h5>
              <p class="box-icon-megan-text">Our pizzeria is situated in the downtown and is very easy to reach even on weekends.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-radar"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Wi-Fi</a></h5>
              <p class="box-icon-megan-text">We have free Wi-Fi available to all clients and visitors of our pizzeria.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Best Service</a></h5>
              <p class="box-icon-megan-text">The client is our #1 priority as we deliver top-notch customer service.</p>
            </article>
          </div>
        </div>
      </section>