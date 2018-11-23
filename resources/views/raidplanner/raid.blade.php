@extends ('layouts.app') 
@section('titre') 
    VRT - @foreach($raids as $raid) 
        @if($idRaid == $raid->id) 
            {{$raid->nom_raid}}
        @endif 
    @endforeach 
@endsection 
@section('content')

<?php
    $now = date('Y-m-d');
?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9"> 
                @foreach($raids as $raid) 
                    @if($idRaid == $raid->id)
                        <h3 style="text-align: center;"><b>Nom du raid : </b>{{$raid->nom_raid}}</h3>
                        <h3 style="text-align: center;"><b>Date début : </b>{{$raid->start_date}}</h3> 
                        @if($raid->start_date != $raid->end_date)
                        <h3 style="text-align: center;"><b>Date Fin : </b>{{$raid->end_date}}</h3> 
                        @endif
                    @endif 
                @endforeach
                <hr/>
                <h5 style="text-align: center;"><b>Inscrits :</b></h5>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card text-white bg-dark" style="margin:1rem;">
                            <div class="card-header" style="text-align: center">
                                DPS - Melees
                            </div>
                            <div class="card-body bg-secondary bg-inscrit">
                                <ul style="list-style-type:none">
                                    @foreach($inscrit as $inscri)
                                        @if($inscri->job === 'DRG' || $inscri->job === 'MNK' || $inscri->job === 'SAM' || $inscri->job === 'NIN' )
                                            <li><img class="jobInscrit" src="/img/{{$inscri->job}}.png" />  {{$inscri->name}}</li>
                                            <hr/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-dark" style="margin:1rem;">
                            <div class="card-header" style="text-align: center">
                                    DPS - Distances
                            </div>
                            <div class="card-body bg-secondary bg-inscrit">
                                <ul style="list-style-type:none">
                                    @foreach($inscrit as $inscri)
                                        @if($inscri->job === 'BRD' || $inscri->job === 'MCH' || $inscri->job === 'BLM' || $inscri->job === 'SMN' || $inscri->job === 'RDM' )
                                            <li><img class="jobInscrit" src="/img/{{$inscri->job}}.png" />  {{$inscri->name}}</li>
                                            <hr/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="card text-white bg-dark" style="margin:1rem;">
                            <div class="card-header" style="text-align: center">
                                    Healers
                            </div>
                            <div class="card-body bg-secondary bg-inscrit">
                                <ul style="list-style-type:none">
                                    @foreach($inscrit as $inscri)
                                        @if($inscri->job === 'AST' || $inscri->job === 'WHM' || $inscri->job === 'SCH' )
                                            <li><img class="jobInscrit" src="/img/{{$inscri->job}}.png" />  {{$inscri->name}}</li>
                                            <hr/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="card text-white bg-dark" style="margin:1rem;">
                            <div class="card-header" style="text-align: center">
                                    Tanks
                            </div>
                            <div class="card-body bg-secondary bg-inscrit">
                                <ul style="list-style-type:none">
                                    @foreach($inscrit as $inscri)
                                        @if($inscri->job === 'DRK' || $inscri->job === 'WAR' || $inscri->job === 'PLD' )
                                            <li><img class="jobInscrit" src="/img/{{$inscri->job}}.png" />  {{$inscri->name}}</li>
                                            <hr/>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <h5 style="text-align: center;"><b>Messages :</b></h5>
                @foreach($inscrit as $inscri)
                    @if(isset($inscri->message))
                        <div class="card text-white bg-dark" style="margin:1rem;">
                            <div class="card-header">
                                {{$inscri->name}} ({{$inscri->created_at}})
                            </div>
                            <div class="card-body bg-secondary">
                                {{$inscri->message}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-dark" style="margin:1rem;">
                    <div class="card-header text-center">Inscription à l'event</div>
                        {!! Form ::open(['route'=>'raid.store', 'method'=>'POST', 'files'=>false]) !!} {{Form::hidden('id_user', Auth::user()->id)}} {{Form::hidden('id_event', $idRaid)}} {{Form::hidden('date_inscription', $now)}}
                    <div class="card-body bg-secondary">
                        <p class="card-text">
                            {{Form::label('job','Job :')}}
                            {{Form::select('job', array(
                                            'Tanks' => array('PLD' => 'Paladin', 'WAR' => 'Guerrier', 'DRK' => 'Chevalier Noir'),
                                            'Healers' => array('WHM' => 'Mage Blanc', 'SCH' => 'Erudit', 'AST' => 'Astromancien'),
                                            'DPS - Melee' => array('MNK' => 'Moine', 'DRG' => 'Dragoon', 'NIN' => 'Ninja', 'SAM' => 'Samouraï'),
                                            'DPS - Distance' => array('BRD' => 'Bard', 'MCH' => 'Machiniste', 'BLM' => 'Mage Noir', 'SMN' => 'Invocateur', 'RDM' => 'Mage Rouge')), null, ['class'=>'form-control'])  }}
                        </p>
                        <p class="card-text">
                            {{Form::label('message','Message :')}} {{Form::textarea('message','', ['class'=>'form-control','placeholder'=>'Message'] ) }}
                        </p>
                        <hr/>
                        <div class="text-center">
                            {{Form::submit('S\'inscrire', ['class'=>'btn btn-dark'] ) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @endsection