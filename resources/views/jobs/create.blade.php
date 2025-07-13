<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="post" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">we just need handful details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="ceo" ></x-form-input>
                            <x-form-error name="title"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="title">company</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="company" id="location" placeholder="Egypt" />
                            <x-form-error name="company"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="title">company</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="company" id="location" placeholder="Egypt" />
                            <x-form-error name="company"></x-form-error>
                        </div>
                    </x-form-field>

                    <div class="sm:col-span-4">
                        <label for="company" class="block text-sm/6 font-medium text-gray-900">Company</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="company" id="company"
                                    class="block min-w-0 grow py-1.5 px-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$50,000 Per Year" />
                            </div>
                        </div>
                    </div>
                </div>
                @error('company')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>


</x-layout>
