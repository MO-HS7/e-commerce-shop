@extends('layouts.app')

@section('title', 'سلة التسوق - Yemen Lady')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6" style="color: var(--primary-color);">سلة التسوق</h2>

        <table class="w-full text-right border">
            <thead>
                <tr style="background-color: var(--light-color);">
                    <th class="p-3">المنتج</th>
                    <th class="p-3">السعر</th>
                    <th class="p-3">الكمية</th>
                    <th class="p-3">المجموع</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3">حقيبة يمنية</td>
                    <td class="p-3">$120.00</td>
                    <td class="p-3">1</td>
                    <td class="p-3">$120.00</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6 text-left">
            <button class="px-6 py-3 rounded-full font-medium" style="background-color: var(--primary-color); color: white;">
                إتمام الشراء
            </button>
        </div>
    </div>
</section>
@endsection
