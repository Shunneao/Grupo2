<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #000000 0%, #D3D3D3 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .card {
            background-color: #fff;
            border: none;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            color: #333;
        }

        h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #6c757d;
        }

        .form-control {
            background-color: #f9f9f9;
            border: 2px solid #ff9a9e;
            border-radius: 10px;
            padding: 0.75rem;
            color: #495057;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            background-color: #ffffff;
            border-color: #fbd3e9;
            box-shadow: none;
        }

        label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #495057;
        }

        .btn-primary {
            background-color: #ff6f61;
            border-color: #ff6f61;
            border-radius: 10px;
            padding: 0.75rem;
            font-size: 1.1rem;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e57373;
        }

        .form-check-label {
            margin-left: 0.5rem;
            font-size: 0.95rem;
            color: #495057;
        }

        .form-check-input {
            background-color: #ff6f61;
            border: none;
        }

        .invalid-feedback {
            font-size: 0.85rem;
            color: #dc3545;
        }

        .form-control::placeholder {
            color: rgba(73, 80, 87, 0.6);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Regístrate</h2>
            </div>
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese su nombre.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese un correo electrónico válido.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                    <div class="invalid-feedback">
                        Por favor, ingrese una contraseña.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme su contraseña" required>
                    <div class="invalid-feedback">
                        Por favor, confirme su contraseña.
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">Acepto los términos y condiciones</label>
                    <div class="invalid-feedback">
                        Debes aceptar los términos y condiciones.
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Registrarse</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para activar validación -->
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
