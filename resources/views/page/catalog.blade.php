@extends('index')
@section('title','Laptop')
@section('content')
    
      <section class="uk-section uk-section-small">
        <div class="uk-container">
          <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
            <div class="uk-text-center">
              <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                <li><a href="/">Home</a></li>
                <li><span>Catalog</span></li>
              </ul>
              <h1 class="uk-margin-small-top uk-margin-remove-bottom">
                Catalog
              </h1>
              <div class="uk-text-meta uk-margin-xsmall-top">641 items</div>
            </div>
            <div>
              <div class="uk-grid-medium" uk-grid>
                <aside class="uk-width-1-4 uk-visible@m tm-aside-column">
                  <nav
                    class="uk-card uk-card-default uk-card-body uk-card-small"
                    uk-sticky="bottom: true; offset: 90"
                  >
                    <ul
                      class="uk-nav uk-nav-default"
                      uk-scrollspy-nav="closest: li; scroll: true; offset: 90"
                    >
                      <li>
                        <a href="#laptops-tablets">Laptop</a>
                      </li>
                      <li>
                        <a href="#phones-gadgets">Komputer Rakitan</a>
                      </li>
                      <li><a href="#tv-video">Spare Part</a></li>
                      <li>
                        <a href="#games-entertainment"
                          >Hardware</a
                        >
                      </li>
                      <li><a href="#photo">Accessories</a></li>
                    </ul>
                  </nav>
                </aside>
                <div class="uk-width-1-1 uk-width-expand@m">
                  <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                    <section id="laptops-tablets">
                      <div
                        class="uk-card uk-card-default uk-card-small tm-ignore-container"
                      >
                        <header class="uk-card-header">
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <a href="laptop"
                              ><img
                                src="images/catalog/computers.svg"
                                alt="Laptops &amp; Tablets"
                                width="50"
                                height="50"
                            /></a>
                            <div class="uk-width-expand">
                              <h2 class="uk-h4 uk-margin-remove">
                                <a
                                  class="uk-link-heading"
                                  href="laptop"
                                  >Laptop</a
                                >
                              </h2>
                              <div class="uk-text-meta">367 items</div>
                            </div>
                          </div>
                        </header>
                        {{-- <div class="uk-card-body">
                          <ul class="uk-list">
                            <li><a href="subcategory.html">Laptops</a></li>
                            <li><a href="subcategory.html">Tablets</a></li>
                            <li>
                              <a href="subcategory.html">Peripherals</a>
                            </li>
                            <li><a href="subcategory.html">Keyboards</a></li>
                            <li>
                              <a href="subcategory.html">Accessories</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                    </section>
                    <section id="phones-gadgets">
                      <div
                        class="uk-card uk-card-default uk-card-small tm-ignore-container"
                      >
                        <header class="uk-card-header">
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <a href="category.html"
                              ><img
                                src="images/catalog/phones.svg"
                                alt="Phones &amp; Gadgets"
                                width="50"
                                height="50"
                            /></a>
                            <div class="uk-width-expand">
                              <h2 class="uk-h4 uk-margin-remove">
                                <a
                                  class="uk-link-heading"
                                  href="category.html"
                                  >Komputer Rakitan</a
                                >
                              </h2>
                              <div class="uk-text-meta">144 items</div>
                            </div>
                          </div>
                        </header>
                        {{-- <div class="uk-card-body">
                          <ul class="uk-list">
                            <li>
                              <a href="subcategory.html">Smartphones</a>
                            </li>
                            <li>
                              <a href="subcategory.html">Mobile Phones</a>
                            </li>
                            <li>
                              <a href="subcategory.html">Smart watches</a>
                            </li>
                            <li>
                              <a href="subcategory.html"
                                >Charging and batteries</a
                              >
                            </li>
                            <li>
                              <a href="subcategory.html">Accessories</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                    </section>
                    <section id="tv-video">
                      <div
                        class="uk-card uk-card-default uk-card-small tm-ignore-container"
                      >
                        <header class="uk-card-header">
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <a href="category.html"
                              ><img
                                src="images/catalog/tv.svg"
                                alt="TV &amp; Video"
                                width="50"
                                height="50"
                            /></a>
                            <div class="uk-width-expand">
                              <h2 class="uk-h4 uk-margin-remove">
                                <a
                                  class="uk-link-heading"
                                  href="category.html"
                                  >Spare Part</a
                                >
                              </h2>
                              <div class="uk-text-meta">58 items</div>
                            </div>
                          </div>
                        </header>
                        {{-- <div class="uk-card-body">
                          <ul class="uk-list">
                            <li><a href="subcategory.html">TV</a></li>
                            <li>
                              <a href="subcategory.html">Home Cinema</a>
                            </li>
                            <li>
                              <a href="subcategory.html"
                                >Satellite &amp; Cable TV</a
                              >
                            </li>
                            <li><a href="subcategory.html">Projectors</a></li>
                            <li>
                              <a href="subcategory.html">DVD &amp; Blu-ray</a>
                            </li>
                            <li>
                              <a href="subcategory.html">Accessories</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                    </section>
                    <section id="games-entertainment">
                      <div
                        class="uk-card uk-card-default uk-card-small tm-ignore-container"
                      >
                        <header class="uk-card-header">
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <a href="category.html"
                              ><img
                                src="images/catalog/games.svg"
                                alt="Games &amp; Entertainment"
                                width="50"
                                height="50"
                            /></a>
                            <div class="uk-width-expand">
                              <h2 class="uk-h4 uk-margin-remove">
                                <a
                                  class="uk-link-heading"
                                  href="category.html"
                                  >Hardware</a
                                >
                              </h2>
                              <div class="uk-text-meta">13 items</div>
                            </div>
                          </div>
                        </header>
                        {{-- <div class="uk-card-body">
                          <ul class="uk-list">
                            <li>
                              <a href="subcategory.html">Gaming consoles</a>
                            </li>
                            <li><a href="subcategory.html">Games</a></li>
                            <li><a href="subcategory.html">Software</a></li>
                            <li>
                              <a href="subcategory.html"
                                >Joysticks &amp; gamepads</a
                              >
                            </li>
                            <li>
                              <a href="subcategory.html">Accessories</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                    </section>
                    <section id="photo">
                      <div
                        class="uk-card uk-card-default uk-card-small tm-ignore-container"
                      >
                        <header class="uk-card-header">
                          <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <a href="category.html"
                              ><img
                                src="images/catalog/photo.svg"
                                alt="Photo"
                                width="50"
                                height="50"
                            /></a>
                            <div class="uk-width-expand">
                              <h2 class="uk-h4 uk-margin-remove">
                                <a
                                  class="uk-link-heading"
                                  href="category.html"
                                  >Accessories</a
                                >
                              </h2>
                              <div class="uk-text-meta">59 items</div>
                            </div>
                          </div>
                        </header>
                        {{-- <div class="uk-card-body">
                          <ul class="uk-list">
                            <li><a href="subcategory.html">Cameras</a></li>
                            <li><a href="subcategory.html">Lenses</a></li>
                            <li>
                              <a href="subcategory.html">Accessories</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      




@endsection
