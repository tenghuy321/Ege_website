<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold mb-6">Edit Management Team</h2>
        <form action="{{ route('management.update', $management->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea
                    name="description" id="description" rows="10" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-sm text-green-900">{{ old('description', $management->description) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <div class="flex justify-between">
                <a href="{{ route('management.index') }}"
                    class="border border-[#A4CA62] hover:!bg-[#A4CA62] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#A4CA62]">
                    Back
                </a>

                <button type="submit" class="bg-[#A4CA62] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
            </div>
        </form>
    </div>


</x-app-layout>
