@extends('layouts.app')

@section('title', 'المنتجات - Yemen Lady')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center" style="color: var(--primary-color);">كل المنتجات</h2>

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
