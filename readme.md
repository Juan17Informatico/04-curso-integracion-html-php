### Notas:
Cliente y servidor

Toda nuestra aplicacion está guardada en un servidor, el cual entrega una copia de la misma a cada cliente que la solicite.

Además, el servidor también se encarga de responder cada solicitud del usuario.

Tipos de render

-   CSR
    Client Side Rendering, es el tipo de rendererizado más común en liberías como React.js o Vue.js. Aquí es el navegador del cliente quien, por medio de código JavaScript, se encarga de armar toda la estructura de la página web.

-   SSG
    Static Side Generation, este tipo de renderizado se hace desde que construimos nuestra aplicación en tiempo de desarrollo. Es común verlo cuando trabajamos con frameworks como Next.js o Nuxt.js.

    Todo el HTML es contruido en tiempo de build, es decir, desde que desarrollamos, lo que hace no sea necesario un servidor.

-   SSR
    Server Side Rendering, es el tipo de renderizado más común en la web. Este renderizado se basa en que es nuestro servidor quien procesa todo el código y manda todo el código ya procesado a nuestro navegador. 

    Es el más común en lenguajes backend. 