# Requisitos de software

    - PHP ^8.2  
    - Composer ^2.8  
    - Laravel Installer ^5.12 
    - Node JS y npm (Opcional) 

## Chequeo de versiones
> en una terminal podemos escribir el siguiente comando:

    php -v  

    composer --version

    laravel installer --version

    node -v

    npm -v


## actualizaciones
> puedo actualizar mi multi instalador de Xampp, Mamp, Laragon en caso de que no
> tenga una version de php actual
 
> Respecto de Composser desde una terminal podemos utilizar este comando

    composer self-update --stable 

> para actualizar el Instalador de Laravell podemos

    composer global require laravel/laravel

> una opción un poco más robusta

    composer global update laravel/laravel  

> si no llegar a actualizarse vamos a forzar una reinstalación

    composer global remove laravel/laravel  
    composer global require laravel/laravel  


### Si queremos hacer un fresh install podemos utilizar estos métodos.

```macOS:

    /bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```     

```gnu/linux:

    /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```     

```Windows PowerShell: 
    
    # Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```    

### Alternativa  (fresh insstall)
    Herd  <https://herd.laravel.com/>

### Node
> También podrías llegar a necesitar instalado Node JS con NPM o Bun, asique ir a:

    >  https://nodejs.org/es/download
    
  >  Seleccionar el sistema Operativo (En este caso Windows) y el paquete instalador

> Para Instalar Node JS y npm desde la terminal seguir estos pasos:
  
> Descarga e instala Chocolatey:
  
    > powershell -c "irm https://community.chocolatey.org/install.ps1|iex"
  
> Descarga e instala Node JS y npm integrado:
    
    > choco install nodejs-lts --version="22"

> Verifica la versión de Node.js:
    
    > node -v 

  > Debería mostrar "v22.18.0 ó la que hayas instalado en el momento"

> Verifica versión de npm:
    
    > npm -v

  > Deberia mostrar "10.9.3 ó la que hayas instalado en el momento"


