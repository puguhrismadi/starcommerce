<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/uikit.js"></script>
    <script src="scripts/uikit-icons.js"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
    @include('parsial.header')
        <main>
            <section class="uk-position-relative uk-visible-toggle uk-light uk-slideshow"
                uk-slideshow="min-height: 300; max-height: 600;">
                <ul class="uk-slideshow-items" style="height: 531px;">
                    <li style="background-color: rgb(11, 10, 18); transform: translateX(0px);"
                        class="uk-active uk-transition-active"><a href="#">
                            <figure class="uk-container uk-height-1-1"><img src="images/promo/macbook-new.jpg"
                                    alt="New Macbook" width="1200" height="600" uk-cover="" class="uk-cover"
                                    style="width: 1064px; height: 532px;"></figure>
                        </a></li>
                    <li style="background-color: #ce071e"><a href="#">
                            <figure class="uk-container uk-height-1-1"><img src="images/promo/iphone.jpg" alt="iPhone"
                                    width="1200" height="600" uk-cover="" class="uk-cover"></figure>
                        </a></li>
                    <li style="background-color: #1f2024"><a href="#">
                            <figure class="uk-container uk-height-1-1"><img src="images/promo/ipad.jpg" alt="iPad"
                                    width="1200" height="600" uk-cover="" class="uk-cover"></figure>
                        </a></li>
                </ul><a
                    class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav"
                    href="#" uk-slideshow-item="previous" uk-slidenav-previous=""><svg width="14" height="24"
                        viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                        <polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 ">
                        </polyline>
                    </svg></a><a
                    class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav"
                    href="#" uk-slideshow-item="next" uk-slidenav-next=""><svg width="14" height="24"
                        viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                        <polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 ">
                        </polyline>
                    </svg></a>
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
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/laptops.png" alt="Laptops"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Laptops</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $149</div>
                                </div>
                            </a></div>
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/smartphones.png" alt="Smartphones"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Smartphones</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $99</div>
                                </div>
                            </a></div>
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/tablets.png" alt="Tablets"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Tablets</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $129</div>
                                </div>
                            </a></div>
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/watches.png" alt="Smart Watches"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Smart Watches</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $49</div>
                                </div>
                            </a></div>
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/consoles.png" alt="Gaming Consoles"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Gaming Consoles</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $399</div>
                                </div>
                            </a></div>
                        <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                                href="subcategory.html">
                                <div class="tm-ratio tm-ratio-4-3">
                                    <div class="tm-media-box">
                                        <figure class="tm-media-box-wrap"><img class="item-brand"
                                                src="images/catalog/cameras.png" alt="Cameras"></figure>
                                    </div>
                                </div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-text-truncate">Cameras</div>
                                    <div class="uk-text-meta uk-text-xsmall uk-text-truncate">from $129</div>
                                </div>
                            </a></div>
                    </div>
                    <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                            href="catalog.html"><span>see all categories</span><span
                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                </div>
            </section>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <h2 class="uk-text-center">Trending Items</h2>
                    <div class="uk-card uk-card-default tm-ignore-container">
                        <div class="uk-grid-collapse uk-child-width-1-3 uk-child-width-1-4@m tm-products-grid" uk-grid>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-warning">top selling</span><span
                                                    class="uk-label uk-label-danger">trade-in</span></div>
                                            <figure class="tm-media-box-wrap"><img src="images/products/1/1-medium.jpg"
                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB
                                                (Silver)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>15.4"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i7</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon Pro
                                                    555</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices"><del class="uk-text-meta">$1899.00</del>
                                            <div class="tm-product-card-price">$1599.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-success">new</span><span
                                                    class="uk-label uk-label-danger">trade-in</span></div>
                                            <figure class="tm-media-box-wrap"><img src="images/products/2/2-medium.jpg"
                                                    alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose
                                                Gold)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>12"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i5</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics
                                                    615</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices">
                                            <div class="tm-product-card-price">$1549.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <figure class="tm-media-box-wrap"><img src="images/products/3/3-medium.jpg"
                                                    alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK
                                                (Copper)</a></h3>
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
                                            <div class="tm-product-card-price">$1199.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-warning">top selling</span></div>
                                            <figure class="tm-media-box-wrap"><img src="images/products/4/4-medium.jpg"
                                                    alt="ASUS Zenbook UX330UA-FC020T (Rose Gold)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">ASUS Zenbook UX330UA-FC020T (Rose Gold)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i7-6500U</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics
                                                    520</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices">
                                            <div class="tm-product-card-price">$749.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <figure class="tm-media-box-wrap"><img src="images/products/5/5-medium.jpg"
                                                    alt="Dell XPS 15 9560-8968 (Silver)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Dell XPS 15 9560-8968 (Silver)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>15.6"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™ i7
                                                    7700HQ</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>NVIDIA GeForce GTX
                                                    960M</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices"><del class="uk-text-meta">$999.00</del>
                                            <div class="tm-product-card-price">$949.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-danger">trade-in</span></div>
                                            <figure class="tm-media-box-wrap"><img src="images/products/6/6-medium.jpg"
                                                    alt="Apple MacBook Air 13&quot; MQD32LL/A 128GB (Silver)" />
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Apple MacBook Air 13&quot; MQD32LL/A 128GB
                                                (Silver)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i5</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics
                                                    6000</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices">
                                            <div class="tm-product-card-price">$849.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <figure class="tm-media-box-wrap"><img src="images/products/7/7-medium.jpg"
                                                    alt="Dell Inspiron 5378-2063 (Gray)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Dell Inspiron 5378-2063 (Gray)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i3-7100U</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>4&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">HDD Capacity: </span><span>1&nbsp;TB</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices"><del class="uk-text-meta">$599.00</del>
                                            <div class="tm-product-card-price">$579.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-success">new</span></div>
                                            <figure class="tm-media-box-wrap"><img src="images/products/8/8-medium.jpg"
                                                    alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)" /></figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Lenovo Yoga 720-13IKB 80X60059RK (Silver)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>13.3"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i5-7200U</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD Graphics
                                                    620</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices">
                                            <div class="tm-product-card-price">$1099.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
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
                                <div class="uk-visible@m"><a href="#" uk-slidenav-previous
                                        uk-slider-item="previous"></a></div>
                                <div class="uk-width-expand uk-slider-container">
                                    <ul
                                        class="uk-slider-items uk-child-width-1-3 uk-child-width-1-6@s uk-grid uk-grid-large">
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Apple">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/apple.svg"
                                                            alt="Apple"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Samsung">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/samsung.svg" alt="Samsung"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Sony">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/sony.svg"
                                                            alt="Sony"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Microsoft">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/microsoft.svg" alt="Microsoft"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Intel">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/intel.svg"
                                                            alt="Intel"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#" title="HP">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/hp.svg"
                                                            alt="HP"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#" title="LG">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/lg.svg"
                                                            alt="LG"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Lenovo">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/brands/lenovo.svg" alt="Lenovo"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="ASUS">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/asus.svg"
                                                            alt="ASUS"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Acer">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/acer.svg"
                                                            alt="Acer"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Dell">
                                                    <figure class="tm-media-box-wrap"><img src="images/brands/dell.svg"
                                                            alt="Dell"></figure>
                                                </a></div>
                                        </li>
                                        <li>
                                            <div class="tm-ratio tm-ratio-16-9"><a
                                                    class="uk-link-muted tm-media-box tm-grayscale" href="#"
                                                    title="Canon">
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
                        <div><a href="article.html">
                                <article
                                    class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                    <div class="tm-ratio tm-ratio-16-9">
                                        <figure class="tm-media-box uk-cover-container uk-margin-remove"><img
                                                src="images/articles/macbook-photo.jpg"
                                                alt="Everything You Need to Know About the MacBook Pro"
                                                uk-cover="uk-cover" /></figure>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-article-body">
                                            <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May 21,
                                                    2018</time></div>
                                            <div>
                                                <h3 class="uk-margin-remove">Everything You Need to Know About the
                                                    MacBook Pro</h3>
                                            </div>
                                            <div class="uk-margin-small-top">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                                    sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget
                                                    sodales. Cras volutpat efficitur ornare.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a></div>
                        <div><a href="article.html">
                                <article
                                    class="uk-card uk-card-default uk-card-small uk-article uk-overflow-hidden uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                    <div class="tm-ratio tm-ratio-16-9">
                                        <figure class="tm-media-box uk-cover-container uk-margin-remove"><img
                                                src="images/articles/macos.jpg" alt="Apple introduces macOS Mojave"
                                                uk-cover="uk-cover" /></figure>
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-article-body">
                                            <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May 21,
                                                    2018</time></div>
                                            <div>
                                                <h3 class="uk-margin-remove">Apple introduces macOS Mojave</h3>
                                            </div>
                                            <div class="uk-margin-small-top">
                                                <p>Praesent consequat justo eu massa malesuada posuere. Donec ultricies
                                                    tincidunt nisl, sed euismod nulla venenatis maximus. Maecenas sit
                                                    amet semper tellus. Pellentesque imperdiet finibus sapien, a
                                                    consectetur eros auctor a.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a></div>
                    </div>
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
                            <div class="uk-text-center uk-text-left@s"><a
                                    class="uk-link-muted uk-text-uppercase tm-link-to-all" href="about.html"><span>read
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
                                    <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"
                                            uk-icon="mail"></span><input class="uk-input" type="email"
                                            placeholder="Your email" required></div>
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
                        <ul
                            class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
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
        <footer>
            <section class="uk-section uk-section-secondary uk-section-small uk-light">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-4@m" uk-grid>
                        <div><a class="uk-logo" href="index.html"><img src="images/logo-inverse.svg" width="90"
                                    height="32" alt="Logo"></a>
                            <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                                mauris eros. Nulla quis ante sed tortor efficitur facilisis.</p>
                            <ul class="uk-iconnav">
                                <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                                <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                                <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                                <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                            </ul>
                        </div>
                        <div>
                            <nav class="uk-grid-small uk-child-width-1-2" uk-grid>
                                <div>
                                    <ul class="uk-nav uk-nav-default">
                                        <li><a href="catalog.html">Catalog</a></li>
                                        <li><a href="brands.html">Brands</a></li>
                                        <li><a href="delivery.html">Delivery</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="#">Payment</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-nav uk-nav-default">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="news.html">News</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div>
                            <ul class="uk-list uk-text-small">
                                <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                            uk-icon="receiver"></span><span class="tm-pseudo">8 800 799 99 99</span></a>
                                </li>
                                <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                            uk-icon="mail"></span><span class="tm-pseudo">example@example.com</span></a>
                                </li>
                                <li>
                                    <div class="uk-text-muted"><span class="uk-margin-small-right"
                                            uk-icon="location"></span><span>St.&nbsp;Petersburg,
                                            Nevsky&nbsp;Prospect&nbsp;28</span></div>
                                </li>
                                <li>
                                    <div class="uk-text-muted"><span class="uk-margin-small-right"
                                            uk-icon="clock"></span><span>Daily 10:00–22:00</span></div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <form class="uk-form-stacked"><label>
                                    <div class="uk-form-label uk-text-muted">Subscribe for updates</div>
                                    <div class="uk-inline uk-width-1-1"><a class="uk-form-icon uk-form-icon-flip"
                                            href="#" uk-icon="mail"></a><input class="uk-input" type="email"
                                            placeholder="Your email" required></div>
                                </label></form>
                            <div class="uk-margin uk-text-small uk-text-muted">Shopping Categories icons by Jaro Sigrist
                                from Noun Project</div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <div id="nav-offcanvas" uk-offcanvas="overlay: true">
            <aside class="uk-offcanvas-bar uk-padding-remove">
                <div class="uk-card uk-card-default uk-card-small tm-shadow-remove">
                    <header class="uk-card-header uk-flex uk-flex-middle">
                        <div><a class="uk-link-muted uk-text-bold" href="#">8 800 799 99 99</a>
                            <div class="uk-text-xsmall uk-text-muted" style="margin-top: -2px;">
                                <div>St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28</div>
                                <div>Daily 10:00–22:00</div>
                            </div>
                        </div>
                    </header>
                    <nav class="uk-card-small uk-card-body">
                        <ul class="uk-nav-default uk-nav-parent-icon uk-list-divider" uk-nav>
                            <li class="uk-parent"><a href="catalog.html">Catalog</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.html">Laptops &amp; Tablets</a></li>
                                    <li><a href="subcategory.html">Phones &amp; Gadgets</a></li>
                                    <li><a href="subcategory.html">TV &amp; Video</a></li>
                                    <li><a href="subcategory.html">Games &amp; Entertainment</a></li>
                                    <li><a href="subcategory.html">Photo</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="catalog.html"><span>see all categories</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="brands.html">Brands</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.html">Apple</a></li>
                                    <li><a href="subcategory.html">Samsung</a></li>
                                    <li><a href="subcategory.html">Sony</a></li>
                                    <li><a href="subcategory.html">Microsoft</a></li>
                                    <li><a href="subcategory.html">Intel</a></li>
                                    <li><a href="subcategory.html">HP</a></li>
                                    <li><a href="subcategory.html">LG</a></li>
                                    <li><a href="subcategory.html">Lenovo</a></li>
                                    <li><a href="subcategory.html">ASUS</a></li>
                                    <li><a href="subcategory.html">Acer</a></li>
                                    <li><a href="subcategory.html">Dell</a></li>
                                    <li><a href="subcategory.html">Canon</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="brands.html"><span>see all brands</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="#">Pages</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.html">Catalog</a></li>
                                    <li><a href="subcategory.html">Category</a></li>
                                    <li><a href="subcategory.html">Subcategory</a></li>
                                    <li><a href="subcategory.html">Product</a></li>
                                    <li><a href="subcategory.html">Cart</a></li>
                                    <li><a href="subcategory.html">Checkout</a></li>
                                    <li><a href="subcategory.html">Compare</a></li>
                                    <li><a href="subcategory.html">Brands</a></li>
                                    <li><a href="subcategory.html">Compare</a></li>
                                    <li><a href="subcategory.html">Account</a></li>
                                    <li><a href="subcategory.html">Favorites</a></li>
                                    <li><a href="subcategory.html">Personal</a></li>
                                    <li><a href="subcategory.html">Settings</a></li>
                                    <li><a href="subcategory.html">About</a></li>
                                    <li><a href="subcategory.html">Contacts</a></li>
                                    <li><a href="subcategory.html">Blog</a></li>
                                    <li><a href="subcategory.html">News</a></li>
                                    <li><a href="subcategory.html">Article</a></li>
                                    <li><a href="subcategory.html">FAQ</a></li>
                                    <li><a href="subcategory.html">Delivery</a></li>
                                    <li><a href="subcategory.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="compare.html">Compare<span class="uk-badge uk-margin-xsmall-left">3</span></a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="uk-card-small uk-card-body">
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="news.html">News</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="#">Payment</a></li>
                        </ul>
                    </nav>
                    <nav class="uk-card-body">
                        <ul class="uk-iconnav uk-flex-center">
                            <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                            <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                            <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                            <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
        <div id="cart-offcanvas" uk-offcanvas="overlay: true; flip: true">
            <aside class="uk-offcanvas-bar uk-padding-remove">
                <div
                    class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
                    <header class="uk-card-header uk-flex uk-flex-middle">
                        <div class="uk-grid-small uk-flex-1" uk-grid>
                            <div class="uk-width-expand">
                                <div class="uk-h3">Cart</div>
                            </div><button class="uk-offcanvas-close" type="button" uk-close></button>
                        </div>
                    </header>
                    <div class="uk-card-body uk-overflow-auto">
                        <ul class="uk-list uk-list-divider">
                            <li class="uk-visible-toggle">
                                <arttcle>
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-4">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.html">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/1/1-small.jpg"
                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                                class="uk-link-heading uk-text-small" href="product.html">Apple MacBook
                                                Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)</a>
                                            <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-text-bolder uk-text-small">$1599.00</div>
                                                <div class="uk-text-meta uk-text-xsmall">1 × $1599.00</div>
                                            </div>
                                        </div>
                                        <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                                uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                    </div>
                                </arttcle>
                            </li>
                            <li class="uk-visible-toggle">
                                <arttcle>
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-4">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.html">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/2/2-small.jpg"
                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                                class="uk-link-heading uk-text-small" href="product.html">Apple MacBook
                                                12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                            <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-text-bolder uk-text-small">$1549.00</div>
                                                <div class="uk-text-meta uk-text-xsmall">1 × $1549.00</div>
                                            </div>
                                        </div>
                                        <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                                uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                    </div>
                                </arttcle>
                            </li>
                        </ul>
                    </div>
                    <footer class="uk-card-footer">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-expand uk-text-muted uk-h4">Subtotal</div>
                            <div class="uk-h4 uk-text-bolder">$3148.00</div>
                        </div>
                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-margin-small" uk-grid>
                            <div><a class="uk-button uk-button-default uk-margin-small uk-width-1-1"
                                    href="cart.html">view cart</a></div>
                            <div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                    href="checkout.html">checkout</a></div>
                        </div>
                    </footer>
                </div>
            </aside>
        </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>
