<div class="content">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                            <a href="{{url('/')}}">
                                <button type="button" class="btn btn-secondary btn-sm btn-outline-dark btn-pill">
                                    <i class="fas fa-arrow-left"></i>Atras
                                </button>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <div style="display:table; text-align: center;">
                                <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Profesionales Internacionales</h4>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{url('empresa/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombre de la empresa / ONG: *</label>
                                <input name="nombre_empresa" class="form-control" maxlength="50" type="text" placeholder="Nombre..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombre del representante *: </label>
                                <input name="nombre_representante" class="form-control" maxlength="50" type="text" placeholder="Nombre..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Cargo del representante *: </label>
                                <input name="cargo_representante" class="form-control" maxlength="50" type="text" placeholder="Cargo..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Página Web / Facebook de la Institución: </label>
                                <label class="text-info">En caso de tener </label>
                                <input name="pagina_web" class="form-control" maxlength="100" type="text" placeholder="Página Web...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Celular de la Institución *: </label>
                                <input name="celular" class="form-control" maxlength="10" type="text" placeholder="Celular..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Teléfono de la Institución *: </label>
                                <input name="telefono" class="form-control" maxlength="10" type="text" placeholder="Teléfono..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo del representante de la empresa *: </label>
                                <input name="correo_representante" class="form-control" type="email" placeholder="Email..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo de la empresa *: </label>
                                <input name="correo_empresa" class="form-control" type="email" placeholder="Email..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En qué departamento se encuentra la empresa / ONG? *: </label>
                                <select class="form-control" name="departamento">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Chuquisaca">Chuquisaca</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Se encuentra en 2 o más departamentos">Se encuentra en 2 o más departamentos</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Dirección de la empresa / ONG*: </label>
                                <input name="direccion" class="form-control" maxlength="50" type="text" placeholder="Dirección..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿A qué se dedica la empresa / ONG? *: </label>
                                <textarea name="dedicacion" cols="50" rows="7"></textarea>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿A través de qué medio se entero de AIESEC? *: </label>
                                <select class="form-control" name="saber_de_AIESEC">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instragam">Instragam</option>
                                    <option class="text-dark" value="Linkedln">Linkedln</option>
                                    <option class="text-dark" value="Correo Electrónico">Correo Electrónico</option>
                                    <option class="text-dark" value="Sitio Web">Sitio Web</option>
                                    <option class="text-dark" value="Otras redes sociales">Otras redes sociales</option>
                                    <option class="text-dark" value="Amigos / Familiares">Amigos / Familiares</option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Si marcaste Amigos/Familiares, mencione el nombre de dicha persona: </label>
                                <label class="text-info">(Opcional) </label>
                                <input name="nombre_amigo" class="form-control" maxlength="50" type="text" placeholder="Nombre...">
                            </div>
                        </div>
                        <div class="form-group row"  style="padding-right: 15px;">
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>