<input type="text" name="{{ $name }}" id="{{ $name }}" class="form-control {{ $class ?? '' }}"

@isset($value)
  value="{{ old($name, $value) }}"
@else
  value="{{ old($name) }}"
@endisset
>
