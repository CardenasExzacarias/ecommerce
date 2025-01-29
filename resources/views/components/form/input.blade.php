<label class="font-medium text-black dark:text-white">{{ isset($label) ? $label : '' }}</label>
<div class="my-4">
    <input name="{{ isset($name) ? $name : '' }}" type="{{ isset($type) ? $type : '' }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}" value="{{ isset($value) ? $value : '' }}"
        class="w-full rounded-lg border border-stroke bg-transparent p-4 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
</div>
