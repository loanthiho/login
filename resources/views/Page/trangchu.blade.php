@extends('master')
@section('content')
<div class="fullwidthbanner-container">
    <!-- Mã HTML cho phần Slider -->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{ count($new_product) }}</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($new_product as $new)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if ($new->promotion_price == 0)
                                    <div class="ribbon-wraper">
                                        <div class="ribbon sale">I love you</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{ url('./chitietsanpham', $new->id) }}"><img src="source/image/product/{{ $new->image }}" alt="" height="256px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $new->name }}</p>
                                        <p class="single-item-price" style="font-size: 18px">
                                            @if ($new->promotion_price != 0)
                                            <span class="flash-sale">{{ $new->unit_price }} đồng</span>
                                            @else
                                            <span class="flash-del">{{ $new->unit_price }} đồng</span>
                                            <span class="flash-sale">{{ $new->promotion_price }} đồng</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('themgiohang', $new->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ url('./chitietsanpham', $new->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <a class="beta-btn primary" href="{{ route('wishlist.add', $new->id) }}"><i class="fa fa-heart" ></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $new_product->links() }}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{ count($sanpham_khuyenmai) }}</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sanpham_khuyenmai as $spkm)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if ($spkm->promotion_price != 0)
                                    <div class="ribbon-wraper">
                                        <div class="ribbon sale">I love you</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{ url('./chitietsanpham', $spkm->id) }}"><img src="source/image/product/{{ $spkm->image }}" alt="" height="256px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $spkm->name }}</p>
                                        <p class="single-item-price" style="font-size: 18px">
                                            @if ($spkm->promotion_price != 0)
                                            <span class="flash-del">{{ number_format($spkm->unit_price) }}đồng</span>
                                            <span class="flash-sale">{{ number_format($spkm->promotion_price) }}đồng</span>
                                            @else
                                            <span class="flash-del">{{ number_format($spkm->unit_price) }}đồng</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('themgiohang', $spkm->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ url('./chitietsanpham', $spkm->id) }}">Details <i class="fa fa-chevron-right"></i></a>
                                        <a class="beta-btn primary" href="{{ route('wishlist.add', $spkm->id) }}"><i class="fa fa-heart"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $sanpham_khuyenmai->links() }}</div>
                        <div class="space40">&nbsp;</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
@endsection
