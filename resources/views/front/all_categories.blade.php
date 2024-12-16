@extends('layouts.nav')

@section('content')
      <section class="mt-[100px] bg-[#141414] py-[50px]">
      <div class="mx-auto max-w-[1280px] space-y-[30px] px-[75px]">
        <div class="flex items-center justify-between">
          <div>
            <h1 class="text-[28px] font-bold text-white">Categories</h1>
            <p class="text-lg text-[#A8A8AB]">We provide everything</p>
          </div>
          <a href="" class="btn primary">Explore All</a>
        </div>
        <div class="grid grid-cols-4 gap-[30px]">
            @forelse ($categories as $itemCategory)
                <a href="{{ route ('front.category', $itemCategory->slug) }}">
                    <div class="flex items-center space-x-4 rounded-[20px] bg-[#202020] px-5 py-4 text-white">
                    <img src="{{ Storage::url($itemCategory->icon) }}" alt="Star Hills Icon" class="h-9 w-9" />
                    <div class="">
                        <h1 class="text-[20px] font-bold">{{ $itemCategory->name }}</h1>
                        <p class="text-[#A8A8AB]">{{ $itemCategory->kosts->count() }}</p>
                    </div>
                    </div>
                </a>
            @empty
                <p>No Category Found</p>
            @endforelse

        </div>
      </div>
    </section>
@endsection
