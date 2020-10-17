@extends('index')
@section('title','Keranjang Belanja')
@section('content')
<main>
    <section class="uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-text-center uk-first-column">
                    <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Cart</span></li>
                    </ul>
                    <h1 class="uk-margin-small-top uk-margin-remove-bottom">Cart</h1>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="uk-grid-medium uk-grid" uk-grid="">
                        <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                <header
                                    class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                                    <div class="uk-grid-small uk-child-width-1-2 uk-grid" uk-grid="">
                                        <div class="uk-first-column">product</div>
                                        <div>
                                            <div class="uk-grid-small uk-child-width-expand uk-grid" uk-grid="">
                                                <div class="uk-first-column">price</div>
                                                <div class="tm-quantity-column">quantity</div>
                                                <div>sum</div>
                                                <div class="uk-width-auto">
                                                    <div style="width: 20px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle uk-grid"
                                        uk-grid="">
                                        <!-- Product cell-->
                                        <div class="uk-first-column">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-3 uk-first-column">
                                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                            href="product.html">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/products/1/1-small.jpg"
                                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                            </figure>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-meta">Laptop</div><a class="uk-link-heading"
                                                        href="product.html">Apple MacBook Pro 15" Touch Bar MPTU2LL/A
                                                        256GB (Silver)</a>
                                                </div>
                                            </div>
                                        </div><!-- Other cells-->
                                        <div>
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center uk-grid"
                                                uk-grid="">
                                                <div class="uk-first-column">
                                                    <div class="uk-text-muted uk-hidden@m">Price</div>
                                                    <div>$1599.00</div>
                                                </div>
                                                <div class="tm-cart-quantity-column"><a
                                                        onclick="increment(-1, 'product-1')"
                                                        uk-icon="icon: minus; ratio: .75" class="uk-icon"><svg
                                                            width="15" height="15" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg></a><input class="uk-input tm-quantity-input"
                                                        id="product-1" type="text" maxlength="3" value="1"><a
                                                        onclick="increment(+1, 'product-1')"
                                                        uk-icon="icon: plus; ratio: .75" class="uk-icon"><svg width="15"
                                                            height="15" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg></a></div>
                                                <div>
                                                    <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                    <div>$1599.00</div>
                                                </div>
                                                <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                        uk-tooltip="Remove" title="" aria-expanded="false"><span
                                                            uk-icon="close" class="uk-icon"><svg width="20" height="20"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="none" stroke="#000" stroke-width="1.06"
                                                                    d="M16,16 L4,4"></path>
                                                                <path fill="none" stroke="#000" stroke-width="1.06"
                                                                    d="M16,4 L4,16"></path>
                                                            </svg></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle uk-grid"
                                        uk-grid="">
                                        <!-- Product cell-->
                                        <div class="uk-first-column">
                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                <div class="uk-width-1-3 uk-first-column">
                                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                            href="product.html">
                                                            <figure class="tm-media-box-wrap"><img
                                                                    src="images/products/2/2-small.jpg"
                                                                    alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                            </figure>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-meta">Laptop</div><a class="uk-link-heading"
                                                        href="product.html">Apple MacBook 12" MNYN2LL/A 512GB (Rose
                                                        Gold)</a>
                                                </div>
                                            </div>
                                        </div><!-- Other cells-->
                                        <div>
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center uk-grid"
                                                uk-grid="">
                                                <div class="uk-first-column">
                                                    <div class="uk-text-muted uk-hidden@m">Price</div>
                                                    <div>$1549.00</div>
                                                </div>
                                                <div class="tm-cart-quantity-column"><a
                                                        onclick="increment(-1, 'product-2')"
                                                        uk-icon="icon: minus; ratio: .75" class="uk-icon"><svg
                                                            width="15" height="15" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg></a><input class="uk-input tm-quantity-input"
                                                        id="product-2" type="text" maxlength="3" value="1"><a
                                                        onclick="increment(+1, 'product-2')"
                                                        uk-icon="icon: plus; ratio: .75" class="uk-icon"><svg width="15"
                                                            height="15" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="9" y="1" width="1" height="17"></rect>
                                                            <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg></a></div>
                                                <div>
                                                    <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                    <div>$1549.00</div>
                                                </div>
                                                <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                        uk-tooltip="Remove" title="" aria-expanded="false"><span
                                                            uk-icon="close" class="uk-icon"><svg width="20" height="20"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="none" stroke="#000" stroke-width="1.06"
                                                                    d="M16,16 L4,4"></path>
                                                                <path fill="none" stroke="#000" stroke-width="1.06"
                                                                    d="M16,4 L4,16"></path>
                                                            </svg></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-footer"><label><span
                                            class="uk-form-label uk-margin-small-right">Promo Code</span>
                                        <div class="uk-inline"><a class="uk-form-icon uk-form-icon-flip uk-icon"
                                                href="#" uk-icon="arrow-right"><svg width="20" height="20"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14">
                                                    </polyline>
                                                    <line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5">
                                                    </line>
                                                </svg></a><input class="uk-input uk-form-width-small" type="text"></div>
                                    </label></div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 tm-aside-column uk-width-1-4@m">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container uk-sticky"
                                uk-sticky="offset: 30; bottom: true; media: @m;" style="">
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-grid" uk-grid="">
                                        <div class="uk-width-expand uk-text-muted uk-first-column">Subtotal</div>
                                        <div>$3148</div>
                                    </div>
                                    <div class="uk-grid-small uk-grid" uk-grid="">
                                        <div class="uk-width-expand uk-text-muted uk-first-column">Discount</div>
                                        <div class="uk-text-danger">−$29</div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                        <div class="uk-width-expand uk-text-muted uk-first-column">Total</div>
                                        <div class="uk-text-lead uk-text-bolder">$3119</div>
                                    </div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                        href="checkout.html">checkout</a>
                                </div>
                            </div>
                            <div class="uk-sticky-placeholder" style="height: 230px; margin: 0px;" hidden=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <div uk-slider="" class="uk-slider uk-slider-container">
                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid"
                    style="transform: translateX(0px);">
                    <li class="uk-active">
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s uk-grid" uk-grid="">
                            <div class="uk-first-column"><span uk-icon="icon: star; ratio: 2.5;" class="uk-icon"><svg
                                        width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <polygon fill="none" stroke="#000" stroke-width="1.01"
                                            points="10 2 12.63 7.27 18.5 8.12 14.25 12.22 15.25 18 10 15.27 4.75 18 5.75 12.22 1.5 8.12 7.37 7.27">
                                        </polygon>
                                    </svg></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Mauris placerat</div>
                                <div class="uk-text-meta">Donec mollis nibh dolor, sit amet auctor</div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active">
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s uk-grid" uk-grid="">
                            <div class="uk-first-column"><span uk-icon="icon: receiver; ratio: 2.5;"
                                    class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke="#000" stroke-width="1.01"
                                            d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611">
                                        </path>
                                    </svg></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Lorem ipsum</div>
                                <div class="uk-text-meta">Sit amet, consectetur adipiscing elit</div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active">
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s uk-grid" uk-grid="">
                            <div class="uk-first-column"><span uk-icon="icon: location; ratio: 2.5;"
                                    class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke="#000" stroke-width="1.01"
                                            d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z">
                                        </path>
                                        <circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle>
                                    </svg></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Proin pharetra</div>
                                <div class="uk-text-meta">Nec quam a fermentum ut viverra</div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active">
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s uk-grid" uk-grid="">
                            <div class="uk-first-column"><span uk-icon="icon: comments; ratio: 2.5;"
                                    class="uk-icon"><svg width="50" height="50" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"></polyline>
                                        <path
                                            d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z">
                                        </path>
                                    </svg></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Praesent ultrices</div>
                                <div class="uk-text-meta">Praesent ultrices, orci nec finibus</div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-active">
                        <div class="uk-grid-small uk-flex-center uk-flex-left@s uk-grid" uk-grid="">
                            <div class="uk-first-column"><span uk-icon="icon: happy; ratio: 2.5;" class="uk-icon"><svg
                                        width="50" height="50" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="13" cy="7" r="1"></circle>
                                        <circle cx="7" cy="7" r="1"></circle>
                                        <circle fill="none" stroke="#000" cx="10" cy="10" r="8.5"></circle>
                                        <path fill="none" stroke="#000"
                                            d="M14.6,11.4 C13.9,13.3 12.1,14.5 10,14.5 C7.9,14.5 6.1,13.3 5.4,11.4">
                                        </path>
                                    </svg></span></div>
                            <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                <div>Duis condimentum</div>
                                <div class="uk-text-meta">Pellentesque eget varius arcu</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top uk-hidden">
                    <li uk-slider-item="0" class="uk-hidden uk-active"><a href="#"></a></li>
                    <li uk-slider-item="1" class="uk-hidden"><a href="#"></a></li>
                    <li uk-slider-item="2" class="uk-hidden"><a href="#"></a></li>
                    <li uk-slider-item="3" class="uk-hidden"><a href="#"></a></li>
                    <li uk-slider-item="4" class="uk-hidden"><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

@endsection
