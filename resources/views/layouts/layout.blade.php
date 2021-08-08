@if (auth()->user()->product()->first()->product_name === 'Save The Card')
    @extends('layouts.save-card.app')
@endif