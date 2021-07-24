@extends('layouts.'.$template_name.'.app')

@section('custom_style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <h6>Order Summary</h6>
                  <table class="table table-hover text-nowrap">
                    <tr>
                      <td>Product Name</td>
                      <td>{{auth()->user()->product()->first()->product_name}}</td>
                    </tr>
                    <tr>
                      <td>Product Name</td>
                      <td>{{auth()->user()->product()->first()->product_name}}</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('custom_script')
@endsection
