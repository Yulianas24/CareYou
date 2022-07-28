@extends('/layouts/pages')

@section('container')
    <div class="h-screen w-screen">
        @include('components/headerProfile')
        @include('components/detailProfile')
    </div>
@endsection
