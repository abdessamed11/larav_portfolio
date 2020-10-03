

<div class="container">
  <form class="" action="{{ url('profil')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="nom" placeholder="nom"></br>
    <input type="text" name="prenom" placeholder="penom"></br>
    <input type="email" name="email" placeholder="email"></br>
    <input type="text" name="naissance" placeholder="date de naissance "></br>
    <input type="text" name="telephone" placeholder="telephone "></br>
    <input type="text" name="adresse" placeholder="adresse"></br>
    <input type="text" name="password" placeholder="password"></br>
    <input type="text" name="diplome" placeholder="diplome"></br>

    <input type="submit" name="submit" value="ajouter">

  </form>

</div>
