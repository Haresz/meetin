<div class="my-2">
    <label class="mb-4 font-bold" for="{{ $slot }}">{{ $slot }}<b class="text-red-500" > *</b></label>
    <input type="text" name="{{ $slot }}" class="form-control" placeholder="{{ $placeholder }}" aria-label="{{ $slot }}" aria-describedby="addon-wrapping"
        style= "border: none;
                background-color: #F5F5F5;
                border-radius: 0;">
</div>
