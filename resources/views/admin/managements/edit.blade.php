<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between">
            <h2 class="text-2xl font-bold mb-6">Edit Management Team</h2>
            <a href="{{ route('management.index') }}" class="!bg-[#A4CA62] hover:!text-[#415464] px-3 py-1 hover:tracking-wider duration-300 my-3 rounded-md text-[12px] sm:text-[14px] text-[#ffffff]">
                <span class="">Back</span>
            </a>
        </div>
        <form action="{{ route('management.update', $management->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea
                    name="description" id="description" rows="10" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">{{ old('description', $management->description) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <div>
                <button type="submit" class="bg-[#A4CA62] text-white px-3 py-1 rounded-md">Submit</button>
            </div>
        </form>
    </div>


</x-app-layout>
