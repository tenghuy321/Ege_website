@extends('admin.layouts.app')
@section('header')
    Our Management Team
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
                        <th class="text-left py-3 px-4 text-[12px]">Name</th>
                        <th class="text-left py-3 px-4 text-[12px]">Bio</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @php($i = 1)
                    @foreach ($managements as $management)
                        <tr>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $i++ }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">{{ $management->name }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] leading-tight">
                                <div class="line-clamp-2">
                                    {{ $management->description }}
                                </div>
                            </td>
                            <td class="text-left py-3 px-4">
                                <a href="{{ route('management.edit', $management->id) }}" title="Delete">
                                    <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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

