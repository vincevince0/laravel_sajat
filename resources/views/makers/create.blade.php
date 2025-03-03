<h1>Új jármű hozzáadása</h1>

@error('name')
<div class="alert alert-warning">{{ $message }}</div>
@enderror

<form action="{{ route('makers.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Jármű neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Mentés</button>
</form>