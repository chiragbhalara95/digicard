@if (auth()->user()->product()->first()->product_name === 'Save The Card')
    @extends('layouts.save-card.app')
@else if (auth()->user()->product()->first()->product_name === 'Business Card')
@extends('layouts.user-bussiness.app')
    @endif