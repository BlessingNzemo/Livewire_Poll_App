<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    {{--Que Dieu vous bénisse richement!
--}}

    <form>
        <label>Titre du sondage </label>

        <input type="text" wire:model.lazy.debounce.10ms="title">

        Le titre actuel est : {{$title}}

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
          </div>
          <div>
            @foreach ($options as $index => $option)
              <div class="mb-4">
                {{ $index }} - Option {{ $index }} {{$option}}
              </div>
            @endforeach
          </div>
    </form>
</div>
