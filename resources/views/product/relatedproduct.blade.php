<section>
    <div uk-slider="finite: true">
      <div
        class="uk-grid-small uk-flex-middle uk-margin-bottom"
        uk-grid
      >
        <h2
          class="uk-width-expand uk-text-center uk-text-left@s"
        >
          Related Product
        </h2>
        <div class="uk-visible@s">
          <a
            class="tm-slidenav"
            href="#"
            uk-slider-item="previous"
            uk-slidenav-previous
          ></a
          ><a
            class="tm-slidenav"
            href="#"
            uk-slider-item="next"
            uk-slidenav-next
          ></a>
        </div>
      </div>
      <div>
        <div
          class="uk-card uk-card-default uk-card-small tm-ignore-container"
        >
          <div class="uk-position-relative">
            <div class="uk-slider-container">
              <div
                class="uk-slider-items uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid"
              >
                @foreach ($related as $item)
                    
                
                <article class="tm-product-card">
                  <div class="tm-product-card-media">
                    <div class="tm-ratio tm-ratio-4-3">
                      <a
                        class="tm-media-box"
                        @foreach ($kategori as $ktg)
                                @if ($ktg->id == $item->kategoriproduks_id)
                                href="{{url("detail-produk/$ktg->slug-$item->id")}}" 
                                
                                @endif
                            @endforeach
                        ><figure class="tm-media-box-wrap">
                          <img
                            src="{{Voyager::image($item->gambar1)}}"
                            alt="{{$item->nama}}"
                          /></figure
                      ></a>
                    </div>
                  </div>
                  <div class="tm-product-card-body">
                    <div class="tm-product-card-info">
                      <div
                        class="uk-text-meta uk-margin-xsmall-bottom"
                      >
                        Laptop
                      </div>
                      <h3 class="tm-product-card-title">
                        <a
                          class="uk-link-heading"
                          @foreach ($kategori as $ktg)
                          @if ($ktg->id == $item->kategoriproduks_id)
                          href="{{url("detail-produk/$ktg->slug-$item->id")}}" 
                          
                          @endif
                      @endforeach
                          >{{$item->nama}}</a
                        >
                      </h3>
                      <ul
                        class="uk-list uk-text-small tm-product-card-properties"
                      >
                        <li>
                          <span class="uk-text-muted"
                            >Diagonal display: </span
                          ><span>13.9"</span>
                        </li>
                        <li>
                          <span class="uk-text-muted"
                            >CPU: </span
                          ><span
                            >Intel®&nbsp;Core™ i7 8550U</span
                          >
                        </li>
                        <li>
                          <span class="uk-text-muted"
                            >RAM: </span
                          ><span>16&nbsp;GB</span>
                        </li>
                        <li>
                          <span class="uk-text-muted"
                            >Video Card: </span
                          ><span>Intel® HD Graphics 620</span>
                        </li>
                      </ul>
                    </div>
                    <div class="tm-product-card-shop">
                      <div class="tm-product-card-prices">
                        <div class="tm-product-card-price">
                         @currency($item->harga)
                        </div>
                      </div>
                      <div class="tm-product-card-add">
                        
                        <button
                          class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"
                        >
                          <span
                            class="tm-product-card-add-button-icon"
                            uk-icon="cart"
                          ></span
                          ><span
                            class="tm-product-card-add-button-text"
                            >add to cart</span
                          >
                        </button>
                      </div>
                    </div>
                  </div>
                </article>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <ul
          class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top uk-hidden@s"
        ></ul>
      </div>
    </div>
  </section>