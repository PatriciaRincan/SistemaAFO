<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte M1</title>
<style>
 



.tableFormato {
    background-color: white;
    border:1px;
    margin-top:45px;
    border-color: 5px black solid;

}

h3{
  top:-5%;
  text-align: center;
  font-size: 9;
  line-height:1px;
}
h4{
  line-height:1px;
}
.txt{
  text-align: center;
  font-size: 7;
}
.txt2{
  text-align: left;
  font-size: 7;
}
.div-Contenedor{
  background: pink;
  padding: 0px ;
  overflow: hidden;
  width: 1200px;
  margin: 0px;

}
.div-Contenedor2{
  background: pink;
  padding: 0px ;
  overflow: hidden;
  width: 1200px;
  margin: 0px;
  height: 150px;
}
.imgU{
  float: left;
  width: 50px; 
  display: inline-block;
}
.izq{
  float: left;
  width: 700px;
  margin: 0px;
  width: 400px;
  display: inline-block;
  
 
}
.cen{
  float:left;
  padding: 0px;
  width: 400px;
  margin: 0px;
  display: inline-block;
 
}
.der{  
  bottom: 30px;
  width: 100px;
  margin: 0px;
  text-align: center;
  border: black;
  border-width: 2px;
  height: 50px;
  padding: 0px;
  border-style: solid;
  float:left;
  left: 50px;
}
.der2{
  float: left;
  width: 400px;
  margin: 0px;
  background: #078;  
  border-width: 2px;
  height: 100px;
  padding: 0px; 
  bottom: 100px; 
}
td{
  text-align: center;
}
</style>
    
</head>
<body>

<div class="div-Contenedor">

<div class="izq" float="left"><img src="<?php echo URL::asset('img/UES.png') ?>" class="imgU" float="left"></img>
</div>
  
  <div class="cen" float="left">
   <h3> UNIVERSIDAD DE EL SALVADOR</h3>
   <h4 class="txt"> OFICINAS CENTRALES</h4>
   <h4 class="txt"> UNIDAD DE REGISTRO Y CONTROL ACTIVO FIJO</h4>
   <h4 class="txt"> INGRESO DE BIENES AL INVENTARIO Y ACTIVO FIJO</h4>
   </div>

   <div class="der" float="left">M1</div>

  </div>
  <div class="div-Contenedor2" style="background-color:red">
    <div class="izq" style="background-color:yellow" float="left">
    <h4 class="txt2">NOMBRE DE LA UNIDAD: FACULTAD DE ODONTOLOGIA</h4>
    <h4 class="txt2">DEPARTAMENTO: DECANATO</H4>
    <h4 class="txt2">Ubicación: </h4>
    </div>
    <div class="cen" float="left" >
    <h4 class="txt2">FUENTE DE FINANCIAMIENTO:FONDO GENERAL</h4>
    <h4 class="txt2">FUENTE DE FINANCIAMIENTO: RECURSOS PROPIOS</h4>
    <h4 class="txt2">DONACIÓN</h4>
    </div>
    <div class="der2" float="left"> 
    <h4 class="txt2">LP.Nº:</h4>  
    <h4 class="txt2">ORDEN DE PEDIDO:</h4>
    <h4 class="txt2">Cto. de Sum. Nº:</h4>
    <h4 class="txt2">PROVEEDOR:</h4>
    <h4 class="txt2">Nº Y FECHAS DE FACTURA:</h4>
    <h4 class="txt2">COMPROBANTE EGRESO FISCAL(CEF)Nº:</h4>
    <h4 class="txt2">Nº Y FECHA DE ACUERDO C.S.U.:</h4>
    </div>
    
  </div>
  <table border="1" class="tableFormato" border-collapse: collapse border-style="solid" style="table-layout:auto">

  <tr>
    <th colspan="5">CODIGO</th>
    <th colspan="6">DATOS GENERALES</th>
  </tr>
  <tr>
    <td>CUENTA</td>
    <td>UNIDAD</td>
    <td>CLASE</td>
    <td>CORRELATIVO</td>
    <td>ESPECIFICO</td>
    <td width="20%" style="text-align:center">DESCRIPCION DEL BIEN</td>
    <td>MARCA</td>
    <td>MODELO</td>
    <td>SERIE</td>
    <td>FECHA ADQUIRIDA</td>
    <td>VALORES</td>
  </tr>
  <tr>
    <td>1204</td>
    <td>3001</td>
    <td>080</td>
    <td>0317</td>
    <td>61104</td>
    <td>ACCESS POINT COLOR BLANCO 12345678</td>
    <td>FORTINET</td>
    <td>FAP22ICN</td>
    <td>FP0122222</td>
    <td>21/01/2016</td>
    <td>$ 864.45</td>
    
  </tr>
  <tr style="empty-cells:show">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$ </td>
   </tr>
   <tr style="empty-cells:show">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$ </td>
   </tr>
   <tr style="empty-cells:show">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$ </td>
   </tr>
   <tr style="empty-cells:show">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$ </td>
   </tr>
  <tr >
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>TOTAL</td>
    <td>$ </td>
   </tr>
   </table>
   <br>
   <h4>OBSERVACIONES: _____________________________________________________________________________________________________________________________________________________</h4>
   <h4>_____________________________________________________________________________________________________________________________________________________</h4>
  <h4>_____________________________________________________________________________________________________________________________________________________</h4>
  <br>
  <h4>Recibido: </h4>
  <br>
  <br>
  <table border-spacing="100px">
    <tr>
      <td>FIRMA</td>
      <td>___________________________</td>
      <td>___________________________</td>
      <td>___________________________</td>
    </tr>
    <tr>
      <td >NOMBRE</td>
      <td>Dr.Guillermo Alfonso Aguirre Escobar</td>
      <td>Dr.Guillermo Alfonso Aguirre Escobar</td>
      <td>Licda. María del Carmen Hernández de Cota</td>
    </tr>
    <tr>
      <td >CARGO</td>
      <td>DECANO</td>
      <td>DECANO</td>
      <td>Jefa de la Unidad de Activo Fijo UES</td>
    </tr>
    <tr>
      <td >FECHA</td>
      <td><?=  $date; ?> </td>
    </tr>
    <tr>
      <td >GARANTIA</td>
      <td> 2 AÑOS  </td>
    </tr>
  </table>
  
  <br>
  <h4 style="text-align:center">M1 Nº <h4 style="text-align:right"><?=  $date; ?></h4> </h4>

</body>
</html>


