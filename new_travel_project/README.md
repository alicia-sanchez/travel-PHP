# TRAVEL

TRAVEL est un projet réalisé dans le cadre de ma formation. Il s'agit d'un site web d'agence de voyage où les utilisateurs peuvent s'inscrire, se connecter, visualiser les voyages coup de cœur, voir les voyages disponibles selon le pays sélectionné, et contacter l'agence via un formulaire de contact. Les administrateurs ont également accès à un calendrier pour gérer les réservations de voyages.

## 🚀 Contexte du projet
Ce projet vise à évaluer nos compétences en PHP. Les contraintes suivantes ont été prises en compte :
- Utilisation d'une structure de dossiers et de fichiers organisée.
- Absence d'utilisation de frameworks.
- Utilisation d'une base de données MySQL pour stocker les informations.
- Utilisation de requêtes préparées pour se protéger contre les injections SQL.
- Utilisation de BindValue à la place de BindParam pour lier les valeurs aux requêtes.

## 🧠 Réalisation du projet
Pour mener à bien ce projet, j'ai suivi plusieurs étapes :

1. Création d'un modèle conceptuel de données (MCD) et d'un modèle logique de données (MLD), puis exportation vers PhpMyAdmin pour la création de la base de données.
2. Remplissage de la base de données.
3. Mise en place de la structure front-end du site.
4. Création d'une connexion au serveur avec PDO pour interroger la base de données.
5. Création des fonctionnalités en PHP.

### Réalisations majeures :
- **Formualire d'Inscription / Connexion et Gestion de Sessions** : J'ai mis en place un système d'inscription et de connexion qui permet aux utilisateurs de créer un compte et de se connecter. Des sessions sont utilisées pour gérer les utilisateurs connectés ainsi que l'Admin.
- **Affichage des Pays, des Villes et des d'autres informations** : J'ai développé une fonctionnalité permettant d'afficher les pays, les villes et leurs informations associées en utilisant des requêtes SQL pour récupérer les données de la base de données.
- **Formulaire de Contact** : J'ai créé un formulaire de contact, qui permet aux utilisateurs de contacter l'agence de voyage. le formulaire de contact apparait quand l'utilisateur est connecté.
- **Calendrier** : J'ai intégré un calendrier seulement pour l'admin pour afficher les informations liées aux destinations. Cependant, il n'est pas fonctionnel en local.

## 🤕 Difficultés Rencontrées :
- **Formulaire d'Inscription** : J'ai rencontré des difficultés liées au nommage des variables et à la validation des données du formulaire d'inscription. Cela a nécessité des ajustements pour garantir une saisie correcte des informations utilisateur. Les conditions de validation ont été un défi supplémentaire.
- **Requêtes SQL** : La gestion de requêtes SQL, notamment pour les jointures entre les tables, la récupération de listes d'éléments et la récupération de détails par ID, a été un peu complqiué..

- Ce projet a été une bonne expérience pour moi et m'a beaucoup aidé à approfondir ma compréhension de PHP.. C'etait un gros défi qui m'a fait passer par toutes sortes d'émotions, des moments de frustration ++  à des moments de satisfaction. 
Mais bon j'aime beaucoup trop le front-end pour aimer le PHP.