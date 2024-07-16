# ProductMNG_sy
First Symfony project

# Système de Gestion de Produits

Ce projet est un simple Système de Gestion de Produits construit avec Symfony 6. Il permet aux utilisateurs d'ajouter de nouveaux produits, qui sont ensuite sauvegardés à la fois dans une base de données MySQL et dans un fichier JSON.

## Structure du Projet

Le projet suit la structure de répertoire standard de Symfony :

```
productMng/
├── config/
├── public/
├── src/
│   ├── Controller/
│   │   └── ProductController.php
│   ├── Entity/
│   │   └── Product.php
│   ├── Form/
│   │   └── ProductType.php
│   └── Service/
│       └── JsonProductPersister.php
├── templates/
│   └── product/
│       └── new.html.twig
└── var/
    └── products.json
```

## Composants Clés

1. **Entité** : `Product.php`
   - Représente un produit avec les propriétés : id, designation, univers et prix.
   - Utilise les annotations Doctrine ORM pour le mapping de la base de données.

2. **Formulaire** : `ProductType.php`
   - Définit la structure du formulaire pour ajouter un nouveau produit.

3. **Contrôleur** : `ProductController.php`
   - Gère la logique d'affichage du formulaire et de traitement des soumissions.

4. **Service** : `JsonProductPersister.php`
   - Service personnalisé pour sauvegarder les données du produit dans un fichier JSON.

5. **Template** : `new.html.twig`
   - Template Twig pour le rendu du formulaire "Ajouter un Nouveau Produit".

## Fonctionnement

1. Lorsqu'un utilisateur navigue vers `/product/new`, la méthode `ProductController::new()` est appelée.
2. Cette méthode crée un nouvel objet `Product` et un formulaire basé sur `ProductType`.
3. Le formulaire est rendu en utilisant le template `new.html.twig`.
4. Lorsque le formulaire est soumis et valide :
   - Le produit est persisté dans la base de données en utilisant Doctrine ORM.
   - Le produit est également sauvegardé dans un fichier JSON en utilisant `JsonProductPersister`.
   - Un message flash de succès est défini.
   - L'utilisateur est redirigé vers le formulaire.

## Configuration et Exécution du Projet

1. Clonez le dépôt.
2. Installez les dépendances :
   ```
   composer install
   ```
3. Configurez votre base de données dans le fichier `.env`.
4. Créez la base de données :
   ```
   php bin/console doctrine:database:create
   ```
5. Créez le schéma :
   ```
   php bin/console doctrine:schema:update --force
   ```
6. Démarrez le serveur PHP intégré :
   ```
   php -S localhost:8000 -t public
   ```
7. Naviguez vers `http://localhost:8000/product/new` dans votre navigateur web.

## Fichiers Clés et Leurs Objectifs

- `src/Entity/Product.php` : Définit l'entité Product et ses propriétés.
- `src/Form/ProductType.php` : Définit le formulaire pour ajouter un nouveau produit.
- `src/Controller/ProductController.php` : Gère la logique d'affichage et de traitement du formulaire.
- `src/Service/JsonProductPersister.php` : Gère la sauvegarde des données du produit dans un fichier JSON.
- `templates/product/new.html.twig` : Le template pour la page "Ajouter un Nouveau Produit".
- `config/services.yaml` : Configure les services, y compris `JsonProductPersister`.

## Améliorations Futures

- Ajouter une page de listing pour voir tous les produits.
- Implémenter les fonctionnalités de modification et de suppression.
- Ajouter une validation à l'entité Product.
- Améliorer la gestion des erreurs et le retour d'information à l'utilisateur.

```
