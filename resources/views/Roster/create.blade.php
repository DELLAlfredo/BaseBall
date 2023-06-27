@extends('default')
@section('title')
    Alta de Rooster
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-75 mt-4">
            <form action={{ route('RosterStore') }} method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col">
                        <label for="idRoster" class="form-label">ID:</label>
                        <input type="number" class="form-control" name="idRoster" id="idRoster" required
                            value={{ $datos['lastId'] }} readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="idEquipo" class="form-label">ID Equipo:</label>
                        <input type="number" class="form-control" name="idEquipo" id="idEquipo"
                            value={{ $datos['idEquipo'] }} readonly required>
                    </div>
                    <div class="col">
                        <label for="idTemporada" class="form-label">Temporada:</label>
                        <select  class="form-select form-select" name="idTemporada" id="idTemporada" required>
                            <option selected>Selecciona uno</option>
                            @foreach ($datos["temporadas"] as $temporada)
                                <option value={{$temporada->idTemporada}}>{{$temporada->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="idAfiliacion" class="form-label">Afiliacion:</label>
                        <select  class="form-select form-select" name="idAfiliacion" id="idAfiliacion" required>
                            <option selected>Selecciona uno</option>
                            @foreach ($datos["jugadores"] as $jugador)
                                <option value={{$jugador->idAfiliacion}}>{{$jugador->nombre . " " . $jugador->apellidos}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col justify-content-center">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
