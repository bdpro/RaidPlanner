@extends('layouts.app2')

@section('titre')
    VRT - S'ENREGISTRER
@endsection

@section('content')
<div class="container" id="bloc">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark" id="bloc">
                <div class="card-header dark" style="color: white ">{{ __('S\'enregistrer') }}</div>

                <div class="card-body bg-secondary ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pseudo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer à nouveau') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="id_lodestone" class="col-md-4 col-form-label text-md-right">{{ __('Id Personnage') }}</label>

                            <div class="col-md-6">
                                <input id="id_lodestone" type="text" class="form-control" name="id_lodestone" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="job" class="col-md-4 col-form-label text-md-right">{{ __('Job') }}</label>

                            <div class="col-md-6">
                            {{Form::select('job', array(
                                            'Tanks' => array('PLD' => 'Paladin', 'WAR' => 'Guerrier', 'DRK' => 'Chevalier Noir'),
                                            'Healers' => array('WHM' => 'Mage Blanc', 'SCH' => 'Erudit', 'AST' => 'Astromancien'),
                                            'DPS - Melee' => array('MNK' => 'Moine', 'DRG' => 'Dragoon', 'NIN' => 'Ninja', 'SAM' => 'Samouraï'),
                                            'DPS - Distance' => array('BRD' => 'Bard', 'MCH' => 'Machiniste', 'BLM' => 'Mage Noir', 'SMN' => 'Invocateur', 'RDM' => 'Mage Rouge')), null, ['class'=>'form-control'])  }}
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="codepin" class="col-md-4 col-form-label text-md-right">{{ __('Code pin') }}</label>

                            <div class="col-md-6">
                                <input id="codepin" type="text" class="form-control" name="codepin" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('S\'enregistrer') }}
                                </button>
                                <a class="btn btn-link" id="lien" href="{{ route('login') }}">  
                                  {{ __('Se connecter') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
