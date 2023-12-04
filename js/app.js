// if('serviceWorker' in navigator){
//     console.log("Podemos usar serviceWorker")
//    }
   


if (navigator.serviceWorker){
    //Registramos el sw indicando la ubicación del archivo
    navigator.serviceWorker.register("/jalu-nails-2/sw.js");
   }