@extends('layouts.app')

@section('title', 'تواصل معنا - Yemen Lady')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center" style="color: var(--primary-color);">تواصل معنا</h2>

        <form class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label class="block mb-2 font-medium">الاسم</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>
            <div class="mb-4">
                <label class="block mb-2 font-medium">البريد الإلكتروني</label>
                <input type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            </div>
            <div class="mb-4">
                <label class="block mb-2 font-medium">الرسالة</label>
                <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none"></textarea>
            </div>
            <button type="submit" class="px-6 py-3 rounded-full font-medium w-full" style="background-color: var(--primary-color); color: white;">
                إرسال
            </button>
        </form>
    </div>
</section>
@endsection
