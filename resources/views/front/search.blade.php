@extends('layouts.nav')

@section('content')
     <section class="mx-auto mt-[100px] w-full max-w-[1280px] space-y-[30px] px-[75px] pt-16">
    <div class="text-center text-white">
      <h1 class="text-[28px] font-bold">Discover the Largest Kosts in Tangerang</h1>
      <p class="text-lg text-[#A8A8AB]">Experience the charm of architecture and the joy of living</p>
      </div>

       <form action="{{ route('front.search') }}" class="mt-[50px] flex">
            <input class="w-[400px] rounded-s-full bg-[#141414] py-5 pl-[30px] pr-10 text-[20px] text-[#A8A8A8] focus:outline-none" name="keyword" placeholder="Search by city or country..." />
            <button type="submit" class="rounded-e-full bg-primary px-10 py-5 text-[20px] font-semibold">Explore</button>
        </form>

      <div class="relative">
        <button onclick="prevSlide()" class="absolute -left-[20px] top-[72px] z-10 flex h-[50px] w-[50px] items-center justify-center rounded-full bg-[#141414]">
          <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" alt="" />
        </button>
        <button onclick="nextSlide()" class="absolute -right-[20px] top-[72px] z-10 flex h-[50px] w-[50px] items-center justify-center rounded-full bg-[#141414]">
          <img src="{{ asset ('assets/images/icons/arrow-left.svg') }}" alt="" class="rotate-180" />
        </button>


        <div class="flex w-full space-x-[30px] overflow-x-hidden" id="scroll-swiper">
            <div class="flex space-x-[30px] text-white">
            @forelse ($kosts as $itemKost)
            <a href="{{ route('front.details', $itemKost->slug) }}">
              <div class="relative h-[350px] w-[260px] overflow-hidden rounded-3xl">
                <div class="absolute flex h-full w-full flex-col justify-end space-y-[14px] bg-gradient-to-b from-white/10 from-[46%] to-[#050211] to-[86%] p-5">
                  <div class="flex items-center justify-between">
                    <div>
                      <h1 class="text-xl font-bold">{{ $itemKost->name }}</h1>
                      <p class="text-sm font-semibold">Rp. {{ $itemKost->price }}<span class="text-base font-normal">/bulan</span></p>
                    </div>
                    <div class="flex items-center space-x-0.5">
                      <img src="{{ asset ('assets/images/icons/Star.svg') }}" alt="Rating Icon" />
                      <span class="text-sm">4.5/5</span>
                    </div>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-1">
                      <img src="{{ asset ('assets/images/icons/format-square.svg') }}" alt="Area Icon" />
                      <p class="text-sm">{{  $itemKost->location->name }} </p>
                    </div>
                </div>
                <p class="text-sm">{{  $itemKost->category->name }} </p>
                </div>
                <img src="{{ Storage::url($itemKost->thumbnail) }}" alt="De Flecce Image" class="h-full w-full object-cover" />
              </div>
            </a>
        @empty
            <p>Belum ada produk yang sesuai {{ $keyword ? 'dengan ' . $keyword : '' }}</p>
        @endforelse
            </div>
        </div>
      </div>
    </section>
@endsection
