@extends('index')
@section('title','Laptop')
@section('content')


<main>
    <section class="uk-position-relative uk-visible-toggle uk-light uk-slideshow"
        uk-slideshow="min-height: 300; max-height: 600;">
        <ul class="uk-slideshow-items" style="height: 531px;">
            <li style="background-color: rgb(11, 10, 18); transform: translateX(0px);"
                class="uk-active uk-transition-active"><a href="#">
                    <figure class="uk-container uk-height-1-1"><img src="images/promo/macbook-new.jpg" alt="New Macbook"
                            width="1200" height="600" uk-cover="" class="uk-cover"
                            style="width: 1064px; height: 532px;"></figure>
                </a></li>
            <li style="background-color: #ce071e"><a href="#">
                    <figure class="uk-container uk-height-1-1"><img src="images/promo/iphone.jpg" alt="iPhone"
                            width="1200" height="600" uk-cover="" class="uk-cover"></figure>
                </a></li>
            <li style="background-color: #1f2024"><a href="#">
                    <figure class="uk-container uk-height-1-1"><img src="images/promo/ipad.jpg" alt="iPad" width="1200"
                            height="600" uk-cover="" class="uk-cover"></figure>
                </a></li>
        </ul><a
            class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav"
            href="#" uk-slideshow-item="previous" uk-slidenav-previous=""></a><a
            class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav"
            href="#" uk-slideshow-item="next" uk-slidenav-next=""></a>
        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-slideshow-nav uk-dotnav">
                <li uk-slideshow-item="0" class="uk-active"><a href="#"></a></li>
                <li uk-slideshow-item="1"><a href="#"></a></li>
                <li uk-slideshow-item="2"><a href="#"></a></li>
            </ul>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m" uk-grid>
                @foreach ($kategori as $ktg)

                <div>
                    <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="subcategory.html">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand"
                                        src="{{Voyager::image($ktg->image_category)}}" alt="{{$ktg->nama}}"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">{{$ktg->nama}}</div>
                            <div class="uk-text-meta uk-text-xsmall uk-text-truncate">{{$ktg->deskripsi}}</div>
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
            <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                    href="catalog.html"><span>see all categories</span><span
                        uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
        </div>
    </section>
    {{-- @dump($laptopk) --}}
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <h2 class="uk-text-center">Trending Items</h2>
            <div class="uk-card uk-card-default tm-ignore-container">
                <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>
                    {{-- produkstart --}}
                    @foreach ($laptopk as $produk)
                    <article class="tm-product-card">
                        <div class="tm-product-card-media">
                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                    <figure class="tm-media-box-wrap"><img src="{{Voyager::image($produk->gambar1)}}"
                                            alt="{{$produk->gambar1}}" /></figure>
                                </a></div>
                        </div>
                     
                        <div class="tm-product-card-body">
                            <div class="tm-product-card-info">
                                <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                        href="product.html">{{$produk->nama}}</a></h3>
                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                    <li><span class="uk-text-muted">Diagonal display: </span><span>13.9"</span>
                                    </li>
                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7
                                            8550U</span></li>
                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics
                                            620</span></li>
                                </ul>
                            </div>
                            <div class="tm-product-card-shop">
                                <div class="tm-product-card-prices">
                                    <div class="tm-product-card-price">@currency($produk->harga)</div>
                                </div>
                                <div class="tm-product-card-add">
                                    <div class="uk-text-meta tm-product-card-actions">

                                    </div><button
                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                            class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                            class="tm-product-card-add-button-text">add to cart</span></button>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    {{-- produkend --}}
                </div>
            </div>
            <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                    href="subcategory.html"><span>shop all</span><span
                        uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <h2 class="uk-text-center">Popular Brands</h2>
            <div class="uk-margin-medium-top" uk-slider="finite: true">
                <div class="uk-position-relative">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-visible@m"><a href="#" uk-slidenav-previous uk-slider-item="previous"></a></div>
                        <div class="uk-width-expand uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-6@s uk-grid uk-grid-large">
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Apple">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/apple.svg"
                                                    alt="Apple"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Samsung">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/samsung.svg"
                                                    alt="Samsung"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Sony">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/sony.svg"
                                                    alt="Sony"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Microsoft">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/microsoft.svg"
                                                    alt="Microsoft"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Intel">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/intel.svg"
                                                    alt="Intel"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="HP">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/hp.svg" alt="HP">
                                            </figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="LG">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/lg.svg" alt="LG">
                                            </figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Lenovo">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/lenovo.svg"
                                                    alt="Lenovo"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="ASUS">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/asus.svg"
                                                    alt="ASUS"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Acer">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/acer.svg"
                                                    alt="Acer"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Dell">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/dell.svg"
                                                    alt="Dell"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box tm-grayscale" href="#" title="Canon">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/canon.svg"
                                                    alt="Canon"></figure>
                                        </a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-visible@m"><a href="#" uk-slider-item="next" uk-slidenav-next></a></div>
                    </div>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top uk-hidden@m"></ul>
            </div>
            <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                    href="brands.html"><span>see all brands</span><span
                        uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
        </div>
    </section>
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <h2 class="uk-text-center">Blog</h2>
            <div class="uk-grid-medium uk-grid-match uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                @foreach ($blog as $item)
                <div><a href="{{ url("/artikel/".$item->slug)}}">
                        <article
                            class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                            <div class="tm-ratio tm-ratio-16-9">
                                <figure class="tm-media-box uk-cover-container uk-margin-remove"><img
                                        src="{{Voyager::image($item->image)}}"
                                        alt="Everything You Need to Know About the MacBook Pro" uk-cover="uk-cover" />
                                </figure>
                            </div>
                            <div class="uk-card-body">
                                <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom">
                                        <time>{{$item->created_at}}</time></div>
                                    <div>
                                        <h3 class="uk-margin-remove">{{$item->title}}</h3>
                                    </div>
                                    <div class="uk-margin-small-top">
                                        <p>{{$item->excerpt}}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>


                @endforeach </div>
            <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                    href="blog.html"><span>see all articles</span><span
                        uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <section>
                    <h2 class="uk-text-center uk-text-left@s">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at neque vulputate,
                        vestibulum magna in, accumsan urna. Nulla feugiat ipsum ex, molestie porttitor nibh
                        faucibus at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit
                        lorem ut finibus semper. Donec ac vehicula erat, nec consequat massa.</p>
                    <p>Quisque rhoncus fermentum sapien id congue. Nam at rutrum turpis. Aliquam sagittis
                        imperdiet tortor vel dignissim. Ut ipsum nunc, egestas et odio id, vestibulum posuere
                        orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.</p>
                    <div class="uk-text-center uk-text-left@s"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                            href="about.html"><span>read
                                more</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                </section>
                <section>
                    <h2 class="uk-text-center uk-text-left@s">Latest News</h2>
                    <ul class="uk-list uk-list-small uk-list-divider">
                        <li>
                            <article class="uk-article">
                                <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom"><time>June 4,
                                            2018</time></div>
                                    <h3 class="uk-h4 uk-margin-remove"><a class="uk-link-heading"
                                            href="article.html">Highlights from WWDC</a></h3>
                                    <div class="uk-margin-xsmall-top uk-text-small">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget
                                            sodales. Cras volutpat efficitur ornare.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="uk-article">
                                <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom"><time>June 4,
                                            2018</time></div>
                                    <h3 class="uk-h4 uk-margin-remove"><a class="uk-link-heading"
                                            href="article.html">Apple introduces macOS Mojave</a></h3>
                                    <div class="uk-margin-xsmall-top uk-text-small">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget
                                            sodales. Cras volutpat efficitur ornare.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="uk-article">
                                <div class="uk-article-body">
                                    <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May 29,
                                            2018</time></div>
                                    <h3 class="uk-h4 uk-margin-remove"><a class="uk-link-heading"
                                            href="article.html">iOS 11.4 brings stereo pairs and multi-room
                                            audio with AirPlay 2</a></h3>
                                    <div class="uk-margin-xsmall-top uk-text-small">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget
                                            sodales. Cras volutpat efficitur ornare.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                    <div class="uk-margin uk-text-center uk-text-left@s"><a
                            class="uk-link-muted uk-text-uppercase tm-link-to-all" href="news.html"><span>see
                                all news</span><span uk-icon="icon: chevron-right; ratio: .75;"></span></a>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-primary uk-section-small uk-light">
        <div class="uk-container">
            <div class="uk-text-center">
                <div class="uk-h2 uk-margin-remove">Subscribe for updates</div>
                <div>Be aware of new products and special offers.</div>
            </div>
            <div class="uk-margin">
                <form>
                    <div class="uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-1-1 uk-width-medium@s">
                            <div class="uk-inline uk-width-1-1"><span class="uk-form-icon" uk-icon="mail"></span><input
                                    class="uk-input" type="email" placeholder="Your email" required></div>
                        </div>
                        <div><button class="uk-button uk-button-primary">subscribe</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div uk-slider>
                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: star; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Mauris placerat</div>
                                <div class="uk-text-meta">Donec mollis nibh dolor, sit amet auctor</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: receiver; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Lorem ipsum</div>
                                <div class="uk-text-meta">Sit amet, consectetur adipiscing elit</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: location; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Proin pharetra</div>
                                <div class="uk-text-meta">Nec quam a fermentum ut viverra</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: comments; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Praesent ultrices</div>
                                <div class="uk-text-meta">Praesent ultrices, orci nec finibus</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                            <div><span uk-icon="icon: happy; ratio: 2.5;"></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Duis condimentum</div>
                                <div class="uk-text-meta">Pellentesque eget varius arcu</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
            </div>
        </div>
    </section>
</main>


@endsection
