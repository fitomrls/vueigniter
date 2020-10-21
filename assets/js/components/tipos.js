Vue.component("tipos", {
    template: /*html*/ `<v-card class="mb-12" >
      <v-container class="grey lighten-5">    
        <v-row class="mb-6">
            <v-col v-for="web in webs" :key="web.id" >
                <v-card dark :color="web.config.fondo"
                  class="mx-auto fondo"
                  max-width="344"                
                >              
                  <v-card-text :class="web.config.textColor">
                    <div style="height: 150px">
                      <div>{{web.titulo}}</div>
                      <p >{{web.subtitulo}}</p>
                      <div class="py-4">
                        {{web.descrip}}
                      </div>
                    </div>
                  </v-card-text>
                  <v-card-actions >
                      <v-btn rounded color="primary"
                        @click="precio(web)">
                        {{web.precio.costo}}&nbsp;{{web.precio.moneda}} 
                      </v-btn>
                  </v-card-actions>
                </v-card>
            </v-col>
  
        </v-row>
        <v-btn color="primary" @click="next1" :disabled="!valid">
          Continue
        </v-btn>
        <v-btn text @click="reset" >Cancel</v-btn>
      </v-container>
    </v-card>
    `,
    data() {
      return {
        costo: 0,
        valid: false,
        webs: [
          {
            id: 1234567,
            titulo: "Sitio Web Básico",
            subtitulo: "Estático",
            descrip:
              "Página web con características básicas. 'Ideal para sitios informativos'",
            tipo: 1,
            precio: {
              costo: 650,
              moneda: "Bs",
            },
            detalle: {
              disenio: {
                tipo: "genérico/multiproposito",
                responsivo: "Si",
                logo: "De la Empresa",
                estilo: "Colores acordes a la identidad",
                opciones: ["OnePage", "Multipage"],
              },
              contenido: "En conformidad con la empresa ",
              facebook: {
                like: "Si",
                chatbox: "No",
                adds: "No",
                share: "No",
              },
              iformacion: {
                ubicacion: "GoogleMpas",
                contactos: "Teléfonos, Emails, Whatsapp",
              },
              paginas: {
                numero: 5,
                detalle: [
                  "Inicio",
                  "Formulario de Contacto",
                  "Servicios",
                  "Acerca de...",
                  "Banner publicitario",
                  "Slider Imagenes",
                ],
              },
              administracion: "Webmaster",
              hosting: {
                dominio: "Si",
                webmail: 5,
                ssl: "Si",
                tiempo: "1 año",
              },
            },
            config: {
              fondo: "white",
              textColor: "black--text",
            },
          },
          {
            id: 7654321,
            titulo: "Sitio Web Comercial",
            subtitulo: "Dinámico (Base de datos)",
            descrip:
              "Página web con características avanzadas.'Ideal para pymes, instituciones'",
            tipo: 2,
            precio: {
              costo: 1800,
              moneda: "Bs",
            },
            detalle: {
              disenio: {
                tipo: "Exclusivo",
                responsivo: "Si",
                logo: "De la Empresa",
                estilo: "Colores acordes a la identidad",
                opciones: ["OnePage", "Multipage", "Landing"],
              },
              contenido: "En conformidad con la empresa ",
              facebook: {
                like: "Si",
                chatbox: "No",
                adds: "No",
                share: "No",
              },
              iformacion: {
                ubicacion: "GoogleMpas",
                contactos: "Teléfonos, Emails, Whatsapp",
              },
              paginas: {
                numero: 10,
                detalle: [
                  "Inicio",
                  "Formulario de Contacto",
                  "Servicios",
                  "Acerca de...",
                  "Banner publicitario",
                  "Slider Imagenes",
                  "Publicador de Noticias",
                ],
              },
              administracion: "Autogestionable",
              hosting: {
                dominio: "Si",
                webmail: 10,
                ssl: "Si",
                tiempo: "1 año",
              },
            },
            config: {
              fondo: "white",
              textColor: "black--text",
            },
          },
          {
            id: 24681012,
            titulo: "Sitio Web Empresarial",
            subtitulo: "Dinámico (Base de datos)",
            descrip:
              "Página web con características avanzadas, con servicios Especiales 'Ideal para pymes, instituciones'",
            tipo: 3,
            precio: {
              costo: 3200,
              moneda: "Bs",
            },
            detalle: {
              disenio: {
                tipo: "Exclusivo",
                responsivo: "Si",
                logo: "Diseño Profesional",
                estilo: "Colores acordes a la marca",
                opciones: ["OnePage", "Multipage", "Landing"],
              },
              contenido: "En conformidad con la empresa ",
              facebook: {
                like: "Si",
                chatbox: "Si",
                adds: "Si",
                share: "Si",
              },
              iformacion: {
                ubicacion: "GoogleMpas",
                contactos: "Teléfonos, Emails, Whatsapp",
              },
              paginas: {
                numero: 17,
                detalle: [
                  "Inicio",
                  "Formulario de Contacto",
                  "Servicios",
                  "Acerca de...",
                  "Banner publicitario",
                  "Slider Imagenes",
                  "Publicador de Noticias o Blog",
                  "Tienda Catálogo Virtual",
                ],
              },
              administracion: "Autogestionable",
              hosting: {
                dominio: "Si",
                webmail: 10,
                ssl: "Si",
                tiempo: "1 año",
              },
            },
            config: {
              fondo: "white",
              textColor: "black--text",
            },
          },
        ],
      };
    },
    methods: {
      precio(webo) {
        webo.config.fondo = "deep-purple accent-4";
        webo.config.textColor = "white--text";
  
        this.webs.map((web) => {
          if (webo.id != web.id) {
            web.config = {
              fondo: "white",
              textColor: "black--text",
            };
          }
          return web;
        });
  
        //this.webs = nuevo;
        this.costo = webo.precio.costo;
        this.valid = true;
        this.$emit("calculartotaltipos", webo.precio.costo);
      },
  
      next1() {
        this.$emit("next2");
      },
  
      reset() {
        this.webs.map((web) => {
          web.config = {
            fondo: "white",
            textColor: "black--text",
          };
          return web;
        });
  
        this.costo = 0;
        this.valid = false;
        this.$emit("calculartotaltipos", 0);
  
      },
    },
  
    watch: {
      costo(newValue, oldValue) {
        if (newValue > 0) {
          this.valid = true;
        }
      },
    },
  });
  