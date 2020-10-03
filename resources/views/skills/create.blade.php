

<div class="container">
  <form class="" action="{{ url('skills')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="competence" placeholder="competence"></br>
    <input type="text" name="pourcentage" placeholder="pourcentage"></br>
    <input type="submit" name="submit" value="ajouter">

  </form>

</div>
