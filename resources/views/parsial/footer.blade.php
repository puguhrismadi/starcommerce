<footer>
    <section class="uk-section uk-section-secondary uk-section-small uk-light">
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-4@m uk-grid" uk-grid="">
                <div class="uk-first-column"><a class="uk-logo" href="index.html"><img src="{{Voyager::image(setting('site.logo_white'))}}"
                            alt="Logo" width="90" height="32"></a>
                    <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mauris
                        eros. Nulla quis ante sed tortor efficitur facilisis.</p>
                    <ul class="uk-iconnav">
                        <li><a href="#" title="Facebook" uk-icon="facebook" class="uk-icon"></a></li>
                        <li><a href="#" title="Twitter" uk-icon="twitter" class="uk-icon"></a></li>
                        <li><a href="#" title="YouTube" uk-icon="youtube" class="uk-icon"></a></li>
                        <li><a href="#" title="Instagram" uk-icon="instagram" class="uk-icon"></a></li>
                    </ul>
                </div>
                <div>
                    <nav class="uk-grid-small uk-child-width-1-2 uk-grid" uk-grid="">
                        <div class="uk-first-column">
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
                        <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right uk-icon"
                                    uk-icon="receiver"></span><span class="tm-pseudo">8 800 799 99 99</span></a></li>
                        <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right uk-icon"
                                    uk-icon="mail"></span><span class="tm-pseudo">example@example.com</span></a></li>
                        <li>
                            <div class="uk-text-muted"><span class="uk-margin-small-right uk-icon"
                                    uk-icon="location"></span><span>St.&nbsp;Petersburg,
                                    Nevsky&nbsp;Prospect&nbsp;28</span></div>
                        </li>
                        <li>
                            <div class="uk-text-muted"><span class="uk-margin-small-right uk-icon"
                                    uk-icon="clock"></span><span>Daily 10:00–22:00</span></div>
                        </li>
                    </ul>
                </div>
                <div>
                    <form class="uk-form-stacked"><label>
                            <div class="uk-form-label uk-text-muted">Subscribe for updates</div>
                            <div class="uk-inline uk-width-1-1"><a class="uk-form-icon uk-form-icon-flip uk-icon"
                                    href="#" uk-icon="mail"></a><input class="uk-input" type="email"
                                    placeholder="Your email" required="">
                            </div>
                        </label></form>
                    <div class="uk-margin uk-text-small uk-text-muted">Shopping Categories icons by Jaro Sigrist from
                        Noun Project</div>
                </div>
            </div>
        </div>
    </section>
</footer>

{{-- chart --}}
<div id="cart-offcanvas" uk-offcanvas="overlay: true; flip: true" class="uk-offcanvas">
    <aside class="uk-offcanvas-bar uk-padding-remove">
        <div class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
            <header class="uk-card-header uk-flex uk-flex-middle">
                <div class="uk-grid-small uk-flex-1 uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-expand">
                        <div class="uk-h3">Cart</div>
                    </div><button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close=""></button>
                </div>
            </header>
            <div class="uk-card-body uk-overflow-auto">
                <ul class="uk-list uk-list-divider">
                    <li class="uk-visible-toggle">
                        <arttcle>
                            <div class="uk-grid-small uk-grid" uk-grid="">
                                <div class="uk-width-1-4">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <figure class="tm-media-box-wrap"><img src="{{asset('images/products/1/1-small.jpg')}}"
                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                        class="uk-link-heading uk-text-small" href="product.html">Apple MacBook Pro 15"
                                        Touch Bar MPTU2LL/A 256GB (Silver)</a>
                                    <div class="uk-margin-xsmall uk-grid-small uk-flex-middle uk-grid uk-grid-stack"
                                        uk-grid="">
                                        <div class="uk-text-bolder uk-text-small">$1599.00</div>
                                        <div class="uk-text-meta uk-text-xsmall">1 × $1599.00</div>
                                    </div>
                                </div>
                                <div><a class="uk-icon-link uk-text-danger uk-invisible-hover uk-icon" href="#"
                                        uk-icon="icon: close; ratio: .75" uk-tooltip="Remove" title=""
                                        aria-expanded="false"></a></div>
                            </div>
                        </arttcle>
                    </li>
                    <li class="uk-visible-toggle">
                        <arttcle>
                            <div class="uk-grid-small uk-grid" uk-grid="">
                                <div class="uk-width-1-4">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <figure class="tm-media-box-wrap"><img src="{{asset('images/products/2/2-small.jpg')}}"
                                                    alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)"></figure>
                                        </a></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                        class="uk-link-heading uk-text-small" href="product.html">Apple MacBook 12"
                                        MNYN2LL/A 512GB (Rose Gold)</a>
                                    <div class="uk-margin-xsmall uk-grid-small uk-flex-middle uk-grid uk-grid-stack"
                                        uk-grid="">
                                        <div class="uk-text-bolder uk-text-small">$1549.00</div>
                                        <div class="uk-text-meta uk-text-xsmall">1 × $1549.00</div>
                                    </div>
                                </div>
                                <div><a class="uk-icon-link uk-text-danger uk-invisible-hover uk-icon" href="#"
                                        uk-icon="icon: close; ratio: .75" uk-tooltip="Remove" title=""
                                        aria-expanded="false"></a></div>
                            </div>
                        </arttcle>
                    </li>
                </ul>
            </div>
            <footer class="uk-card-footer">
                <div class="uk-grid-small uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-expand uk-text-muted uk-h4">Subtotal</div>
                    <div class="uk-h4 uk-text-bolder">$3148.00</div>
                </div>
                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-margin-small uk-grid uk-grid-stack"
                    uk-grid="">
                    <div><a class="uk-button uk-button-default uk-margin-small uk-width-1-1" href="cart.html">view
                            cart</a></div>
                    <div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                            href="checkout.html">checkout</a></div>
                </div>
            </footer>
        </div>
    </aside>
</div>
