<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escoger Método de Pago</title>
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
</head>
<body>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Centra verticalmente en la pantalla completa */
            text-align: center;
        }
    
        .payment-methods {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Dos columnas */
            grid-template-rows: repeat(2, 1fr);
            /* Dos filas */
            gap: 20px;
            /* Espacio entre los botones */
        }
    
        .payment-button {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
    
        .payment-button img {
            max-width: 130px;
            max-height: 130px;
        }
    
        .payment-button:hover {
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    
        }
    
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #ff0000;
            /* Color rojo */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
    
        .button:hover {
            background-color: #cc0000;
            /* Color rojo oscuro al hacer hover */
        }
    
        .button-secondary {
            border: 1px solid #cc0000;
            /* Bordes de color rojo oscuro */
        }
    
        .cancelar {
            padding-top: 20px;
        }
    </style>
    

    
<div class="container">
    <h1>Seleccionar método de pago</h1>
    <div class="payment-methods">
        <!-- Yape -->
        <div class="payment-button">
            <a href="{{ route('admin.pagos.metodo.yape', $evento->id) }}">
                <img src="{{ asset('assets/img/yape.png') }}" alt="Yape">
            </a>
        </div>
    
        <!-- BCP -->
        <div class="payment-button">
            <a href="{{ route('admin.pagos.metodo.bcp', $evento->id) }}">
                <img src="{{ asset('assets/img/bcp.jpg') }}" alt="BCP">
            </a>
        </div>
    
        <!-- Plin -->
        <div class="payment-button">
            <a href="{{ route('admin.pagos.metodo.plin', $evento->id) }}">
                <img src="{{ asset('assets/img/plin.png') }}" alt="Plin">
            </a>
        </div>
    
        <!-- Efectivo -->
        <div class="payment-button">
            <a href="#" id="efectivo-link">
                <img src="{{ asset('assets/img/efectivo.png') }}" alt="Efectivo">
            </a>
        </div>
    </div>
    
    <!-- Formulario oculto -->
    <form id="efectivo-form" action="{{ route('admin.pagos.store') }}" method="POST" style="display:none;">
        @csrf
        <input type="hidden" name="comprobante" value="-">
        <input type="hidden" name="monto" value="20">
        <input type="hidden" name="fecha_pago" id="fecha_pago">
        <input type="hidden" name="tipo" value="Efectivo">
        <input type="hidden" name="descripcion" value="Cita:{{ $evento->title }} - Paciente: {{ $evento->user->name }}">
        <input type="hidden" name="event_id" value="{{ $evento->id }}">
    </form>
    
    <script>
        // Enviar formulario al hacer clic en el botón de "Efectivo"
        document.getElementById('efectivo-link').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('efectivo-form').submit();
        });
    
        // Asignar la fecha actual al campo oculto
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date();
            var formattedDate = today.getFullYear() + '-' +
                String(today.getMonth() + 1).padStart(2, '0') + '-' +
                String(today.getDate()).padStart(2, '0');
            document.getElementById('fecha_pago').value = formattedDate;
        });
    </script>
    

    <div class="cancelar">
        <form action="{{ route('admin.eventos.destroy', $evento->id) }}" id="formulario{{ $evento->id }}"
            onclick="preguntar{{ $evento->id }}(event)" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button button-secondary">
                Cancelar Cita
            </button>
        </form>

        <script>
            function preguntar{{ $evento->id }}(event) {
                event.preventDefault();
                Swal.fire({
                    title: "¿Seguro que quieres cancelar tu cita?",
                    text: "De cancelar tu cita, ya no podrás recuperarla",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Sí, cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var form = $('#formulario{{ $evento->id }}');
                        console.log(form);
                        form.submit();
                    }
                });
            }
        </script>

    </div>



</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>


