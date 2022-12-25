@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <h2>Dashboard</h2>
                    @if (!empty($userObj->package_end_date))
                        <span class="text text-danger text-end">&nbsp;&nbsp;(Expiry Date: {{date("d F Y", strtotime($userObj->package_end_date))}})</span>
                    @endif
                    </div>
                <br/>
                @if (!empty($userObj->slug))
                {{url('/')}}/vc/{{$userObj->slug}}
                @endif
                </div>
                <div class="card-body">
                    <!--{{auth()->user()->product()->first()->product_name}}-->

                    <div class="row bg-white">
                        <div class="col-md-12 p-0">
                            <iframe width="100%" height="600px" src="{{url('/')}}/vc/{{Auth::user()->slug}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection