<form class="panel-body form-horizontal form-padding" id="form" name="form" action="/socios/create" method="post">
         <input type="hidden" id="form_id" name="form_id" value="0">
 
 
<div style="display: none;">
    <input  type="text" id="cont" name="cont" value="">
 <input type="text" id="cont2" name="cont2" value="">
</div>
  <div class="panel" >

     <div class="card-body ">
         
     </div>
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-10 ">

   {{-- <div class="row">
        <h6 class="text-main" style="font-weight:bold;">Formulario</h6></div>       --}}
   

    <h5 class="modal-title" id="myLargeModalLabel">Formulario de curso</h5>

    <hr>
    <div class="form-group">
        <label for="example-email-input" class="col-md-3 control-label text-main text-bold ">Idioma:*</label>
        <div class="col-md-7">
            <select  class="form-control" id="idioma_id" name="idioma_id" >
                 
            </select>
          
                           
       </div>
        
       {{-- <div class="col-md-1">

            <button type="button" class="btn btn-icon btn-default btn-default btn-sm  btn-hover-purple add-tooltip nuevoResp" data-original-title="Informacion de Responsable" data-container="body" ><i class="demo-pli-add icon-sm " ></i> nuevo </button>
        </div>
       --}}
       

    </div>

  <div class="form-group">
        <label for="example-email-input" class="col-md-3 control-label text-main text-bold ">Modalidad:*</label>
        <div class="col-md-7">
            <select  class="form-control" id="moda_id" name="moda_id" >
                 
            </select>
          
                           
       </div>
       
       
       
{{--
    <div class="form-group">
    <div class="col-md-1">

            <button type="button" class="btn btn-icon btn-default btn-default btn-sm  btn-hover-info add-tooltip infoResp" data-original-title="Informacion de Responsable" data-container="body" ><i class="demo-pli-exclamation icon-sm " ></i> Info </button>

    </div>
       <hr>
       </div>--}}
    </div>


 {{-- <div class="form-group">
        <label for="example-email-input" class="col-md-3  control-label text-main text-bold ">Dias:*</label>
        <div class="col-md-6">
          <select  class="form-control" id="dldlk" name="idioma_id" >
                 <option value="1" >1 vez por semanas</option>
                 <option value="1" >varios deias</option>
                 
            </select>
          

          <div class="checkbox">

                <!-- Inline Checkboxes -->
                <input id="dl" name="dl" class="magic-checkbox" type="checkbox" unchecked>
                <label for="dl">L</label>
                <input id="dm" name="dm" class="magic-checkbox" type="checkbox" unchecked>
                <label for="dm">M</label>
                <input id="dx" name="dx" class="magic-checkbox" type="checkbox" unchecked>
                <label for="dx">X</label>
                <input id="dj" name="dj" class="magic-checkbox" type="checkbox" unchecked="">
                <label for="dj">J</label>
                <input id="dv" name="dv" class="magic-checkbox" type="checkbox" unchecked="">
                <label for="dv">V</label>

                <input id="ds" name="ds" class="magic-checkbox" type="checkbox" unchecked="">
                <label for="ds">S</label>

                <input id="dd" name="dd" class="magic-checkbox" type="checkbox" unchecked="">
                <label for="dd">D</label>

                
            </div>
                           
       </div>    
    </div>--}}
{{--
<table class="table" id="categoriaTable2">
    <tbody>

        <tr>
            <td>
               <div class="form-group">
                                    
                               
                                       <label class="col-md-3 control-label text-main text-bold" for="demo-email-input">Horas:</label>
                                         <div class="col-md-7">
                                                    <div class=" input-daterange input-group" id="datepicker">
                                                        <span class="input-group-addon">Inicio</span>
                                                        <input type="time" placeholder="Hora Inicio" class="form-control"  id="HoraInicio" name="fechaInicio" />
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                        <span class="input-group-addon">Fin</span>
                                                        <input type="time" placeholder="Hora Fin" class="form-control" id="HoraFin" name="fechaFin" />
                                                    </div>
                                                    
                                                    
                                     
                                        </div>
                                        
                                       <div class="col-md-1">
                                            <button type="button" class="btn btn-icon btn-default btn-default btn-sm  btn-primary add-tooltip masCategoria" data-original-title="Informacion de Responsable" data-container="body" ><i class="demo-pli-add icon-lg " ></i></button> 
<div class="input-group bootstrap-timepicker timepicker">
        <input id="timepicker2" class="form-control input-small" type="text"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
    </div>
                                        </div>
                               
                </div>

            </td>
            
        </tr>
        

    </tbody>
</table>--}}


<div class="form-group ">
     <div class="col-md-1">
     </div>
     <div class="col-md-10">
     
<table class="" id="diasTable">
    <tbody>
        <tr>
            <td>
                <label for="example-email-input" class=" control-label text-main text-bold ">Dias:*</label>
                    
                <div class="form-group ">       
                    <div class="col-md-3">
                         <select  class="form-control" id="dias" name="dias" >
                            <option value="1">Lunes</option>
                             <option value="2">Martes</option>
                             <option value="3">Miercoles</option>
                             <option value="4">Jueves</option>
                             <option value="5">Viernes</option>
                             <option value="6">Sabado</option>
                             <option value="7">Domingo</option>
                             
                        </select>
                      
                                       
                   </div>
                    <div class="col-md-8">

                        
                            <div class=" input-daterange input-group" id="datepicker">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                        <span class="input-group-addon">Inicio</span>{{----}}
                                                        <input type="time" placeholder="Hora Inicio" class="form-control"  id="horaInicio" name="horaInicio" />
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                        <span class="input-group-addon">Fin</span>{{----}}
                                                        <input type="time" placeholder="Hora Fin" class="form-control" id="horaFin" name="horaFin" />
                                                    </div>
                                                    

                    </div>  
                     <div class="col-md-1">
                                <button type="button" class="btn btn-icon btn-default btn-default btn-sm  btn-primary add-tooltip masDias" data-original-title="Informacion de Responsable" data-container="body" ><i class="demo-pli-add icon-lg " ></i> </button>

                            </div>
                 </div>

            </td>
        </tr>
        

    </tbody>
</table>
</div>
</div>


<div class="form-group ">
     <div class="col-md-1">
     </div>
     <div class="col-md-10">
     
<table class="" id="categoriaTable">
    <tbody>
        <tr>
            <td>
                <label for="example-email-input" class="control-label text-main text-bold ">Categoria:*</label>
                <div class="form-group ">       
                    
                    <div class="col-md-7">
                   <!--     <select  class="form-control" id="cat_id[]" name="cat_id[]" >
                       -->
                         <select  class="form-control" id="cat_id" name="cat_id" >
                             
                        </select>
                      
                                       
                   </div>
                    <div class="col-md-5">

                        
                            <label for="example-number-input" class="col-md-3 control-label text-main text-bold ">Cuota:*</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="$##.##" id="nombre" name="nombre">
                                <div id="descripcionfeed" class="form-control-feedback"></div>                   
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-icon btn-default btn-default btn-sm  btn-primary add-tooltip masCategoria" data-original-title="Informacion de Responsable" data-container="body" ><i class="demo-pli-add icon-lg " ></i> </button>

                            </div>

                    </div>  
                 </div>

            </td>
        </tr>
        

    </tbody>
</table>
</div>
</div>

<!---------------------------------------------------------------------------------->


<!---------------------------------------------------------------------------------->
<br><br><br><br><br>
<hr>

    </div><!--=Fincol 10=-->

</div>
</form>

