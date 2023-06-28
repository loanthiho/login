<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if (Session::has('user'))
                    <li><a href="logout">
                            <ion-icon name="log-out-outline"></ion-icon>{{ Session('user')->name }}
                        </a></li>
                    @else
                    <li><a href="register">Đăng kí</a></li>
                    <li><a href="login">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    @if (Session::has('cart'))
                    <div class="cart">
                        <div class="beta-select">
                            <i class="fa fa-shopping-cart"></i> Giỏ hàng (@if (Session::has('cart'))
                            {{ Session('cart')->totalQty }}
                            @else
                            Trống
                            @endif) <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="beta-dropdown cart-body">

                            @foreach ($product_cart as $Product)
                            <div class="cart-item" id="cart-item{{ $Product['item']['id'] }}">
                                <a class="cart-item-delete" href="del-cart/{{ $Product['item']['id'] }}" value="{{ $Product['item']['id'] }}" soluong="{{ $Product['qty'] }}"><i class="fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/image/product/{{ $Product['item']['image'] }}" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">{{ $Product['item']['name'] }}</span>
                                        <span class="cart-item-amount">{{ $Product['qty'] }}*<span>{{ $Product['item']['unit_price'] }}</span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{ number_format(Session('cart')->totalPrice) }}
                                        đồng</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="/check-out/" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                    @endif
                </div>

                <div class="beta-comp">
                    <div class="wishlist">
                        <div class="wishlist-beta-select ">
                            <i class="fa fa-heart"></i> Yêu thích (
                            @php
                            $wishlistCount = isset($wishlist) ? count($wishlist) : 0;
                            @endphp
                            {{ $wishlistCount }})
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="beta-dropdown wishlist-body">
                            @if ($wishlistCount > 0)
                            @foreach($wishlist as $item)
                            <div class="wishlist-item">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        @if ($item->product && $item->product->image)
                                        <img src="source/image/product/{{ $item->product->image }}" alt="">
                                        @endif
                                    </a>
                                    <div class="media-body">
                                        <span class="wishlist-item-title">
                                            @if ($item->product)
                                            {{ $item->product->name }}
                                            @endif
                                        </span>
                                        <a href="{{ route('wishlist.remove', $item->id) }}" class="wishlist-item-remove">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center">Danh sách yêu thích trống.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ url('/trangchu') }}">Trang chủ</a></li>
                    <li><a href="#">Loại sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($loai_sp as $loai)
                            <li><a href="{{ url('/loaisanpham', $loai->id) }}">{{ $loai->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ url('/gioithieu') }}">Giới thiệu</a></li>
                    <li><a href="{{ url('/lienhe') }}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->