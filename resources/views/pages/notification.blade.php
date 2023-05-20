@extends('/layouts/pages')

@section('container')
    <div class="min-h-screen w-screen">
        @include('components/headerNotification')
        {{-- Content Notification --}}
        <div class="p-10">
          @foreach ($notification as $notification)
              <div class="flex">
                <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d_1216_7178)">
                  <rect x="7" y="6" width="56" height="56" rx="8" fill="white" fill-opacity="0.2" shape-rendering="crispEdges"/>
                  <g clip-path="url(#clip0_1216_7178)">
                  <path d="M35.0001 47.3334C36.4667 47.3334 37.6667 46.1334 37.6667 44.6667H32.3334C32.3334 46.1334 33.5201 47.3334 35.0001 47.3334ZM43.0001 39.3334V32.6667C43.0001 28.5734 40.8134 25.1467 37.0001 24.24V23.3334C37.0001 22.2267 36.1067 21.3334 35.0001 21.3334C33.8934 21.3334 33.0001 22.2267 33.0001 23.3334V24.24C29.1734 25.1467 27.0001 28.56 27.0001 32.6667V39.3334L25.2801 41.0534C24.4401 41.8934 25.0267 43.3334 26.2134 43.3334H43.7734C44.9601 43.3334 45.5601 41.8934 44.7201 41.0534L43.0001 39.3334Z" fill="#323232"/>
                  </g>
                  <rect x="7.5" y="6.5" width="55" height="55" rx="7.5" stroke="black" stroke-opacity="0.2" shape-rendering="crispEdges"/>
                  </g>
                  <defs>
                  <filter id="filter0_d_1216_7178" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                  <feOffset dx="1" dy="2"/>
                  <feGaussianBlur stdDeviation="4"/>
                  <feComposite in2="hardAlpha" operator="out"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1216_7178"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1216_7178" result="shape"/>
                  </filter>
                  <clipPath id="clip0_1216_7178">
                  <rect width="32" height="32" fill="white" transform="translate(19 18)"/>
                  </clipPath>
                  </defs>
                </svg>
                <div class="grid content-center">
                  <p class="font-semibold">
                    @if ($notification->keterangan =='mengajukan')
                      Sedang mengajukan konseling
                    @elseif ($notification->keterangan =='batal')
                    Konselingmu dibatalkan konselor
                    @else
                      Konselingmu telah selesai
                    @endif
                  </p>
                  <p class="text-[#737373]">Berikan rating terbaik untuk konselor yang telah membantumu</p>
                </div>
              </div>
          @endforeach
        </div>
        
    </div>
@endsection
