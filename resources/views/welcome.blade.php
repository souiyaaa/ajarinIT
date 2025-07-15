<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    
    {{-- Favicon --}}
   <link rel="icon" href="https://ajarinit.com/favicon2.ico" type="image/x-icon">




    <style>
        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scrollLeft 25s linear infinite;
        }

        [x-cloak] {
            display: none !important;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        function scrollCards(direction) {
            const container = document.getElementById('cardContainer');
            const cardWidth = 900; // Approximate width of one card + gap
            container.scrollBy({
                left: direction * cardWidth,
                behavior: 'smooth'
            });
        }
    </script>

    <title>AjarinIT</title>
</head>

<body class="bg-[#F1FBFF]">
    {{-- header --}}
    <!-- Sticky Header -->
    <div class="sticky top-0 z-50 bg-white" x-data="{ open: false }">
        <div class="bg-white px-6 py-4 sm:px-6 md:px-8 lg:px-20">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751434883/RealSizeLogo_zry9zv.png"
                    alt="Logo" class="h-10 w-auto md:h-11" />

                <!-- Desktop Navigation -->
                <ul class="hidden lg:flex gap-20 items-center">
                    <li><a href="#about" class="text-[#242424] hover:underline">About us</a></li>
                    <li><a href="#program" class="text-[#242424] hover:underline">Program</a></li>
                    <li><a href="#curriculum" class="text-[#242424] hover:underline">Curriculum</a></li>
                    <li><a href="#faq" class="text-[#242424] hover:underline">FAQ</a></li>
                </ul>

                <!-- CTA Button (always visible) -->
                <div class="hidden lg:block">
                    <x-cta />
                </div>

                <!-- Hamburger Button -->
                <button @click="open = !open" class="lg:hidden focus:outline-none">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#242424]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#242424]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" x-transition class="lg:hidden mt-4 space-y-4">
                <a href="#about" class="block text-[#242424]">About us</a>
                <a href="#program" class="block text-[#242424]">Program</a>
                <a href="#curriculum" class="block text-[#242424]">Curriculum</a>
                <a href="#faq" class="block text-[#242424]">FAQ</a>
                <x-cta />
            </div>
        </div>
    </div>



    {{-- Hero Section --}}
    <div class="relative bg-[#41BCE5] min-h-[700px] lg:min-h-[800px]">
  <!-- Background image layer -->
  <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751438680/Decorative_BackgroundF_rsz1dn.png"
    alt="Background decoration" class="absolute inset-0 w-full h-full object-cover z-0">

  <!-- Overlay -->
  <div class="absolute inset-0 z-10 flex flex-col-reverse lg:flex-row items-center justify-center lg:items-end lg:justify-between px-6 sm:px-10 lg:px-44 pb-20 lg:pb-40 gap-10 lg:gap-0">
    
    <!-- LEFT: Hero Text -->
    <div class="text-white max-w-xl text-center lg:text-left">
      <p class="text-xl sm:text-2xl italic">Halo!</p>
      <p class="text-2xl sm:text-3xl lg:text-4xl font-bold">Les Komputer Privat</p>
      <p class="text-2xl sm:text-3xl lg:text-4xl font-bold">
        Surabaya Terbaik
        <span class="relative inline-block">
          <span class="relative z-10">No. 1</span>
          <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751461777/VectorAsset_ye157l.svg"
            alt="Line Decoration" class="absolute top-1 pt-8 left-0 z-0 pointer-events-none" />
        </span>
      </p>

      <div class="pt-4 sm:pt-5 max-w-md mx-auto lg:mx-0">
        <p class="text-base sm:text-lg lg:text-xl">
          <span class="font-light">AjarinIT adalah les privat komputer yang kini hadir di Citraland Surabaya untuk SD - SMP. AjarinIT</span>
          <span class="font-bold"> menyediakan laptop untuk setiap kunjungan siswa.</span>
        </p>
      </div>

      <div class="pt-10 sm:pt-20 lg:pt-32">
        <p class="font-bold text-sm sm:text-base lg:text-lg">
          Kuota Juli - Agustus terbatas (Sisa 30 Murid)
        </p>
      </div>
    </div>

    <!-- RIGHT: 3 Image Frames (lg only) -->
    <div class="hidden lg:flex gap-6">
      <div class="relative inline-block">
        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751461312/Group_40_t4pz3e.png"
          alt="Intro to AI" class="z-0 block" />
        <div class="absolute inset-0 flex items-end justify-start p-6 z-10">
          <div class="text-white">
            <p class="text-lg font-bold">INTRO TO</p>
            <p class="text-4xl italic font-bold">Artificial</p>
            <p class="text-4xl">Intelligence</p>
          </div>
        </div>
      </div>

      <div class="relative inline-block">
        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751461313/Group_41_ow7xd5.png"
          alt="Mobile Dev" class="z-0 block" />
        <div class="absolute inset-0 flex items-end justify-start p-6 z-10">
          <div class="text-white">
            <p class="text-lg font-bold">Buat aplikasi pertama</p>
            <p class="text-4xl italic font-bold">Mobile</p>
            <p class="text-4xl">Developers</p>
          </div>
        </div>
      </div>

      <div class="relative inline-block">
        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751461313/Group_42_ixtquo.png"
          alt="Game Dev" class="z-0 block" />
        <div class="absolute inset-0 flex items-end justify-start p-6 z-10">
          <div class="text-white">
            <p class="text-lg font-bold">Buat Game Pertamamu!</p>
            <p class="text-4xl italic font-bold">Game</p>
            <p class="text-4xl">Developers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    {{-- White Transition to other content --}}
    <div class="relative -mt-16 z-10">
        <div
            class="mx-auto w-full h-20 rounded-t-lg bg-gradient-to-t from-[#F1FBFF] to-[rgba(255,255,255,0.4)] backdrop-blur-sm">
        </div>
    </div>

    <section id="about" class="scroll-mt-32">
        <div class="px-6 md:px-10 lg:px-44">
            <!-- Line and Title -->
            <div class="hidden sm:block w-2/5 h-px bg-black my-4"></div>
            <p class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#242424]">About the program</p>

            <!-- Content -->
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 py-12 lg:py-16">
                <!-- Stats -->
                <div class="flex flex-col sm:flex-row gap-8 lg:gap-20">
                    <div class="max-w-72">
                        <p class="text-4xl sm:text-5xl font-bold text-[#336C80]">90%</p>
                        <p class="text-sm sm:text-base text-[#242424]">pekerjaan masa depan akan membutuhkan kemampuan
                            berpikir komputasional.</p>
                    </div>
                    <div class="max-w-72">
                        <p class="text-4xl sm:text-5xl font-bold text-[#336C80]">78%</p>
                        <p class="text-sm sm:text-base text-[#242424]">Sekolah SD tidak mempunyai fasilitas dan
                            prasarana untuk mengajarkan coding.</p>
                    </div>
                </div>

                <!-- Program Description -->
                <div class="max-w-full lg:max-w-[693px]">
                    <p class="text-lg sm:text-xl font-bold text-[#242424]">
                        A Generation Dare to Ideate.
                    </p>
                    <p class="pt-3 text-sm sm:text-base text-[#242424]">
                        Sudah 2025, yakin tanpa ilmu komputer anak bisa berkompetisi? Di AjarinIT prioritas kami
                        adalah mengajarkan anak untuk mencipta. Tidak hanya teori melainkan mempelajari cara menciptakan
                        Game, mengenal AI, membuat aplikasi Android.
                    </p>

                    <p class="pt-10 text-lg sm:text-xl font-bold text-[#242424]">
                        Kelebihan Program
                    </p>
                    <ul class="list-disc pl-5 sm:pl-12 text-sm sm:text-base text-[#242424] pt-3 pb-10 sm:py-14">
                        <li>Tersedia laptop Gaming dan Macbook</li>
                        <li>Sesuai kurikulum nasional terkini</li>
                        <li>Pembelajaran berbasis challenge dan proyek</li>
                        <li>Guru datang ke rumah</li>
                        <li>Pengantar Bilingual</li>
                    </ul>
                    <x-cta />
                </div>
            </div>
        </div>

        <!-- Tech Stack -->
        <div class="pt-20">
            <div class="bg-[#DFF7FF] w-full h-60 flex flex-col items-center justify-start pt-9">
                <p class="text-sm sm:text-base lg:text-lg text-[#242424] mb-3 text-center px-4">
                    30+ Tools dan Teknologi yang akan diajarkan
                </p>
                <div class="overflow-hidden w-full max-w-5xl px-4 sm:px-6">
                    <div class="whitespace-nowrap animate-scroll flex gap-10 py-6 sm:py-7"
                        style="animation: scrollLeft 25s linear infinite; width: max-content;">
                        <!-- Tech stack images -->
                        <div class="flex gap-10 items-center justify-center">
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610790/image_10_bdhcap.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610791/image_74_yyjx1c.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_70_tajuc1.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_75_b10di5.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_76_af2y1c.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_73_l90jsn.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_14_igiiqa.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610656/image_11_al1xzp.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612832/blender_o98lxp.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/roblox_pdjaoe.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/hailuo_w9wqym.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/CSS_mumk4f.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/gpt_ezonzg.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/image_m9n6ua.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/Vector_hismkh.svg"
                                alt="" class="h-10 sm:h-12 object-contain" />

                            {{-- second set --}}
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610790/image_10_bdhcap.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610791/image_74_yyjx1c.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_70_tajuc1.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_75_b10di5.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_76_af2y1c.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_73_l90jsn.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610657/image_14_igiiqa.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751610656/image_11_al1xzp.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612832/blender_o98lxp.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/roblox_pdjaoe.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/hailuo_w9wqym.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/CSS_mumk4f.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/gpt_ezonzg.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/image_m9n6ua.png"
                                alt="" class="h-10 sm:h-12 object-contain" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751612834/Vector_hismkh.svg"
                                alt="" class="h-10 sm:h-12 object-contain" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Program --}}
    <section id="program" class="scroll-mt-24">
        <div class="flex flex-col lg:flex-row pt-20 sm:pt-24 lg:pt-28 px-4 sm:px-6 lg:px-44 pb-20 sm:pb-24 lg:pb-28">
            <div class="">
                <p class="text-4xl font-bold text-[#242424]"> 6 Program Kami</p>
                <div class="w-2/5 h-px bg-black my-4"></div>
                <p class="pt-5 max-w-96 text-[#242424]">
                    Mulai dari si kecil yang suka main game, hingga kakak SMA yang mulai mau belajar membuat website
                    untuk
                    penghasilan sampingan. Semua dapat dilatih disini!
                </p>
                <div class="flex pt-8 gap-3 md:flex hidden">
                    <button onclick="scrollCards(-1)"
                        class="cursor-pointer w-8 h-8 md:w-10 md:h-10 bg-[#D9D9D966] rounded-full flex items-center justify-center opacity-40 hover:opacity-100">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751869912/before_gdnagt.svg"
                            class="w-3 h-3 md:w-4 md:h-4" />
                    </button>
                    <button onclick="scrollCards(1)"
                        class="cursor-pointer w-8 h-8 md:w-10 md:h-10 bg-[#D9D9D966] rounded-full flex items-center justify-center opacity-40 hover:opacity-100">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751869911/after_w1e0bp.svg"
                            class="w-3 h-3 md:w-4 md:h-4" />
                    </button>
                </div>

                <div class="pt-11 md:pb-12 sm: pb-12">
                    <x-cta />
                </div>
            </div>
            <div class="">
                <div id="cardContainer"
                    class=" pl-10 flex gap-10 overflow-x-auto scroll-smooth scrollbar-hide max-w-4xl">

                    <div class="relative w-64 shrink-0"> <!-- Fixed width so it's consistent -->
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            <div class="w-32 h-8 bg-[#3fccab] rounded-lg flex items-center justify-center">
                                <p class="text-white text-sm">Kid Friendly👷</p>
                            </div>

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-2 pb-4">Fun with AI
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Usia SD</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Proyek interaktif AI</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Melatih Logika anak</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Melatih skill math</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Berkreasi dengan AI</p>
                                </div>
                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                    <div class="relative w-64 shrink-0"> <!-- Fixed width so it's consistent -->
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            <div class="w-32 h-8 bg-[#ED4C78] rounded-lg flex items-center justify-center">
                                <p class="text-white text-sm">For Beginner🔥</p>
                            </div>

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-2 pb-4">Super Coders for
                                Kids
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Usia 6-9 tahun</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Permainan Logika</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Belajar Pseudocode</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Scratch Project</p>
                                </div>
                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                    <div class="relative w-64 shrink-0">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            {{-- <div class="w-32 h-8 bg-[#ed944c] rounded-lg flex items-center justify-center">
                            <p class="text-white text-sm">Popular 🚀</p>
                        </div> --}}

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-9 pb-4">Game Explorer
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Game Design</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Koding ROBLOX</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Gaming ScratchJR</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Belajar logika game </p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2"> animasi interaktif </p>
                                </div>
                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                    <div class="relative w-64 shrink-0">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            <div class="w-32 h-8 bg-[#4cd7ed] rounded-lg flex items-center justify-center">
                                <p class="text-white text-sm">For everyone 💯</p>
                            </div>

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-2 pb-4">Website Builders
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Logic Games</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Responsive Design</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Micro Interaction</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Website Project</p>
                                </div>
                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                    <div class="relative w-64 shrink-0">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            <div class="w-32 h-8 bg-[#4cd7ed] rounded-lg flex items-center justify-center">
                                <p class="text-white text-sm">For everyone 💯</p>
                            </div>

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-2 pb-4">Mobile Coders
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Android & iOS Design</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Swift and Kotlin</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Firebase</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">AI on Mobile</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Logic games</p>
                                </div>
                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                    <div class="relative w-64 shrink-0">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751643447/base_si4op9.png"
                            alt="Base" class="w-full object-contain z-0" />

                        <!-- Overlay content -->
                        <div class="absolute inset-0 z-10 flex flex-col justify-start items-center p-4">
                            <!-- Badge -->
                            <div class="w-32 h-8 bg-[#4cd7ed] rounded-lg flex items-center justify-center">
                                <p class="text-white text-sm">For everyone 💯</p>
                            </div>

                            <!-- Title -->
                            <p class="text-[#242424] font-bold text-xl max-w-36 text-center pt-2 pb-4">Fun with Math
                            </p>

                            <!-- Price -->
                            <p class=" text-[#19A4D3] text-sm italic">start from</p>
                            <div class="flex flex-row items-baseline gap-1 relative">
                                <p class="absolute left-0 top-0 text-[#19A4D3] text-sm ">Rp</p>
                                <p class="pl-6 pr-8 text-[#19A4D3] text-3xl font-bold">150</p>
                                <p class="absolute bottom-0 right-0 text-[#19A4D3]">ribu</p>
                            </div>

                            <div class="pt-4 text-[#242424] flex flex-col gap-2">
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Melatih matematika</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Memecahkan teka teki</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2">Math and Logic Games</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2"> Code Sederhana</p>
                                </div>
                                <div class="flex">
                                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751868627/check_mbcfyl.svg"
                                        alt="Check" class="w-4">
                                    <p class="pl-2"> Membuat game</p>
                                </div>

                            </div>
                            <div class="pt-12">
                                <x-cta />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>



    {{-- Benefit --}}
    <div class="w-full bg-[#DFF7FF] py-16">
        <div class="flex flex-col items-center justify-center">
            <p class="text-[#242424] text-2xl md:text-3xl lg:text-4xl font-bold text-center">Apa saja yang didapatkan
                nanti?</p>
            <p class="text-[#242424] text-base md:text-lg lg:text-xl pt-2 md:pt-3 text-center">Kuota Juli - Agustus
                terbatas (Sisa 10 Murid)</p>

            <!-- Cards Wrapper -->
            <div
                class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-center pt-10 sm:pt-12 gap-4 sm:gap-3 sm: px-8">

                <!-- CARD 1 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/hugeicons_mentoring_jge5hi.svg"
                            alt="Mentor icon" class="w-16 md:w-20 lg:w-24" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Experts Mentor</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Setiap murid mendapatkan mentor yang expert dibidangnya. Seperti mobile development, AI,
                                dan design
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/ic_outline-laptop_ghgwwv.svg"
                            alt="Laptop icon" class="w-16 md:w-20 lg:w-24" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Akses Laptop</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Murid akan mendapatkan laptop yang sesuai kebutuhan belajar. Yaitu Gaming Laptop atau
                                Macbook.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/bx_code-block_rpmrig.svg"
                            alt="Premium software icon" class="w-16 md:w-20 lg:w-24" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Aplikasi Premium</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Murid mendapatkan akses pada layanan premium aplikasi Figma, Canva, XCode, dan lain
                                lain.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/lucide_house_z5xdcp.svg"
                            alt="House icon" class="w-14 md:w-20 lg:w-20" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Mentor ke rumah</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Mentor akan datang ke rumah untuk memastikan kemudahan serta kenyamanan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/lets-icons_video-light_j7iata.svg"
                            alt="Play icon" class="w-16 md:w-20 lg:w-24" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Opsi kelas online</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Sedang berlibur? Silahkan mengikuti kelas online yang telah di sediakan via zoom.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="w-full sm:w-[360px] lg:w-[427px] h-auto bg-white rounded-2xl">
                    <div class="flex p-5 sm:p-6 lg:py-9 lg:px-7">
                        <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751895797/material-symbols_work_p0uoej.svg"
                            alt="Briefcase icon" class="w-16 md:w-20 lg:w-24" />
                        <div class="pl-6 md:pl-10">
                            <p class="text-lg md:text-xl lg:text-2xl font-semibold">Personal portfolio</p>
                            <p class="text-sm pt-1 md:pt-2">
                                Murid akan memiliki portfolionya sendiri sehingga mempermudah proses mencari pekerjaan
                                di masa depan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- timeline --}}
    <section id="curriculum" class="scroll-mt-24">
        <div class="items-center justify-center flex flex-col pt-20" x-data="{ program: 'fun with ai' }" x-cloak>
            <p class="text-[#242424] text-2xl md:text-3xl lg:text-4xl font-bold text-center">Timeline</p>
            <p class="text-[#242424] text-xs md:text-sm max-w-[695px] text-center pt-2 md:pt-3">
                Ketahui timeline yang kami rekomendasikan. Setiap anak bisa memiliki program yang berbeda, berdasarkan
                kebutuhan.
            </p>

            <!-- Filter buttons -->
            <div class="flex flex-wrap justify-center gap-3 sm:gap-2 md:gap-6 px-4">
                <template
                    x-for="btn in ['fun with ai', 'super coders', 'game explorer', 'web koders', 'mobile koders', 'fun with math']">
                    <button type="button" @click="program = btn"
                        :class="program === btn ? 'border-2 border-[#869499] bg-[#DFF7FF] text-[#242424]' :
                            'bg-[#DFF7FF] text-[#242424]'"
                        class="px-4 sm:px-5 md:px-6 py-2 text-sm md:text-base rounded-lg mt-6 transition">
                        <span x-text="btn.charAt(0).toUpperCase() + btn.slice(1)"></span>
                    </button>
                </template>
            </div>

            <!-- Table Component Template -->
            <template
                x-for="(table, key) in {
      'fun with ai': [
        ['Engage 🔎', 'Pengenalan AI dan Algoritma dasar komputer', 'Bermain Game Algoritma', 'Menyusun algoritma dasar'],
        ['Explore 🎮', 'Mengenal tools AI', 'Bereksperimen dengan tools dasar ML dan AI', 'Model sederhana ML'],
        ['Explain 🧩', 'Memahami cara implementasi AI', 'Mengenal input proses output dalam AI', 'Project Based Discussion'],
        ['Elaborate 🎨', 'Menyusun projek website berbasis AI', 'Membuat projek web/ scratch dengan AI sederhana', 'Menggabungkan coding dasar + AI'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi hasil karya ke mentor', 'Presentasi murid dan Laporan Mentor']
      ],
      'super coders': [
        ['Engage 🔎', 'Melatih Logika anak', 'tantangan algoritma melalui aplikasi', 'Mengenal cara berpikir algoritmik'],
        ['Explore 🎮', 'Menyusun flow chart dan psudocode', 'Merubah langkah jadi algoritma', 'Psudocode sebuah game'],
        ['Explain 🧩', 'Mengimplementasikan logika sederhana', 'Menjelaskan konsep algoritma pada coding block', 'Quiz/ Presentasi'],
        ['Elaborate 🎨', 'Menyatukan semua elemen: algoritma, logika', 'Buat proyek game interaktif', 'Game Interaktif'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi hasil karya ke mentor', 'Presentasi murid dan Laporan Mentor']
      ],
      'game explorer': [
        ['Engage 🔎', 'Bermain & mengamati game favorit', 'Mengenal elemen elemen game', 'Quiz'],
        ['Explore 🎮', 'Mendesign UI/X permainan', 'Eksplorasi Design Game di Figma', 'Game prototype'],
        ['Explain 🧩', 'Konsep coding dasar game', 'Menyusun code untuk permainan seperti roblox', 'Menjelaskan Dasar logika game'],
        ['Elaborate 🎨', 'Menyusun mini-game interaktif', 'Membuat mini game interaktif', 'Game story interaktif'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi dan UX Testing', 'Presentasi murid dan Laporan Mentor']
      ],
      'web koders': [
        ['Engage 🔎', 'Bermain Website Puzzle Game', 'Menyusun elemen web secara fisik dan digital', 'Memahami struktur body website'],
        ['Explore 🎮', 'Mengubah desain menjadi code', 'Mengenal basic tag HTML', 'Text based website'],
        ['Explain 🧩', 'Mengenal alur kerja website dengan MVC', 'Membuat game web sederhana', 'Menjelaskan alur website (Tagging, event handler)'],
        ['Elaborate 🎨', 'Menyusun website sendiri', 'Membuat desain dan website sendiri', 'Desain dan code Website'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi dan opsional deploy online', 'Presentasi murid dan Laporan Mentor']
      ],
      'mobile koders': [
        ['Engage 🔎', 'Mengenalkan konsep aplikasi', 'Mengenal elemen elemen dalam aplikasi mobile', 'App Hunt and Design'],
        ['Explore 🎮', 'Menyusun prototipe aplikasi mobile', 'Eksplorasi Elemen UI', 'High Fidelity Prototype'],
        ['Explain 🧩', 'Logika aplikasi mobile sederhana', 'Mengubah desain menjadi aplikasi dengan logika sederhana', 'Aplikasi sederhana'],
        ['Elaborate 🎨', 'Menyusun Proyek Aplikasi pribadi', 'Membuat Desain UI dan Aplikasi', 'Aplikasi mobile interaktif'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi dan Testing', 'Presentasi murid dan Laporan Mentor']
      ],
      'fun with math': [
        ['Engage 🔎', 'Mengenalkan penggunaan matematika dalam aplikasi', 'Observasi pengunaan matematika', 'konsep matematika dalam algoritma'],
        ['Explore 🎮', 'Penjumlahan, pengulangan, pola bilangan, koordinat', 'Eksperimentasi dengan math playground', 'Mini project and Puzzle'],
        ['Explain 🧩', 'Logika komputer sederhana', 'Membuat logika matematika sederhana via komputer', 'Coding logika if, variabel, operator math'],
        ['Elaborate 🎨', 'Menyusun Aplikasi berbasis Matematika', 'Membuat aplikasi sederhana', 'Aplikasi matematika interaktif'],
        ['Evaluate 🌟', 'Mempresentasikan hasil belajar', 'Presentasi', 'Presentasi murid dan Laporan Mentor']
      ]
    }"
                :key="key">
                <div x-show="program === key" x-transition.opacity
                    class="overflow-x-auto max-w-7xl w-full px-4 md:px-8 mt-10 pb-20">
                    <table class="min-w-full table-auto border border-gray-300 rounded-lg shadow-sm">
                        <thead class="bg-[#19A4D3] text-white text-xs sm:text-sm md:text-base">
                            <tr>
                                <th class="text-left py-2 sm:py-3 px-3 sm:px-5 font-semibold">Modul</th>
                                <th class="text-left py-2 sm:py-3 px-3 sm:px-5 font-semibold">Fokus</th>
                                <th class="text-left py-2 sm:py-3 px-3 sm:px-5 font-semibold">Aktivitas</th>
                                <th class="text-left py-2 sm:py-3 px-3 sm:px-5 font-semibold">Output</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-[#242424] text-xs sm:text-sm">
                            <template x-for="row in table" :key="row[0]">
                                <tr class="border-t border-gray-200" :class="$even ? 'bg-gray-50' : ''">
                                    <template x-for="col in row" :key="col">
                                        <td class="py-2 sm:py-3 px-3 sm:px-5" x-text="col"></td>
                                    </template>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </template>
        </div>
    </section>


    {{-- CTA --}}
    <div class="pt-20">
        <div
            class="w-full h-auto lg:h-72 bg-[#DFF7FF] flex flex-col items-center justify-center px-4 lg:px-0 py-10 lg:py-0 text-center">
            <p class="text-[#242424] text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold leading-snug">
                Tunggu apa lagi? Slot Tatap Muka bulan Juli hanya untuk 10 orang tercepat
            </p>
            <div class="flex flex-wrap justify-center gap-1 pt-3 text-base sm:text-lg">
                <p>Daftar sekarang supaya</p>
                <p class="italic">nggak</p>
                <p>ketinggalan manfaatnya!</p>
            </div>
            <div class="pt-6 sm:pt-8 lg:pt-10">
                <x-cta />
            </div>
        </div>
    </div>


    {{-- Testimony --}}
    <div class="flex flex-col lg:flex-row items-start lg:items-center px-6 lg:px-[186px] py-20">
        <!-- Title & Subtitle -->
        <div class="max-w-96">
            <p class="text-3xl font-bold">Apa kata siswa?</p>
            <hr class="border-1 border-[#242424] my-5 max-w-16" />
            <p class="pt-6 text-[#242424]">Ayo gabung dengan puluhan anak lainnya yang sudah menjadi bagian dari
                AjarinIT</p>
        </div>

        <!-- Testimonies -->
        <div class="flex flex-col lg:pl-40 lg:pt-0">
            <!-- First Row -->
            <div class="flex flex-col md:flex-row">
                <!-- Testimony 1 -->
                <div class="relative max-w-80 mx-auto md:mx-0 md:mb-0 md:mr-10">
                    <!-- Quote (hidden on sm & md) -->
                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945486/quote_ymgoqg.svg"
                        alt="Quote" class="absolute top-0 left-0 z-0 hidden lg:block" />
                    <!-- Content -->
                    <div class="relative z-10 pt-20 pl-8">
                        <div class="flex">
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945486/outlinestar_ch3yin.svg"
                                alt="star" />
                        </div>
                        <p class="text-[#727272] text-sm pt-5">
                            Belajar banyak selama 1 bulan ini. Awalnya ragu, tapi didorong terus untuk bisa buat
                            aplikasiku sendiri. Untuk temen-temen yang lain harus berani coba.
                        </p>
                        <p class="pt-4 font-bold text-[#4E4E4E]">Vanessa</p>
                    </div>
                </div>

                <!-- Testimony 2 -->
                <div class="relative max-w-80 mx-auto md:mx-0">
                    <!-- Quote (hidden on sm & md) -->
                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945486/quote_ymgoqg.svg"
                        alt="Quote" class="absolute top-0 left-10 z-0 hidden lg:block" />
                    <!-- Content -->
                    <div class="relative z-10 pt-20 pl-8">
                        <div class="flex">
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                        </div>
                        <p class="text-[#727272] text-sm pt-5">
                            Awalnya saya ragu karena anak saya belum pernah belajar coding. Tapi ternyata dia sangat
                            menikmati kelasnya, mentornya juga nyaman, menyesuaikan dengan gender anak.
                        </p>
                        <p class="pt-4 font-bold text-[#4E4E4E]">Ms. Rani, Parent</p>
                    </div>
                </div>
            </div>

            <!-- Second Row -->
            <div class="flex flex-col md:flex-row ">
                <!-- Testimony 3 -->
                <div class="relative max-w-80 mx-auto md:mx-0 md:mb-0 md:mr-10">
                    <!-- Quote (hidden on sm & md) -->
                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945486/quote_ymgoqg.svg"
                        alt="Quote" class="absolute top-0 left-0 z-0 hidden lg:block" />
                    <!-- Content -->
                    <div class="relative z-10 pt-20 pl-8">
                        <div class="flex">
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                        </div>
                        <p class="text-[#727272] text-sm pt-5">
                            Aku suka banget waktu bikin trial game di Figma! Gurunya sabar dan seru, terus aku bisa
                            nunjukin game-ku ke teman-teman
                        </p>
                        <p class="pt-4 font-bold text-[#4E4E4E]">Arka</p>
                    </div>
                </div>

                <!-- Testimony 4 -->
                <div class="relative max-w-80 mx-auto md:mx-0">
                    <!-- Quote (hidden on sm & md) -->
                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945486/quote_ymgoqg.svg"
                        alt="Quote" class="absolute top-0 left-10 z-0 hidden lg:block" />
                    <!-- Content -->
                    <div class="relative z-10 pt-20 pl-8">
                        <div class="flex">
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                            <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751945485/material-symbols_star_ayrxcq.svg"
                                alt="star" />
                        </div>
                        <p class="text-[#727272] text-sm pt-5">
                            Salah satu hal yang paling kami syukuri adalah ajarinIT menyediakan laptop-nya. Kami belum
                            punya komputer di rumah, tapi anak saya tetap bisa belajar
                        </p>
                        <p class="pt-4 font-bold text-[#4E4E4E]">Mr. Chandra, Parent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ section --}}
    <section id="faq" class="scroll-mt-24">
        <div class="px-6 md:px-10 lg:px-[178px] pt-20 lg:pt-[130px] flex flex-col lg:flex-row gap-10 lg:gap-0"
            x-data="{ active: null }">

            <!-- FAQ Icon -->
            <div class="flex justify-center lg:block">
                <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751946737/FAQ_icon_gldseg.png"
                    alt="FAQ Icon" class="w-40 md:w-64 lg:w-auto h-auto object-contain" />
            </div>

            <!-- FAQ Content -->
            <div class="lg:pl-24">
                <p class="text-2xl md:text-3xl font-bold text-[#242424]">Frequently Asked Question</p>
                <hr class="border-1 border-[#242424] my-4 md:my-5 max-w-16" />

                <!-- FAQ 1 -->
                <div class="mt-6">
                    <button @click="active === 1 ? active = null : active = 1"
                        class="flex items-center gap-2 text-left text-[#727272] font-bold focus:outline-none text-lg md:text-xl w-full">
                        <span x-text="active === 1 ? '-' : '+'"></span>
                        <span>Berapa usia terbaik untuk anak saya mendaftar?</span>
                    </button>
                    <div x-show="active === 1" x-transition class="mt-3 text-[#727272] text-sm md:text-base">
                        Usia terbaik adalah 7–15 tahun, saat anak sedang aktif mengeksplorasi dan mudah belajar hal
                        baru.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="mt-6">
                    <button @click="active === 2 ? active = null : active = 2"
                        class="flex items-center gap-2 text-left text-[#727272] font-bold focus:outline-none text-lg md:text-xl w-full">
                        <span x-text="active === 2 ? '-' : '+'"></span>
                        <span>Apakah ada promo jika saya mendaftar hari ini?</span>
                    </button>
                    <div x-show="active === 2" x-transition class="mt-3 text-[#727272] text-sm md:text-base">
                        Ya, khusus anak yang bersekolah di sekolah Citra Kasih, Ciputra, dan Cita Hati Citraland.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="mt-6">
                    <button @click="active === 3 ? active = null : active = 3"
                        class="flex items-center gap-2 text-left text-[#727272] font-bold focus:outline-none text-lg md:text-xl w-full">
                        <span x-text="active === 3 ? '-' : '+'"></span>
                        <span>Berapa banyak pertemuan untuk menyelesaikan sebuah program?</span>
                    </button>
                    <div x-show="active === 3" x-transition class="mt-3 text-[#727272] text-sm md:text-base">
                        Idealnya untuk anak di bangku SD dapat menyelesaikan program selama 12 pertemuan sedangkan untuk
                        anak SMP dapat menyelesaikannya lebih cepat yaitu 8 pertemuan.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="mt-6">
                    <button @click="active === 4 ? active = null : active = 4"
                        class="flex items-center gap-2 text-left text-[#727272] font-bold focus:outline-none text-lg md:text-xl w-full">
                        <span x-text="active === 4 ? '-' : '+'"></span>
                        <span>Apakah anak saya harus bisa coding sebelumnya?</span>
                    </button>
                    <div x-show="active === 4" x-transition class="mt-3 text-[#727272] text-sm md:text-base">
                        Tidak, kami telah berpengalaman mengajar anak-anak tanpa bisa coding sebelumnya!
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="mt-6">
                    <button @click="active === 5 ? active = null : active = 5"
                        class="flex items-center gap-2 text-left text-[#727272] font-bold focus:outline-none text-lg md:text-xl w-full">
                        <span x-text="active === 5 ? '-' : '+'"></span>
                        <span>Apakah bisa mengajarkan IT tentang pelajaran sekolah?</span>
                    </button>
                    <div x-show="active === 5" x-transition class="mt-3 text-[#727272] text-sm md:text-base">
                        Tentu bisa! Di luar program yang kami sediakan, pembelajaran materi sekolah sangat dianjurkan.
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- footer --}}
    <div class="pt-20">
        <div class="w-full bg-[#BCEEFF] px-6 sm:px-10 lg:px-[178px] py-12 lg:py-20">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-0">

                <!-- Logo & Description -->
                <div class="lg:basis-1/3">
                    <img src="https://res.cloudinary.com/ddc0f90ph/image/upload/v1751434883/RealSizeLogo_zry9zv.png"
                        alt="footer logo" class="w-40 sm:w-52 lg:w-72 h-auto object-contain" />
                    <p class="max-w-[403px] text-sm pt-3">
                        Powered by Sribusitus Group. It’s vision is to build a future worth fighting for, which is to
                        see
                        next generation of world class developer rising from Indonesia.
                    </p>
                </div>

                <!-- Program List -->
                <div class="flex flex-col gap-2 lg:pl-20">
                    <p class="font-bold text-lg">Our Program</p>
                    <p>Fun with AI</p>
                    <p>Super Coders for Kids</p>
                    <p>Game Explorer</p>
                    <p>Mobile Coders</p>
                    <p>Fun with Math</p>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col gap-4 lg:pl-20">
                    <div>
                        <p class="font-bold">Email</p>
                        <p>AjarinIT@sribusitus.id</p>
                    </div>
                    <div>
                        <p class="font-bold">Instagram</p>
                        <p>@ajarinIT</p>
                    </div>
                    <div>
                        <p class="font-bold">Whatsapp Hotline</p>
                        <p>+62 812-1739-2550</p>
                    </div>
                </div>

                <!-- CTA -->
                <div class="lg:pl-20">
                    <p class="text-lg sm:text-xl font-bold">Daftar Sekarang! Sebelum tertinggal</p>
                    <div class="pt-6 sm:pt-8 lg:pt-10">
                        <x-cta />
                    </div>
                </div>

            </div>
        </div>
    </div>




</body>

</html>
