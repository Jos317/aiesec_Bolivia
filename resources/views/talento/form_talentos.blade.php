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
                                <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Pasantías Glogales</h4>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{url('talento/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombres *: </label>
                                <input name="nombres" class="form-control" maxlength="50" type="text" placeholder="Nombres..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Apellidos *: </label>
                                <input name="apellidos" class="form-control" maxlength="50" type="text" placeholder="Apellidos..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Edad *: </label>
                                <select class="form-control" name="edad">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Menos de 18 años">Menos de 18 años</option>
                                    <option class="text-dark" value="18">18</option>
                                    <option class="text-dark" value="19">19</option>
                                    <option class="text-dark" value="20">20</option>
                                    <option class="text-dark" value="21">21</option>
                                    <option class="text-dark" value="22">22</option>
                                    <option class="text-dark" value="23">23</option>
                                    <option class="text-dark" value="24">24</option>
                                    <option class="text-dark" value="25">25</option>
                                    <option class="text-dark" value="26">26</option>
                                    <option class="text-dark" value="27">27</option>
                                    <option class="text-dark" value="28">28</option>
                                    <option class="text-dark" value="29">29</option>
                                    <option class="text-dark" value=30">30</option>
                                    <option class="text-dark" value="Más de 30 años">Más de 30 años</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo *: </label>
                                <input name="correo" class="form-control" maxlength="50" type="email" placeholder="Email...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Celular *: </label>
                                <input name="celular" class="form-control" maxlength="10" type="text" placeholder="Celular..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En que ciudad resides? *: </label>
                                <select class="form-control" name="ciudad_reside">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Sucre">Sucre</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Villamontes">Villamontes</option>
                                    <option class="text-dark" value="Yacuiba">Yacuiba</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En que universidad / Instituto estudias o estudiaste? *: </label>
                                <select class="form-control" name="universidad">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Santa Cruz - UAGRM">Santa Cruz - UAGRM</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Grado de Estudio *: </label>
                                <select class="form-control" name="grado_estudio">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Bachiller">Bachiller</option>
                                    <option class="text-dark" value="Universidad 1er. a 3er. semestre">Universidad 1er. a 3er. semestre</option>
                                    <option class="text-dark" value="Universidad 4to. a 6to. semestre">Universidad 4to. a 6to. semestre</option>
                                    <option class="text-dark" value="Universidad 7mo. a 10mo. semestre">Universidad 7mo. a 10mo. semestre</option>
                                    <option class="text-dark" value="Egresado">Egresado</option>
                                    <option class="text-dark" value="Titulado">Titulado</option>
                                    <option class="text-dark" value="Posgrado Maestría/Doctorado">Posgrado Maestría/Doctorado</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Qué carrera estudias o estudiaste? *: </label>
                                <select class="form-control" name="carrera">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">Administración de Empresas</option>
                                    <option class="text-dark" value="Ciencias de la Educación">Ciencias de la Educación</option>
                                    <option class="text-dark" value="Comercio Internacional">Comercio Internacional</option>
                                    <option class="text-dark" value="Comunicación Social">Comunicación Social</option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Turismo y Hotelería">Turismo y Hotelería</option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Ingeniería Comercial">Ingeniería Comercial</option>
                                    <option class="text-dark" value="Ingeniería Financiera">Ingeniería Financiera</option>
                                    <option class="text-dark" value="Ingeniería Industrial">Ingeniería Industrial</option>
                                    <option class="text-dark" value="Ingeniería de Sistemas y Computación">Ingeniería de Sistemas y Computación</option>
                                    <option class="text-dark" value="Ingeniería Informática">Ingeniería Informática</option>
                                    <option class="text-dark" value="Marketing">Marketing</option>
                                    <option class="text-dark" value="Negocios Internacionales">Negocios Internacionales</option>
                                    <option class="text-dark" value="Publicidad">Publicidad</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Si seleccionaste "Otra" escribe tú carrera: </label>
                                <input name="otra_carrera" class="form-control" maxlength="50" type="text" placeholder="Nombre...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nivel de Ingles *: </label>
                                <select class="form-control" name="nivel_ingles">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Básico (A1-A2)">Básico (A1-A2)</option>
                                    <option class="text-dark" value="Intermedio (B1-B2)">Intermedio (B1-B2)</option>
                                    <option class="text-dark" value="Avanzado (C1-C2)">Avanzado (C1-C2)</option>
                                    <option class="text-dark" value="No tengo estudios en Inglés">No tengo estudios en Inglés</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Experiencia Laboral *: </label>
                                <select class="form-control" name="experiencia">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Aún no tengo experiencia profesional">Aún no tengo experiencia profesional</option>
                                    <option class="text-dark" value="Tengo experiencia profesional menor a 6 meses">Tengo experiencia profesional menor a 6 meses</option>
                                    <option class="text-dark" value="Tengo experiencia profesional de 6 meses a 1 año">Tengo experiencia profesional de 6 meses a 1 año</option>
                                    <option class="text-dark" value="Tengo experiencia profesional de más de 1 año">Tengo experiencia profesional de más de 1 año</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En qué área te gustaría desarrollarte? *: </label>
                                <select class="form-control" name="area_desarrollo">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">Administración de Empresas</option>
                                    <option class="text-dark" value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Tecnologías de la Información">Tecnologías de la Información</option>
                                    <option class="text-dark" value="Programación y Desarrollo de Software">Programación y Desarrollo de Software</option>
                                    <option class="text-dark" value="Marketing y Publicidad">Marketing y Publicidad</option>
                                    <option class="text-dark" value="Hotelería y Turismo">Hotelería y Turismo</option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Porque desea tomar una pasantía internacional? *: </label>
                                <select class="form-control" name="pasantia_internacional">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Internacionalizar mi profesión">Internacionalizar mi profesión</option>
                                    <option class="text-dark" value="Potenciar mi CV">Potenciar mi CV</option>
                                    <option class="text-dark" value="Trabajar en una empresa multinacional">Trabajar en una empresa multinacional</option>
                                    <option class="text-dark" value="Aprender para tener mi propio negocio">Aprender para tener mi propio negocio</option>
                                    <option class="text-dark" value="Viajar y conocer otros países">Viajar y conocer otros países</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cual de los programas te interesa? *: </label>
                                <select class="form-control" name="programa">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Talento Global | 6 a 12 semanas">Talento Global | 6 a 12 semanas</option>
                                    <option class="text-dark" value="Talento Global | 3 a 6 meses">Talento Global | 3 a 6 meses</option>
                                    <option class="text-dark" value="Talento Global | 6 a 18 meses">Talento Global | 6 a 18 meses</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cómo te enteraste de nuestro programa de Pasantías Globales? *: </label>
                                <select class="form-control" name="descubrimiento_programa">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Amigos/Familiares">Amigos/Familiares</option>
                                    <option class="text-dark" value="Eventos/Webinars">Eventos/Webinars</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instagram">Instagram</option>
                                    <option class="text-dark" value="LinkedIn">LinkedIn</option>
                                    <option class="text-dark" value="TikTok">TikTok</option>
                                    <option class="text-dark" value="Sesión Informativa">Sesión Informativa</option>
                                    <option class="text-dark" value="Correo Informativo">Correo Informativo</option>
                                    <option class="text-dark" value="Punto Informativo">Punto Informativo</option>
                                    <option class="text-dark" value="Página de la Universidad">Página de la Universidad</option>
                                    <option class="text-dark" value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Por cual medio deseas ser contactado? *: </label>
                                <select class="form-control" name="medio_contacto">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Chat de WhatsApp">Chat de WhatsApp</option>
                                    <option class="text-dark" value="Llamada de WhatsApp">Llamada de WhatsApp</option>
                                    <option class="text-dark" value="Correo">Correo</option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Describa los documentos a adjuntar *: </label>
                                <input name="describir_documento" class="form-control" type="text" placeholder="Describa..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">En caso de adicionar tu CV y/o otro documento (Certificados, Recomendaciones, Etc.), por favor un archivo general y en extensión zip                                </label>
                                <input name="documentos" class="form-control" type="file" accept=".zip,.rar,.7zip">
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