@extends('layouts.app')
@section('title', 'Contáctanos')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Contáctanos</h3>
            <div class="row">
                <div class="col-md-7 mb-4">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form action="{{ route('send-contact-us') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="font-weight-bold">Nombre:</label>
                            <input type="text" name="name_contact" value="" class="form-control" placeholder="Ingresa tu nombre completo...">
                            @if ($errors->has('name_contact'))
                            <span class="text-danger">{{ $errors->first('name_contact') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Email:</label>
                            <input type="email" name="email_contact" value="" class="form-control" placeholder="Ingresa tu email...">
                            @if ($errors->has('email_contact'))
                            <span class="text-danger">{{ $errors->first('email_contact') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Motivo:</label>
                            <select class="form-control" name="id_reason">
                                <option value="-1">Selecciona el motivo</option>
                                @foreach($contact_messages as $cm)
                                <option value="{{ $cm->id_reason }}">{{ $cm->reason_text }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_reason'))
                            <span class="text-danger">{{ $errors->first('id_reason') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Mensaje:</label>
                            <textarea name="message_contact" class="form-control" placeholder="Escribe tu mensaje..."></textarea>
                            @if ($errors->has('message_contact'))
                            <span class="text-danger">{{ $errors->first('message_contact') }}</span>
                            @endif
                        </div>
                        <div class="btn-group float-right">
                          <button class="btn btn-success btn-submit">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <p class="font-weight text-justify">Para poder brindarle un servicio más personalizado le pedimos que complete todos los campos, una vez enviado el formulario nos pondrémos en contacto con usted a la brevedad.</p>
                    <p class="font-weight-bold">Siguenos en nuestras redes:</p>
                    @if($fbID || $waID)
                    <div class="container text-center">
                        @if($fbID->value)
                        <a href="https://www.facebook.com/{{ $fbID->value }}"><img src="{{ url('images/social/fb.png') }}" style="width: 64px" class="mr-4" alt=""></a>
                        @endif
                        @if($waID->value)
                        <a href="https://api.whatsapp.com/send?phone={{ $waID->value }}&text=Hola!%20tengo%20inter%C3%A9s%20en%20adquirir%20productos"><img src="{{ url('images/social/wa.png') }}" style="width: 64px" class="mr-4" alt=""></a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
