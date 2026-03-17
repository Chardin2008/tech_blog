TechBlog - Plateforme de Blog Symfony
Ce projet est une application de blog développée avec le framework Symfony. Elle permet la publication d'articles technologiques et la gestion des interactions utilisateurs via un système de commentaires dynamique.

Caractéristiques Techniques
Architecture MVC : Separation entre la logique des controleurs, les entites et l'affichage avec Twig.

Gestion de Base de Donnees : Utilisation de Doctrine ORM pour la persistance des donnees.

Relations SQL : Mise en place d'une relation One-to-Many entre les articles et les commentaires.

Cycle de Vie des Entites : Utilisation des Lifecycle Callbacks PrePersist pour l'horodatage automatique des publications.

Interface UI : Design moderne base sur CSS3 avec utilisation de variables, Flexbox et effets de flou pour une lecture optimisee.

Structure du projet
src/Entity/ : Definition des objets metier Post, Category et Comment.

src/Controller/ : Gestion des routes et de la logique de traitement.

src/Form/ : Formulaires Symfony securises et types.

templates/ : Structure des pages et héritage de templates Twig.

public/css/ : Feuilles de style personnalisees.

Installation et Configuration
Installation des dependances :
composer install

Configuration de la base de donnees :
Modifier le fichier .env.local avec vos identifiants SQL, puis lancer :
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

Lancement du serveur :
symfony server:start

Auteur
Davidson Chardin Poutcheu Tchoga
Etudiant en Bachelor 2 Informatique - Keyce Academy Toulouse.