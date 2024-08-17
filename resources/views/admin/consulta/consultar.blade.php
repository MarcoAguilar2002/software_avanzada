@extends('layouts.dashboard')

@section('title', 'Consultar síntomas')

@section('content')
<style>
    ::-webkit-scrollbar{
            width: 5px;
        }
</style>

    <div class="pb-3">
        <div class="container-fluid m-0 d-flex p-2" style="background-color:#131f45 ">
            <div class="pl-2" style="width: 40px; height: 50px; font-size: 180%;">
                <i class="fa fa-angle-double-right text-white mt-2"></i>

            </div>
            <div style="width: 50px; height: 50px;">
                <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png" width="100%" height="100%"
                    style="border-radius: 50px;">
            </div>
            <div class="text-white font-weight-bold ml-2 mt-2">
                CD ChatBot
            </div>
        </div>

        <div style="background: #061128; height: 2px;"></div>
        <div id="content-box" class="container-fluid p-2"
            style="height: calc(100vh - 130px); overflow-y: scroll;background-color:#dddddd">
        </div>
        <div class="container-fluid w-100 px-3 py-2 d-flex" style="background: #7f8083; height: 62px;">
            <div class="mr-2 pl-2" style="background: rgb(248, 246, 246); width: calc(100% - 45px);border-radius: 5px;">
                <input id="input" class="font-weight-bold" type="text" name="question"
                    placeholder="Haz una pregunta..."
                    style="background: none; width: 100%; height: 100%; border: 0; outline: none; color:black">
            </div>
            <div id="button-submit" class="text-center"
                style="background: rgb(61, 90, 255); height: 100%; width: 50px; border-radius: 50px; cursor: pointer;">
                <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height: 45px;"></i>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#button-submit').click(function() {
                let question = $('#input').val();
                if (question.trim() === '') {
                    return;
                }

                // Mostrar la pregunta en el chat
                $('#content-box').append(`
            <div class="mb-2">
                <div class="float-right px-3 py-2" style="width: 270px; background: #4acfee;border-radius: 10px; float: right; font-size: 85%;">
                    `+ question + `
                </div>
                <div style="clear: both;"></div>
            </div>`);
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
                        $('#content-box').append(`
            <div class="d-flex mb-2">
                <div class="mr-2" style="width: 45px; height: 45px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png" width="100%" height="100%" style="border-radius: 50px;">
                    
                </div>
                <div class="text-white px-3 py-2" style="width: 270px;background: #13254b; border-radius: 10px; font-size: 85%;">
                    <p class="text-justify">`+response.answer+`</p>
                    
                </div>
            </div>`);
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
@endsection
