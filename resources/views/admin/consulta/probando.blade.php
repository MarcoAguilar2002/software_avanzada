@extends('layouts.dashboard')

@section('title', 'Consultar síntomas')

@section('content')

    <body style="background: #000e1b;">
        <div>
            <div class="container-fluid m-0 d-flex p-2">
                <div class="pl-2" style="width: 40px; height: 50px; font-size: 180%;">
                    <i class="fa fa-angle-double-right text-white mt-2"></i>
                </div>
                <div style="width: 50px; height: 50px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png" width="100%" height="100%"
                        style="border-radius: 50px;">
                </div>
                <div class="text-white font-weight-bold ml-2 mt-2">
                    MychatBot plusSilver
                </div>
            </div>
            <div style="background: #061128; height: 2px;"></div>
            <div id="content-box" class="container-fluid p-2" style="height: calc(100vh - 130px); overflow-y: scroll;">
                <!-- Aquí se mostrarán los mensajes -->
            </div>
            <div class="container-fluid w-100 px-3 py-2 d-flex" style="background: #7f8083; height: 62px;">
                <div class="mr-2 pl-2" style="background: rgb(248, 246, 246); width: calc(100% - 45px);border-radius: 5px;">
                    <input id="input" class="text-white font-weight-bold" type="text" name="question"
                        placeholder="Haz una pregunta..."
                        style="background: none; width: 100%; height: 100%; border: 0; outline: none;">
                </div>
                <div id="button-submit" class="text-center"
                    style="background: rgb(61, 90, 255); height: 100%; width: 50px; border-radius: 50px; cursor: pointer;">
                    <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height: 45px;"></i>
                </div>
            </div>
        </div>

        <!-- Aquí se incluye el script AJAX -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#button-submit').click(function() {
                    let question = $('#input').val();
                    if (question.trim() === '') {
                        alert('Por favor ingresa una pregunta.');
                        return;
                    }

                    // Mostrar la pregunta en el chat
                    $('#content-box').append('<div class="text-white my-2"><strong>Tú:</strong> ' + question +
                        '</div>');
                    $('#input').val(''); // Limpiar el campo de entrada

                    $.ajax({
                        url: '{{ route('ask') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            question: question
                        },
                        success: function(response) {
                            // Mostrar la respuesta en el chat
                            $('#content-box').append(
                                '<div class="text-white my-2"><strong>ChatBot:</strong> ' +
                                response.answer + '</div>');
                            // Desplazar hacia abajo el chat
                            $('#content-box').scrollTop($('#content-box')[0].scrollHeight);
                        },
                        error: function(xhr, status, error) {
                            alert('Hubo un error al procesar la solicitud.');
                        }
                    });
                });

                // Permitir enviar la pregunta presionando Enter
                $('#input').keypress(function(e) {
                    if (e.which === 13) {
                        $('#button-submit').click();
                    }
                });
            });
        </script>
    </body>
@endsection
