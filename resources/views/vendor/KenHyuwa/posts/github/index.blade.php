@extends('vendor.KenHyuwa.layouts.special')

@section('content')

<main class="contents">
    @include('vendor.KenHyuwa.advertises.one', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.open-source', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.pagination', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.supported', ['some' => 'data'])
    @include('vendor.KenHyuwa.components.packages', ['some' => 'data'])
    @include('vendor.KenHyuwa.advertises.two', ['some' => 'data'])
</main>

@endsection