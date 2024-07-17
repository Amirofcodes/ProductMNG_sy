# ProductMNG_sy
First Symfony project

# Système de Gestion de Produits

Ce projet est un Système de Gestion de Produits construit avec Symfony 6. Il permet aux utilisateurs authentifiés d'ajouter de nouveaux produits et de visualiser une liste de tous les produits.

## Fonctionnalités

- Authentification utilisateur (inscription, connexion, déconnexion)
- Ajout de nouveaux produits
- Liste de tous les produits
- Persistance des données dans une base de données MySQL et un fichier JSON

## Structure du Projet

```
productMng/
├── config/
├── public/
├── src/
│   ├── Controller/
│   │   ├── ProductController.php
│   │   ├── RegistrationController.php
│   │   └── SecurityController.php
│   ├── Entity/
│   │   ├── Product.php
│   │   └── User.php
│   ├── Form/
│   │   ├── ProductType.php
│   │   └── RegistrationFormType.php
│   ├── Repository/
│   │   ├── ProductRepository.php
│   │   └── UserRepository.php
│   ├── Security/
│   │   └── AppCustomAuthenticator.php
│   └── Service/
│       └── JsonProductPersister.php
├── templates/
│   ├── product/
│   │   ├── index.html.twig
│   │   └── new.html.twig
│   ├── registration/
│   │   └── register.html.twig
│   ├── security/
│   │   └── login.html.twig
│   ├── base.html.twig
│   └── partials/
│       └── _navbar.html.twig
└── var/
    └── products.json
```

## Composants Clés

1. **Entités** : 
   - `Product.php` : Représente un produit avec ses propriétés.
   - `User.php` : Représente un utilisateur du système.

2. **Contrôleurs** :
   - `ProductController.php` : Gère l'ajout et la liste des produits.
   - `RegistrationController.php` : Gère l'inscription des utilisateurs.
   - `SecurityController.php` : Gère la connexion et la déconnexion.

3. **Formulaires** :
   - `ProductType.php` : Formulaire pour ajouter/éditer un produit.
   - `RegistrationFormType.php` : Formulaire d'inscription.

4. **Services** :
   - `JsonProductPersister.php` : Sauvegarde les produits dans un fichier JSON.

5. **Sécurité** :
   - `AppCustomAuthenticator.php` : Gère le processus d'authentification.

6. **Templates** :
   - Templates Twig pour le rendu des pages produits, connexion, et inscription.

## Fonctionnement

1. Les utilisateurs doivent s'inscrire et se connecter pour accéder au système.
2. Une fois connectés, ils sont redirigés vers la liste des produits.
3. Les utilisateurs peuvent ajouter de nouveaux produits via le formulaire d'ajout.
4. Les produits sont sauvegardés dans la base de données MySQL et dans un fichier JSON.

## Configuration et Exécution du Projet

1. Clonez le dépôt.
2. Installez les dépendances : `composer install`
3. Configurez votre base de données dans le fichier `.env`.
4. Créez la base de données : `php bin/console doctrine:database:create`
5. Appliquez les migrations : `php bin/console doctrine:migrations:migrate`
6. Démarrez le serveur : `php -S localhost:8000 -t public`
7. Accédez à `http://localhost:8000` dans votre navigateur.

## Améliorations Futures

- Implémentation de la modification et de la suppression des produits.
- Ajout de pagination à la liste des produits.
- Amélioration de la validation des données.
- Ajout de tests unitaires et fonctionnels.
- Implémentation d'un système de recherche de produits.
```
