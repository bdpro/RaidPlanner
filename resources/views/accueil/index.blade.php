@extends ('layouts/app') 
@section('titre') 
    VRT - ACCUEIL - FLUX
@endsection 
@section('content')
<div class="row">
    <div class="col-md-7">
        <h4 class="titreAccueil">DERNIERES CHRONIQUES</h4>
        @isset($wafs) 
            @foreach($wafs as $waf)
                    <div class="card text-white bg-dark" style="margin:1rem;">
                        <div class="card-header">
                            <h6><b>{{$waf->titre}}</b></h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><cite>&rdquo;{{$waf->texte}}&bdquo;</cite></p>
                        </div>
                    </div>
                @endforeach 
            @endisset
    </div>
    <div class="col-md-5">
        <h4 class="titreAccueil">DERNIERS RAPPORTS</h4>
            @isset($blogs) 
                @foreach($blogs as $blog)
                    <div class="card text-white bg-dark" style="margin:1rem;">
                        <div class="card-header">
                            <h5>{{$blog->nom_raid}}</h5>
                        </div>
                        <div class="card-body">
                            <h5>Lien youtube : </h5><a href="{{$blog->lien_video}}" target="blank">{{$blog->lien_video}}</a><br/><br/>
                            <h5>Lien FFlogs : </h5><a href="{{$blog->lien_FFlogs}}" target="blank">{{$blog->lien_FFlogs}}</a><br/>
                            <hr/>
                            <h5>Commentaire :</h5>
                            <p class="card-text">{{$blog->commentaire}}</p>
                        </div>
                    </div>
                @endforeach 
            @endisset
    </div>
</div>

@endsection
