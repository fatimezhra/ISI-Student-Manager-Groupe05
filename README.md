# ISI Student Manager – Groupe 05

Application web de gestion des étudiants et des projets, développée en équipe avec Git et GitHub (branches, Pull Requests, relectures croisées, résolution de conflits).

Université Cadi Ayyad – Faculté des Sciences Semlalia, Marrakech – ISI-S6.

**Dépôt :** https://github.com/fatimezhra/ISI-Student-Manager-Groupe05

## Membres du groupe

| Membre | Compte GitHub | Contribution |
|---|---|---|
| Khalil Fatima Ezzahra | [fatimezhra](https://github.com/fatimezhra) | Propriétaire du dépôt, page d'accueil, configuration, intégration |
| Zainab Zahid | [zainab20zahid-hash](https://github.com/zainab20zahid-hash) | Page des étudiants |
| Fatima Ezzahra Baali | [fatimazahrabaali](https://github.com/fatimazahrabaali) | Version 3.0 (étudiant C) |
| Aziza Halmaouy | [aziza-halmaouy](https://github.com/aziza-halmaouy) | Mise en forme (`style.css`) |

## Prérequis

- [Git](https://git-scm.com/)
- [PHP 8.0 ou supérieur](https://www.php.net/downloads) (ou XAMPP / WAMP)
- Un navigateur web
- Une clé SSH configurée sur GitHub (ou utiliser le clonage HTTPS)

## Installation

```bash
git clone git@github.com:fatimezhra/ISI-Student-Manager-Groupe05.git
cd ISI-Student-Manager-Groupe05
```

Clonage en HTTPS si SSH n'est pas configuré :

```bash
git clone https://github.com/fatimezhra/ISI-Student-Manager-Groupe05.git
```

## Exécution

Depuis le dossier du projet :

```bash
php -S localhost:8000
```

Puis ouvrir dans le navigateur :

| Page | URL |
|---|---|
| Accueil | http://localhost:8000/index.php |
| Liste des étudiants | http://localhost:8000/etudiants.php |
| Liste des projets | http://localhost:8000/projets.php |

Avec XAMPP ou WAMP : copier le dossier dans `htdocs` (XAMPP) ou `www` (WAMP), puis ouvrir `http://localhost/ISI-Student-Manager-Groupe05/`.

Pour arrêter le serveur : `Ctrl + C` dans le terminal.

## Structure du projet

| Fichier | Rôle |
|---|---|
| `index.php` | Page d'accueil et navigation |
| `etudiants.php` | Liste des étudiants (nom, filière) |
| `projets.php` | Liste des projets (projet, responsable) |
| `style.css` | Mise en forme commune : navigation, tableaux |
| `configuration.txt` | Informations du projet : nom, version, responsable |
| `README.md` | Documentation du projet |

## Workflow Git de l'équipe

1. Ne jamais committer directement sur `main`.
2. Créer une branche par tâche : `feature/...` pour une fonctionnalité, `fix/...` pour une correction.
3. Pousser la branche et ouvrir une Pull Request vers `main`.
4. Faire relire la Pull Request par un autre membre (commentaire dans *Files changed*, puis *Submit review*).
5. Fusionner, puis mettre à jour son dépôt local :

```bash
git switch main
git pull origin main
```

En cas de conflit : fusionner `main` dans sa branche, résoudre les marqueurs `<<<<<<<` / `>>>>>>>`, puis committer et pousser.

## Historique et branches

```bash
git log --graph --oneline --all --decorate
git branch -a
```

Sur GitHub : onglet **Insights → Network**.

## Captures d'écran

### Page d'accueil
![Page d'accueil](images/accueil.jpg)

### Liste des étudiants
![Liste des étudiants](images/etudiants.jpg)

### Liste des projets
![Liste des projets](images/projets.jpg)

## Tâches réalisées

- [x] Initialisation du dépôt et page d'accueil
- [x] Page des étudiants (`etudiants.php`)
- [x] Mise en forme avec `style.css` (tableaux et navigation)
- [x] Page des projets (`projets.php`)
- [x] Fichier `configuration.txt` en version 3.0 – Version collaborative
- [x] Résolution de conflits entre branches
- [x] Pull Requests relues et fusionnées sur `main`
- [x] Documentation (`README.md`)
