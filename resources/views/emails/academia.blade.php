<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no" />
        <meta name="x-apple-disable-message-reformatting" />
        <!--  Dark mode meta tags  -->
        <meta name="color-scheme" content="light dark" />
        <meta name="supported-color-schemes" content="light dark" />
        <title>Notificacion ITTG</title>
        <style>
            body {
                width: 100% !important;
                height: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            #MessageViewBody a,
            u + #body a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            /* Hover effect for CTAs because why not */
            .cta:hover {
                background-color: #73add7 !important;
            }
        </style>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Open+Sans");
        </style>
        <style>
            /* add a bit of responsiveness to CTAs on mobile */
            @media only screen and (max-width: 500px) {
                .cta {
                    width: 100% !important;
                    max-width: 80% !important;
                }
            }
        </style>

        <style>
            /* Gradient headline - prog enhancement */
            /* Works in webkit rendered clients i.e. iOS mail and Apple Mail */
            /* Looks nice so why not try it out */
            @supports (-webkit-background-clip: text) and (-webkit-text-fill-color: transparent) and
                (background-image: linear-gradient(to right, rgb(245, 100, 0) 0%, rgb(255, 0, 0) 25%, rgb(181, 0, 125) 50%, rgb(33, 66, 156) 75%, rgb(0, 113, 255) 100%)) {
                h1 > span {
                    background-image: linear-gradient(to right, rgb(245, 100, 0) 0%, rgb(255, 0, 0) 25%, rgb(181, 0, 125) 50%, rgb(33, 66, 156) 75%, rgb(0, 113, 255) 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
            }
        </style>
        <style>
            /* Dark mode - prog enhancement */
            /* Currently only webkit email clients will read this */
            /* Some clients (gmail/outlook.com) will apply their own stuff because they clearly know better than us... */
            :root {
                color-scheme: light dark;
                supported-color-schemes: light dark;
            }

            @media (prefers-color-scheme: dark) {
                body,
                .dark-body {
                    background-color: #2d2d2d !important;
                }

                .dark-container-bg {
                    background-color: #222222 !important;
                }

                .dark-light-font,
                a {
                    color: #ffffff !important;
                }
            }
        </style>
    </head>

    <body class="body" style="background-color: #ececec;">
        <div role="article" aria-roledescription="email" aria-label="Sum stuff 4 u 2 watch" lang="en" style="font-size: 1rem; background-color: #ececec;" class="dark-body">
            
            <div
                style="max-width: 640px; margin: 0 auto; font-family: 'Open Sans', Arial; font-size: 16px; line-height: 1.4; color: #545454; background-color: #ffffff; text-align: center; padding: 30px 0; mso-padding-alt: 0;"
                class="dark-container-bg dark-light-font"
            >
                <!-- logo -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/ITTG_Escudo.png/781px-ITTG_Escudo.png" style="width: 150px; height: 150px;">
                {{-- <img src="/Imagenes/ITTG_Escudo.png" alt="Logo" width="250" /> --}}
                <hr style="border-width: 0; background: #7f7f7f; color: #000; height: 1px; width: 90%;" />

                <!-- headline -->
                <h1 style="margin: 16px 0; font-weight: normal; color: #0051a4;">
                    <span>NOTIFICACION DEL SISTEMA ACADEMIA</span>
                </h1>

                <div style="margin-bottom: 30px;">
                    <!-- pod3    <img src="https://source.unsplash.com/random/640x380" alt="Some birds" style="max-width: 100%"> -->
                    <p style="margin: 30px 20px; text-align: center;">Estimado/a la siguiente <strong>NOTIFICACION</strong> ha sido enviada del sistema de <strong>TITULACION</strong> del ITTG</p>

                    <div>
                        <span style="font-size: 14px;">
                          
                            <br />
                            <br />
                           <p style="margin: 30px 20px; text-align: center;">
                            <span>Informacion:</span> .
                        </span>
                      </p>
                      <span style="font-size: 14px;">
                        
                            <br />
                            <br />
                            Saludos cordiales.
                        </span>
                      
                      
                    </div>
                  <br>

                </div>
                <hr style="border-width: 0; background: #7f7f7f; color: #000; height: 1px; width: 90%;" />
                <!-- legalz -->
                <p style="margin: 20px 20px 0px 20px; font-size: 12px;">
                    TITULACION ITTG<br/>
                    Este sistema fue creado por el Instituto Tecnologico de Tuxtla Gutierrez - TecNM </p>
            </div>

        </div>
    </body>
</html>
