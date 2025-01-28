@extends('admin.layouts.app')
@section('header')
    Our Product
@endsection
@section('content')
    <div class="">
        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-[#415464] text-white">
                    <tr>
                        <th class="text-left py-3 px-4 text-[12px]">#</th>
                        <th class="text-left py-3 px-4 text-[12px]">Product Name</th>
                        <th class="text-left py-3 px-4 text-[12px]">Details</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @php($i = 1)
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $i++ }}</td>
                            <td class="text-left py-3 px-4">
                                <img src="{{ asset($product->image) }}" alt=""
                                    class="w-9 h-9 lg:w-12 lg:h-12 object-cover">
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $product->product_name }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $product->details }}</td>
                            <td class="flex">
                                <a href="{{ route('product.delete', $product->id) }}" title="Delete"
                                    onclick="event.preventDefault(); deleteRecord('{{ route('ourproduct.delete', $product->id) }}')">
                                    <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                      </svg>
                                </a>
                                <a href="{{ route('product.edit', $product->id) }}" title="Delete">
                                    <svg class="w-6 h-6 text-[#A4CA62]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

    </div>
@endsection

