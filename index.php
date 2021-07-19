<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de personal</title>
    <link rel="shortcut icon" href="img/logo_v.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <form id="formulario" >
        <section class="container">
            <div class="row justify-content-center my-3">
                <div class="head">
                    <img src="img/logo_v2.svg" alt="">
                </div>
                <div class="head">
                    <p>Registro de personal</p>
                </div>
            </div>
            <div class="row justify-content-around p-5 section shadow" id="section_1">
                <div class="col-12 px-0 pb-3">
                    <h3><span class="badge badge-primary">1</span> Datos personales</h3>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 box-section">
                    <div class="col">
                        <span>Apellido paterno</span>
                        <input type="text" class="form-control" name="ap_paterno" maxlength="30" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Apellido materno</span>
                        <input type="text" class="form-control" name="ap_materno" maxlength="30" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Nombre(s)</span>
                        <input type="text" class="form-control" name="nombre" maxlength="50" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Fecha de nacimiento</span>
                        <input type="date" class="form-control" name="f_nacimiento" required="" placeholder="dia/mes/año">
                    </div>
                    <div class="col">
                        <span>CURP</span>
                        <input type="text" class="form-control" name="curp" minlength="18" maxlength="18" required="" placeholder="18 Caracteres">
                    </div>
                    <div class="col">
                        <span>Estado civil</span>
                        <select class="custom-select" name="e_civil" required="" placeholder="Selecciona una opción">
                        <option value="">Selecciona una opción</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Separado">Separado</option>
                        <option value="Soltero">Soltero</option>
                        <option value="Unión libre">Unión libre</option>
                        <option value="Viudo">Viudo</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>Celular</span>
                        <input type="tel" class="form-control" name="celular" required="" maxlength="10" pattern="[0-9]{10}" placeholder="10 Dígitos">
                    </div>
                    <div class="col">
                        <span>Correo</span>
                        <input type="email" class="form-control" name="correo" required="" maxlength="60" placeholder="correo@correo.com">
                    </div>
                    <div class="col">
                        <span>Sexo</span>
                        <select class="custom-select" name="sexo" required="">
                        <option value="">Selecciona una opción</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Hombre">Hombre</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="box-btn-r">
                            <button type="button" class="btn btn-primary" id="next_1">Siguiente <i class="fas fa-arrow-right "></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around p-5 section d-none shadow " id="section_2">
                <div class="col-12 p-0">
                    <h3><span class="badge badge-primary">2</span> Información académica</h3>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 box-section">
                    <div class="col">
                        <span>Años de estudio</span>
                        <input type="number" class="form-control" name="a_estudios" required="" min="0" max="60" pattern="[0-9]{2}" placeholder="2 Dígitos">
                    </div>
                    <div class="col">
                        <span>Profesión</span>
                        <input type="text" class="form-control" name="profesion" maxlength="50" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Grado académico</span>
                        <select class="custom-select" name="g_academico" required="">
                        <option value="">Selecciona una opción</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Preparatoria">Preparatoria</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Maestría">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                        </select>
                    </div>
                    <div class="col">
                        <span>Idioma</span>
                        <input type="text" class="form-control" name="idioma" required="" maxlength="50" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Ofimática</span>
                        <select class="custom-select" name="ofimatica" required="">
                        <option value="">Selecciona una opción</option>
                        <option value="Word">Word</option>
                        <option value="Excel">Excel</option>
                        <option value="Power Point">Power Point</option>
                        <option value="G-suite">G-suite</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="box-btn">
                            <button type="button" class="btn btn-primary" id="prev_2"><i class="fas fa-arrow-left"></i> Atras</i></button>
                            <button type="button" class="btn btn-primary" id="next_2">Siguiente <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around p-5 section d-none shadow " id="section_3">
                <div class="col-12 p-0">
                    <h3><span class="badge badge-primary">3</span> Estado de Salud y Hábitos</h3>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 box-section">
                    <div class="col">
                        <span>Padece alguna enfermedad</span>
                        <input type="text" class="form-control" name="enfermedad" maxlength="30" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Alergias</span>
                        <input type="text" class="form-control" name="alergias" maxlength="30" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Actividad deportiva</span>
                        <input type="text" class="form-control" name="deporte" maxlength="30" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col">
                        <span>Fumador</span>
                        <input type="text" class="form-control" name="fumador" minlength="2" maxlength="2" required="" placeholder="Si/No">
                        <!-- <input type="text" class="form-control" name="fumador" minlength="2" maxlength="2" pattern="[Ss]i|[Nn]o" required="" placeholder="Si/No"> -->
                    </div>
                    <div class="col">
                        <span>Pasatiempo</span>
                        <input type="text" class="form-control" name="pasatiempo" maxlength="50" required="" placeholder="Escribe aquí...">
                    </div>
                    <div class="col-md-12">
                        <div class="box-btn">
                            <button type="button" class="btn btn-primary" id="prev_3"><i class="fas fa-arrow-left"></i> Atras</button>
                            <button type="button" class="btn btn-primary" id="next_3">Siguiente <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around p-5 section d-none shadow " id="section_4">
                <div class="col-12 p-0">
                    <h3><span class="badge badge-primary">3</span> Documentos</h3>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 box-section">
                    <div class="col">
                        <span>Ine</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="ine" name="ine" accept="application/pdf" required="">
                            <label class="custom-file-label" data-browse="pdf" for="ine">Selecciona un archivo</label>
                        </div>
                    </div>
                    <div class="col">
                        <span>Curp</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="curp" name="curp" accept="application/pdf" required="">
                            <label class="custom-file-label" data-browse="pdf" for="curp">Selecciona un archivo</label>
                        </div>
                    </div>
                    <div class="col">
                        <span>Recibo</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="recibo" name="recibo" accept="application/pdf" required="">
                            <label class="custom-file-label" data-browse="pdf" for="recibo">Selecciona un archivo</label>
                        </div>
                    </div>
                    <div class="col">
                        <span>Imagen</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imagen" name="imagen" accept="image/png, image/jpeg" required="">
                            <label class="custom-file-label" data-browse="imagen" for="imagen">Selecciona una</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-btn">
                            <button type="button" class="btn btn-primary" id="prev_4"><i class="fas fa-arrow-left"></i> Atras</button>
                            <button type="submit" class="btn btn-primary" id="send"><span class="spinner-border spin d-none" id="spin"></span> Terminar <i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <script src="https://kit.fontawesome.com/3334950929.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>