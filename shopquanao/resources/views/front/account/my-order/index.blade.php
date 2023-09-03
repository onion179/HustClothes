
@extends('front.layout.master')

@section('title', 'My Order')

@section('body')

    <!--Breadcrumb section begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--My Order section begin-->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>ID</th>
                                    <th class="p-name">Tên Sản Phẩm</th>
                                    <th>Tổng</th>
                                    <th>Chi Tiết</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>
                                    <td class="cart-pic first-row">
                                        <img style="height: 150px;"
                                             src="front/img/products/{{$order->orderDetails[0]->product->productImages[0]->path}}"
                                             alt="">
                                    </td>
                                    <td class="first-row">#{{$order->id}}</td>
                                    <td class="cart-title first-row">
                                        <h5>
                                            {{$order->orderDetails[0]->product->name}}

                                            @if(count($order->orderDetails) > 1)
                                                (và {{count($order->orderDetails)}} sản phẩm khác)
                                            @endif

                                        </h5>
                                    </td>
                                    <td class="total-price first-row">
                                        ${{array_sum(array_column($order->orderDetails->toArray(), 'total'))}}
                                    </td>
                                    <td class="first-row">
                                        <a class="btn" href="./account/my-order/{{$order->id}}">Chi tiết</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--My Order section end-->

@endsection
