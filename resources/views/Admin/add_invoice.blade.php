@extends('layouts.admin_master')

@section('content')

<main>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7">
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>Faktur </b></h3></div>
    <div class="card-body">
        <form method="POST" action="{{url('/insert-invoice') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Nama Customer</label>
                        <input class="form-control py-4" name="customer" type="text" value="{{ $customer->name }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Email Customer</label>
                        <input class="form-control py-4" name="email" type="text" value="{{ $customer->email }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Perusahaan</label>
                        <input class="form-control py-4" name="company" type="text" value="{{ $customer->company }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Alamat</label>
                        <input class="form-control py-4" name="address" type="text" value="{{ $customer->address }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputState">Tlp</label>
                        <input class="form-control py-4" name="phone" type="text" />
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Kategori Produk</label>
                        <input class="form-control py-4" name="item" type="text" value="{{ $product->category }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Nama Produk</label>
                        <input class="form-control py-4" name="name" type="text" value="{{ $product->name }}" />
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Harga (perUnit)</label>
                        <input class="form-control py-4" name="unit_price" type="text" value="{{ $product->unit_price }}" />
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Jumlah</label>
                        <input class="form-control py-4" name="quantity" type="text" value="{{ $order->quantity }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Total Harga</label>
                        <input class="form-control py-4" name="total" type="text" value="{{ $product->unit_price * $order->quantity }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Pembayaran</label>
                        <input class="form-control py-4" name="payment" type="text" placeholder="" />
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Gallery</label>
                        <input name="photo" type="file" />
                    </div>
                </div> -->
            </div>

            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</main>

@endsection