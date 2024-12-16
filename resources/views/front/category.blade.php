@extends('layouts.nav')

@section('content')
    <section class="mx-auto mt-[100px] w-full max-w-[1280px] space-y-[30px] px-[75px] pt-16">
    <div class="flex justify-between items-center">
        <a href="{{ route ('front.all_categories') }}">
            <img src="{{ asset ('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <div class="flex-grow text-center text-white">
            <h1 class="text-[28px] font-bold">{{ $category->name }}</h1>
            <p class="text-lg text-[#A8A8AB]">Experience the charm of architecture and the joy of living in {{ $category->name }}</p>
        </div>
        <div class="w-10 h-10"></div> <!-- Placeholder to balance the flex space -->
    </div>
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
            @forelse ($category->kosts as $itemKost)
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
            <p>No data found</p>
        @endforelse
            </div>
        </div>
      </div>
    </section>
@endsection
