<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    {{--Que Dieu vous bénisse richement!
--}}

    <form>
        <label>Titre du sondage </label>

        <input type="text" wire:model.lazy.debounce.10ms="title">

        Le titre actuel est : {{$title}}
    </form>
</div>
