@extends('layouts.static')
@section('title')
    <title>{{$title}} | FLISoL 2019</title>
@endsection
@section('content')
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo mx-auto">
                        <a href="#">
                            <img src="{{asset('images/logo_flisol.svg')}}" alt="Flisol">
                        </a>
                    </div>
                    <div class="login-form">
                        <p>Consulta tu certificado de asistencia a FLISoL 2019</p>
                        <form id="consulta_certificado">
                            <div class="form-group">
                                <input class="au-input au-input--full" type="text" id="doc_busq" name="doc_busq" placeholder="Documento o Email" required>
                            </div>
                            <button id="sub_consulta" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Consultar</button>
                        </form>
                        <button id="verificar_cert" class="au-btn au-btn--block au-btn--blue m-b-20">Verificar mi certificado</button>
                        <div id="contenedor_cert">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection