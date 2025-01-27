<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between">
            <h2 class="text-2xl font-bold">Create OurHistory</h2>
            <a href="{{ route('history.index') }}" class="!bg-[#A4CA62] hover:!text-[#415464] px-3 py-1 hover:tracking-wider duration-300 my-3 rounded-md text-[12px] sm:text-[14px] text-[#ffffff]">
                <span class="">Back</span>
            </a>
        </div>
        <form action="{{ route('history.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                <input value="{{ old('year') }}"
                    type="text" name="year" id="year" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                <x-input-error class="mt-2" :messages="$errors->get('year')" />
            </div>
            <div>
                <label for="month" class="block text-sm font-medium text-gray-700">Month</label>
                <input value="{{ old('month') }}"
                    type="text" name="month" id="month" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                <x-input-error class="mt-2" :messages="$errors->get('month')" />
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea
                    name="description" id="description" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <!-- Dropzone for Image -->
            <div class="">
                <label for="dropzone-file" id="drop-area"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-cover bg-no-repeat rounded-md text-center"
                        id="img-preview">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-[12px] sm:text-[14px] text-blue-500 dark:text-gray-400"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-blue-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*"
                        onchange="uploadImage(event)" />
                </label>
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>
            <div>
                <button type="submit" class="bg-[#A4CA62] text-white px-3 py-1 rounded-md">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const dropArea = document.getElementById('drop-area');
        const imageFile = document.getElementById('dropzone-file');
        const imagePreview = document.getElementById('img-preview');

        function uploadImage(event) {
            const file = event.target.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "cover";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = ""; // Clear the default content inside preview
            }
        }

        // Drag-and-drop functionality
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('border-blue-500');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('border-blue-500');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.remove('border-blue-500');
            const file = event.dataTransfer.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "cover";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = ""; // Clear the default content inside preview
                imageFile.files = event.dataTransfer.files; // Attach the dropped file to input
            }
        });
    </script>
</x-app-layout>
