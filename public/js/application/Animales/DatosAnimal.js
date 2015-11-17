
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
          ModalAlerta:$('#ModalAlertas'),
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
            alert(this.$buttonConsulta)
            this.EscucharButtonGuardar()
            this.OcultarCampos()
            this.EscucharButtonConsulta()
          },

          EscucharButtonConsulta: function (){
            var self = this

            self.$buttonConsulta.on('click',function( e ){
              e.preventDefault()

              self.MensajeAlerta = 'Ingrese el Id de su usuario: '
              $('ModalAlerta h4').empty()
                               .text(MensajeAlerta)
              ModalAlerta.modal('show')
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

            self.procedencia.prop('disabled',true)
            self.codigo.prop('disabled', true)
            self.raza.prop('disabled', true)
            self.sexo.prop('disabled', true)
            self.estado.prop('disabled', true)
            self.pesoNacer.prop('disabled', true)
            self.pesoDestete.prop('disabled', true)
            self.fechadestete.prop('disabled', true)
            self.fechaConsumo.prop('disabled', true)
            self.fechaparto.prop('disabled', true)
            self.codParto.prop('disabled', true)
            self.codMadre.prop('disabled', true),
            self.edad.prop('disabled', true)
            self.razamadre.prop('disabled', true)
            self.razapadre.prop('disabled', true)
            self.tipoAnimal.prop('disabled', true)
          }






        }
    })();
    Animal.Init();
  })(window,document,jQuery);
