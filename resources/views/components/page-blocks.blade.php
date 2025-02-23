@props(['blocks' => []])

@foreach ($blocks as $blockData)
    @php
        $pageBlock = Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getPageBlockFromName($blockData['type'])   
    @endphp
    <x-dynamic-component
        :component="$pageBlock::getComponent()"
        :attributes="new \Illuminate\View\ComponentAttributeBag($pageBlock::mutateData($blockData['data']))"
    />
@endforeach