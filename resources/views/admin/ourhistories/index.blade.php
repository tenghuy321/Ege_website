@extends('admin.layouts.app')
@section('header')
    Our History Page
@endsection
@section('content')
    <div class="">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('history.create') }}" class="hover:!bg-[#A4CA62] hover:!text-[#ffffff] text-[#A4CA62] px-4 py-2 my-3 rounded-[5px] border-2 border-[#A4CA62] text-[12px] sm:text-[14px]">
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
                        <th class="text-left py-3 px-4 text-[12px]">Year</th>
                        <th class="text-left py-3 px-4 text-[12px]">Month</th>
                        <th class="text-left py-3 px-4 text-[12px]">Description</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($ourhistories as $index => $ourhistory)
                        <tr>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $index + 1 }}</td>
                            <td class="text-left py-3 px-4">
                                <img src="{{ asset($ourhistory->image) }}" alt=""
                                    class="w-9 h-9 lg:w-12 lg:h-12 object-cover">
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">{{ $ourhistory->year }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">{{ $ourhistory->month }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">
                                <div class="line-clamp-1">
                                    {{ $ourhistory->description }}
                                </div>
                            </td>
                            <td class="text-left py-3 px-4">
                             <div class="flex">
                                <a href="{{ route('history.delete', $ourhistory->id) }}" title="Delete"
                                    onclick="event.preventDefault(); deleteRecord('{{ route('history.delete', $ourhistory->id) }}')">
                                    <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                      </svg>
                                </a>
                                <a href="{{ route('history.edit', $ourhistory->id) }}" title="Edit">
                                    <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
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

