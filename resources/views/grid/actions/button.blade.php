{!! link_to_route($link, $label, [$record->id], ['data-message' => Illuminate\Support\Arr::get($parameters, 'confirmation_message'), 'class' => 'btn @defaultButtonSize '. Illuminate\Support\Arr::get($parameters, 'class').' '.Illuminate\Support\Arr::get($parameters, 'ask_for_confirmation_class')]) !!}