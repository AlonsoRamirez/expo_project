function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57) ) { //De 48 a 57 están comprendidos los charCodes numéricos, keyCode para enter es 13
            return false;
        } else {
            // Se puede colocar un punto solo una vez.
            if (evt.target.value.search(/\./) > -1 && charCode == 46) {
                return false;
            }
            return true;
        }
    }

  function isNumberKeyPoint(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57) ) { //De 48 a 57 están comprendidos los charCodes numéricos, keyCode para enter es 13
            return false;
        } 
        return true;
        
    }


   function allowLetters(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
        if (charCode == 32)
            return true;
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
            return false;
        }
        else
            return true;
    }
  function disableEnterKey(e) //Deshabilita enter para enviar 
{
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox     
        

     return (key != 13);
}

  function allowLettersSymbols(evt) {
         var theEvent = evt || window.event;
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
          if (key.length == 0) return;
          var regex = /^[0-9A-Za-z.,\b]+$/;
          if (!regex.test(key)) {
              theEvent.returnValue = false;
              if (theEvent.preventDefault) theEvent.preventDefault();
          }
    }