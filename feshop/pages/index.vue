<script>
/**
 * 測驗規範
 * 1. 可以按照分類篩選
 * 2. 可以按照價格區間篩選
 * 3. 可以按照顏色進行篩選，並且右側可能顯示個別的數量
 * 4. 商品可以按照排序顯示
 * 5. 「總共 21 個結果中的 1–16」必須顯示回傳的正確數值
 * 6. 購物車內容可以重複加入，數量為累加
 * 7. 購物車中的「圖片」「名稱」「數量」「售價」需顯示正確，價格為所有商品個別 售價 * 數量 加總！
 * 8. header 搜尋匡按下 enter 下方商品清單顯示查詢後的條件(可以和 篩選條件、排序共同存在)
 * 9. 購物車可以刪除商品
 */
export default {};
</script>

<template>
  <div>
    <header class="header-area">
      <!-- header top start -->
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3">
              <div class="logo">
                <a href="index.html"
                  ><img src="assets/img/logo/logo.png" alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="header-settings-area">
                <div class="header-top-right">
                  <div class="header-search-box">
                    <form>
                      <input type="text" placeholder="Search Here" /><button>
                        <i class="ion-ios-search-strong"></i>
                      </button>
                    </form>
                  </div>
                  <div class="mini-cart-wrap">
                    <button>
                      <i class="ion-bag"></i><span class="notification">2</span>
                    </button>
                    <ul class="cart-list">
                      <li>
                        <div class="cart-img">
                          <a href="product-details.html"
                            ><img src="assets/img/cart/cart-1.jpg" alt=""
                          /></a>
                        </div>
                        <div class="cart-info">
                          <h4>
                            <a href="product-details.html">商品名稱</a>
                          </h4>
                          <span class="cart-qty">數量: 1</span
                          ><span>$60.00</span>
                        </div>
                        <div class="del-icon"><i class="fa fa-times"></i></div>
                      </li>
                      <li>
                        <div class="cart-img">
                          <a href="product-details.html"
                            ><img src="assets/img/cart/cart-2.jpg" alt=""
                          /></a>
                        </div>
                        <div class="cart-info">
                          <h4>
                            <a href="product-details.html">商品名稱</a>
                          </h4>
                          <span class="cart-qty">數量: 2</span
                          ><span>$100.00</span>
                        </div>
                        <div class="del-icon"><i class="fa fa-times"></i></div>
                      </li>
                      <li class="mini-cart-price">
                        <span class="subtotal">小計 :</span
                        ><span class="subtotal-price ml-auto">$110.00</span>
                      </li>
                      <li class="checkout-btn"><a href="#">檢視購物車</a></li>
                      <li class="checkout-btn"><a href="#">結帳</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header Area --><!-- main wrapper start -->
    <main>
      <!-- breadcrumb area end --><!-- page main wrapper start -->
      <div class="shop-main-wrapper pt-60 pb-60">
        <div class="container">
          <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
              <div class="sidebar-wrapper mt-md-60 mt-sm-60">
                <!-- single sidebar start -->
                <div class="sidebar-single">
                  <div class="sidebar-title"><h3>分類</h3></div>
                  <div class="sidebar-body">
                    <ul class="sidebar-category">
                      <li>
                        <a href="#">水果</a>
                        <ul class="children">
                          <li><a href="#">Samsome</a></li>
                          <li><a href="#">GL Stylus</a></li>
                          <li><a href="#">Uawei</a></li>
                          <li><a href="#">Cherry Berry</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">果汁</a>
                        <ul class="children">
                          <li><a href="#">Power Bank</a></li>
                          <li><a href="#">Data Cable</a></li>
                          <li><a href="#">Power Cable</a></li>
                          <li><a href="#">Battery</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">肉類</a>
                        <ul class="children">
                          <li><a href="#">Desktop Headphone</a></li>
                          <li><a href="#">Mobile Headphone</a></li>
                          <li><a href="#">Wireless Headphone</a></li>
                          <li><a href="#">LED Headphone</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">蔬菜</a>
                        <ul class="children">
                          <li><a href="#">Desktop Headphone</a></li>
                          <li><a href="#">Mobile Headphone</a></li>
                          <li><a href="#">Wireless Headphone</a></li>
                          <li><a href="#">LED Headphone</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- single sidebar end --><!-- single sidebar start -->
                <div class="sidebar-single">
                  <div class="sidebar-title"><h3>價格篩選</h3></div>
                  <div class="sidebar-body">
                    <div class="price-range-wrap">
                      <div
                        class="price-range"
                        data-min="100"
                        data-max="10000"
                      ></div>
                      <div class="range-slider">
                        <form action="#">
                          <div class="price-input">
                            <label for="amount">售價:</label>
                            <input
                              type="text"
                              id="amount"
                              style="max-width: none;"
                            />
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- single sidebar end --><!-- single sidebar start -->
                <div class="sidebar-single">
                  <div class="sidebar-title"><h3>顏色</h3></div>
                  <div class="sidebar-body">
                    <ul class="color-list">
                      <li><a href="#">gold</a><span>(5)</span></li>
                      <li><a href="#">green</a><span>(6)</span></li>
                      <li><a href="#">blue</a><span>(2)</span></li>
                      <li><a href="#">white</a><span>(1)</span></li>
                      <li><a href="#">red</a><span>(4)</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- sidebar area end --><!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
              <div class="shop-product-wrapper">
                <!-- shop product top wrap start -->
                <div class="shop-top-bar">
                  <div class="row">
                    <div
                      class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1"
                    ></div>
                    <div class="col-xl-7 col-lg-8 col-md-9 order-1 order-md-2">
                      <div class="top-bar-right">
                        <div class="product-short">
                          <p>排序 :</p>
                          <select class="nice-select" name="sortby">
                            <option value="sales">名稱 (A - Z)</option>
                            <option value="sales">名稱 (Z - A)</option>
                            <option value="rating">售價 (低 &gt; 高)</option>
                            <option value="rating">售價 (高 &gt; 低)</option>
                            <option value="date">評價 (高 &gt; 低)</option>
                            <option value="date">評價 (低 &gt; 高)</option>
                          </select>
                        </div>
                        <div class="product-amount">
                          <!-- 需要按照回傳的資料顯示正確的數字 -->
                          <p>總共 21 個結果中的 1–16</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- shop product top wrap start --><!-- product item list start -->
                <div class="shop-product-wrap list-view row">
                  <div
                    v-for="item in 4"
                    :key="item"
                    class="col-lg-4 col-md-4 col-sm-6"
                  >
                    <!-- product grid item end --><!-- product list item start -->
                    <div class="product-list-item mb-30">
                      <div class="product-thumb">
                        <!-- 商品圖片 -->
                        <a href="product-details.html"
                          ><img src="assets/img/product/product-1.jpg" alt=""
                        /></a>
                        <div class="quick-view-link">
                          <a
                            href="#"
                            data-toggle="modal"
                            data-target="#quick_view"
                            ><span data-toggle="tooltip" title="Quick view"
                              ><i class="ion-ios-eye-outline"></i></span
                          ></a>
                        </div>
                      </div>
                      <div class="product-content-list">
                        <div class="ratings">
                          <!-- 實際評分顯示 -->
                          <span><i class="ion-android-star"></i></span>
                          <span><i class="ion-android-star"></i></span>
                          <span><i class="ion-android-star"></i></span>
                          <span><i class="ion-android-star"></i></span>
                          <span><i class="ion-android-star"></i></span>
                        </div>
                        <div class="product-name">
                          <h4><a href="product-details.html">商品名稱</a></h4>
                        </div>
                        <div class="price-box">
                          <!-- 目前售價 (優惠價格)，沒有優惠價格就顯示原價！請注意樣式 -->
                          <span class="regular-price">$100.00</span>
                          <!-- 定價 (原價) -->
                          <span class="old-price"><del>$130.00</del></span>
                        </div>
                        <p>
                          <!-- 商品敘述 -->
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Fusce posuere metus vitae arcu imperdiet, id
                          aliquet ante scelerisque. Sed sit amet sem vitae urna
                          fringilla tempus.
                        </p>
                        <div class="action-link">
                          <a
                            href="#"
                            data-toggle="tooltip"
                            title="Add to cart"
                            class="add-to-cart"
                            >加入購物車</a
                          >
                        </div>
                      </div>
                    </div>
                    <!-- product list item start -->
                  </div>
                </div>
                <!-- product item list end --><!-- start pagination area -->
                <div class="paginatoin-area text-center mt-30">
                  <ul class="pagination-box">
                    <!-- 目前頁數第一頁要消失 -->
                    <li>
                      <a class="Previous" href="#">
                        <i class="ion-ios-arrow-left"></i>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <!-- 最後一頁要消失 -->
                    <li>
                      <a class="Next" href="#">
                        <i class="ion-ios-arrow-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- end pagination area -->
              </div>
            </div>
            <!-- shop main wrapper end -->
          </div>
        </div>
      </div>
      <!-- page main wrapper end -->
    </main>
    <!-- main wrapper end --><!-- Quick view modal start -->
    <div class="modal" id="quick_view">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <!-- product details inner end -->
            <div class="product-details-inner">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div
                    class="
                      product-large-slider
                      mb-20
                      slider-arrow-style slider-arrow-style__style-2
                    "
                  >
                    <div class="pro-large-img">
                      <img
                        src="assets/img/product/product-details-img1.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-large-img">
                      <img
                        src="assets/img/product/product-details-img2.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-large-img">
                      <img
                        src="assets/img/product/product-details-img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-large-img">
                      <img
                        src="assets/img/product/product-details-img4.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div
                    class="
                      pro-nav
                      slick-padding_2
                      slider-arrow-style slider-arrow-style__style-2
                    "
                  >
                    <div class="pro-nav-thumb">
                      <img
                        src="assets/img/product/product-details-img1.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-nav-thumb">
                      <img
                        src="assets/img/product/product-details-img2.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-nav-thumb">
                      <img
                        src="assets/img/product/product-details-img3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="pro-nav-thumb">
                      <img
                        src="assets/img/product/product-details-img4.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-6">
                  <div class="product-details-des">
                    <div class="product-content-list">
                      <div class="ratings">
                        <span><i class="ion-android-star"></i></span
                        ><span><i class="ion-android-star"></i></span
                        ><span><i class="ion-android-star"></i></span
                        ><span><i class="ion-android-star"></i></span
                        ><span><i class="ion-android-star"></i></span>
                      </div>
                      <div class="product-name">
                        <h4>
                          <a href="product-details.html">Organic vegetables</a>
                        </h4>
                      </div>
                      <div class="price-box">
                        <span class="regular-price">$160.00</span
                        ><span class="old-price"><del>$130.00</del></span>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam fringilla augue nec est tristique auctor. Donec non
                        est at libero vulputate rutrum. Morbi ornare lectus quis
                        justo gravida semper.
                      </p>
                      <div class="action-link mb-20">
                        <a
                          href="#"
                          data-toggle="tooltip"
                          title="Add to cart"
                          class="add-to-cart"
                          >add to cart</a
                        ><a href="#" data-toggle="tooltip" title="Wishlist"
                          ><i class="ion-android-favorite-outline"></i></a
                        ><a href="#" data-toggle="tooltip" title="Compare"
                          ><i class="ion-ios-shuffle"></i
                        ></a>
                      </div>
                      <div class="quantity mb-20">
                        <div class="pro-qty">
                          <input type="text" value="1" />
                        </div>
                      </div>
                      <div class="availability mb-20">
                        <h5>Availability:</h5>
                        <span>10 in stock</span>
                      </div>
                      <div class="share-icon">
                        <h5>share:</h5>
                        <a href="#"><i class="fa fa-facebook"></i></a
                        ><a href="#"><i class="fa fa-twitter"></i></a
                        ><a href="#"><i class="fa fa-pinterest"></i></a
                        ><a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- product details inner end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  head() {
    return {
      link: [
        { rel: "stylesheet", href: "/assets/css/plugins.css" },
        { rel: "stylesheet", href: "/assets/css/vendor.css" },
        { rel: "stylesheet", href: "/assets/css/style.css" }
      ],
      script: [
        { src: "/assets/js/modernizr-2.8.3.min.js" },
        { src: "/assets/js/vendor.js", body: true },
        { src: "/assets/js/plugins.js", body: true },
        { src: "/assets/js/active.js", body: true }
      ]
    };
  }
};
</script>
