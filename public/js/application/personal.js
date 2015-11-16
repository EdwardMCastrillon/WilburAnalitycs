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
      $docuemnto : $("#docuemnto"),
      $tipoDocuemnto : $("#tipoDocuemnto"),
      $nombres : $("#nombres"),
      $prApellido : $("#prApellido"),
      $sgApellido : $("#sgApellido"),
      $fechaNaci : $("#fechaNaci"),
      $departamento : $("#departamento"),
      $municipio : $("#municipio"),
      $sangre : $("#sangre"),
      $rh : $("#rh"),
      $direccion : $("#direccion"),
      $email : $("#email"),
      $telFijo : $("#telFijo"),
      $telMovil : $("#telMovil"),
      $profesion : $("#profesion"),
      $fechaTitulo : $("#fechaTitulo"),
      $otrosEstu : $("#otrosEstu"),
      $fechaFin : $("#fechaFin"),
      $si : $("#si"),
      $no : $("#no"),
      $cargo : $("#cargo"),
      $contrato : $("#contrato"),
      $fechaContra : $("#fechaContra"),
      $estado : $("#estado"),
      _token : $("input[name=_token]"),

      Init: function (){
        this.inactivarCampos();
        this.escucharBotones();
        this.escucharDepartamento();
      },

      inactivarCampos: function (){
        var self = this;
        self.$docuemnto.attr('disabled', false);
        self.$tipoDocuemnto.attr('disabled', false);
        self.$nombres.attr('disabled', false);
        self.$prApellido.attr('disabled', false);
        self.$sgApellido.attr('disabled', false);
        self.$fechaNaci.attr('disabled', false);
        self.$departamento.attr('disabled', false);
        self.$municipio.attr('disabled', false);
        self.$sangre.attr('disabled', false);
        self.$rh.attr('disabled', false);
        self.$direccion.attr('disabled', false);
        self.$email.attr('disabled', false);
        self.$telFijo.attr('disabled', false);
        self.$telMovil.attr('disabled', false);
        self.$profesion.attr('disabled', false);
        self.$fechaTitulo.attr('disabled', false);
        self.$otrosEstu.attr('disabled', false);
        self.$fechaFin.attr('disabled', false);
        self.$si.attr('disabled', false);
        self.$no.attr('disabled', false);
        self.$cargo.attr('disabled', false);
        self.$contrato.attr('disabled', false);
        self.$fechaContra.attr('disabled', false);
        self.$estado.attr('disabled', false);
      },

      escucharDepartamento: function (){
        var self = this;
        self.$departamento.change(function (){
          var id = self.$departamento.val();
          if ( id != 0 ){
            var urlParams = '/MenuPrincipal/personal/:ID'
            var url = urlParams.replace(':ID', id );
            $.ajax( url, { "_token": self._token.val() }, function (response){
              console.dir(response);
            });
          }
        });
      },

      escucharBotones: function (even){
        var self = this;
        self.$nuevo.on("click", function (even){
            even.preventDefault();
        })
      }
    }
  }) ();

  personal.Init();
}) (window, document, $, undefined);
