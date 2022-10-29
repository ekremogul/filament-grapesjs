<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div class="panel__top">
        <div class="panel__basic-actions"></div>
    </div>
    <div
        wire:ignore
        class="filament-grapesjs"
        x-data="grapesjs({
                state: $wire.entangle('{{ $getStatePath() }}').defer,
                statePath: '{{ $getStatePath() }}',
                readOnly: {{ $isDisabled() ? 'true' : 'false' }},
                tools: @js($getTools()),
                minHeight: @js($getMinHeight())
            })"
    >

        <div
            class="grapesjs-wrapper"
        >
            {!! $getHtmlData() !!}
        </div>
    </div>
    <div id="blocks"></div>

</x-forms::field-wrapper>
