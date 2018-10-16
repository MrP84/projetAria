< PROJET ARIA />
================
********************************************************************************************************************************

Préambule
----------
## Objectifs


* Fournir une documentation exhaustive sur les attributs ARIA en ligne en français;
* Permettre à l’utilisateur de récupérer des fragments de code complets;
* Proposer un “mini jeu” pour que l’utilisateur puisse tester ses connaissances;
* Informer sur le principe du WAI (Web Accessibility Initiative);
* Permettre à l’utilisateur de laisser un commentaire dans la documentation sur le principe des notes contributives;
* Proposer une interface de test via l’utilisation d’un synthétiseur vocal en ligne (doc + jeu);
* Créer des liens vers des associations, des logiciels de synthèse vocale;
* Récupérer les infos de la W3C via une API (si faisable, dans Informations).

## Architecture

1. Index

L’index sera constitué de 3 blocs cliquables menant vers les pages désirées.

2. Documentation

La page “Documentation” sera constituée d’un aside contenant les différents thèmes ainsi qu’un moteur de recherche dynamique. Le bloc principal affichera par défaut les premiers attributs par ordre alphabétique puis la documentation souhaitée une fois validée dans le formulaire de recherche. Un espace “Commentaires” sera positionné sous la documentation afin que les utilisateurs puissent “mettre à jour” en open source les infos de la doc.

3. Mini-jeu

Sur le principe de CodePen ou Codecademy, la possibilité est offerte à l’utilisateur de saisir du code qui générera une animation en cas de bonnes réponses. Une progression sera à prévoir.

4. Informations

Si une API W3C est disponible, charger les dernières informations en lien avec le WAI ;
Sinon, on fournit une traduction du projet WAI du W3C complète avec liens vers le W3C

5. Nav et Footer

La navigation sera commune aux 3 pages (à l’exception de l’index).

On trouvera dans le footer des liens utiles vers des sites institutionnels, des associations, des outils de synthèse vocale à télécharger et les logos habituels (Facebook, Twitter, Github,...).

Technologies nécessaires
------------------------

## Langages de programmation et structuration

HTML : pour le squelette du site.
CSS / Bootstrap / SASS : pour la mise en forme.
JS / JQuery : pour les animations et les requêtes AJAX.
PHP : pour la gestion dynamique du site.
MySQL : pour la gestion des bases de données.

L’ensemble des codes nécessaires s’inscriront dans une architecture MVC.

## Ressources

Un repo GitHub pour versionner le code. Ce repo sera laissé sur GitHub à la fin du projet.

Un hébergement type “PRO” sur OVH pour bénéficier d’une BDD de grande capacité. FileZilla pour transférer les fichiers.

Le [SLACK](https://amg-swisscorp.slack.com/messages/CD8RA78N7) pour communiquer à distance. Google [Drive](https://drive.google.com/drive/folders/1gBRDQPKMWGLy_TXTak_dn4VqSQ_wEdrT) et Google Docs pour permettre un travail collaboratif.

Agenda
-------

## Travaux préparatoires

* Création du Repo Git 
* Architecture des dossiers personnels pour le MVC
* Installation des modules SASS et Composer.

## Répartition

A chaque phase, tous les intervenants participent à hauteur de leurs compétences.

## Découpage en étapes

1. R&D sur la partie “Documentation” : → 02/11/2018
* Recherche, traduction et phase de test sur les attributs présents sur MDN ;
* Moteur de recherche ;
* Requête AJAX vers la table “Infos” et SQL vers la table “Comments”.
2. R&D sur le “Mini-jeu” : → 16/11/2018
* Éditeur de texte sous forme d’un <textarea> validé par RegEx ;
* Requête SQL vers la base des questions avec affichage aléatoire ;
* Animation en cas de succès;
* Plan B : un “simple” quiz.
3. R&D sur les informations : → 30/11/2018
* API existante vers W3C ou ailleurs ;
* Traduction si nécessaire.
4. Développement de l’index et des templates nav et footer.
5. Design, mise en forme et responsive web design.

************************************************************************************************************************************
