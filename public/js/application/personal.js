$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});


(function (window, document, $, undefined){

  (function (){

    return personal = {

      $nuevo : $("#nuevo"),
      $guardar : $("#guardar"),
      $modificar : $("#modificar"),
      $consultar : $("#consultar"),
      $eliminar : $("#eliminar"),
      $listar : $("#listar"),
      $limpiar : $("#limpiar"),
      $documento : $("#documento"),
      $tipoDocumento : $("#tipoDocumento"),
      $nombres : $("#nombres"),
      $prApellido : $("#prApellido"),
      $sgApellido : $("#sgApellido"),
      $fechaNaci : $(".fechaNaci"),
      $departamento : $("#departamento"),
      $municipio : $("#municipio"),
      $sangre : $("#sangre"),
      $rh : $("#rh"),
      $direccion : $("#direccion"),
      $email : $("#email"),
      $telfijo : $("#telfijo"),
      $telMovil : $("#telMovil"),
      $profesion : $("#profesion"),
      $fechaTitulo : $(".fechaTitulo"),
      $otrosEstu : $("#otrosEstu"),
      $fechaFin : $(".fechaFin"),
      $si : $("#si"),
      $no : $("#no"),
      $cargo : $("#cargo"),
      $contrato : $("#contrato"),
      $fechaContra : $(".fechaContra"),
      $estado : $("#estado"),
      modalAlertas : $("#ModalAlertas"),
      textoAlerta : $("#TextoAlerta"),
      textoTitulo : $("#modal-title"),
      $docuConsulta : $("#docuConsulta"),
      $cerrarModal : $("#cerrarModal"),
      $aceptarModal : $("#aceptarModal"),

      Init: function (){
        this.inactivarCampos();
        this.escucharBotones();
        this.escucharConsultar();
        this.escucharDepartamento();
        this.escucharAceptarModal();
        this.escucharEliminar();
        this.escucharModificar();
        this.escucharLimpiar();
        this.escucharListar();
        this.limpiarCampos();
      },

      inactivarCampos: function (){
        var self = this;
        self.$documento.attr('disabled', 'disabled');
        self.$tipoDocumento.attr('disabled', 'disabled');
        self.$nombres.attr('disabled', 'disabled');
        self.$prApellido.attr('disabled', 'disabled');
        self.$sgApellido.attr('disabled', 'disabled');
        self.$fechaNaci.attr('disabled', 'disabled');
        self.$departamento.attr('disabled', 'disabled');
        self.$municipio.attr('disabled', 'disabled');
        self.$sangre.attr('disabled', 'disabled');
        self.$rh.attr('disabled', 'disabled');
        self.$direccion.attr('disabled', 'disabled');
        self.$email.attr('disabled', 'disabled');
        self.$telfijo.attr('disabled', 'disabled');
        self.$telMovil.attr('disabled', 'disabled');
        self.$profesion.attr('disabled', 'disabled');
        self.$fechaTitulo.attr('disabled', 'disabled');
        self.$otrosEstu.attr('disabled', 'disabled');
        self.$fechaFin.attr('disabled', 'disabled');
        self.$si.attr('disabled', 'disabled');
        self.$no.attr('disabled', 'disabled');
        self.$cargo.attr('disabled', 'disabled');
        self.$contrato.attr('disabled', 'disabled');
        self.$fechaContra.attr('disabled', 'disabled');
        self.$estado.attr('disabled', 'disabled');
      },

      activarCampos: function (){
        var self = this;
        self.$documento.removeAttr("disabled");
        self.$tipoDocumento.removeAttr("disabled");
        self.$nombres.removeAttr("disabled");
        self.$prApellido.removeAttr("disabled");
        self.$sgApellido.removeAttr("disabled");
        self.$fechaNaci.removeAttr("disabled");
        self.$departamento.removeAttr("disabled");
        self.$municipio.removeAttr("disabled");
        self.$sangre.removeAttr("disabled");
        self.$rh.removeAttr("disabled");
        self.$direccion.removeAttr("disabled");
        self.$email.removeAttr("disabled");
        self.$telfijo.removeAttr("disabled");
        self.$telMovil.removeAttr("disabled");
        self.$profesion.removeAttr("disabled");
        self.$fechaTitulo.removeAttr("disabled");
        self.$otrosEstu.removeAttr("disabled");
        self.$fechaFin.removeAttr("disabled");
        self.$si.removeAttr("disabled");
        self.$no.removeAttr("disabled");
        self.$cargo.removeAttr("disabled");
        self.$contrato.removeAttr("disabled");
        self.$fechaContra.removeAttr("disabled");
        self.$estado.removeAttr("disabled");
      },

      escucharDepartamento: function (){
        var self = this;
        self.$departamento.change(function (){
          var id = self.$departamento.val();
            debugger;
          if ( id != 0 ){
            var urlParams = '/MenuPrincipal/personal/:ID'
            var url = urlParams.replace(':ID', id );
            $.ajax( url, function (response){
              console.dir(response);
            });
          }
        });
      },

      escucharConsultar: function (){
        var self = this;
        self.$consultar.on("click", function (even){
          even.preventDefault();
          self.textoTitulo.empty().text("Consultar.");
          self.textoAlerta.empty().text("Ingrese el numero de documento a consultar.");
          self.modalAlertas.modal('show');
      });

      },

      escucharEliminar: function (){
          var self = this;
          self.$eliminar.on("click", function (even){
            even.preventDefault();
            self.textoTitulo.empty().text("Eliminar.");
            self.textoAlerta.empty().text("Ingrese el numero de documento a eliminar.");
            self.modalAlertas.modal('show');
          });
      },

      escucharModificar: function (){
          var self = this;
          self.$modificar.on("click", function (even){
            even.preventDefault();
            self.textoTitulo.empty().text("Modificar.");
            self.textoAlerta.empty().text("Ingrese el numero de documento a modificar.");
            self.modalAlertas.modal('show');
          });
      },

      escucharLimpiar: function (){
          var self = this;
          self.$limpiar.on("click", function (even){
            even.preventDefault();
            self.limpiarCampos();
            self.inactivarCampos();
          });
      },

      escucharListar: function (){
          var self = this;
          self.$listar.on("click", function (even){
            even.preventDefault();
            var url = '/MenuPrincipal/GestionarPersonal/Personal/listar';
            $.ajax( url ).done( function (response){
              
            });
          });
      },

      escucharAceptarModal: function (){
        var self = this;
        self.$aceptarModal.on('click', function(even){
          var id = self.$docuConsulta.val();
          if ( id == "" ){
            alert("Vacio");
          }else{
            if ( self.textoTitulo.text() == "Consultar."){
              var urlParams = '/MenuPrincipal/GestionarPersonal/Personal/consultar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax( url ).done( function (response){
                var x = JSON.parse(response)
                alert(x)
                if ( response != undefined ){
                  self.cargarForm(response);
                }
              });
            }else if (self.textoTitulo.text() == "Eliminar.") {
              var urlParams = '/MenuPrincipal/GestionarPersonal/Personal/eliminar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax( url, function (response){
                if ( response != undefined ){
                  alert(response);
                }
              });
            }else{
              var urlParams = '/MenuPrincipal/GestionarPersonal/Personal/editar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax( url, function (response){
                if ( response != undefined ){
                  self.cargarForm(response);
                }
              });
            }
          }
          self.$docuConsulta.val("");
        });
      },

      cargarForm: function ( json ){
        var self = this;
        var objeto = JSON.parse(json);
        debugger;
        self.$documento.val();
        self.$tipoDocuemnto.val();
        self.$nombres.val();
        self.$prApellido.val();
        self.$sgApellido.val();
        self.$fechaNaci.val();
        self.$departamento.val();
        self.$municipio.val();
        self.$sangre.val();
        self.$rh.val();
        self.$direccion.val();
        self.$email.val();
        self.$telfijo.val();
        self.$telMovil.val();
        self.$profesion.val();
        self.$fechaTitulo.val();
        self.$otrosEstu.val();
        self.$fechaFin.val();
        self.$si.val();
        self.$no.val();
        self.$cargo.val();
        self.$contrato.val();
        self.$fechaContra.val();
        self.$estado.val();
      },

      limpiarCampos: function (  ){
        var self = this;
        self.$documento.val("");
        self.$tipoDocumento.val(0);
        self.$nombres.val("");
        self.$prApellido.val("");
        self.$sgApellido.val("");
        self.$fechaNaci.val("");
        self.$departamento.val(0);
        self.$municipio.val(0);
        self.$sangre.val(0);
        self.$rh.val(0);
        self.$direccion.val("");
        self.$email.val("");
        self.$telfijo.val("");
        self.$telMovil.val("");
        self.$profesion.val(0);
        self.$fechaTitulo.val("");
        self.$otrosEstu.val("");
        self.$fechaFin.val("");
        self.$si.val("");
        self.$no.val("");
        self.$cargo.val(0);
        self.$contrato.val(0);
        self.$fechaContra.val("");
        self.$estado.val("");
      },

      escucharBotones: function (even){
        var self = this;
        self.$nuevo.on("click", function (even){
            even.preventDefault();
            self.limpiarCampos();
            self.activarCampos();
        })
      }
    }
  }) ();

  personal.Init();
}) (window, document, $, undefined);
