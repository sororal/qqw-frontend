<div class="filter-bar">
  <form class="filter-form" action="/search-contratos" method="get">
    <p class="search-title">Filtrar</p>
    <fieldset name="proveedores">
      <p class="search-title">FILTRAR PROVEEDORES</p>
      <input type="text" name="proveedor" placeholder="Nombre de proveedor"> <img src="images/button-yes.png" alt="agregar" class="form-control">
    </fieldset>

    <fieldset name="dependencias">
      <p class="search-title">FILTRAR DEPENDENCIAS</p>
      <div class="selected-block">
        <div class="selected-form-text">
          <p>Comisión federal de electricidad</p>
        </div>
        <img src="images/button-no.png" alt="quitar" class="form-control">

      </div>
    <input type="text" name="dependencia" placeholder="Nombre de dependencia"> <img src="images/button-yes.png" alt="agregar" class="form-control">

    </fieldset>

    <fieldset name="vigencia">
      <p class="search-title">Vigencia de contrato</p>
      <p class="search-label">Fecha de Inicio (a partir de 2002)</p>
      <input type="date" id="myDate" value="00/00/0000" min="2002-01-01">
      <p class="search-label">Fecha de fin</p>
      <input type="date" id="myDate" value="00/00/0000" min="2002-01-01">
    </fieldset>

    <fieldset name="importe">
      <p class="search-title">Importe del contrato</p>
      <p class="search-label">Menor a 1 millón de pesos</p>
      <p class="search-label">Entre 1 millón y 500 millones</p>
      <p class="search-label">Entre 500 millones a 1,000 millones</p>
      <p class="search-label">Más de mil millones</p>
      <input type="text" name="importe-minimo" placeholder="Mínimo" class="search-amount">
      <input type="text" name="importe-máximo" placeholder="Máximo" class="search-amount">
    </fieldset>

    <fieldset name="tipo-adquisicion">
      <p class="search-title">Procedimiento de contratación</p>
      <select name="tipo-adquisicion" class="search-select">
        <option value="licitacion">Licitación</option>
        <option value="adjudicacion">Adjudicación directa</option>
        <option value="invitacion">Invitación a 3</option>
      </select>
    </fieldset>
    <input type="submit" class="search-submit" value="FILTRAR">
</form>

</div>
