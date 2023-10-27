<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel et MVC 💯 - Développement d'une Plateforme d'Annonces de Biens d'Occasion avec Interface d'Administration sur Laravel 👨🏼‍💻

_Lisez attentivement le Readme avant de commencer toute manipulation !_ ✌️

## Prérequis 👨🏼‍🏫

- [PHP](https://www.php.net/) (version 8.2.11)
- [Composer](https://getcomposer.org/) (version 2.6.5)
- [Node.js](https://nodejs.org/en) (v18.18.0 ou supérieur)
- [Laravel Valet](https://laravel.com/docs/10.x/valet#main-content)
- [Git](https://git-scm.com/)
- [MySQL](https://dev.mysql.com/downloads/mysql/) ou un autre système de gestion de base de données

## Étapes d'Installation

1. **Cloner le Projet**

Ouvrez un terminal et exécutez la commande suivante pour cloner le projet depuis le dépôt Git :

   ```shell
   git clone https://github.com/Handcrafted-Web-Development/classified-ads.git
   ```

2. **Installer les Dépendances**

Placez-vous dans le répertoire du projet et exécutez la commande suivante pour installer les dépendances avec Composer :

   ```shell
   composer install
   npm install
   ```

3. **Configurer l'Environnement**

Dupliquez le fichier `.env.example` en le renommant en `.env` :

   ```shell
   cp .env.example .env
   ```
Ouvrez le fichier .env et configurez les variables d'environnement, telles que la connexion à la base de données (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4. **Générer la Clé d'Application**

Exécutez la commande suivante pour générer la clé d'application :

   ```shell
   php artisan key:generate
   ```

5. **Migrer la Base de Données**

Exécutez les migrations pour créer les tables de base de données :

   ```shell
   php artisan migrate
   ```

6. **Initialisation de Laravel avec Laravel Valet**

Après avoir installer Laravel Valet sur sa machine, lancer les commandes suivantes :

   ```shell
   valet link
   valet start
   ```
Le site sera accessible à l'adresse http://classified-ads.test dans votre navigateur.

7. **Lancer Vite.js**

Vous pouvez maintenant lancer le serveur vite.js :

   ```shell
   npm run dev
   ```

Bon développement ! 🍀
