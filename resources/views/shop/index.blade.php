<!-- resources/views/shop/index.blade.php -->
@extends('layouts.app')

@section('title', 'الرئيسية - Yemen Lady')

@section('content')

    <!-- Hero Section -->
    <section class="hero-pattern py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--primary-color);">أناقة يمنية أصيلة</h1>
                    <p class="text-lg md:text-xl mb-6" style="color: var(--dark-color);">
                        اكتشفي تشكيلتنا المميزة من المنتجات النسائية اليمنية التقليدية والعصرية.
                        حقائب، أحذية، وإكسسوارات بلمسة إبداع يمني.
                    </p>
                    <button class="px-6 py-3 rounded-full font-medium" style="background-color: var(--primary-color); color: white;">
                        تسوقي الآن
                    </button>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div class="absolute inset-0 rounded-full" style="background-color: var(--secondary-color); transform: translate(10px, 10px);"></div>
                        <img src="{{ asset('images/logo.png') }}" alt="Yemen Lady Products" class="rounded-full relative z-10 w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="py-16" style="background-color: white;">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-2 text-center" style="color: var(--primary-color);">منتجاتنا المميزة</h2>
            <p class="text-lg text-center mb-12" style="color: var(--dark-color);">استكشفي أحدث تشكيلاتنا من المنتجات اليمنية الأصيلة</p>

            <div class="slider-container">
                <div class="slider flex flex-wrap justify-center gap-6">
                    <!-- Product 1 -->
                    <div class="product-card w-64 bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/b1.png') }}" alt="حقيبة يمنية تقليدية" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2" style="color: var(--dark-color);">حقيبة يمنية تقليدية</h3>
                            <span class="font-bold" style="color: var(--primary-color);">$120.00</span>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card w-64 bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/c1.png') }}" alt="حذاء يمني مطرز" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2" style="color: var(--dark-color);">حذاء يمني مطرز</h3>
                            <span class="font-bold" style="color: var(--primary-color);">$85.00</span>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card w-64 bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/e1.png') }}" alt="إكسسوارات يمنية" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2" style="color: var(--dark-color);">إكسسوارات فضية يمنية</h3>
                            <span class="font-bold" style="color: var(--primary-color);">$95.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-16" style="background-color: var(--light-color);">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-2 text-center" style="color: var(--primary-color);">تصنيفات مميزة</h2>
            <p class="text-lg text-center mb-12" style="color: var(--dark-color);">اكتشفي تشكيلتنا المتنوعة من المنتجات اليمنية الأصيلة</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/b4.png') }}" alt="حقائب يمنية" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--primary-color);">حقائب يمنية</h3>
                        <p class="mb-4" style="color: var(--dark-color);">تشكيلة متنوعة من الحقائب اليمنية التقليدية والعصرية.</p>
                        <a href="#" class="inline-block" style="color: var(--primary-color);">
                            <span>تسوق الآن</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/c1.png') }}" alt="أحذية يمنية" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--primary-color);">أحذية يمنية</h3>
                        <p class="mb-4" style="color: var(--dark-color);">أحذية يدوية الصنع بلمسات يمنية أصيلة تجمع بين الراحة والأناقة.</p>
                        <a href="#" class="inline-block" style="color: var(--primary-color);">
                            <span>تسوق الآن</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/e2.png') }}" alt="إكسسوارات يمنية" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--primary-color);">إكسسوارات يمنية</h3>
                        <p class="mb-4" style="color: var(--dark-color);">إكسسوارات فضية وذهبية مصنوعة يدويًا بتصاميم تراثية.</p>
                        <a href="#" class="inline-block" style="color: var(--primary-color);">
                            <span>تسوق الآن</span>
                            <i class="fas fa-arrow-left mr-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
