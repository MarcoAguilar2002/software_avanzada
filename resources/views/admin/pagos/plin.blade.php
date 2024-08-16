<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escoger Método de Pago</title>
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #30c744;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2caf3e;
        }

        .buttonP {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #a9bbac;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buttonP:hover {
            background-color: #888b88;
        }

        .button-primary {
            border: 1px solid #a9bbac;
        }

        .button-secondary {
            border: 1px solid #30c744;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin-top: 20px;
        }

        .file-upload input[type="file"] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .file-upload .file-label {
            display: block;
            padding: 10px 20px;
            color: #fff;
            background-color: #62aacc;
            border-radius: 10px;
            cursor: pointer;
        }

        .file-upload .file-label:hover {
            background-color: #8e8e8e;
        }

        .comprobanteArchivo {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <h1>Subir Captura de pago </h1>
        <h2 style="margin-top: 0;margin-bottom:20px;color: blue">Cita: {{ $evento->title }}</h2>
        <div>
            <div style="background-color:#3dd2d0 ">
                <img src="{{ asset('assets/img/plinqr.png') }}" alt="" style="width: 250px;height: auto;">
                <p style="color: white;font-weight: bold;margin-top: -15px;padding-bottom: 10px">Costo: S/ 20</p>
            </div>

            <form action="{{ route('admin.pagos.store')}}" method="POST">
                @csrf
                <div class="file-upload">
                    <label for="customFile" class="file-label">Seleccionar archivo</label>
                    <input type="file" name="comprobante" id="customFile" accept="image/*">
                    @error('comprobante')
                                <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
                <input type="hidden" name="monto" value="20">
                <input type="hidden" name="fecha_pago" id="fecha_pago">
                <input type="hidden" name="tipo" value="plin">
                <input type="hidden" name="descripcion" value="Cita:{{ $evento->title }} - Paciente: {{$evento->user->name}}">
                <input type="hidden" name="event_id" value="{{ $evento->id }}">
                <div class="comprobanteArchivo">
                    <button type="button" class="buttonP button-primary" onclick="history.back()">
                        Volver
                    </button>
                    <button type="submit" class="button button-secondary">
                        Validar Pago
                    </button>
                </div>
            </form>

            <script>
                document.querySelector('#customFile').addEventListener('change', function(e) {
                    var fileName = e.target.files[0].name;
                    var label = document.querySelector('.file-label');
                    label.textContent = "Foto del comprobante: " + fileName;
                });

                // Cambiar el texto del botón al cargar la página
                document.addEventListener('DOMContentLoaded', function() {
                    var label = document.querySelector('.file-label');
                    label.textContent = 'Seleccionar Comprobante';
                });
            </script>

            <script>
                // Crear una nueva instancia de la fecha actual
                var today = new Date();

                // Formatear la fecha como "YYYY-MM-DD"
                var formattedDate = today.getFullYear() + '-' +
                    String(today.getMonth() + 1).padStart(2, '0') + '-' +
                    String(today.getDate()).padStart(2, '0');

                // Asignar la fecha formateada al campo oculto
                document.getElementById('fecha_pago').value = formattedDate;
            </script>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm
