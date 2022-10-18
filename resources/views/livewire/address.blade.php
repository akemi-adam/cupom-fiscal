<div>
    <div class="my-3">
        <label for="uf" class="form-label">Estado:</label>
        <select wire:model="uf" name="discrict" class="form-select">
            @foreach ($this->getUfs() as $uf)
                <option value="{{ $uf->id }}">{{ $uf->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="my-3">
        <label for="city">Cidade:</label>
        <select wire:model="city" name="city" class="form-select">
            @foreach ($this->getCities($uf->id) as $city)
                <option value="{{ $city->nome }}">{{ $city->nome }}</option>
            @endforeach
        </select>
    </div>
</div>
