<html>
<title>Calculadora de finiquito de Justia</title>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

<body>
    <h1>Calculadora de finiquito en Justia 100% real no faik</h1>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading"><strong><a name="calcula">Calcula tu Finiquito</a></strong></div>
            <form action="">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Salario Mensual: </td>
                            <td><input required="" name="salario" type="" class="form-control" id="salario"></td>
                        </tr>
                        <tr>
                            <td>Años laborando: </td>
                            <td><input type="number" class="form-control" name="year" min="0" max="30"></td>
                        </tr>
                        <tr>
                            <td>Días de Vacaciones:</td>
                            <td><input type="number" name="vacaciones" class="form-control" id="vacaciones"></td>
                        </tr>
                        <tr>
                            <td>Meses laborando durante este año:</td>
                            <td><input type="number" class="form-control" name="mes_da" min="1" max="11"></td>
                        </tr>
                        <tr>
                            <td>Meses transcurridos a partir del mes de ingreso al mes de renuncia:</td>
                            <td><input type="number" class="form-control" name="mes_iyr" min="1" max="11"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-default enlace " role="link" onclick="myFunction()">Calcular</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>


    <div id="myDIV" style="display:none">
        <H1>Tu finiquito es: $72,000.00 MXN!</H1>
    </div>
</body>

</html>