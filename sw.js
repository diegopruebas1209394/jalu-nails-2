//DIEGO DANIEL ALCANTAR GUERRERO 10°C

const CACHE ='cache-1';
const CACHE_DINAMICO ='dinamico-1';
const CACHE_ESTATICO ='estatico-1';
const CACHE_INMUTABLE ='inmutable-1';

//Indicamos que durante el proceso de instalación
self.addEventListener('install', evento=>{
      /*Promesa que crea el proceso de creación del espacio
      en cache y agrega los archivos necesarios para cargar nuestra
      aplicación*/
      const promesa =caches.open(CACHE)
          .then(cache=>{
                  return cache.addAll([
                  '/',
                  '/jalu-nails-2/index.php',
                  '/jalu-nails-2/css/style.css',
                  '/jalu-nails-2/scss/bootstrap/_carousel.scss',
                  '/jalu-nails-2/scss/bootstrap/_modal.scss',
                  '/jalu-nails-2/images/lujo.jpeg',
                  '/jalu-nails-2/images/press-on.jpg',
                  '/jalu-nails-2/images/poly-gel.jpg',
                  '/jalu-nails-2/images/tecnicas.jpg',
                  '/jalu-nails-2/images/acrilicas.jpg',
                  '/jalu-nails-2/images/estudiantes.jpg',
                  '/jalu-nails-2/images/about-1.png',
                  '/jalu-nails-2/images/work-1.jpg',
                  '/jalu-nails-2/images/work-6.jpg',
                  '/jalu-nails-2/images/work-7.jpg',
                  '/jalu-nails-2/images/work-8.png',
                  '/jalu-nails-2/images/work-3.png',
                  '/jalu-nails-2/images/work-2.png',
                  '/jalu-nails-2/images/bg-1.png',
                  '/jalu-nails-2/images/bg-2.png',
                  '/jalu-nails-2/images/bg_g1.png',
                  '/jalu-nails-2/images/bg-2.2.png',
                  '/jalu-nails-2/images/bg-2_S.png',
                  '/jalu-nails-2/images/bg_1.png',
                  '/jalu-nails-2/images/bg_2.png',
                  '/jalu-nails-2/images/logo/logo.png',
                  '/jalu-nails-2/images/galeria/boda_1.png',
                  '/jalu-nails-2/images/galeria/boda_2.png',
                  '/jalu-nails-2/images/galeria/boda_3.png',
                  '/jalu-nails-2/images/galeria/boda_4.png',
                  '/jalu-nails-2/images/galeria/boda_5.png',
                  '/jalu-nails-2/images/galeria/boda_6.png',
                  '/jalu-nails-2/images/galeria/boda_7.png',
                  '/jalu-nails-2/images/galeria/boda_8.png',
                  '/jalu-nails-2/images/galeria/fiesta_1.png',
                  '/jalu-nails-2/images/galeria/fiesta_2.png',
                  '/jalu-nails-2/images/galeria/fiesta_3.png',
                  '/jalu-nails-2/images/galeria/fiesta_4.png',
                  '/jalu-nails-2/images/galeria/fiesta_5.png',
                  '/jalu-nails-2/images/galeria/fiesta_6.png',
                  '/jalu-nails-2/images/galeria/fiesta_7.png',
                  '/jalu-nails-2/images/galeria/fiesta_8.png',
                  '/jalu-nails-2/images/galeria/formal_1.png',
                  '/jalu-nails-2/images/galeria/formal_2.png',
                  '/jalu-nails-2/images/galeria/formal_3.png',
                  '/jalu-nails-2/images/galeria/formal_4.png',
                  '/jalu-nails-2/images/galeria/formal_5.png',
                  '/jalu-nails-2/images/galeria/formal_6.png',
                  '/jalu-nails-2/images/galeria/formal_7.png',
                  '/jalu-nails-2/images/galeria/formal_8.png',
                  '/jalu-nails-2/images/galeria/xv_1.png',
                  '/jalu-nails-2/images/galeria/xv_2.png',
                  '/jalu-nails-2/images/galeria/xv_3.png',
                  '/jalu-nails-2/images/galeria/xv_4.png',
                  '/jalu-nails-2/images/galeria/xv_5.png',
                  '/jalu-nails-2/images/galeria/xv_6.png',
                  '/jalu-nails-2/images/galeria/xv_7.png',
                  '/jalu-nails-2/images/galeria/xv_8.png',
                  '/jalu-nails-2/images/no-wifi.png',
                  '/jalu-nails-2/includes/footer_2.php',
                  '/jalu-nails-2/includes/header.php',
                  '/jalu-nails-2/offline.html',
                  '/jalu-nails-2/galeria.php',
                  '/jalu-nails-2/services.php',
                  '/jalu-nails-2/about.php',
                  '/jalu-nails-2/contact.php',
                  '/jalu-nails-2/css/animate.css',

                ]);
          });

          //Separamos los archivos que no se modificarán en un espacio de cache inmutable
          const cacheInmutable = caches.open(CACHE_INMUTABLE)
          .then(cache=>{
              return cache.add('https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i');
          });
            // Esperar hasta que ambas promesas se resuelvan antes de completar la instalación. 
            //Modife el 'promesaCacheInmutable'
            evento.waitUntil(Promise.allSettled([promesa, cacheInmutable]));
});


self.addEventListener('fetch', evento => {  
    //Estrategia 2 CACHE WITH NETWORK FALLBACK
    const respuesta=caches.match(evento.request)
        .then(res=>{
        //si el archivo existe en cache retornarlo
            if (res) return res;
            //si no existe deberá ir a la web
            //Imprimos en consola para saber que no se encontro en cache
                     console.log('No existe', evento.request.url);
                //Procesamos la respuesta a la petición localizada en la web
                return fetch(evento.request)
                .then(resWeb=>{//el archivo recuperado se almacena en resWeb
                //se abre nuestro cache pero este cache sólo
                //es para cuando un archivo no se encuentra en el caché y hay que descargarlo de la web
                    caches.open(CACHE_DINAMICO)
                .then(cache=>{
                //se sube el archivo descargado de la web
                     cache.put(evento.request,resWeb);
                     /*Mandamos llamar la limpieza al cargar un nuevo archivo
                        estamos indicando que se limpiará el cache dinamico y que
                        solo debe haber 2 archivos*/
                        limpiarCache(CACHE_DINAMICO,80);
                })
                //se retorna el archivo recuperado para visualizar la página
            return resWeb.clone();
            });
        }).
    catch(err => {
        //si ocurre un error, en nuestro caso no hay conexión
        if(evento.request.headers.get('accept').includes('text/html')){
        //si lo que se pide es un archivo html muestra nuestra página offline que esta en cache
             return caches.match('/jalu-nails-2/offline.html');
        }
    });
        evento.respondWith(respuesta);

});


//recibimos el nombre del espacio de cache a limpiar y el número de archivos permitido
function limpiarCache(nombreCache, numeroItems){
    //abrimos el cache
    caches.open(nombreCache)
        .then(cache=>{
        //recuperamos el arreglo de archivos existentes en el espacio de caché
            return cache.keys()
            .then(keys=>{
                    //si el número de archivos supera el límite permitido
                if (keys.length>numeroItems){
                    //eliminamos el más antiguo y repetimos el proceso
                    cache.delete(keys[0])
                     .then(() =>limpiarCache(nombreCache, numeroItems));
            }
        });
    });
}




// self.addEventListener('fetch', evento =>{
//         //Estrategia 5 CACHE WITH NETWORK UPDATE
//         const respuesta = new Promise( (resolve, reject) =>{
//             let rechazada = false;
//             //si ninguna de las dos puede responder en lugar de retornar
//             // el error 404 o el dinosaurio del navegador, retornaremos una imagen o el texto de rechazo
//             const falloUnaVez = () => {
//                 if ( rechazada ) {
//                     if ( /\.(png|jpg)$/i.test( evento.request.url ) ) {
//                           resolve( caches.match('images/no-img.jpg') );
//                     } else {
//                           reject('No se encontro respuesta');
//                     }
//                     } else {
//                           rechazada = true;
//                     }
//                     };
//                         //respuesta de la web
//                         fetch( evento.request ).then( res => {
//                              res.ok ? resolve(res) : falloUnaVez();
//                         }).catch( falloUnaVez );
//                         //respuesta de cache
//                             caches.match( evento.request ).then( res => {
//                                 res ? resolve( res ) : falloUnaVez();
//                 }).catch( falloUnaVez );
//             });
//         evento.respondWith( respuesta );
//    });















