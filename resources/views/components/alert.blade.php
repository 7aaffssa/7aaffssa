@props(['type']) {{-- props: pour passer data to blade component --}}
<div class="alert alert-{{$type}} " role="alert">
    {{ $slot}} {{-- lktaba li west strong west x-alert --}}
    {{-- slots: pour transmettre un contenu plus complexe au component--}}
</div>


