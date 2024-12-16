@extends('layouts.nav')

@section('content')
     <section class="mx-auto mt-[100px] py-[50px] flex max-w-[1280px] justify-between px-[75px]">
        <div class="flex justify-between items-center">
            <div class="max-w-[420px] space-y-[30px] ">
              <h1 class="text-[28px] font-bold text-white">Huge Benefits That Make You Feel Happier </h1>
              <ul class="space-y-5">
                <li class="flex items-center space-x-3 text-lg font-semibold text-white">
                  <img src="{{ asset ('assets/images/icons/buildings.svg') }}" alt="" class="mr-3" loading="lazy" />
                  {{ $kost->name }}
                </li>
                <li class="flex items-center space-x-3 text-lg font-semibold text-white">
                  <img src="{{ asset ('assets/images/icons/cup.svg') }}" alt="" class="mr-3" loading="lazy" />
                  Rp. {{ number_format($kost->price, 0, ',', '.') }}
                </li>
                <li class="flex items-center space-x-3 text-lg font-semibold text-white">
                  <img src="{{ asset ('assets/images/icons/building-4.svg') }}" alt="" class="mr-3" loading="lazy" />
                  {{ $kost->category->name }}
                </li>
                <li class="flex items-center space-x-3 text-lg font-semibold text-white">
                  <img src="{{ asset ('assets/images/icons/sun-fog.svg') }}" alt="" class="mr-3" loading="lazy" />
                  {{ $kost->location->name }}
                </li>
                <li class="flex items-center space-x-3 text-lg font-semibold text-white">
                  <img src="{{ asset ('assets/images/icons/wifi.svg') }}" alt="" class="mr-3" loading="lazy" />
                  All other benefits, we promise
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
              <div class="text-white ">
                  <a href="">
                      <div class="relative h-[300px] w-[400px] overflow-hidden rounded-3xl text-white">
                          <div class="absolute flex h-full w-full items-end space-y-[14px] bg-gradient-to-b from-white/10 from-[46%] to-[#050211] to-[86%] p-5">
                              <div class="flex w-full items-center justify-between">
                                  <h1 class="w-[200px] text-2xl font-bold">{{ $kost->name }}</h1>
                                  <div class="flex items-center space-x-1">
                                      {{-- <img src="{{ asset ('assets/images/icons/profile-2user copy.svg') }}" alt="" /> --}}
                                      <p class="text-lg">Rp {{ number_format($kost->price, 0, ',', '.') }}</p>
                                  </div>
                              </div>
                          </div>
                          <img src="{{ Storage::url($kost->thumbnail) }}" alt="" class="h-full w-full object-cover" loading="lazy" />
                      </div>
                  </a>
              </div>
        </div>

    </section>
@endsection