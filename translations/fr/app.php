<?php
//******************************************************************************
//                                       app.php
// SILEX-PHIS
// Copyright © INRA 2017
// Creation date:  Mar. 2017
// Contact: morgane.vidal@inra.fr, arnaud.charleroy, anne.tireau@inra.fr, pascal.neveu@inra.fr
//******************************************************************************

/**
 * French translations of this application.
 * @link https://www.yiiframework.com/extension/translate
 * @update [Arnaud Charleroy] 24 August, 2018: widgets translations
 */

use app\components\widgets\AnnotationGridViewWidget;
use app\components\widgets\AnnotationButtonWidget;
use app\components\widgets\event\EventButtonWidget;
use app\components\widgets\event\EventGridViewWidget;
use app\components\widgets\PropertyWidget;
use app\components\widgets\concernedItem\ConcernedItemGridViewWidget;
use app\models\yiiModels\YiiEventModel;
use app\models\yiiModels\EventAction;
use app\models\yiiModels\YiiConcernedItemModel;
use app\models\yiiModels\YiiAnnotationModel;

return [
    '{n, plural, =1{Project} other{Projects}}' => '{n, plural, =1{Projet} other{Projets}}',
    '{n, plural, =1{Experiment} other{Experiments}}' => '{n, plural, =1{Expérimentation} other{Expérimentations}}',
    '{n, plural, =1{Group} other{Groups}}' => '{n, plural, =1{Groupe} other{Groupes}}',
    '{n, plural, =1{User} other{Users}}' => '{n, plural, =1{Utilisateur} other{Utilisateurs}}',
    '{n, plural, =1{Person} other{Persons}}' => '{n, plural, =1{Personne} other{Personnes}}',
    '{n, plural, =1{Sensor} other{Sensors}}' => '{n, plural, =1{Capteur} other{Capteurs}}',
    '{n, plural, =1{Vector} other{Vectors}}' => '{n, plural, =1{Vecteur} other{Vecteurs}}',
    '{n, plural, =1{Radiometric Target} other{Radiometric Targets}}' => '{n, plural, =1{Cible Radiométrique} other{Cibles Radiométriques}}',
    '{n, plural, =1{Scientific Object} other{Scientific Objects}}' => '{n, plural, =1{Objet Scientifique} other{Objets Scientifiques}}',
    '{n, plural, =1{Scientific frame} other{Scientific frames}}' => '{n, plural, =1{Cadre scientifique} other{Cadres scientifiques}}',
    '{n, plural, =1{Event} other{Events}}' => '{n, plural, =1{Evénement} other{Evénements}}',
    '{n, plural, =1{Species} other{Species}}' => '{n, plural, =1{Espèce} other{Espèces}}',
    'A radiometric target can be described by the value of its coefficients to the bidirectional reflectance distribution function (see the BRDF ' => 'Une cible radiométrique peut être décrite par la valeur de ses coefficients à la fonction de distribution de la réflectivité bidirectionnelle (voir la ',
    'Add Dataset' => 'Importer un jeu de données',
    'Add Document' => 'Ajouter un document',
    'Add Document Script' => 'Ajouter un script',
    'Add row' => 'Ajouter une ligne',
    'Add Sensors' => 'Ajouter des Capteurs',
    'Add Vectors' => 'Ajouter des Vecteurs',
    'Address' => 'Adresse',
    'Admin' => 'Administrateur',
    'Administrative Contacts' => 'Contacts administratifs',
    'Affiliation' => 'Affiliation',
    'All Descendants' => 'Tous les Descendants',

    // Annotations
    YiiAnnotationModel::LABEL => 'Annotation',
    YiiAnnotationModel::ADD_ANNOTATION_LABEL => '{n, plural, =1{Add an annotation} other{Add annotations}}' => '{n, plural, =1{Ajouter une annotation} other{Ajouter des annotations}}',
    YiiAnnotationModel::CREATION_DATE_LABEL => 'Date de l\'annotation',
    YiiAnnotationModel::MOTIVATED_BY_LABEL  => 'Motivée par',
    YiiAnnotationModel::TARGETS_LABEL  => 'Entités ciblées',
    AnnotationButtonWidget::ADD_ANNOTATION_LABEL => 'Ajouter annotation',
    AnnotationGridViewWidget::LINKED_ANNOTATIONS => "Annotations liées",
    AnnotationGridViewWidget::NO_LINKED_ANNOTATIONS => "Aucune annotation liée",
    'Annotations' => 'Annotations',

    'Acquisition session template' => 'Gabarit de session d\'aquisition',
    'Attenuator Filter' => 'Filtre Atténuateur',
    'Available' => 'Disponible',
    'Availability' => 'Disponibilité',
    'Brand' => 'Marque',
    'BRDF coefficient P1' => 'Coefficient BRDF P1',
    'BRDF coefficient P2' => 'Coefficient BRDF P2',
    'BRDF coefficient P3' => 'Coefficient BRDF P3',
    'BRDF coefficient P4' => 'Coefficient BRDF P4',
    'Campaign' => 'Campagne',
    'Carpet' => 'Moquette',
    'Characterize Sensor' => 'Caractériser un Capteur',
    'Characterize' => 'Caractériser',
    'Circular' => 'Circulaire',
    'Contact' => 'Contact',
    'Contact / Help' => 'Contact / Aide',
    'Column' => 'Colonne',
    'Columns' => 'Colonnes',
    'Comment' => 'Commentaire',

    // Concerned items
    'Concerns' => 'Concerne',
    'Concerned item' => 'Élément concerné',
    'Concerned item type' => 'Type de l\'élément concerné',
    'Concerned item URI' => 'URI de l\'élément concerné',
    'Concerned items URIs' => 'URIs des éléments Concernés',
    YiiConcernedItemModel::URI_LABEL => 'URI',
    YiiConcernedItemModel::RDF_TYPE_LABEL => 'Type',
    YiiConcernedItemModel::LABELS => 'Alias',
    ConcernedItemGridViewWidget::CONCERNED_ITEMS_LABEL => 'Eléments concernés',
    ConcernedItemGridViewWidget::NO_CONCERNED_ITEMS_LABEL => 'Aucun élément concerné',

    'Concerned Experimentations' => 'Expérimentations Concernées',
    'Concerned Projects' => 'Projets concernés',
    'Creation Date' => 'Date de Création',
    'Creator' => 'Auteur',
    'Crop Species' => 'Espèce',
    'Data' => 'Données',
    'Data file' => 'Fichier de données',
    'Dataset' => 'Jeux de données',
    'Dataset Creation Date' => 'Données Insérées',
    'Date' => 'Date',
    'Date End' => 'Date de fin',
    'Date Of Last Calibration' => 'Date de Dernier Étalonnage',
    'Date Of Purchase' => 'Date d\'Achat',
    'Date Start' => 'Date de début',
    'Description' => 'Description',
    'Diameter' => 'Diamètre',
    'Diameter (m)' => 'Diamètre (m)',
    'Document Type' => 'Type du Document',
    'Download' => 'Télécharger',
    'Download Search Result' => 'Télécharger le Résultat de la Recherche',
    'Download Template' => 'Télécharger le Gabarit',
    'Download Example' => 'Télécharger un fichier d\'example',
    'Email' => 'Adresse email',
    'Entity' => 'Entité',
    'Enter date of last calibration' => 'Saisir la date de dernier étalonnage',
    'Enter date of purchase' => 'Saisir la date d\'achat',
    'Enter in service date' => 'Saisir la date de mise en service',

    // Event
    YiiEventModel::EVENT_LABEL => "Evénement",
    YiiEventModel::EVENTS_LABEL => "Evénements",
    YiiEventModel::URI_LABEL => "URI",
    YiiEventModel::TYPE_LABEL => "Type",
    YiiEventModel::DATE_LABEL => "Date",
    YiiEventModel::CONCERNED_ITEMS_LABEL => "Eléments concernés",
    EventAction::EVENT_UNUPDATABLE_DUE_TO_UNUPDATABLE_PROPRTY_LABEL =>
        "L'événement ne peut être mis à jour que via le web service car une de "
        . "ses propriétés spécifiques n'est actuellement pas compatible avec la webapp.",
    EventAction::PROPERTY_HAS_PEST_LABEL => "Ravageur",
    EventAction::PROPERTY_FROM_LABEL => "Depuis",
    EventAction::PROPERTY_TO_LABEL => "Jusqu'à",
    EventAction::PROPERTY_TYPE_LABEL => "Type de la propriété",
    EventButtonWidget::ADD_EVENT_LABEL => 'Ajouter événement',
    EventGridViewWidget::EVENTS_LABEL => "Événements",
    EventGridViewWidget::NO_EVENT_LABEL => "Pas d'événement",

    'Error' => 'Erreur',
    'Errors while creating user' => 'Erreurs lors de la création de l\'utilisateur',
    'Experimental Organization' => 'Organisation expérimentale',
    'Experiment Modalities' => 'Modalités Expérimentales',
    'File Extension' => 'Extension du Fichier',
    'Family Name' => 'Nom',
    'Field' => 'Champ',
    'File' => 'Fichier',
    'File Informations' => 'Informations sur le Fichier',
    'File Path' => 'Chemin du Fichier',
    'First Name' => 'Prénom',
    'Financial Name' => 'Nom du financeur',
    'Financial Support' => 'Support financier',
    'Focal Length' => 'Distance Focale',
    'Height' => 'Hauteur',
    'Generate Layer' => 'Générer la Couche',
    'Generate Map' => 'Générer la Carte',
    'Generated URI' => 'URI générée',
    'Geographic Location' => 'Localisation géographique',
    'Geometry' => 'Géométrie',
    'Groups' => 'Groupes',
    'Guest' => 'Invité',
    'Hemisphericals' => 'Hémisphériques',
    'Images Visualization' => 'Visualisation d\'Images',
    'In Service Date' => 'Date de Mise en Service',
    'Insertion status' => 'Statut d\'insertion',
    'Internal Label' => 'Label Interne',
    'Keywords' => 'Mots clés',
    'Labels' => 'Labels',
    'Laboratory Name' => 'Nom du laboratoire',
    'Language' => 'Langue',
    'Length' => 'Longueur',
    'Length (m)' => 'Longueur (m)',
    'Level' => 'Niveau',
    'Linked Agronomical Objects' => 'Objets Agronomiques Liés',
    'Linked Documents' => 'Documents Liés',
    'Line' => 'Ligne',
    'Linked Document(s)' => 'Document(s) lié(s)',
    'Login' => 'Connexion',
    'Logout' => 'Déconnexion',
    'Map Visualization' => 'Visualisation Cartographique',
    'Material' => 'Matière',
    'Members' => 'Membres',
    'Method' => 'Méthode',
    'Missing method.' => 'La méthode est vide.',
    'Missing trait.' => 'Le trait est vide.',
    'Missing unit.' => 'L\'unité est vide.',
    'Model' => 'Modèle',
    'Name' => 'Nom',
    'No' => 'Non',
    'No item concerned' => 'Aucun élément concerné',
    'No Specific Property' => 'Aucune Propriété Spécifique',
    'Objective' => 'Objectif',
    'On selected plot(s)' => 'Sur les micro parcelles sélectionnées',
    'Ontologies References' => 'Références vers des Ontologies',
    'Organism' => 'Organisme',
    'Owner' => 'Propriétaire',

    // Property
    PropertyWidget::NO_PROPERTY_LABEL => 'Aucune propriété spécifique',
    'Password' => 'Mot de passe',
    'Painting' => 'Peinture',
    'Person In Charge' => 'Responsable',
    'Phenotype(s) Visualization' => 'Visualisation de phénotypes',
    'Phone' => 'Téléphone',
    'Pixel Size' => 'Taille de Pixel',
    'Place' => 'Lieux',
    'Private Access' => 'Accès Privé',
    'Project Coordinators' => 'Coordinateurs du projets',
    'Project Type' => 'Type du projet',
    'Specific properties' => 'Propriétés spécifiques',
    'Provenance comment' => 'Commentaire de la provenance',
    'Provenance (URI)' => 'Provenance (URI)',
    'Public Access' => 'Accès Public',
    'Quantitative Variable' => 'Variable Quantitative',
    'Real number, String or Date' => 'Nombre réel, Chaine de caractère ou Date',
    'Rectangular' => 'Rectangulaire',
    'Reference URI' => 'URI de Référence',
    'Reflectance value' => 'Valeur de la réflectance',
    'Register an event' => 'Enregistrer un événement',
    'Related References' => 'Références Externes',
    'Relation' => 'Relation',
    'Relation Type' => 'Type de Relation',
    'Relation Type Labels' => 'Labels du Type de Relation',
    'Remove last row' => 'Supprimer la dernière ligne',
    'Replication' => 'Répétition',
    'Scientific Contacts' => 'Contacts scientifiques',
    'Scientific Supervisors' => 'Superviseurs scientifiques',
    'Select method alias...' => 'Sélectionnez l\'alias de la méthode',
    'Select trait alias...' => 'Sélectionnez l\'alias du trait',
    'Select type...' => 'Sélectionez le type',
    'Select unit alias...' => 'Sélectionnez l\'alias de l\'unité',
    'Sensor Position' => 'Position du Capteur',
    'Sensor Profile' => 'Profil du Capteur',
    'Serial Number' => 'Numéro de Série',
    'Server File Path' => 'Lien du Fichier sur le Serveur',
    'Shape' => 'Forme',
    'Shooting Configuration' => 'Configuration de prise de vue',
    'Show Images' => 'Afficher les Images',
    'Spectral hemispheric reflectance file' => 'Fichier de réflectance hémisphérique spectrale',
    'Spectralon' => 'Spectralon',
    'Status' => 'Statut',
    'Subproject Type' => 'Type de sous projet',
    'Subproject Of' => 'Sous-projet de',
    'Team' => 'Équipe',
    'Technical Supervisors' => 'Superviseurs techniques',
    'Timezone offset' => 'Fuseau horaire',
    'Title' => 'Titre',
    'Tools' => 'Outils',
    'Trait' => 'Trait',
    'twitter' => 'twitter',
    'Type' => 'Type',
    'Type Labels' => 'Type Labels',
    'Unavailable' => 'Indisponible',
    'Unit' => 'Unité',
    'Update' => 'Modifier',
    'Value' => 'Valeur',
    'Value Labels' => 'Labels de la Valeur',
    'Variable' => 'Variable',
    'Variable Label' => 'Label de la Variable',
    'Variable Definition' => 'Définition de la variable',
    'Variety' => 'Variété',
    'Verification Code' => 'Code de vérification',
    'View / Download' => 'Visualiser / Télécharger',
    'Was Generated By' => 'Généré Par',
    'Wavelength' => 'Longueur d\'onde',
    'Wavelength (nm)' => 'Longueur d\'onde (nm)',
    'Website' => 'Site web',
    'Width' => 'Largeur',
    'Width (m)' => 'Largeur (m)',
    'wikipedia page' => 'page wikipédia',
    'Yes' => 'Oui',
    'Back to sensor view' => 'Retour à la vue du capteur',
    'Sensor Data Visualization' => 'Visualisation des données du capteur',
    'Update event' => 'Modifier l\'événement',
    'Update sensors' => 'Mise à jour des capteurs',
    'Update measured variables' => 'Mise à jour des variables mesurées',
];
