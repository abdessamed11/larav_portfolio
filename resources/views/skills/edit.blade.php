<form action="{{ url('skills/'.$skills->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <input type="text" name="competence" value="{{ $skills->competence }}">
    <input type="text" name="pourcentage" value="{{ $skills->pourcentage }}">
    <button type="submit">Modifier</button>
</form>
