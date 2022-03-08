<div class="content">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn btn-secondary btn-sm btn-outline-dark btn-pill">
                                <i class="fas fa-arrow-left"></i>Atras
                            </button>
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <div style="display:table; text-align: center;">
                            <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Hospedajes
                                Internacionales</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('hospedajes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombre Completo *:</label>
                                <input name="nombre" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombre..." required>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Celular *: </label>
                                <input name="celular" class="form-control" maxlength="10" type="text"
                                    placeholder="Celular..." required>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo *: </label>
                                <input name="correo" class="form-control" type="email" placeholder="Email..."
                                    required>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En qué ciudad te encuentras? *: </label>
                                <select class="form-control" name="ciudad_reside">
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
                                    <option class="text-dark" value="Se encuentra en 2 o más departamentos">Se
                                        encuentra en 2 o más departamentos</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Dirección donde vives *: </label>
                                <input name="direccion" class="form-control" maxlength="50" type="text"
                                    placeholder="Dirección..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cuántos voluntarios puedes hospedar? *: </label>
                                <select class="form-control" name="cantidad_voluntarios">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="1">1</option>
                                    <option class="text-dark" value="2">2</option>
                                    <option class="text-dark" value="3 o más">3 o más</option>

                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">En que fecha puedes empezar a hospedar al (los)
                                    Voluntario(s) * </label>
                                <input type="date" name="hospedar_fecha">
                                <input type="time" name="hospedar_hora">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Qué puedes ofrecerle al voluntario? *: </label>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="habitacion_unica" value="1"> Habitación única
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="habitacion_compa" value="1"> Habitación compartida
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="servicios" value="1"> Servicios (Agua, luz,
                                        internet, etc.)
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="desayuno" value="1"> Desayuno
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="almuerzo" value="1"> Almuerzo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="cena" value="1"> Cena
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" name="otros" value="1"> Otros
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Por qué quieres formar parte del programa Familia Global?
                                    *: </label>
                                <br>
                                <br>
                                <textarea name="formar_parte" cols="50" rows="7"></textarea>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cómo te enteraste del programa Familia Global? *:
                                </label>
                                <select class="form-control" name="saber_programa">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Soy o Fui miembro de AIESEC">Soy o Fui miembro
                                        de AIESEC</option>
                                    <option class="text-dark" value="Amigos/Familiares">Amigos/Familiares</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instagram">Instagram</option>
                                    <option class="text-dark" value="LinkedIn">LinkedIn</option>
                                    <option class="text-dark" value="WhatsApp">WhatsApp</option>
                                    <option class="text-dark" value="Sitio Web">Sitio Web</option>
                                    <option class="text-dark" value="Otras redes sociales">Otras redes sociales
                                    </option>

                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Tienes algo para decirnos? </label>
                                <br>
                                <br>
                                <textarea name="decir_algo" cols="50" rows="7"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row" style="padding-right: 15px;">
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
