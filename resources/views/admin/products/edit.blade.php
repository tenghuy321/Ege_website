<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <div class="flex flex-col sm:flex-row items-start sm:items-center sm:justify-between">
            <h2 class="text-2xl font-bold">Edit Our Products</h2>
            <a href="{{ route('ourproduct.index') }}"
                class="!bg-[#A4CA62] hover:!text-[#415464] px-3 py-1 hover:tracking-wider duration-300 my-3 rounded-md text-[12px] sm:text-[14px] text-[#ffffff]">
                <span class="">Back</span>
            </a>
        </div>
        <form action="{{ route('ourproduct.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input value="{{ old('product_name', $product->product_name) }}" type="text" name="product_name" id="product_name"
                    class="mt-1 block w-full p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                <x-input-error class="mt-2" :messages="$errors->get('product_name')" />
            </div>
            {{-- key spec --}}
            <div>
                <label for="key_specifications" class="block text-sm font-medium text-gray-700">Key
                    Specification</label>
                @if (old('key_specifications', json_decode($product->key_specifications ?? '[]')))
                    @foreach (old('key_specifications', json_decode($product->key_specifications ?? '[]')) as $index => $item)
                        <div class="flex flex-col mb-4 key_specifications-item">
                            <!-- Title Field -->
                            <div class="mb-2">
                                <input type="text" name="key_specifications[{{ $index }}][title]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                    placeholder="Key Specification Title" value="{{ old('key_specifications.' . $index . '.title', $item->title ?? '') }}">
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('key_specifications.0.title')" />
                                </p>
                            </div>

                            <!-- Body Field -->
                            <div class="mb-2">
                                <textarea name="key_specifications[{{ $index }}][body]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                    placeholder="Key Specification Body">{{ old('key_specifications.' . $index . '.body', $item->body ?? '') }}</textarea>
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('key_specifications.0.body')" />
                                </p>
                            </div>

                            <!-- Remove Button -->
                            <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                                onclick="removeKeySpecificationItem(this)">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="flex flex-col mb-4 key_specifications-item">
                        <!-- Title Field -->
                        <div class="mb-2">
                            <input type="text" name="key_specifications[0][title]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                placeholder="Key Specification Title">
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('key_specifications.0.title')" />
                            </p>
                        </div>

                        <!-- Body Field -->
                        <div class="mb-2">
                            <textarea name="key_specifications[0][body]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                placeholder="Key Specification Body"></textarea>
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('key_specifications.0.body')" />
                            </p>
                        </div>

                        <!-- Remove Button -->
                        <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                            onclick="removeKeySpecificationItem(this)">Remove</button>
                    </div>
                @endif

                <!-- Button to Add More Items -->
                <div id="KeySpecification-items-container">
                    <button type="button" class="text-green-600 hover:text-green-400 mt-2"
                        onclick="addKeySpecificationItem()">Add More</button>
                </div>
            </div>

            {{-- benefits --}}
            <div>
                <label for="benefits" class="block text-sm font-medium text-gray-700">Benefit</label>
                @if (old('benefits', json_decode($product->benefits ?? '[]')))
                    @foreach (old('benefits', json_decode($product->benefits ?? '[]')) as $index => $item)
                        <div class="flex flex-col mb-4 benefits-item">
                            <!-- Title Field -->
                            <div class="mb-2">
                                <input type="text" name="benefits[{{ $index }}][title]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                    placeholder="Benefits Title" value="{{ old('benefits.' . $index . '.title', $item->title ?? '') }}">
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('benefits.0.title')" />
                                </p>
                            </div>

                            <!-- Body Field -->
                            <div class="mb-2">
                                <textarea name="benefits[{{ $index }}][body]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                    placeholder="Benefits Body">{{ old('benefits.' . $index . '.body', $item->body ?? '') }}</textarea>
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('benefits.0.body')" />
                                </p>
                            </div>

                            <!-- Remove Button -->
                            <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                                onclick="removeBenefitsItem(this)">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="flex flex-col mb-4 benefits-item">
                        <!-- Title Field -->
                        <div class="mb-2">
                            <input type="text" name="benefits[0][title]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                placeholder="Benefits Title">
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('benefits.0.title')" />
                            </p>
                        </div>

                        <!-- Body Field -->
                        <div class="mb-2">
                            <textarea name="benefits[0][body]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                placeholder="Benefits Body"></textarea>
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('benefits.0.body')" />
                            </p>
                        </div>

                        <!-- Remove Button -->
                        <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                            onclick="removeBenefitsItem(this)">Remove</button>
                    </div>
                @endif

                <!-- Button to Add More Items -->
                <div id="Benefits-items-container">
                    <button type="button" class="text-green-600 hover:text-green-400 mt-2"
                        onclick="addBenefitsItem()">Add More</button>
                </div>
            </div>

            {{-- use case --}}
            <div>
                <label for="use_cases" class="block text-sm font-medium text-gray-700">Use Case</label>
                @if (old('use_cases', json_decode($product->use_cases ?? '[]')))
                    @foreach (old('use_cases', json_decode($product->use_cases ?? '[]')) as $index => $item)
                        <div class="flex flex-col mb-4 use_cases-item">
                            <!-- Title Field -->
                            <div class="mb-2">
                                <input type="text" name="use_cases[{{ $index }}][title]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                    placeholder="Use Case Title" value="{{ old('use_cases.' . $index . '.title', $item->title ?? '') }}">
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('use_cases.0.title')" />
                                </p>
                            </div>

                            <!-- Body Field -->
                            <div class="mb-2">
                                <textarea name="use_cases[{{ $index }}][body]"
                                    class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                    placeholder="Use Case Body">{{ old('use_cases.' . $index . '.body', $item->body ?? '') }}</textarea>
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <x-input-error :messages="$errors->get('use_cases.0.body')" />
                                </p>
                            </div>

                            <!-- Remove Button -->
                            <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                                onclick="removeUseCaseItem(this)">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="flex flex-col mb-4 use_cases-item">
                        <!-- Title Field -->
                        <div class="mb-2">
                            <input type="text" name="use_cases[0][title]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                                placeholder="Use Case Title">
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('use_cases.0.title')" />
                            </p>
                        </div>

                        <!-- Body Field -->
                        <div class="mb-2">
                            <textarea name="use_cases[0][body]"
                                class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                placeholder="Use Case Body"></textarea>
                            <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                                <x-input-error :messages="$errors->get('use_cases.0.body')" />
                            </p>
                        </div>

                        <!-- Remove Button -->
                        <button type="button" class="text-red-600 hover:text-red-400 mt-2 self-start"
                            onclick="removeUseCaseItem(this)">Remove</button>
                    </div>
                @endif

                <!-- Button to Add More Items -->
                <div id="UseCase-items-container">
                    <button type="button" class="text-green-600 hover:text-green-400 mt-2"
                        onclick="addUseCaseItem()">Add More</button>
                </div>
            </div>

            <!-- Dropzone for Image -->
            <div class="">
                <label for="dropzone-file{{ $product->id }}" id="drop-area"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-cover bg-no-repeat rounded-md text-center"
                        id="img-preview" style="background-image: url({{ asset($product->image) }})">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-[12px] sm:text-[14px] text-blue-500 dark:text-gray-400"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-blue-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                    </div>
                    <input id="dropzone-file{{ $product->id }}" type="file" class="hidden" name="image" accept="image/*"
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


        let KeySpecificationItemIndex = {{ count(old('key_specifications', json_decode($product->key_specifications ?? '[]', true))) ?? 0 }};
        let BenefitsItemIndex = {{ count(old('benefits', json_decode($product->benefits ?? '[]', true))) ?? 0 }};
        let UseCaseItemIndex = {{ count(old('use_cases', json_decode($product->use_cases ?? '[]', true))) ?? 0 }};

        function addKeySpecificationItem() {
            const container = document.getElementById('KeySpecification-items-container');
            const newItem = document.createElement('div');
            newItem.classList.add('flex', 'flex-col', 'mb-4', 'key_specifications-item');
            newItem.innerHTML = `
                <div class="mb-2">
                    <input type="text" name="key_specifications[${KeySpecificationItemIndex}][title]"
                           class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                           placeholder="Content Title"
                           required>
                </div>
                <div class="mb-2">
                    <textarea name="key_specifications[${KeySpecificationItemIndex}][body]"
                              class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                              placeholder="Content Body"
                              required></textarea>
                </div>
                <button  type="button" class="text-red-600 hover:text-red-400 mt-2 self-start" onclick="removeKeySpecificationItem(this)">Remove</button>
            `;
            container.insertBefore(newItem, container.lastElementChild);
            KeySpecificationItemIndex++;
        }

        function removeKeySpecificationItem(button) {
            button.parentElement.remove();
        }

        function addBenefitsItem() {
            const container = document.getElementById('Benefits-items-container');
            const newItem = document.createElement('div');
            newItem.classList.add('flex', 'flex-col', 'mb-4', 'benefits-item');
            newItem.innerHTML = `
                <div class="mb-2">
                    <input type="text" name="benefits[${BenefitsItemIndex}][title]"
                           class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                           placeholder="Content Title"
                           required>
                </div>
                <div class="mb-2">
                    <textarea name="benefits[${BenefitsItemIndex}][body]"
                              class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                              placeholder="Content Body"
                              required></textarea>
                </div>
                <button  type="button" class="text-red-600 hover:text-red-400 mt-2 self-start" onclick="removeBenefitsItem(this)">Remove</button>
            `;
            container.insertBefore(newItem, container.lastElementChild);
            BenefitsItemIndex++;
        }

        function removeBenefitsItem(button) {
            button.parentElement.remove();
        }

        function addUseCaseItem() {
            const container = document.getElementById('UseCase-items-container');
            const newItem = document.createElement('div');
            newItem.classList.add('flex', 'flex-col', 'mb-4', 'use_cases-item');
            newItem.innerHTML = `
                <div class="mb-2">
                    <input type="text" name="use_cases[${UseCaseItemIndex}][title]"
                           class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 mb-2"
                           placeholder="Content Title"
                           required>
                </div>
                <div class="mb-2">
                    <textarea name="use_cases[${UseCaseItemIndex}][body]"
                              class="text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                              placeholder="Content Body"
                              required></textarea>
                </div>
                <button  type="button" class="text-red-600 hover:text-red-400 mt-2 self-start" onclick="removeUseCaseItem(this)">Remove</button>
            `;
            container.insertBefore(newItem, container.lastElementChild);
            UseCaseItemIndex++;
        }

        function removeUseCaseItem(button) {
            button.parentElement.remove();
        }
    </script>
</x-app-layout>
