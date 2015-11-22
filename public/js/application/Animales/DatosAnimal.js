
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

  (function(window,document,$,undefined){
    (function() {
        return Animal = {

          $buttonCrear   : $('#Nuevo'),
          $buttonGuardar : $('#Guardar'),
          $buttonConsulta: $('#ConsultarUsr'),
          $buttonEliminar: $('#Eliminar'),
          ModalAlerta    : $('#ModalAlertas'),
          procedencia    : $('select[name="procedencia"]'),
          codigo         : $('input[name="codigo"]'),
          raza           : $('select[name="raza"]'),
          sexo           : $('select[name="sexo"]'),
          estado         : $('input[name="estado"]'),
          pesoNacer      : $('input[name="pesoNacer"]'),
          pesoDestete    : $('input[name="pesoDestete"]'),
          fechadestete   : $('input[name="fechadestete"]'),
          fechaConsumo   : $('input[name="fechaConsumo"]'),
          fechaparto     : $('input[name="fechaparto"]'),
          codParto       : $('input[name="codParto"]'),
          codMadre       : $('input[name="codMadre"]'),
          edad           : $('input[name="edad"]'),
          razamadre      : $('select[name="razamadre"]'),
          razapadre      : $('select[name="razapadre"]'),
          tipoAnimal     : $('input[name="tipoAnimal"]'),
          MensajeAlerta  : '',
          ValidacionIpts : [],
          ValidacionSlct : [],

          Init: function(){
            this.EscucharButtonGuardar()
            this.OcultarCampos()
            this.EscucharButtonConsulta()
            this.EscucharButtonNuevo()
            this.EscucharButtonEliminar()
            this.ValidacionIpts = [this.codigo,this.estado,this.pesoNacer,this.pesoDestete,this.fechadestete,this.fechaConsumo,this.fechaparto,this.codParto,this.codMadre,this.edad,this.tipoAnimal]
            this.ValidacionSlct = [this.procedencia,this.raza,this.sexo,this.razapadre,this.razapadre]
          },

          EscucharButtonConsulta: function (){
            var self = this

            self.$buttonConsulta.on('click',function( e ){
              e.preventDefault()

              self.MensajeAlerta = 'Ingrese el codigo del Animal: '
              $('#TextoAlerta').empty()
                               .text(self.MensajeAlerta)
              self.ModalAlerta.find('div.cuerpo')
                              .html('<input type="text" class="form-control codigo" />')
              self.ModalAlerta.find('button.text-button')
                              .text('Consultar')

              self.ModalAlerta.modal('show')

              self.ModalAlerta.find('button.text-button').on('click', function( e ){
                e.preventDefault()
                var codigo = $('.codigo').val()
                self.ModalAlerta.modal('hide')
                if( codigo != "" ){

                  var url  = '/MenuPrincipal/GestionAnimal/animales/consultar/'+codigo
                  self.AjaxRequest(url,{ },'GET')
                                  .done(function ( data ){
                                    debugger
                                    var Animal = data
                                    if(Animal.hasOwnProperty('codigo')){
                                      self.MensajeAlerta = 'Animal Consultado con Exito.'
                                      $('#TextoAlerta').empty()
                                                       .text(self.MensajeAlerta)
                                      self.ModalAlerta.find('button.text-button')
                                                      .hide()
                                      self.CargarForm(Animal)

                                    }
                                  })
                                  .fail( function( error ){

                                  })
                }else{

                }
              })
            })
          },

          CargarForm: function( ObjAnimal ){
            var self = this

            self.procedencia.val(ObjAnimal.procedencia)
            self.codigo.val(ObjAnimal.codigo)
            self.raza.val(ObjAnimal.raza)
            self.sexo.val(ObjAnimal.sexo)
            self.estado.val(ObjAnimal.estado)
            self.pesoNacer.val(ObjAnimal.pesoNacer)
            self.pesoDestete.val(ObjAnimal.pesoDestete)
            self.fechadestete.val(ObjAnimal.fechadestete)
            self.fechaConsumo.val(ObjAnimal.fechaConsumo)
            self.codParto.val(ObjAnimal.codParto)
            self.fechaparto.val(ObjAnimal.fechaparto)
            self.codMadre.val(ObjAnimal.codMadre)
            self.edad.val(ObjAnimal.edad)
            self.razamadre.val(ObjAnimal.razamadre)
            self.razapadre.val(ObjAnimal.razapadre)
            self.tipoAnimal.val(ObjAnimal.tipoAnimal)
          },

          EscucharButtonGuardar: function(){
            var self = this,
                url  = '/MenuPrincipal/GestionAnimal/animales/store',
                data = $('#firstForm').serialize();
            self.$buttonGuardar.on('click', function( e ){
              e.preventDefault()
              if(self.validacionCampos()){

                self.AjaxRequest(url,data,'GET')
                                       .then(function ( data ){
                                         self.MensajeAlerta = 'Registro Guardado con Exito!'
                                         $('ModalAlerta h4').empty()
                                                            .text(self.MensajeAlerta)
                                         ModalAlerta.modal('show')

                                       })
              }else{
                MensajeAlerta = 'Algo Fallo al intentar guardar el registro.'
                $('#ModalAlertas h4').empty()
                                     .text(MensajeAlerta)
                ModalAlerta.modal('show')
              }
            })

          },

          EscucharButtonEliminar: function (){
            var self = this
            self.$buttonEliminar.on('click', function( e ){
              e.preventDefault()
              self.MensajeAlerta = "Ingrese el codigo de animal a Eliminar"
              $('ModalAlerta h4').empty()
                                 .text(self.MensajeAlerta)
              self.ModalAlerta.find('div.cuerpo')
                              .append('<input type="text" class="form-control .codigo" />')
              self.ModalAlerta.find('button.text-button')
                              .text('Eliminar')
              self.ModalAlerta.modal('show')
              self.ModalAlerta.find('button.text-button').on('click', function( e ){
                e.preventDefault()
                var codigo = $('.codigo').val();
                var url    = '/MenuPrincipal/GestionAnimal/animales/eliminar/'+codigo
                self.AjaxRequest(url,{},'GET')
                                .done(function ( response ){

                                })
                                .fail(function ( error ){

                                })

              })
            })
          },

          EscucharButtonNuevo: function(){
              var self = this
              self.$buttonCrear.on('click', function( e ){
                e.preventDefault()
                self.HabilitarCampos()
              })
          },


          AjaxRequest: function ( url, data, verb ){
            return
              $.ajax({
              url : url,
              data : data,
              type : verb,
              dataType : 'json',
            })
          },

          HabilitarCampos: function (){
            var self = this
            self.procedencia.removeAttr('disabled')
            self.codigo.removeAttr('disabled')
            self.raza.removeAttr('disabled')
            self.sexo.removeAttr('disabled')
            self.estado.removeAttr('disabled')
            self.pesoNacer.removeAttr('disabled')
            self.pesoDestete.removeAttr('disabled')
            self.fechadestete.removeAttr('disabled')
            self.fechaConsumo.removeAttr('disabled')
            self.fechaparto.removeAttr('disabled')
            self.codParto.removeAttr('disabled')
            self.codMadre.removeAttr('disabled')
            self.edad.removeAttr('disabled')
            self.razamadre.removeAttr('disabled')
            self.razapadre.removeAttr('disabled')
            self.tipoAnimal.removeAttr('disabled')
          },

          OcultarCampos: function(){
            var self = this

            self.procedencia.attr('disabled','disabled')
            self.codigo.attr('disabled','disabled')
            self.raza.attr('disabled', 'disabled')
            self.sexo.attr('disabled', 'disabled')
            self.estado.attr('disabled', 'disabled')
            self.pesoNacer.attr('disabled', 'disabled')
            self.pesoDestete.attr('disabled', 'disabled')
            self.fechadestete.attr('disabled', 'disabled')
            self.fechaConsumo.attr('disabled', 'disabled')
            self.fechaparto.attr('disabled', 'disabled')
            self.codParto.attr('disabled', 'disabled')
            self.codMadre.attr('disabled', 'disabled')
            self.edad.attr('disabled', 'disabled')
            self.razamadre.attr('disabled', 'disabled')
            self.razapadre.attr('disabled', 'disabled')
            self.tipoAnimal.attr('disabled', 'disabled')


          },

          validacionCampos: function(){
            var self      = this,
                validator = false;

            $.each(self.ValidacionIpts, function( i, ipt){
              validator = ipt.val() == "" ? true : false
            })

            $.each(self.ValidacionSlct, function( i, slct ){
              validator = slct.val() == "" ? true : false
            })

            return validator
          },






        }
    })();
    Animal.Init();
  })(window,document,jQuery);
