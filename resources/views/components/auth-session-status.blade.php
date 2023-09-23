@props(['Status'])

@if ($Status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400']) }}>
        {{ $Status }}
    </div>
@endif
