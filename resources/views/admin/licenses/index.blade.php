@extends('admin.layouts.app')
@section('header')
    Our Product
@endsection
@section('content')
    <div x-data="reorderTable()" x-init="initSortable()">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('license.create') }}"
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
                        <th class="text-left py-3 px-4 text-[12px]">Order</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>
                <tbody x-ref="tableBody" class="text-gray-700">
                    @foreach ($licenses as $index => $license)
                        <tr draggable="true" x-bind:data-id="{{ $license->id }}"
                            @dragstart="dragStart($event, {{ $license->id }})" @dragover.prevent
                            @drop="drop($event, {{ $license->id }})" class="cursor-move">

                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $index + 1 }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">
                                <img src="{{ asset($license->image) }}" class="w-20 h-20 object-contain">
                            </td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] font-[700]">{{ $license->order }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] truncate max-w-[200px]">
                                <div class="flex items-center">
                                    <a href="{{ route('license.delete', $license->id) }}" title="Delete"
                                        onclick="event.preventDefault(); deleteRecord('{{ route('license.delete', $license->id) }}')">
                                        <svg class="w-6 h-6 text-red-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('license.edit', $license->id) }}" title="Edit">
                                        <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
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

@section('js')
    <script>
        function reorderTable() {
            return {
                initSortable() {
                    this.$nextTick(() => {
                        let tableBody = this.$refs.tableBody;
                        new Sortable(tableBody, {
                            animation: 150,
                            ghostClass: "bg-gray-100",
                            onEnd: async (event) => {
                                let newOrder = [...tableBody.children].map((row, index) => ({
                                    id: row.getAttribute("data-id"),
                                    order: index + 1
                                }));

                                let response = await fetch("{{ route('license.reorder') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        newOrder
                                    })
                                });

                                if (response.ok) {
                                    location.reload();
                                } else {
                                    console.error("Failed to reorder.");
                                }
                            }
                        });
                    });
                }
            };
        }
    </script>
@endsection
