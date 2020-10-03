<div class="container">
  <h2>information portfolio </h2>
  @foreach($skills as $skill)
    <ul>
      <li>competence : {{$skill->competence}} </li>
      <li>pourcentage : {{$skill->pourcentage}} </li>

    </ul>
    @endforeach
</div>
@foreach($profils as $profil)
  <ul>
    <li>nom : {{$profil->nom}} </li>
    <li>prenom : {{$profil->prenom}} </li>
    <li>email : {{$profil->email}} </li>

  </ul>
  @endforeach
