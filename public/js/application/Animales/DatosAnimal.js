
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

  (function(window,document,$,undefined){
    (function() {
        return Animal = {

          $buttonCrear : $('#Nuevo'),
          $buttonConsulta: $('#ConsultarUsr'),
          ModalAlerta:$('#ModalAlerta'),
          procedencia:$('#procedencia'),
          codigo     :$('#codigo'),
          raza     :$('#raza'),
          sexo    :$('#sexo'),
          estado    :$('#estado'),
          pesoNacer    :$('#pesoNacer'),
          pesoDestete    :$('#pesoDestete'),
          fechadestete    :$('#fechadestete'),
          fechaConsumo    :$('#fechaConsumo'),
          fechaparto    :$('#fechaparto'),
          codParto    :$('#codParto'),
          codMadre    :$('#codMadre'),
          edad    :$('#edad'),
          razamadre    :$('#razamadre'),
          razapadre    :$('#razapadre'),
          tipoAnimal    :$('#tipoAnimal'),
          MensajeAlerta:'',

          Init: function(){
            this.EscucharButtonGuardar()
            this.OcultarCampos()
            this.EscucharButtonConsulta()
          },

          EscucharButtonConsulta: function (){
            var self = this

            self.$buttonConsulta.on('click',function( e ){
              e.preventDefault()

              self.MensajeAlerta = 'Ingrese el Id de su usuario: '
              $('#TextoAlerta').empty()
                                 .text(self.MensajeAlerta)
              self.ModalAlerta.modal('show')
            })
          },

          EscucharButtonGuardar: function(){
            var self = this,
                url  = '/gestionAnimal/animales/store',
                data = $('#firstForm').serialize();
            self.$buttonCrear.on('click', function( e ){
              e.preventDefault()
              //if(validacionCampos()){

                self.AjaxGuardarUsuario(url,data)
                                       .then(function ( data ){
                                         self.MensajeAlerta = 'Registro Guardado con Exito!'
                                         $('ModalAlerta h4').empty()
                                                          .text(self.MensajeAlerta)
                                         ModalAlerta.modal('show')

                                       })
              /*}else{
                MensajeAlerta = 'Algo Fallo al intentar guardar el registro.'
                $(ModalAlerta h4).empty()
                                 .text(MensajeAlerta)
                ModalAlerta.modal('show')
              }*/
            })

          },

          AjaxGuardarUsuario: function ( url, data ){
            return $.post('url',data,callback)
          },

          OcultarCampos: function(){
            var self = this

            self.procedencia.prop('disabled','disable')
            self.codigo.prop('disabled', 'disable')
            self.raza.prop('disabled', 'disable')
            self.sexo.prop('disabled', 'disable')
            self.estado.prop('disabled', 'disable')
            self.pesoNacer.prop('disabled', 'disable')
            self.pesoDestete.prop('disabled', 'disable')
            self.fechadestete.prop('disabled', 'disable')
            self.fechaConsumo.prop('disabled', 'disable')
            self.fechaparto.prop('disabled', 'disable')
            self.codParto.prop('disabled', 'disable')
            self.codMadre.prop('disabled', 'disable'),
            self.edad.prop('disabled', 'disable')
            self.razamadre.prop('disabled', 'disable')
            self.razapadre.prop('disabled', 'disable')
            self.tipoAnimal.prop('disabled', 'disable')
          }






        }
    })();
    Animal.Init();
  })(window,document,jQuery);
