@extends('master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <h2>Wishlist</h2>
            <div class="row">
                @if(count($wishlistItems) > 0)
                @foreach($wishlistItems as $item)
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="{{ url('/chitietsanpham', $item->product_id) }}">
                                <img src="source/image/product/{{ $item->product->image }}" alt="" height="256px">
                            </a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">{{ $item->product->name }}</p>
                            <p class="single-item-price">{{ number_format($item->product->unit_price) }} đồng</p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="{{ route('themgiohang', $item->product_id) }}">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a class="wishlist-btn pull-left" href="{{ route('themwishlist', $item->product_id) }}">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a class="beta-btn primary" href="{{ url('/chitietsanpham', $item->product_id) }}">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-sm-12">
                    <p>Không có sản phẩm trong Wishlist.</p>
                </div>
                @endif
            </div>
        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
@endsection