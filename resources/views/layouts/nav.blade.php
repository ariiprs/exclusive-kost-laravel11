<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('output.css') }}" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>

<nav class="f fixed inset-x-0 top-6 z-50 mx-auto w-full max-w-[1280px] px-[75px]">
      <div class="rounded-4xl mx-auto flex h-[96px] items-center justify-between rounded-20 bg-[#141414] px-[30px] text-[16px]">
        <img src="{{ asset ('assets/images/logos/estate.svg') }}" alt="Logo" />
        <ul class="flex items-center space-x-[30px] font-semibold text-white">
          <li>
            <a href="{{ route ('dashboard') }}"> Featured </a>
          </li>
          <li>
            <a href="{{ route ('front.all_categories') }}"> Categories </a>
          </li>
          <li>
            <a href="{{ route ('front.testimonial') }}"> Testimonial </a>
          </li>
          <li>
            <a href=""> About </a>
          </li>
        </ul>
      <div class="space-x-3">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="button" class="btn secondary hover:ring-2 hover:ring-[#FFC700]" id="logout-button">
            Log Out
            </button>
        </form>
        </div>
      </div>
    </nav>

    @yield('content')


    <footer class="mt-[100px] space-y-[50px] bg-[#141414] py-[100px]">
        <div class="mx-auto max-w-[1280px] px-[75px]">
            <div class="flex justify-between">
            <div class="space-y-3">
                <h1 class="text-base font-semibold text-white">Solutions</h1>
                <ul class="space-y-3 text-base text-[#A8A8AB]">
                <li class="hover:font-semibold hover:text-primary">Credit Rewards</li>
                <li class="hover:font-semibold hover:text-primary">P2P Renting</li>
                <li class="hover:font-semibold hover:text-primary">Open for Listing</li>
                <li class="hover:font-semibold hover:text-primary">AI Automation</li>
                <li class="hover:font-semibold hover:text-primary">APIs Developer</li>
                </ul>
            </div>
            <div class="space-y-3">
                <h1 class="text-base font-semibold text-white">Product</h1>
                <ul class="space-y-3 text-base text-[#A8A8AB]">
                <li class="hover:font-semibold hover:text-primary">Featured House</li>
                <li class="hover:font-semibold hover:text-primary">Browse Categories</li>
                <li class="hover:font-semibold hover:text-primary">Special Awards</li>
                <li class="hover:font-semibold hover:text-primary">Made-In Bandung</li>
                <li class="hover:font-semibold hover:text-primary">Exclusive Style</li>
                </ul>
            </div>
            <div class="space-y-3">
                <h1 class="text-base font-semibold text-white">Company</h1>
                <ul class="space-y-3 text-base text-[#A8A8AB]">
                <li class="hover:font-semibold hover:text-primary">About Us</li>
                <li class="hover:font-semibold hover:text-primary">Our Investors</li>
                <li class="hover:font-semibold hover:text-primary">Missions 2024</li>
                <li class="hover:font-semibold hover:text-primary">Careers</li>
                <li class="hover:font-semibold hover:text-primary">Media Press</li>
                </ul>
            </div>
            <div class="space-y-[30px]">
                <div class="space-y-3">
                <h1 class="text-base font-semibold text-white">Subscribe & Free Rewards</h1>
                <div class="relative flex items-center">
                    <img src="{{ asset ('assets/images/icons/sms.svg') }}" class="absolute left-5 top-0 translate-y-1/2" alt="SMS Icon" />
                    <input type="email" placeholder="Email Address" class="w-[367px] rounded-full px-[54px] py-3 focus:outline-none" />
                    <button class="btn primary -ms-[50px]">Subscribe</button>
                </div>
                </div>
                <div class="space-y-3">
                <h1 class="text-base font-semibold text-white">Choose Language</h1>
                <div class="flex items-center space-x-[10px] text-white">
                    <img src="{{ asset ('assets/images/icons/uk.svg') }}" alt="UK Flag" />
                    <p>English (UK)</p>
                    <!-- Icon replaced with a down arrow Unicode character for HTML -->
                    <span>&#9662;</span>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="mx-auto max-w-[1280px] px-[75px]">
            <hr class="h-px border-0 bg-[#353535]" />
        </div>

        <div class="mx-auto flex max-w-[1280px] items-center justify-between px-[75px] text-[#A8A8A8]">
            <img src="{{ asset ('assets/images/logos/estate.svg') }}" alt="Logo" />
            <p>Arie Prasetyo Portfolio 2024</p>
        </div>
        </footer>
     <script src="{{ asset ('js/swiper.js') }}"></script>


  </body>
</html>
