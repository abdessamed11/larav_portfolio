<h1>hello</h1>
@foreach($skills as $skill)
<h3>{{$skill->competence}} <span>{{$skill->pourcentage}}</span> </h3>
@endforeach
