@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <!--{{auth()->user()->product()->first()->product_name}}-->

    <div class="row bg-white">
        <div class="col-md-12 p-0">
            <iframe width="100%" height="600px" src="{{url('/')}}/vc/{{Auth::user()->id}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection