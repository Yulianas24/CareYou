@extends('/layouts/pages')

@section('container')
    <div class="min-h-screen w-screen">
        @include('components/headerProfile')
        @if (session()->has('success'))
            <div id="id01"
                class=" absolute left-1/3 top-1/3 alert w-1/3 bg-green-600 rounded-md py-2 px-6  text-base text-white inline-flex items-center alert-dismissible fade show "
                role="alert">

                <p>{{ session('success') }}</p>
                <button type="button"
                    class=" w-7 h-7 ml-auto text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="alert" aria-label="Close"> <span
                        onclick="document.getElementById('id01').style.display='none'"> &times;</button>
            </div>
        @endif
        @include('components/detailProfile')
    </div>
@endsection
