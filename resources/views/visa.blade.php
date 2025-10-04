@extends('layouts.inicio')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">VISA A BOLIVIA</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">VISA A BOLIVIA</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="text-center mb-3 pb-3">
    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visa a Bolivia</h6>
    <h1>PAÍSES QUE REQUIEREN VISA PARA EL INGRESO A BOLIVIA</h1>
</div>
<!-- Booking End -->

<input type="text" id="searchInput" placeholder="Buscar país..." class="form-control mb-3">
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE ALBANIA
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>

</div>

<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGuatemala" aria-expanded="true" aria-controls="collapseGuatemala">
                    REPÚBLICA DE GUATEMALA
                </button>
            </h2>
        </div>
        <div id="collapseGuatemala" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNauru" aria-expanded="true" aria-controls="collapseNauru">
                    REPÚBLICA DE NAURU
                </button>
            </h2>
        </div>
        <div id="collapseNauru" class="collapse" aria-labelledby="headingTwo" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseArabia" aria-expanded="true" aria-controls="collapseArabia">
                    REPÚBLICA ARABIA SAUDÍ
                </button>
            </h2>
        </div>
        <div id="collapseArabia" class="collapse" aria-labelledby="headingThree" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGuyana" aria-expanded="true" aria-controls="collapseGuyana">
                    REPÚBLICA COOPERATIVA DE GUYANA
                </button>
            </h2>
        </div>
        <div id="collapseGuyana" class="collapse" aria-labelledby="headingFour" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>

<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingA">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenepal" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA FEDERAL DEMOCRÁTICA DE NEPAL
                </button>
            </h2>
        </div>
        <div id="collapsenepal" class="collapse" aria-labelledby="headingA" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsearmenia" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE ARMENIA
                </button>
            </h2>
        </div>
        <div id="collapsearmenia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseghana" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE GHANA
                </button>
            </h2>
        </div>
        <div id="collapseghana" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenica" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA NICARAGUA
                </button>
            </h2>
        </div>
        <div id="collapsenica" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsearge" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA ARGELIA DEMOCRÁTICA Y POPULAR
                </button>
            </h2>
        </div>
        <div id="collapsearge" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseecu" aria-expanded="true" aria-controls="collapseOne">
                    GUINEA ECUATORIAL
                </button>
            </h2>
        </div>
        <div id="collapseecu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseniger" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE NIGER
                </button>
            </h2>
        </div>
        <div id="collapseniger" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseazer" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE AZERBAIYÁN
                </button>
            </h2>
        </div>
        <div id="collapseazer" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseguinea" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE GUINEA
                </button>
            </h2>
        </div>
        <div id="collapseguinea" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseoman" aria-expanded="true" aria-controls="collapseOne">
                    SULTANATO DE OMÁN
                </button>
            </h2>
        </div>
        <div id="collapseoman" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebaha" aria-expanded="true" aria-controls="collapseOne">
                    MANCOMUNIDAD DE LAS BAHAMAS
                </button>
            </h2>
        </div>
        <div id="collapsebaha" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebissa" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE GUINEA BISSAU
                </button>
            </h2>
        </div>
        <div id="collapsebissa" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsepalaos" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE PALAOS
                </button>
            </h2>
        </div>
        <div id="collapsepalaos" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebaherin" aria-expanded="true" aria-controls="collapseOne">
                    REINO DE BAHRÉIN
                </button>
            </h2>
        </div>
        <div id="collapsebaherin" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsehaiti" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA HAITI
                </button>
            </h2>
        </div>
        <div id="collapsehaiti" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsepapua" aria-expanded="true" aria-controls="collapseOne">
                    ESTADO INDEPENDIENTE DE PAPÚA NUEVA GUINEA
                </button>
            </h2>
        </div>
        <div id="collapsepapua" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebangla" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA POPULAR BANGLADESH
                </button>
            </h2>
        </div>
        <div id="collapsebangla" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsehonduras" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE HONDURAS
                </button>
            </h2>
        </div>
        <div id="collapsehonduras" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseqatar" aria-expanded="true" aria-controls="collapseOne">
                    ESTADO DE QATAR
                </button>
            </h2>
        </div>
        <div id="collapseqatar" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebarba" aria-expanded="true" aria-controls="collapseOne">
                    BARBADOS
                </button>
            </h2>
        </div>
        <div id="collapsebarba" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseindia" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LA INDIA
                </button>
            </h2>
        </div>
        <div id="collapseindia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapserumania" aria-expanded="true" aria-controls="collapseOne">
                    RUMANIA
                </button>
            </h2>
        </div>
        <div id="collapserumania" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebelice" aria-expanded="true" aria-controls="collapseOne">
                    BELICE
                </button>
            </h2>
        </div>
        <div id="collapsebelice" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseiran" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA ISLÁMICA DE IRÁN
                </button>
            </h2>
        </div>
        <div id="collapseiran" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenieves" aria-expanded="true" aria-controls="collapseOne">
                    FEDERACIÓN DE SAN CRISTÓBAL Y NIEVES
                </button>
            </h2>
        </div>
        <div id="collapsenieves" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebenin" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE BENÍN
                </button>
            </h2>
        </div>
        <div id="collapsebenin" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemarshal" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LAS ISLAS DE MARSHALL
                </button>
            </h2>
        </div>
        <div id="collapsemarshal" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemarino" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE SAN MARINO
                </button>
            </h2>
        </div>
        <div id="collapsemarino" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebielo" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE BIELORRUSIA
                </button>
            </h2>
        </div>
        <div id="collapsebielo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesalomom" aria-expanded="true" aria-controls="collapseOne">
                    ISLAS SALOMÓN
                </button>
            </h2>
        </div>
        <div id="collapsesalomom" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapselucia" aria-expanded="true" aria-controls="collapseOne">
                    SANTA LUCÍA
                </button>
            </h2>
        </div>
        <div id="collapselucia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebosnia" aria-expanded="true" aria-controls="collapseOne">
                    BOSNIA Y HERZEGOVINA
                </button>
            </h2>
        </div>
        <div id="collapsebosnia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsejamaica" aria-expanded="true" aria-controls="collapseOne">
                    JAMAICA
                </button>
            </h2>
        </div>
        <div id="collapsejamaica" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetome" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DEMOCRÁTICA DE SANTO TOMÉ Y PRÍNCIPE
                </button>
            </h2>
        </div>
        <div id="collapsetome" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebotsu" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE BOTSUANA
                </button>
            </h2>
        </div>
        <div id="collapsebotsu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsejordania" aria-expanded="true" aria-controls="collapseOne">
                    REINO HACHEMITA DE JORDANIA
                </button>
            </h2>
        </div>
        <div id="collapsejordania" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesamoa" aria-expanded="true" aria-controls="collapseOne">
                    ESTADO INDEPENDIENTE DE SAMOA
                </button>
            </h2>
        </div>
        <div id="collapsesamoa" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenegara" aria-expanded="true" aria-controls="collapseOne">
                    NEGARA BRUNEI SARUSSALA
                </button>
            </h2>
        </div>
        <div id="collapsenegara" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsekaza" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE KAZAJSTÁN
                </button>
            </h2>
        </div>
        <div id="collapsekaza" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesinga" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE SINGAPUR
                </button>
            </h2>
        </div>
        <div id="collapsesinga" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebulga" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE BULGARIA
                </button>
            </h2>
        </div>
        <div id="collapsebulga" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsekenia" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE KENIA
                </button>
            </h2>
        </div>
        <div id="collapsekenia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseleona" aria-expanded="true" aria-controls="collapseOne">
                    SIERRA LEONA
                </button>
            </h2>
        </div>
        <div id="collapseleona" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsefaso" aria-expanded="true" aria-controls="collapseOne">
                    BURKINA FASO
                </button>
            </h2>
        </div>
        <div id="collapsefaso" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsekiri" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA KIRIBATI
                </button>
            </h2>
        </div>
        <div id="collapsekiri" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapselanka" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DEMOCRÁTICA SOCIALISTA DE SRI LANKA
                </button>
            </h2>
        </div>
        <div id="collapselanka" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseburu" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE BURUNDI
                </button>
            </h2>
        </div>
        <div id="collapseburu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsekuwa" aria-expanded="true" aria-controls="collapseOne">
                    ESTADO DE KUWAIT
                </button>
            </h2>
        </div>
        <div id="collapsekuwa" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesenegal" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE SENEGAL
                </button>
            </h2>
        </div>
        <div id="collapsesenegal" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseverde" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE CABO VERDE
                </button>
            </h2>
        </div>
        <div id="collapseverde" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsekir" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA KIRGUISA
                </button>
            </h2>
        </div>
        <div id="collapsekir" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseserbia" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE SERBIA
                </button>
            </h2>
        </div>
        <div id="collapseserbia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecame" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE CAMERÚN
                </button>
            </h2>
        </div>
        <div id="collapsecame" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseleso" aria-expanded="true" aria-controls="collapseOne">
                    REINO DE LESOTHO
                </button>
            </h2>
        </div>
        <div id="collapseleso" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesey" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE SEYCHELLES
                </button>
            </h2>
        </div>
        <div id="collapsesey" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecentro" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA CENTROAFRICANA
                </button>
            </h2>
        </div>
        <div id="collapsecentro" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseliba" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LÍBANO
                </button>
            </h2>
        </div>
        <div id="collapseliba" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesuda" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA SUDÁFRICA
                </button>
            </h2>
        </div>
        <div id="collapsesuda" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsechina" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA POPULAR DE CHINA
                </button>
            </h2>
        </div>
        <div id="collapsechina" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapselibe" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LIBERIA
                </button>
            </h2>
        </div>
        <div id="collapselibe" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseesu" aria-expanded="true" aria-controls="collapseOne">
                    REINO DE ESUATINI
                </button>
            </h2>
        </div>
        <div id="collapseesu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsechipre" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE CHIPRE
                </button>
            </h2>
        </div>
        <div id="collapsechipre" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemace" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MACEDONIA DEL NORTE
                </button>
            </h2>
        </div>
        <div id="collapsemace" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetai" aria-expanded="true" aria-controls="collapseOne">
                    REINO DE TAILANDIA
                </button>
            </h2>
        </div>
        <div id="collapsetai" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecomo" aria-expanded="true" aria-controls="collapseOne">
                    UNIÓN DE COMORAS
                </button>
            </h2>
        </div>
        <div id="collapsecomo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemaga" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MADAGASCAR
                </button>
            </h2>
        </div>
        <div id="collapsemaga" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetan" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA UNIDA DE TANZANIA
                </button>
            </h2>
        </div>
        <div id="collapsetan" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecorea" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE COREA
                </button>
            </h2>
        </div>
        <div id="collapsecorea" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemala" aria-expanded="true" aria-controls="collapseOne">
                    MALASIA
                </button>
            </h2>
        </div>
        <div id="collapsemala" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetayi" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE TAYIKISTAN
                </button>
            </h2>
        </div>
        <div id="collapsetayi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemarfil" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE COSTA MARFIL
                </button>
            </h2>
        </div>
        <div id="collapsemarfil" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemala" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MALAWI
                </button>
            </h2>
        </div>
        <div id="collapsemala" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetogo" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE TOGO
                </button>
            </h2>
        </div>
        <div id="collapsetogo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecuba" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE CUBA
                </button>
            </h2>
        </div>
        <div id="collapsecuba" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemaldi" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LAS MALDIVAS
                </button>
            </h2>
        </div>
        <div id="collapsemaldi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseyibu" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE YIBUTI
                </button>
            </h2>
        </div>
        <div id="collapseyibu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemalta" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MALTA
                </button>
            </h2>
        </div>
        <div id="collapsemalta" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetoba" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA TRINIDAD Y TOBAGO
                </button>
            </h2>
        </div>
        <div id="collapsetoba" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsedomi" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DOMINICANA
                </button>
            </h2>
        </div>
        <div id="collapsedomi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemali" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MALI
                </button>
            </h2>
        </div>
        <div id="collapsemali" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetunez" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA TÚNEZ
                </button>
            </h2>
        </div>
        <div id="collapsetunez" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsedomi" aria-expanded="true" aria-controls="collapseOne">
                    MANCOMUNIDAD DE DOMINICA
                </button>
            </h2>
        </div>
        <div id="collapsedomi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemarru" aria-expanded="true" aria-controls="collapseOne">
                    REINO DE MARRUECOS
                </button>
            </h2>
        </div>
        <div id="collapsemarru" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseegit" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE ÁRABE DE EGIPTO
                </button>
            </h2>
        </div>
        <div id="collapseegit" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemau" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MAURICIO
                </button>
            </h2>
        </div>
        <div id="collapsemau" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetuva" aria-expanded="true" aria-controls="collapseOne">
                    TUVALU
                </button>
            </h2>
        </div>
        <div id="collapsetuva" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseara" aria-expanded="true" aria-controls="collapseOne">
                    EMIRATOS ÁRABES UNIDOS
                </button>
            </h2>
        </div>
        <div id="collapseara" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemauri" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA ISLÁMICA DE MAURITANIA
                </button>
            </h2>
        </div>
        <div id="collapsemauri" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseucra" aria-expanded="true" aria-controls="collapseOne">
                    UCRANIA
                </button>
            </h2>
        </div>
        <div id="collapseucra" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseeti" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DEMOCRÁTICA FEDERAL DE ETIOPIA
                </button>
            </h2>
        </div>
        <div id="collapseeti" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemicro" aria-expanded="true" aria-controls="collapseOne">
                    ESTADOS FEDERADOS DE MICRONESIA
                </button>
            </h2>
        </div>
        <div id="collapsemicro" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseuga" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA UGANDA
                </button>
            </h2>
        </div>
        <div id="collapseuga" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseeri" aria-expanded="true" aria-controls="collapseOne">
                    ESTADO DE ERITREA
                </button>
            </h2>
        </div>
        <div id="collapseeri" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemol" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MOLDAVIA
                </button>
            </h2>
        </div>
        <div id="collapsemol" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseuzbe" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA UZBEQUISTAN
                </button>
            </h2>
        </div>
        <div id="collapseuzbe" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsefiyi" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA FIYI
                </button>
            </h2>
        </div>
        <div id="collapsefiyi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemongo" aria-expanded="true" aria-controls="collapseOne">
                    MONGOLIA
                </button>
            </h2>
        </div>
        <div id="collapsemongo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsevanu" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA VANUATU
                </button>
            </h2>
        </div>
        <div id="collapsevanu" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsegabo" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA GABONESA
                </button>
            </h2>
        </div>
        <div id="collapsegabo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemonte" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MONTENEGRO
                </button>
            </h2>
        </div>
        <div id="collapsemonte" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseviet" aria-expanded="true" aria-controls="collapseOne">
                    REPUBLICA SOCIAL DE VIETNAM
                </button>
            </h2>
        </div>
        <div id="collapseviet" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsegam" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE GAMBIA
                </button>
            </h2>
        </div>
        <div id="collapsegam" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemozam" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE MOZAMBIQUE
                </button>
            </h2>
        </div>
        <div id="collapsemozam" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsezambi" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE ZAMBIA
                </button>
            </h2>
        </div>
        <div id="collapsezambi" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsegero" aria-expanded="true" aria-controls="collapseOne">
                    GEORGIA
                </button>
            </h2>
        </div>
        <div id="collapsegero" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsemy" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE LA UNIÓN DE MYANMAR
                </button>
            </h2>
        </div>
        <div id="collapsemy" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsezim" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE ZIMBABUE
                </button>
            </h2>
        </div>
        <div id="collapsezim" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsegrana" aria-expanded="true" aria-controls="collapseOne">
                    GRANADA
                </button>
            </h2>
        </div>
        <div id="collapsegrana" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="paisesAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenam" aria-expanded="true" aria-controls="collapseOne">
                    REPÚBLICA DE NAMIBIA
                </button>
            </h2>
        </div>
        <div id="collapsenam" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
            <div class="card-body">
                <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
                <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<div class="text-center mb-3 pb-3">
<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Visa Para Bolivia</h6>
<h1>PAÍSES QUE REQUIEREN VISA PARA EL INGRESO A BOLIVIA PREVIA AUTORIZACION DE LA DIGEMIG</h1>
</div>

<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseafga" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA ISLÁMICA DE AFGANISTÁN
            </button>
        </h2>
    </div>
    <div id="collapseafga" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseango" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DE ANGOLA
            </button>
        </h2>
    </div>
    <div id="collapseango" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsebutan" aria-expanded="true" aria-controls="collapseOne">
                REINO DE BUTÁN
            </button>
        </h2>
    </div>
    <div id="collapsebutan" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecambo" aria-expanded="true" aria-controls="collapseOne">
                REINO DE CAMBOYA
            </button>
        </h2>
    </div>
    <div id="collapsecambo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsechad" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEL CHAD
            </button>
        </h2>
    </div>
    <div id="collapsechad" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecongo" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEMOCRÁTICA DEL CONGO
            </button>
        </h2>
    </div>
    <div id="collapsecongo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecongod" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEL CONGO
            </button>
        </h2>
    </div>
    <div id="collapsecongod" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsecorea" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA POPULAR DEMOCRÁTICA DE COREA
            </button>
        </h2>
    </div>
    <div id="collapsecorea" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseame" aria-expanded="true" aria-controls="collapseOne">
                ESTADOS UNIDOS DE AMÉRICA
            </button>
        </h2>
    </div>
    <div id="collapseame" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseindo" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DE INDONESIA
            </button>
        </h2>
    </div>
    <div id="collapseindo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseisra" aria-expanded="true" aria-controls="collapseOne">
                ESTADO DE ISRAEL
            </button>
        </h2>
    </div>
    <div id="collapseisra" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseiraq" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DE IRAQ
            </button>
        </h2>
    </div>
    <div id="collapseiraq" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsedemo" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEMOCRÁTICA
            </button>
        </h2>
    </div>
    <div id="collapsedemo" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapselibia" aria-expanded="true" aria-controls="collapseOne">
                LIBIA
            </button>
        </h2>
    </div>
    <div id="collapselibia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsenigeria" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA FEDERAL DE NIGERIA
            </button>
        </h2>
    </div>
    <div id="collapsenigeria" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsepakis" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA ISLÁMICA DE PAKISTÁN
            </button>
        </h2>
    </div>
    <div id="collapsepakis" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseruan" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DE RUANDA
            </button>
        </h2>
    </div>
    <div id="collapseruan" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesiria" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA ÁRABE SIRIA
            </button>
        </h2>
    </div>
    <div id="collapsesiria" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesomalia" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA FEDERAL DE SOMALIA
            </button>
        </h2>
    </div>
    <div id="collapsesomalia" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsesudan" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEL SUDÁN
            </button>
        </h2>
    </div>
    <div id="collapsesudan" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>
<div class="accordion" id="paisesAccordion">
<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseyemen" aria-expanded="true" aria-controls="collapseOne">
                REPÚBLICA DEL YEMEN
            </button>
        </h2>
    </div>
    <div id="collapseyemen" class="collapse" aria-labelledby="headingOne" data-parent="#paisesAccordion">
        <div class="card-body">
            <p><strong>Tipo de Visa:</strong> Visa de Turismo</p>
            <p><strong>Notas Adicionales:</strong> Se requiere pasaporte válido y formulario de solicitud.</p>
        </div>
    </div>
</div>
</div>


@endsection