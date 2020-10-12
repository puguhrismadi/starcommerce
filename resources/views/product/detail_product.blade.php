@extends('index')
@section('title','Laptop')
@section('content')
    
        <section class="uk-section uk-section-small">
          <div class="uk-container">
         
               
          
            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
              <div class="uk-text-center">
                <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="catalog.html">Catalog</a></li>
                  <li><a href="category.html">Laptops &amp; Tablets</a></li>
                  <li><a href="subcategory.html">Laptops</a></li>
                  <li>
                    <span>{{$produk->nama}} </span
                    >
                  </li>
                </ul>
                <h1 class="uk-margin-small-top uk-margin-remove-bottom">
                  {{$produk->nama}}
                </h1>
              </div>
              <div>
                <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                  <div>
                    <div
                      class="uk-card uk-card-default uk-card-small tm-ignore-container"
                    >
                      <div
                        class="uk-grid-small uk-grid-collapse uk-grid-match"
                        uk-grid
                      >
                        <div class="uk-width-1-1 uk-width-expand@m">
                          <div
                            class="uk-grid-collapse uk-child-width-1-1"
                            uk-slideshow="finite: true; ratio: 4:3;"
                            uk-grid
                          >
                            <div>
                              <ul class="uk-slideshow-items" uk-lightbox>
                                <li>
                                  <a
                                    class="uk-card-body tm-media-box tm-media-box-zoom"
                                    href="{{Voyager::image($produk->gambar1)}}"
                                    ><figure class="tm-media-box-wrap">
                                      <img
                                        src="{{Voyager::image($produk->gambar1)}}"
                                        alt='{{$produk->gambar1}}'
                                      /></figure
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    class="uk-card-body tm-media-box tm-media-box-zoom"
                                    href="{{Voyager::image($produk->gambar2)}}"
                                    ><figure class="tm-media-box-wrap">
                                      <img
                                        src="{{Voyager::image($produk->gambar2)}}"
                                        alt='{{$produk->gambar2}}'
                                      /></figure
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    class="uk-card-body tm-media-box tm-media-box-zoom"
                                    href="{{Voyager::image($produk->gambar3)}}"
                                    ><figure class="tm-media-box-wrap">
                                      <img
                                        src="{{Voyager::image($produk->gambar3)}}"
                                        alt='{{$produk->gambar3}}'
                                      /></figure
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    class="uk-card-body tm-media-box tm-media-box-zoom"
                                    href="{{Voyager::image($produk->gambar3)}}"
                                    ><figure class="tm-media-box-wrap">
                                      <img
                                        src="{{Voyager::image($produk->gambar3)}}"
                                        alt='{{$produk->gambar3}}'
                                      /></figure
                                  ></a>
                                </li>
                               
                              </ul>
                            </div>
                            <div>
                              <div class="uk-card-body uk-flex uk-flex-center">
                                <div class="uk-width-1-2 uk-visible@s">
                                  <div uk-slider="finite: true">
                                    <div class="uk-position-relative">
                                      <div class="uk-slider-container ">
                                        <ul
                                          class="tm-slider-items uk-slider-items uk-child-width-1-3 uk-grid uk-grid-small "
                                        >
                                          <li uk-slideshow-item="0">
                                            <div class="tm-ratio tm-ratio-1-1">
                                              <a
                                                class="tm-media-box tm-media-box-frame"
                                                ><figure
                                                  class="tm-media-box-wrap"
                                                >
                                                  <img
                                                    src="{{Voyager::image($produk->gambar1)}}"
                                                    alt='{{$produk->gambar1}}'
                                                  /></figure
                                              ></a>
                                            </div>
                                          </li>
                                          <li uk-slideshow-item="1">
                                            <div class="tm-ratio tm-ratio-1-1">
                                              <a
                                                class="tm-media-box tm-media-box-frame"
                                                href="#"
                                                ><figure
                                                  class="tm-media-box-wrap"
                                                >
                                                  <img
                                                    src="{{Voyager::image($produk->gambar2)}}"
                                                    alt='{{$produk->gambar2}}'
                                                  /></figure
                                              ></a>
                                            </div>
                                          </li>
                                          <li uk-slideshow-item="2">
                                            <div class="tm-ratio tm-ratio-1-1">
                                              <a
                                                class="tm-media-box tm-media-box-frame"
                                                href="#"
                                                ><figure
                                                  class="tm-media-box-wrap"
                                                >
                                                  <img
                                                    src="{{Voyager::image($produk->gambar3)}}"
                                                    alt='{{$produk->gambar3}}'
                                                  /></figure
                                              ></a>
                                            </div>
                                          </li>
                                        
                                        </ul>
                                        <br>
                                        <div>
                                          <a
                                            class="uk-position-center-left-out uk-position-small"
                                            href="#"
                                            uk-slider-item="previous"
                                            uk-slidenav-previous
                                          ></a
                                          ><a
                                            class="uk-position-center-right-out uk-position-small"
                                            href="#"
                                            uk-slider-item="next"
                                            uk-slidenav-next
                                          ></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <ul
                                  class="uk-slideshow-nav uk-dotnav uk-hidden@s"
                                ></ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="uk-width-1-1 uk-width-1-3@m tm-product-info"
                        >
                       
                            
                       
                          <div class="uk-card-body">
                            <div>
                              @foreach ($brand as $brand)
                             
                              @if ($produk->brands_id == $brand->id)
                              <a href="#" title="{{$brand->nama}}"
                                ><img
                                  src="{{Voyager::image($brand->image_brand)}}"
                                  alt="{{$brand->nama}}"
                                  style="height: 40px"
                              /></a>

                              @endif
                                   
                              @endforeach
                            </div>
                            
                           
                            <div class="uk-margin">
                              <div
                                class="uk-padding-small uk-background-primary-lighten uk-border-rounded"
                              >
                                <div
                                  class="uk-grid-small uk-child-width-1-1"
                                  uk-grid
                                >
                                  <div>
                                    <div class="uk-text-meta">Harga :</div>
                                    
                                    <div class="tm-product-price">@currency($produk->harga)</div>
                                  </div>
                                  <div>
                                    <div class="uk-grid-small" uk-grid>
                                      <div>
                                        <a
                                          onclick="increment(-1, 'product-1')"
                                          uk-icon="icon: minus; ratio: .75"
                                        ></a
                                        ><input
                                          class="uk-input tm-quantity-input"
                                          id="product-1"
                                          type="text"
                                          maxlength="3"
                                          value="1"
                                        /><a
                                          onclick="increment(+1, 'product-1')"
                                          uk-icon="icon: plus; ratio: .75"
                                        ></a>
                                      </div>
                                      <div>
                                        <button
                                          class="uk-button uk-button-primary tm-product-add-button tm-shine js-add-to-cart"
                                        >
                                          add to cart
                                        </button>
                                      </div>
                                     
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="uk-margin">
                              <div
                                class="uk-padding-small uk-background-muted uk-border-rounded"
                              >
                                <div
                                  class="uk-grid-small uk-child-width-1-1 uk-text-small"
                                  uk-grid
                                >
                                  <div>
                                    <div class="uk-grid-collapse" uk-grid>
                                      <span
                                        class="uk-margin-xsmall-right"
                                        uk-icon="cart"
                                      ></span>
                                      <div>
                                        <div class="uk-text-bolder">
                                          Delivery
                                        </div>
                                        <div
                                          class="uk-text-xsmall uk-text-muted"
                                        >
                                          In stock, free, tomorrow
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div>
                                    <div class="uk-grid-collapse" uk-grid>
                                      <span
                                        class="uk-margin-xsmall-right"
                                        uk-icon="location"
                                      ></span>
                                      <div>
                                        <div class="uk-text-bolder">
                                          Pick up from store
                                        </div>
                                        <div
                                          class="uk-text-xsmall uk-text-muted"
                                        >
                                          In stock, free, tomorrow
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @if ($detailflag!=1)
                            <div class="uk-margin">
                              <ul
                                class="uk-list uk-text-small uk-margin-remove"
                              >
                                <li>
                                  <span class="uk-text-muted"
                                    >Diagonal display: </span
                                  ><span>{{$produk->display}}</span>
                                </li>
                                <li>
                                  <span class="uk-text-muted">CPU: </span
                                  ><span>{{$produk->spek_processor}}</span>
                                </li>
                                <li>
                                  <span class="uk-text-muted">RAM: </span
                                  ><span>{{$produk->spek_ram}}</span>
                                </li>
                                <li>
                                  <span class="uk-text-muted">Video Card: </span
                                  ><span>{{$produk->spek_vga}}</span>
                                </li>
                              </ul>
                              <div class="uk-margin-small-top">
                                <a
                                  class="uk-link-heading js-scroll-to-description"
                                  href="#description"
                                  onclick="UIkit.switcher('.js-product-switcher').show(1);"
                                  ><span class="tm-pseudo"
                                    >Detailed specifications</span
                                  ><span
                                    class="uk-margin-xsmall-left"
                                    uk-icon="icon: chevron-down; ratio: .75;"
                                  ></span
                                ></a>
                              </div>
                            </div>
                            @endif
                          </div>
                        </div>
                        <div
                          class="uk-width-1-1 tm-product-description"
                          id="description"
                        >
                          <div class="uk-card-body">
                            <section>
                                <h2>Specifications</h2>
                                <table
                                  class="uk-table uk-table-divider uk-table-justify uk-table-responsive"
                                >
                                <tr>
                                  <th class="uk-width-medium">Description</th>
                                  <td class="uk-table-expand">
                                    {!!$produk->deskripsi!!}
                                  </td>
                                </tr>
                                @if ($detailflag!=1)
                                  <tr>
                                    <th class="uk-width-medium">Processor</th>
                                    <td class="uk-table-expand">
                                      {{$produk->spek_processor}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="uk-width-medium">
                                      Base Clock Speed
                                    </th>
                                    <td class="uk-table-expand">
                                      {{$produk->spek_base_clock_speed}}
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <th class="uk-width-medium">
                                      Total Installed Memory
                                    </th>
                                    <td class="uk-table-expand">{{$produk->spek_ram}}</td>
                                  </tr>
                                  
                                  <tr>
                                    <th class="uk-width-medium">
                                      Memory Speed
                                    </th>
                                    <td class="uk-table-expand">
                                      2133&nbsp;MHz
                                    </td>
                                  </tr>
                                 
                                 
                                  <tr>
                                    <th class="uk-width-medium">Display / Monitor</th>
                                    <td class="uk-table-expand">
                                      {{$produk->spek_vga}}
                                    </td>
                                  </tr>  
                                  <tr>
                                    <th class="uk-width-medium">GPU</th>
                                    <td class="uk-table-expand">
                                      {{$produk->display}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="uk-width-medium">Storage</th>
                                    <td class="uk-table-expand">
                                      {{$produk->spek_storage}}
                                    </td>
                                  </tr>
                                       
                                  @endif
                                  

                                </table>
                                
                              </section>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row"><br></div>
                  <!-- Related items-->
                 @include('product.relatedproduct')
                  {{-- end related product --}}
                </div>
               
              </div>
            </div>
           
          </div>
        </section>
      
      




@endsection
