@extends('admin.layouts.app')
@section('header')
    Our Product
@endsection
@section('content')
    <div class="">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('ourproduct.create') }}"
                class="hover:!bg-[#A4CA62] hover:!text-[#ffffff] text-[#A4CA62] px-4 py-2 my-3 rounded-[5px] border-2 border-[#A4CA62] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a>
        </div>
        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-[#415464] text-white">
                    <tr>
                        <th class="text-left py-3 px-4 text-[12px]">#</th>
                        <th class="text-left py-3 px-4 text-[12px]">Image</th>
                        <th class="text-left py-3 px-4 text-[12px]">Product Name</th>
                        <th class="text-left py-3 px-4 text-[12px]">Key Specifications</th>
                        <th class="text-left py-3 px-4 text-[12px]">Benefits</th>
                        <th class="text-left py-3 px-4 text-[12px]">Use Cases</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($products as $index => $product)
                        <tr>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $index + 1 }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">
                                <img src={{ asset($product->image) }} alt="" class="w-10 h-7">
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">{{ $product->product_name }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">
                                <div class="line-clamp-1">
                                    @if (is_array(json_decode($product->key_specifications, true)))
                                        <ul class="">
                                            @foreach (json_decode($product->key_specifications, true) as $key_specifications_item)
                                                <li>
                                                    <b>
                                                        @if (empty($key_specifications_item['title']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $key_specifications_item['title'] }} :
                                                        @endif
                                                    </b>
                                                    <span>
                                                        @if (empty($key_specifications_item['body']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $key_specifications_item['body'] }}
                                                        @endif
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ trim($product->key_specifications) }}
                                    @endif
                                </div>
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">
                                <div class="line-clamp-1">
                                    @if (is_array(json_decode($product->benefits, true)))
                                        <ul class="">
                                            @foreach (json_decode($product->benefits, true) as $benefits_item)
                                                <li>
                                                    <b>
                                                        @if (empty($benefits_item['title']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $benefits_item['title'] }} :
                                                        @endif
                                                    </b>
                                                    <span>
                                                        @if (empty($benefits_item['body']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $benefits_item['body'] }}
                                                        @endif
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ trim($product->benefits) }}
                                    @endif
                                </div>
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">
                                <div class="line-clamp-1">
                                    @if (is_array(json_decode($product->use_cases, true)))
                                        <ul class="">
                                            @foreach (json_decode($product->use_cases, true) as $use_cases_item)
                                                <li>
                                                    <b>
                                                        @if (empty($use_cases_item['title']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $use_cases_item['title'] }} :
                                                        @endif

                                                    </b>
                                                    <span>
                                                        @if (empty($use_cases_item['body']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $use_cases_item['body'] }}
                                                        @endif
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ trim($product->benefits) }}
                                    @endif
                                </div>
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">
                                <div class="flex items-center">
                                    <a href="{{ route('ourproduct.delete', $product->id) }}" title="Delete"
                                        onclick="event.preventDefault(); deleteRecord('{{ route('ourproduct.delete', $product->id) }}')">
                                        <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                          </svg>
                                    </a>
                                    <a href="{{ route('ourproduct.edit', $product->id) }}" title="Edit">
                                        <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
