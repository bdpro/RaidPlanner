@extends ('layouts.app')

@section('titre')
    VRT - CALENDRIER
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    {!! $calendar_details->script() !!}
@endsection

@section('content')

<div class="container">
    {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
            @elseif (Session::has('warning'))
            <div class="alert alert-warning">
            {{ Session::get('warning') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12">
<!--            NOM DU RAID-->
            <div class="card text-white bg-dark">
                <div class="card-header text-center">
                    Créer un événement
                </div>
                <div class="card-body bg-secondary">
                    {!! Form::label('nom_raid', 'Nom du Raid :') !!}
                    {!! Form::text('nom_raid', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom_raid', '<p class="alert alert-danger">:message</p>') !!}
                    <br/>
    <!--            </div>-->

    <!--            DATE DEBUT-->
    <!--            <div class="container">-->
                    {!! Form::label('start_date','Date de début :') !!}
                    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                    <br/>
    <!--            </div>-->
    <!--            DATE FIN -->
    <!--            <div class="container">-->
                    {!! Form::label('end_date','Date de fin :') !!}
                    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                    
    <!--            </div>-->
    <!--            CREER EVENT-->
                    <hr/>
    <!--            <div class="container">-->
                    <div  class="text-center">
                        {!! Form::submit('Ajouter l\'événement',['class' => 'btn btn-dark']) !!}
                    </div>
                </div>
            </div>
         </div>
        {!! Form::close() !!}
        
<!--        CALENDRIER-->
        <div class="col-md-9 col-sm-12" style="background-color:white; padding:0px;">
        {!! $calendar_details->calendar() !!}
        </div>
    </div>
</div>


@endsection