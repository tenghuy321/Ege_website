<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Create Our Project</h2>
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="project_name" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input value="{{ old('project_name') }}"
                    type="text" name="project_name" id="project_name" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('project_name')" />
            </div>
            <div>
                <label for="scope_of_work" class="block text-sm font-medium text-gray-700">Scope of Work</label>
                <input value="{{ old('scope_of_work') }}"
                    type="text" name="scope_of_work" id="scope_of_work" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('scope_of_work')" />
            </div>
            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input value="{{ old('location') }}"
                    type="text" name="location" id="location" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('location')" />
            </div>
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                <input value="{{ old('year') }}"
                    type="text" name="year" id="year" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('year')" />
            </div>
            <div>
                <label for="overview" class="block text-sm font-medium text-gray-700">Overview</label>
                <textarea
                    name="overview" id="overview" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">{{ old('overview') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('overview')" />
            </div>
            <div>
                <label for="challenges" class="block text-sm font-medium text-gray-700">Challenges</label>
                <textarea
                    name="challenges" id="challenges" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">{{ old('challenges') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('challenges')" />
            </div>
            <div>
                <label for="solution" class="block text-sm font-medium text-gray-700">Solution</label>
                <textarea
                    name="solution" id="solution" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">{{ old('solution') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('solution')" />
            </div>
            {{-- impact --}}
            <div>
                <label for="impact" class="block text-sm font-medium text-gray-700">Impact</label>
                @if (old('impact', json_decode($project->impact ?? '[]')))
                    @foreach (old('impact', json_decode($project->impact ?? '[]')) as $index => $item)
                        <div class="flex flex-col mb-4 impact-item">
                            <!-- Title Field -->
                            <div class="mb-2">
                                <input type="text" name="impact[{{ $index }}][title]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                    placeholder="Impact Title" value="{{ $item->title ?? '' }}">
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('impact.0.title')" />
                                </p>
                            </div>

                            <!-- Body Field -->
                            <div class="mb-2">
                                <textarea name="impact[{{ $index }}][body]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                    placeholder="Impact Body">{{ $item->body ?? '' }}</textarea>
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('impact.0.body')" />
                                </p>
                            </div>

                            <!-- Remove Button -->
                            <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                                onclick="removeImpactItem(this)">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="flex flex-col mb-4 impact-item">
                        <!-- Title Field -->
                        <div class="mb-2">
                            <input type="text" name="impact[0][title]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                placeholder="Impact Title">
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('impact.0.title')" />
                            </p>
                        </div>

                        <!-- Body Field -->
                        <div class="mb-2">
                            <textarea name="impact[0][body]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                placeholder="Impact Body"></textarea>
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('impact.0.body')" />
                            </p>
                        </div>

                        <!-- Remove Button -->
                        <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                            onclick="removeImpactItem(this)">Remove</button>
                    </div>
                @endif

                <!-- Button to Add More Items -->
                <div id="Impact-items-container">
                    <button type="button" class="text-green-600 hover:text-green-400 mt-2"
                        onclick="addImpactItem()">Add More</button>
                </div>
            </div>
            <div>
                <label for="conclusion" class="block text-sm font-medium text-gray-700">Conclusion</label>
                <textarea
                    name="conclusion" id="conclusion" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">{{ old('conclusion') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('conclusion')" />
            </div>
            <div>
                <label for="testimonial" class="block text-sm font-medium text-gray-700">Testimonial</label>
                <textarea
                    name="testimonial" id="testimonial" rows="4" class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">{{ old('testimonial') }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('testimonial')" />
            </div>

            <!-- Dropzone for Image -->
            <div class="">
                <label for="dropzone-file" id="drop-area"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-cover bg-no-repeat rounded-md text-center"
                        id="img-preview">
                        <svg class="w-8 h-8 mb-4 text-green-900" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-[12px] sm:text-[14px] text-green-900"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-green-900">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*"
                        onchange="uploadImage(event)" />
                </label>
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>
            <div class="flex justify-between">
                <a href="{{ route('project.index') }}"
                    class="border border-[#A4CA62] hover:!bg-[#A4CA62] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#A4CA62]">
                    Back
                </a>

                <button type="submit" class="bg-[#A4CA62] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
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


        let ImpactItemIndex = {{ count(old('impact', json_decode($project->impact ?? '[]'))) ?? 0 }};

        function addImpactItem() {
            const container = document.getElementById('Impact-items-container');
            const newItem = document.createElement('div');
            newItem.classList.add('flex', 'flex-col', 'mb-4', 'impact-item');
            newItem.innerHTML = `
                <div class="mb-2">
                    <input type="text" name="impact[${ImpactItemIndex}][title]"
                           class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                           placeholder="Impact Title"
                           required>
                </div>
                <div class="mb-2">
                    <textarea name="impact[${ImpactItemIndex}][body]"
                              class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                              placeholder="Impact Body"
                              required></textarea>
                </div>
                <button  type="button" class="text-red-600 hover:text-red-400 mt-2 self-start" onclick="removeImpactItem(this)">Remove</button>
            `;
            container.insertBefore(newItem, container.lastElementChild);
            ImpactItemIndex++;
        }

        function removeImpactItem(button) {
            button.parentElement.remove();
        }

    </script>
</x-app-layout>
