@extends('admin.layouts.app')
@section('header')
    Our Product
@endsection
@section('content')
    <div class="">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('project.create') }}"
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
                        <th class="text-left py-3 px-4 text-xs w-8">#</th>
                        <th class="text-left py-3 px-4 text-xs">Image</th>
                        <th class="text-left py-3 px-4 text-xs">Project Name</th>
                        <th class="text-left py-3 px-4 text-xs">Scope of Work</th>
                        <th class="text-left py-3 px-4 text-xs">Location</th>
                        <th class="text-left py-3 px-4 text-xs">Year</th>
                        <th class="text-left py-3 px-4 text-xs">Overview</th>
                        <th class="text-left py-3 px-4 text-xs">Challenges</th>
                        <th class="text-left py-3 px-4 text-xs">Solution</th>
                        <th class="text-left py-3 px-4 text-xs">Impact</th>
                        <th class="text-left py-3 px-4 text-xs">Conclusion</th>
                        <th class="text-left py-3 px-4 text-xs">Testimonial</th>
                        <th class="text-left py-3 px-4 text-xs w-20">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($projects as $index => $project)
                        <tr class="border-t">
                            <td class="py-3 px-4 text-xs">{{ $project->auto_number  }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">
                                <img src={{ asset($project->image) }} alt="" class="w-10 h-7">
                            </td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->project_name }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->scope_of_work }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->location }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->year }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->overview }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->challenges }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->solution }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">
                                <div class="line-clamp-1">
                                    @if (is_array(json_decode($project->impact, true)))
                                        <ul class="">
                                            @foreach (json_decode($project->impact, true) as $impact_item)
                                                <li>
                                                    <b>
                                                        @if (empty($impact_item['title']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $impact_item['title'] }} :
                                                        @endif

                                                    </b>
                                                    <span>
                                                        @if (empty($impact_item['body']))
                                                            {{-- empty --}}
                                                        @else
                                                            {{ $impact_item['body'] }}
                                                        @endif
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        {{ trim($project->impact) }}
                                    @endif
                                </div>
                            </td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->conclusion }}</td>
                            <td class="py-3 px-4 text-xs truncate max-w-[200px]">{{ $project->testimonial }}</td>
                            <td class="py-3 px-4 text-xs flex space-x-2">
                                <div class="flex items-center">
                                    <a href="{{ route('project.delete', $project->id) }}" title="Delete"
                                        onclick="event.preventDefault(); deleteRecord('{{ route('project.delete', $project->id) }}')">
                                        <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                          </svg>
                                    </a>
                                    <a href="{{ route('project.edit', $project->id) }}" title="Edit">
                                        <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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

        <div class="my-3 px-4">
            {{-- {{ $projects->links() }} --}}
            {{ $projects->links() }}

        </div>

    </div>
@endsection
