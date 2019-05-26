@extends('layouts.app')

@section('content')

<div class="container pb-5 mb-2">
    <!-- Alert-->
    <div class="alert alert-info alert-dismissible fade show text-center mb-30"><span class="alert-close"
            data-dismiss="alert"></span><i class="fe-icon-award"></i>&nbsp;&nbsp;With this purchase you will earn
        <strong>2,549</strong> Reward Points.</div>


    @foreach($items as $item)

    <!-- Cart Item-->
    <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="http://bootdey.com/img/Content/avatar/avatar1.png"
                        alt="Product"></div>
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">{{ $item->name }}</h4><span><strong>Type:</strong>
                        Mirrorless</span><span><strong>Color:</strong> Black</span>
                </div>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
                <div class="form-group">
                    <input id="field-form-quantity" name="quantity" type="text" value="{{ $item->quantity }}"
                        class="form-control only_numbers" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Subtotal</div><span
                class="text-xl font-weight-medium">{{ $item->price }}</span>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Discount</div><span class="text-xl font-weight-medium">{{ $item->getPriceSum() }}</span>
        </div>
    </div>

    @endforeach


    <!-- Coupon + Subtotal-->
    <div class="d-sm-flex justify-content-between align-items-center text-center text-sm-left">
        <form class="form-inline py-2">
            <label class="sr-only">Coupon code</label>
            <input class="form-control form-control-sm my-2 mr-3" type="text" placeholder="Coupon code" required="">
            <button class="btn btn-style-1 btn-secondary btn-sm my-2 mx-auto mx-sm-0" type="submit">Apply
                Coupon</button>
        </form>
        <div class="py-2">
            <span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Subtotal:</span>
            <span class="d-inline-block align-middle text-xl font-weight-medium">{{ $get_stotal }}</span>
        </div>
        <div class="py-2">
            <span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">Total:</span>
            <span class="d-inline-block align-middle text-xl font-weight-medium">{{ $get_total }}</span>
        </div>
    </div>
    <!-- Buttons-->
    <hr class="my-2">
    <div class="row pt-3 pb-5 mb-2">
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-secondary btn-block" href="#"><i
                    class="fe-icon-refresh-ccw"></i>&nbsp;Update Cart</a></div>
        <div class="col-sm-6 mb-3"><a class="btn btn-style-1 btn-primary btn-block" href="{{ route('profile.user_checkout') }}"><i
                    class="fe-icon-credit-card"></i>&nbsp;Checkout</a></div>
    </div>


</div>
</div>

@endsection
