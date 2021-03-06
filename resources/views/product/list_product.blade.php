@extends('index')
@section('title',$slug)
@section('content')
<style>
    #pagebar ul>li {
        display: inline;
        font-size: 14pt;
        padding: 6pt;

    }

    .page-item {
        color: blueviolet;

    }

    .page-link {
        color: #999;
    }

    input[type="checkbox"]:checked+.label-text:before {
        content: "\f14a";
        color: #2980b9;
        animation: effect 250ms ease-in;
    }

    input[type="checkbox"]:disabled+.label-text {
        color: #aaa;
    }

    input[type="checkbox"]:disabled+.label-text:before {
        content: "\f0c8";
        color: #ccc;
    }

</style>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<section class="uk-section uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
            <div class="uk-text-center">
                @foreach ($kategori as $kategori)


                <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                    <li><a href="/">Home</a></li>
                    <li><a href="catalog">Catalog</a></li>
                    <li><span>{{$kategori->nama}}</span></li>
                </ul>
                <h1 class="uk-margin-small-top uk-margin-remove-bottom">
                    {{$kategori->nama}}
                </h1>
                @endforeach
                <div class="alert alert-success d-none" id="userFilter">
                    <h3  id='userFilter'>Your Filter : </h3>
                </div>
               
                <div class="uk-text-meta uk-margin-xsmall-top">{{$ktgterpilih}} items</div>
            </div>
            <div>
                <div class="uk-grid-medium" uk-grid>
                    <aside class="uk-width-1-4 tm-aside-column tm-filters" id="filters"
                        uk-offcanvas="overlay: true; container: false;">


                        <div class="uk-offcanvas-bar uk-padding-remove">
                            <div class="uk-card uk-card-default uk-card-small uk-flex uk-flex-column uk-height-1-1">
                                <header class="uk-card-header uk-flex uk-flex-middle">
                                    <div class="uk-grid-small uk-flex-1" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="uk-h3">Filters</div>
                                        </div>
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                    </div>
                                </header>
                                <div class="uk-margin-remove uk-flex-1 uk-overflow-auto"
                                    uk-accordion="multiple: true; targets: &gt; .js-accordion-section"
                                    style="flex-basis: auto">
                                    <section class="uk-card-small uk-card-body">
                                        <h4 class="uk-margin-small-bottom">Categories</h4>

                                        <ul class="uk-nav uk-nav-default">
                                            @foreach ($ktg as $side)

                                            <li><a href="{{url("/list-product/$side->slug")}}">{{$side->nama}}</a></li>

                                            @endforeach

                                        </ul>
                                    </section>
                                    <form id="form-filter" action="">
                                    <section class="uk-card-body uk-open js-accordion-section">
                                        <h4 class="uk-accordion-title uk-margin-remove">
                                            Prices
                                        </h4>
                                        <div class="uk-accordion-content">
                                            <div class="uk-grid-small uk-child-width-1-2 uk-text-small" uk-grid>
                                                <div>
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-text-xsmall ">from</span><input
                                                            id="minHarga" class="uk-input clear-harga" type="text"
                                                            placeholder="Rp 1.000.0000" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-inline">
                                                        <span class="uk-form-icon uk-text-xsmall">to</span><input
                                                            id="maxHarga" class="uk-input clear-harga" type="text"
                                                            placeholder="Rp 5.000.000" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="uk-card-body js-accordion-section uk-open">
                                        <h4 class="uk-accordion-title uk-margin-remove">
                                            Brands
                                        </h4>
                                        <div class="uk-accordion-content">
                                            <ul class="uk-list tm-scrollbox">
                                                @foreach ($brand as $brand)


                                                <li>
                                                    <input class="checkbox clear-brand" id="brand-{{$brand->id}}"
                                                        name="brand[{{$brand->id}}]" value="{{$brand->id}}"
                                                        type="checkbox" /><label for="brand-1"><span>{{$brand->nama}}
                                                    </label>
                                                </li>
                                                @endforeach
                                            </ul>


                                        </div>
                                    </section>
                                </form>
                                    <div class="uk-card-body">
                                        <div class="alert alert-success d-none" id="msg_div">
                                            <span id="res_message"></span>
                                       </div>

                                        <button id="btnFilter" class="uk-button uk-button-primary uk-width-1-1">
                                            <span class="uk-margin-xsmall-right"
                                                uk-icon="icon: search; ratio: .75;"></span>Filter
                                        </button>
                                        <div class="container"><br></div>
                                        <button id="btnReset" class="uk-button uk-button-default uk-width-1-1">
                                            <span class="uk-margin-xsmall-right"
                                                uk-icon="icon: close; ratio: .75;"></span>Reset all filters
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="uk-width-expand">
                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                    <div class="uk-grid-collapse uk-child-width-1-1" id="products" uk-grid>
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div
                                                    class="uk-width-1-1 uk-width-expand@s uk-flex uk-flex-center uk-flex-left@s uk-text-small">
                                                    <span class="uk-margin-small-right uk-text-muted">Sort
                                                        by:</span>
                                                    <ul class="uk-subnav uk-margin-remove">
                                                        <li class="uk-active uk-padding-remove">
                                                            <a class="uk-text-lowercase" href="#">relevant<span
                                                                    class="uk-margin-xsmall-left"
                                                                    uk-icon="icon: chevron-down; ratio: .5;"></span></a>
                                                        </li>
                                                        <li>
                                                            <a class="uk-text-lowercase" href="#">price</a>
                                                        </li>
                                                        <li>
                                                            <a class="uk-text-lowercase" href="#">newest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="uk-width-1-1 uk-width-auto@s uk-flex uk-flex-center uk-flex-middle">
                                                    <button
                                                        class="uk-button uk-button-default uk-button-small uk-hidden@m"
                                                        uk-toggle="target: #filters">
                                                        <span class="uk-margin-xsmall-right"
                                                            uk-icon="icon: settings; ratio: .75;"></span>Filters
                                                    </button>
                                                    <div class="tm-change-view uk-margin-small-left">
                                                        <ul class="uk-subnav uk-iconnav js-change-view" uk-switcher>
                                                            <li>
                                                                <a class="uk-active" data-view="grid" uk-icon="grid"
                                                                    uk-tooltip="Grid"></a>
                                                            </li>
                                                            <li>
                                                                <a data-view="list" uk-icon="list"
                                                                    uk-tooltip="List"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-grid-collapse uk-child-width-1-3 tm-products-grid js-products-grid"
                                                uk-grid>
                                                @foreach ($produk as $prd)

                                                <article class="tm-product-card">
                                                    <div class="tm-product-card-media">
                                                        <div class="tm-ratio tm-ratio-4-3">
                                                            <a class="tm-media-box"
                                                                href="{{url("detail-produk/$slug-$prd->id")}}">
                                                                <figure class="tm-media-box-wrap">
                                                                    <img src="{{Voyager::image("$prd->gambar1")}}"
                                                                        alt="{{$prd->nama}}" />
                                                                </figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tm-product-card-body">
                                                        <div class="tm-product-card-info">
                                                            <div class="uk-text-meta uk-margin-xsmall-bottom">
                                                                {{$slug}}
                                                            </div>
                                                            <h3 class="tm-product-card-title">
                                                                <a class="uk-link-heading"
                                                                    href="{{url("detail-produk/$slug-$prd->id")}}">{{$prd->nama}}</a>
                                                            </h3>
                                                            <ul
                                                                class="uk-list uk-text-small tm-product-card-properties">
                                                                <li>
                                                                    <span class="uk-text-muted">Diagonal display:
                                                                    </span><span>13.9"</span>
                                                                </li>
                                                                <li>
                                                                    <span class="uk-text-muted">CPU:
                                                                    </span><span>Intel®&nbsp;Core™ i7 8550U</span>
                                                                </li>
                                                                <li>
                                                                    <span class="uk-text-muted">RAM:
                                                                    </span><span>16&nbsp;GB</span>
                                                                </li>
                                                                <li>
                                                                    <span class="uk-text-muted">Video Card:
                                                                    </span><span>Intel® HD Graphics 620</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tm-product-card-shop">
                                                            <div class="tm-product-card-prices">
                                                                <div class="tm-product-card-price">
                                                                    @currency($prd->harga)
                                                                </div>
                                                            </div>
                                                            <div class="tm-product-card-add">

                                                                <button
                                                                    class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart">
                                                                    <span class="tm-product-card-add-button-icon"
                                                                        uk-icon="cart"></span><span
                                                                        class="tm-product-card-add-button-text">add
                                                                        to cart</span>
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
                            </div>
                        </div>
                        <div class="row">
                            <br>
                        </div>
                        <div id="pagebar" class="uk-pagination uk-flex-center">

                            {{$produk->links('pagination::bootstrap-4')}}


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#btnFilter").click(function (e) {
            e.preventDefault();
            /*Ajax Request Header setup*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // $('#btnFilter').html('Proses ...');
            //start
             /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('list-product')}}",
      method: 'post',
      data: $('#form-filter').serialize(),
      success: function(response){
         //------------------------
           
            // $('#btnFilter').attr('uk-icon','icon: search; ratio: .75');
            // $('#btnFilter').html(' Filter');
            $('#userFilter').show();
            $('#userFilter').html(response.msg);
            $('#userFilter').removeClass('d-none');

            
            setTimeout(function(){
            $('#userFilter').hide();
            $('#userFilter').hide();
            },10000);
         //--------------------------
            }});
            //end
        });
        $("#btnReset").click(function () {
            $('.clear-harga').val('');
            $('.clear-brand').attr("checked", false);
        });
    });

</script>


@endsection
