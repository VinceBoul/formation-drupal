# Formation Drupal

## Tags

### V1.0.0 - Installation du projet
  * Lancer `composer install`
  * Créer la base données via Phpmyadmin avec l'encodage `ut8_general_ci`
  * Installer le site : `drush si`
    * Suivre les instructions
    * **Mettre de côté le mot de passe admin généré**
  * Lancer le site : `drush rs`


### V1.0.1 - Installation Admin Toolbar
* Mettre à jour les dépendances : `composer u`
* Activer le module : `drush en admin_toolbar admin_toolbar_tools
   admin_toolbar_links_access_filter`
* Vider le cache : `drush cr`
