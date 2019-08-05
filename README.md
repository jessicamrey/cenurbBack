# cenurbBack

Pasos previos:

   1- Instalar MySQL
    
    sudo apt-get install mysql-server mysql-common mysql-client
    Se configurará un usuario con nombre y contraseña para poder acceder a MySQL
    
   2- Descargar phpMyAdmin.
   
    Se moverá el directorio a /var/www/html/
   
   3. Accedemos a phpMyAdmin desde http//localhost/phpmyadmin/
    
    En el menú de la izquierda se seleccionará "Nueva" y se le dará un nombre al nuevo esquema.
    
   4. Configurar el host virtual.
        
     /etc/apache2/sites-avaliables configurar censosurbanos
    
      <VirtualHost *:80>
        ServerName domain.tld
        ServerAlias www.domain.tld

        DocumentRoot /var/www/project/public
        <Directory /var/www/project/public>
            AllowOverride All
            Order Allow,Deny
            Allow from All
        </Directory>

        # uncomment the following lines if you install assets as symlinks
        # or run into problems when compiling LESS/Sass/CoffeeScript assets
        # <Directory /var/www/project>
        #     Options FollowSymlinks
        # </Directory>

        ErrorLog /var/log/apache2/project_error.log
        CustomLog /var/log/apache2/project_access.log combined
        </VirtualHost>
    
    Dar permisos de apache
    
        sudo chgrp www-data public/.htaccess
        sudo chmod 775 public/.htaccess
	
    Activamos los modulos de php
    	
        sudo a2enmod headers
        sudo a2enmod rewrite

        
Para empezar a trabajar con un proyecto Symfony->

    cd projects/ 
    git clone...

    cd my-project/   
    composer install

 ·htaccess ->
 
    - Editar conforme a necesidades del servidor
 
 .env ->

    DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

    - Siendo db_user, db_password y db_name el nombre de usuario y su contraseña de acceso
        junto con el nombre del esquema.
    - Variables CLIENT_ID y CLIENT_SECRET creados en el siguiente paso.
    
    BASE_URL =configurar path adecuado al servidor apuntando a la carpeta public.

.phpunit.xml ->

    - Misma variable DATABASE_URL que en .env
    - Variables usadas en los tests de unidad
    - Variables CLIENT_ID y CLIENT_SECRET creados en el siguiente paso.

Siguientes pasos.Aplicar los comandos:

doctrine:schema:create ->

    - Para crear el esquema

php bin/console fos:oauth-server:create-client --redirect-uri="api/login" --grant-type="password"

    - Se ejecuta desde la consola
    - Creará un nuevo cliente del que tendremos que guardar el client_id y client_secret.
    - Estos id's se utilizarán en el Front para obtener un api token
    - Para utilizar el CLIENT_ID se deberá aplicar concatenando su id con el codigo de la base de datos (1 por ejemplo),
        con "_" y después el client__id. ({id}_CLIENT_ID). Si cogemos el CLIENT_ID devuelto en la soncola, ya viene en el             formato       correcto
