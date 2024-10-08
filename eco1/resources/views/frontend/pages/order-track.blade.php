@extends('frontend.layouts.master')

@section('title','DUY-SHOP ||Theo Dõi Đơn')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Trang Chủ<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Theo Dõi Đơn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Nếu bạn muốn theo dõi đơn hãy nhập mã sản phẩm mà bạn đã thanh toán và click nút"theo dõi.Nó sẽ hiện đơn thanh toán dựa trên sản phẩm mà bạn đã đặt.</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Nhập mã sản phẩm">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Theo Dõi</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection