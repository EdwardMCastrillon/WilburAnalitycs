$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});


(function (window, document, $, undefined){

  (function (){

    return perfil = {

      $nuevo : $("#nuevo"),
      $guardar : $("#guardar"),
      $modificar : $("#modificar"),
      $consultar : $("#consultar"),
      $eliminar : $("#eliminar"),
      $listar : $("#listar"),
      $limpiar : $("#limpiar"),
      $id : $("#id"),
      $documento : $("#documento"),
      $perfil : $("#perfil"),
      $name : $("#name"),
      $password : $("#password"),
      $userName : $("#userName"),
      $respassword : $("#respassword"),
      modalAlertas : $("#ModalAlertas"),
      textoAlerta : $("#TextoAlerta"),
      textoTitulo : $("#modal-title"),
      $docuConsulta : $("#docuConsulta"),
      $cerrarModal : $("#cerrarModal"),
      $aceptarModal : $("#aceptarModal"),
      $formPersonal : $("#formAsigPerfil"),

      Init: function (){
        this.inactivarCampos();
        this.escucharBotones();
        this.escucharConsultar();
        //this.escucharGuardar();
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
        self.$name.attr('disabled', 'disabled');
        self.$perfil.attr('disabled', 'disabled');
        self.$userName.attr('disabled', 'disabled');
        self.$password.attr('disabled', 'disabled');
        self.$respassword.attr('disabled', 'disabled');
      },

      activarCampos: function (){
        var self = this;
        self.$documento.removeAttr("disabled");
        self.$name.removeAttr("disabled");
        self.$perfil.removeAttr("disabled");
        self.$userName.removeAttr("disabled");
        self.$password.removeAttr("disabled");
        self.$respassword.removeAttr("disabled");
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
            $.ajax({
              url : url,
              data : {  },
              type : 'GET',
              dataType : 'json',
              success : function(json) {
                  console.dir(response);;
              },
              error : function(xhr, status) {
                  alert('Disculpe, existió un problema');
              }
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
              var urlParams = '/MenuPrincipal/GestionarPersonal/AsignarPerfil/Consultar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax({
                url : url,
                data : {  },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    self.cargarForm(json);
                    console.dir(json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                }
              });
            }else if (self.textoTitulo.text() == "Eliminar.") {
              var urlParams = '/MenuPrincipal/GestionarPersonal/AsignarPerfil/Eliminar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax({
                url : url,
                data : {  },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    console.dir(json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                }
              });
            }else{
              var urlParams = '/MenuPrincipal/GestionarPersonal/AsignarPerfil/Consultar/:ID';
              var url = urlParams.replace(':ID', id );
              $.ajax({
                url : url,
                data : {  },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    self.cargarForm(json);
                    self.activarCampos();
                    self.$documento.attr('readonly', 'readonly');
                    self.$formPersonal.attr('action', '/MenuPrincipal/GestionarPersonal/AsignarPerfil/Modificar.php');
                    console.dir(json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                }
              });
            }
          }
          self.$docuConsulta.val("");
        });
      },

      cargarForm: function ( json ){
        var self = this;
        self.$id.val(json[0].id);
        self.$documento.val(json[0].document);
        //self.$name.val(json[0].idTipoDocumento);
        self.$userName.val(json[0].userName);
        self.$perfil.val(json[0].idPerfil);
        self.$password.val(json[0].password);
        self.$respassword.val(json[0].password);
      },

      limpiarCampos: function (  ){
        var self = this;
        self.$id.val("");
        self.$documento.val("");
        self.$name.val("");
        self.$userName.val("");
        self.$perfil.val(0);
        self.$password.val("");
        self.$respassword.val("");
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

  perfil.Init();
}) (window, document, $, undefined);
