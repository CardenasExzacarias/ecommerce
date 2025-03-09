<label class="font-medium text-black dark:text-white">{{ isset($label) ? $label : '' }}
    <div class="my-4">
        <div class="my-4">
            <textarea name="{{ isset($name) ? $name : '' }}" {{ isset($required) ? ($required == true ? 'required' : '') : '' }}
                placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
                class="w-full rounded-lg border border-stroke bg-transparent px-4 py-2 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                >{{ isset($value) ? $value : '' }}</textarea>
        </div>
    </div>
</label>
