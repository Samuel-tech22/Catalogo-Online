<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Divisiones</h1>
        
        @if(isset($divisiones) && !empty($divisiones))
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($divisiones as $division)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('ruta/a/tu/imagen/default.jpg') }}" class="card-img-top" alt="Imagen de la división">
                        <div class="card-body">
                            <h5 class="card-title">Código: {{ $division['DIV_CODIGO'] ?? 'N/A' }}</h5>
                            <p class="card-text">Descripción: {{ $division['DIV_DESC'] ?? 'N/A' }}</p>
                            <p class="card-text">Estado: {{ $division['DIV_ESTADO'] ?? 'N/A' }}</p>
                            <p class="card-text">Orden: {{ $division['DIV_ORDEN'] ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @else
            <p class="alert alert-info">No hay divisiones disponibles.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>