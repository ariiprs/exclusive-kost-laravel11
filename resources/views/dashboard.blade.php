@extends('layouts.nav')

@section('content')
    <section class="relative h-[750px] w-full">
      <img src="{{ asset ('assets/images/backgrounds/bg-2.jpg') }}" alt="" class="absolute -z-10 h-full w-full object-cover object-center" />
      <div class="z-50 mx-auto grid h-full w-full max-w-[1280px] items-center px-[75px]">
        <div>
          <div class="space-y-[10px] text-white">
            <h1 class="w-1/2 text-[55px] font-bold">Exclusive in Tangerang City</h1>
            <p class="w-1/3 text-base leading-8">Discover a comfortable and affordable stay with modern amenities, perfect for your urban lifestyle and relaxation needs. </p>
          </div>
          <form action="{{ route('front.search') }}" class="mt-[50px] flex">
            <input class="w-[400px] rounded-s-full bg-[#141414] py-5 pl-[30px] pr-10 text-[20px] text-[#A8A8A8] focus:outline-none" name="keyword" placeholder="Search by kost name..." />
            <button type="submit" class="rounded-e-full bg-primary px-10 py-5 text-[20px] font-semibold">Search</button>
          </form>
        </div>
      </div>

      <div class="absolute inset-x-0 -bottom-16 mx-auto max-w-[1280px] px-[75px]">
        <div class="flex justify-between rounded-20 bg-[#141414] px-[50px] py-6 text-white">
          <div class="flex items-center space-x-4">
            <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-primary">
              <img src="{{ asset ('assets/images/icons/house-2.svg') }}" alt="Kos Available Icon" />
            </div>
            <div>
              <h1 class="text-[28px] font-bold">{{ $newKosts->count() }} Kosts</h1>
              <p class="text-base font-normal text-[#A8A8AB]">Kos Available</p>
            </div>
          </div>

          <div class="h-20 border border-[#353535]"></div>

          <div class="flex items-center space-x-4">
            <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-primary">
              <img src="{{ asset ('assets/images/icons/profile-2user.svg') }}" alt="People Happy Icon" />
            </div>
            <div>
              <h1 class="text-[28px] font-bold">9/10</h1>
              <p class="text-base font-normal text-[#A8A8AB]">People Happy</p>
            </div>
          </div>

          <div class="h-20 border border-[#353535]"></div>

          <div class="flex items-center space-x-4">
            <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-primary">
              <img src="{{ asset ('assets/images/icons/security-user.svg') }}" alt="High Security Icon" />
            </div>
            <div>
              <h1 class="text-[28px] font-bold">100%</h1>
              <p class="text-base font-normal text-[#A8A8AB]">High Security</p>
            </div>
          </div>

          <div class="h-20 border border-[#353535]"></div>

          <div class="flex items-center space-x-4">
            <div class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-primary">
              <img src="{{ asset ('assets/images/icons/global.svg') }}" alt="Countries Icon" />
            </div>
            <div>
              <h1 class="text-[28px] font-bold">{{ $locationKosts->count() }}</h1>
              <p class="text-base font-normal text-[#A8A8AB]">Regions</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mx-auto mt-[100px] w-full max-w-[1280px] space-y-[30px] px-[75px] pt-16">
      <div class="text-center text-white">
        <h1 class="text-[28px] font-bold">Discover the Largest Kosts in Tangerang</h1>
        <p class="text-lg text-[#A8A8AB]">Experience the charm of architecture and the joy of living</p>
      </div>

      <div class="relative">
        <button onclick="prevSlide()" class="absolute -left-[20px] top-[72px] z-10 flex h-[50px] w-[50px] items-center justify-center rounded-full bg-[#141414]">
          <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" alt="" />
        </button>
        <button onclick="nextSlide()" class="absolute -right-[20px] top-[72px] z-10 flex h-[50px] w-[50px] items-center justify-center rounded-full bg-[#141414]">
          <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" alt="" class="rotate-180" />
        </button>


        <div class="flex w-full space-x-[30px] overflow-x-hidden" id="scroll-swiper">
            <div class="flex space-x-[30px] text-white">
            @forelse ($newKosts as $itemNewKost)
            <a href="{{ route('front.details', $itemNewKost->slug) }}">
              <div class="relative h-[350px] w-[260px] overflow-hidden rounded-3xl">
                <div class="absolute flex h-full w-full flex-col justify-end space-y-[14px] bg-gradient-to-b from-white/10 from-[46%] to-[#050211] to-[86%] p-5">
                  <div class="flex items-center justify-between">
                    <div>
                      <h1 class="text-xl font-bold">{{ $itemNewKost->name }}</h1>
                      <p class="text-sm font-semibold">Rp. {{ $itemNewKost->price }}<span class="text-base font-normal">/bulan</span></p>
                    </div>
                    <div class="flex items-center space-x-0.5">
                      <img src="{{ asset ('assets/images/icons/Star.svg') }}" alt="Rating Icon" />
                      <span class="text-sm">4.5/5</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-1">
                      <img src="{{ asset ('assets/images/icons/format-square.svg') }}" alt="Area Icon" />
                      <p class="text-sm">{{  $itemNewKost->location->name }} </p>
                    </div>
                </div>
                <p class="text-sm">{{  $itemNewKost->category->name }} </p>
                </div>
                <img src="{{ Storage::url($itemNewKost->thumbnail) }}" alt="De Flecce Image" class="h-full w-full object-cover" />
              </div>
            </a>
        @empty
            <p>No data found</p>
        @endforelse
            </div>
        </div>
      </div>
    </section>



    <section class="mx-auto mt-[100px] flex max-w-[1280px] justify-between px-[75px]">
      <div class="max-w-[383px] space-y-[30px]">
        <h1 class="text-[28px] font-bold text-white">Huge Benefits That Make You Feel Happier</h1>
        <ul class="space-y-5">
          <li class="flex items-center space-x-3 text-lg font-semibold text-white">
            <img src="{{ asset ('assets/images/icons/tick-circle.svg') }}" alt="" class="mr-3" loading="lazy" />
            Proses verifikasi cepat tanpa memerlukan deposit
          </li>
          <li class="flex items-center space-x-3 text-lg font-semibold text-white">
            <img src="{{ asset ('assets/images/icons/tick-circle.svg') }}" alt="" class="mr-3" loading="lazy" />
            Layanan keamanan 24/7 untuk menjaga properti Anda
          </li>
          <li class="flex items-center space-x-3 text-lg font-semibold text-white">
            <img src="{{ asset ('assets/images/icons/tick-circle.svg') }}" alt="" class="mr-3" loading="lazy" />
            Akses internet berkecepatan tinggi tanpa gangguan
          </li>
          <li class="flex items-center space-x-3 text-lg font-semibold text-white">
            <img src="{{ asset ('assets/images/icons/tick-circle.svg') }}" alt="" class="mr-3" loading="lazy" />
            Tata letak hunian dengan standar kualitas tinggi
          </li>
          <li class="flex items-center space-x-3 text-lg font-semibold text-white">
            <img src="{{ asset ('assets/images/icons/tick-circle.svg') }}" alt="" class="mr-3" loading="lazy" />
            Berbagai manfaat lainnya yang kami janjikan
          </li>
        </ul>
        <div class="flex items-center space-x-[14px]">
          <a href="" class="btn primary flex items-center">
            <img src="{{ asset ('assets/images/icons/message-notif.svg') }}" class="mr-[10px]" />
            Call Sales
          </a>
          <a href="" class="btn secondary">All Benefits</a>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-[30px] text-white">
        @forelse ($popularKosts as $itemPopularKost)
            <a href="">
            <div class="relative h-[200px] w-[310px] overflow-hidden rounded-3xl text-white">
                <div class="absolute flex h-full w-full items-end space-y-[14px] bg-gradient-to-b from-white/10 from-[46%] to-[#050211] to-[86%] p-5">
                <div class="flex w-full items-center justify-between">
                    <h1 class="w-[170px] text-xl font-bold">{{ $itemPopularKost->name }}</h1>
                    <div class="flex items-center space-x-1">
                    {{-- <img src="{{ asset ('assets/images/icons/profile-2user copy.svg') }}" alt="" /> --}}
                    <p>Rp {{ number_format($itemPopularKost->price, 0, ',', '.') }}</p>
                    </div>
                </div>
                </div>
                <img src="{{ Storage::url($itemPopularKost->thumbnail) }}" alt="" class="" loading="lazy" />
            </div>
            </a>
        @empty

        @endforelse


      </div>
    </section>


@endsection
