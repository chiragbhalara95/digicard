@if (auth()->user()->product()->first()->product_name === 'Save The Card')
    @include('layouts.save-card.app')
@elseif (auth()->user()->product()->first()->product_name === 'Business Card')
    @include('layouts.user-bussiness.app')
@endif