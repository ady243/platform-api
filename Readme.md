
Pour Installer une version spécifique du bundle hautelook/alice-bundle 
qui est compatible avec votre version de PHP et les autres exigences de votre projet.
Par exemple, vous pouvez essayer :

# composer require hautelook/alice-bundle:^2.0 --with-all-dependencies


Pour installer une version spécifique de doctrine/orm qui est compatible avec les autres packages de votre projet.

# composer require doctrine/orm:^2.5 --with-all-dependencies


Sans générer de fichier de migration (qui contient toutes les instructions SQL à 
exécuter sur la base de données, notamment pour le déploiement d'une mise à jour)

# php bin/console doctrine:schema:update -f


La mise à jour de votre base de données en fonction du fichier précédemment généré.

# php bin/console doctrine:migrations:migrate


La création d'un fichier de migration qui va contenir le code SQL a exécuter en fonction de votre SGBD.

# php bin/console make:migration