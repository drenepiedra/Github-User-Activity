# 🎉 GitHub User Activity Fetcher 🎉

🌐 roadmap.sh : https://roadmap.sh/projects/github-user-activity

Este es un proyecto de Laravel que permite obtener la actividad reciente de un usuario en GitHub utilizando la API de GitHub. El objetivo de este proyecto es proporcionar una herramienta sencilla para monitorizar eventos de usuarios de GitHub.

## 📋 Requisitos

- 🐘 PHP >= 8.3
- 📦 Composer
- 🌐 Laravel 11

## 🚀 Instalación

1. **Clona el repositorio:**
   ```sh
   git clone https://github.com/tuusuario/github-user-activity.git
   cd github-user-activity

## 🚀 Instalar dependencias 

    composer install

2.(Opcional) Si estás utilizando XAMPP o WAMP en Windows, asegúrate de tener configurado el archivo cacert.pem:
    - Descarga el archivo cacert.pem de https://curl.se/ca/cacert.pem.
    - Agrega las siguientes líneas en tu archivo php.ini:

    curl.cainfo = "ruta/a/cacert.pem"
    openssl.cafile = "ruta/a/cacert.pem"
    
3.Ejecute el siguiente comando para obtener la informacion 

    php artisan fetch:github-user-activity {username}
