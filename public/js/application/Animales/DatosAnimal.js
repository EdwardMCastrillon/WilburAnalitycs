

$(document).ready(function){
  $(function(window,$,document,undefined){
    $(function() {
        return Animal = {

          $buttonGuardar : $('#guardar'),

          Init: function(){
            this.EscucharButtonGuardar()
          },

          EscucharButtonGuardar: function(){
            var self = this
            self.$buttonGuardar.on('click', function( e ){
              e.preventDefault()
              alert()
            })

          }

        }
    })();
    Animal.Init();
  })();
}
