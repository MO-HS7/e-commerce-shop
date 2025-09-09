@extends('layouts.app')

@section('title', 'تفاصيل المنتج - Yemen Lady')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row gap-8">
        <div class="md:w-1/2">
            <img src="{{ asset('images/b1.png') }}" alt="تفاصيل المنتج" class="w-full rounded-lg shadow-md">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-4" style="color: var(--primary-color);">حقيبة يمنية تقليدية</h2>
            <p class="mb-4" style="color: var(--dark-color);">حقيبة مصنوعة يدوياً من الجلد الطبيعي مع تطريز تراثي.</p>
            <div class="mb-4">
                <span class="text-2xl font-bold" style="color: var(--primary-color);">$120.00</span>
                <span class="line-through text-gray-500 ml-2">$150.00</span>
            </div>
            <button class="px-6 py-3 rounded-full font-medium" style="background-color: var(--accent-color); color: white;">
                أضف إلى السلة
            </button>
        </div>
    </div>
</section>
@endsection
