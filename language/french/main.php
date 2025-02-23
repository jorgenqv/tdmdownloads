<?php

declare(strict_types=1);
/**
 * Tdmdownloads
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */
// index.php
define('_MD_TDMDOWNLOADS_INDEX_BLDATE', 'Téléchargements récents :');
define('_MD_TDMDOWNLOADS_INDEX_BLNAME', 'Résumé');
define('_MD_TDMDOWNLOADS_INDEX_BLRATING', 'Fichiers les mieux notés :');
define('_MD_TDMDOWNLOADS_INDEX_BLPOP', 'Fichiers les plus téléchargés :');
define('_MD_TDMDOWNLOADS_INDEX_DLNOW', 'Télécharger maintenant !');
define('_MD_TDMDOWNLOADS_INDEX_LATESTLIST', 'Derniers fichiers');
define('_MD_TDMDOWNLOADS_INDEX_NEWTHISWEEK', 'Nouveautés de la semaine');
define('_MD_TDMDOWNLOADS_INDEX_POPULAR', 'Populaires');
define('_MD_TDMDOWNLOADS_INDEX_UPTHISWEEK', 'Mises à jour de cette semaine');
define('_MD_TDMDOWNLOADS_INDEX_SCAT', 'Sous catégories : ');
define('_MD_TDMDOWNLOADS_INDEX_SUBMITDATE', 'Date de soumission :');
define('_MD_TDMDOWNLOADS_INDEX_SUBMITTER', 'Soumis par : ');
define('_MD_TDMDOWNLOADS_INDEX_THEREARE', 'Il y a <strong>%s</strong> fichier(s) dans notre base de données');
// viewcat.php:
define('_MD_TDMDOWNLOADS_CAT_CURSORTBY', 'Fichiers actuellement triés par : %s');
define('_MD_TDMDOWNLOADS_CAT_DATE', 'Date');
define('_MD_TDMDOWNLOADS_CAT_DATENEW', 'Date (ordre décroissant)');
define('_MD_TDMDOWNLOADS_CAT_DATEOLD', 'Date (ordre croissant)');
define('_MD_TDMDOWNLOADS_CAT_HITS', 'Visites');
define('_MD_TDMDOWNLOADS_CAT_LIST', 'Liste');
define('_MD_TDMDOWNLOADS_CAT_NONEXISTENT', "Cette catégorie n'existe pas");
define('_MD_TDMDOWNLOADS_CAT_POPULARITY', 'Popularité');
define('_MD_TDMDOWNLOADS_CAT_POPULARITYLTOM', 'Popularité (des moins aux plus téléchargés)');
define('_MD_TDMDOWNLOADS_CAT_POPULARITYMTOL', 'Popularité (des plus aux moins téléchargés)');
define('_MD_TDMDOWNLOADS_CAT_RATING', 'Cotes');
define('_MD_TDMDOWNLOADS_CAT_RATINGLTOH', 'Cote (score du plus bas au plus haut)');
define('_MD_TDMDOWNLOADS_CAT_RATINGHTOL', 'Cote (score du plus haut au plus bas)');
define('_MD_TDMDOWNLOADS_CAT_SORTBY', 'Triés par :');
define('_MD_TDMDOWNLOADS_CAT_SUMMARY', 'Résumé');
define('_MD_TDMDOWNLOADS_CAT_THEREARE', 'Il y a <strong>%s</strong> fichier(s) dans cette catégorie');
define('_MD_TDMDOWNLOADS_CAT_TITLE', 'Titre');
define('_MD_TDMDOWNLOADS_CAT_TITLEATOZ', 'Titre (de A à Z)');
define('_MD_TDMDOWNLOADS_CAT_TITLEZTOA', 'Titre (de Z à A)');
define('_MD_TDMDOWNLOADS_CAT_VOTE', 'Vote');
// singlefile.php:
define('_MD_TDMDOWNLOADS_SINGLEFILE_AUTHOR', 'Soumis par :');
define('_MD_TDMDOWNLOADS_SINGLEFILE_COMMENTS', '(%s) Commentaires');
define('_MD_TDMDOWNLOADS_SINGLEFILE_DATEPROP', 'Date de soumission :');
define('_MD_TDMDOWNLOADS_SINGLEFILE_ICI', 'Ici');
define('_MD_TDMDOWNLOADS_SINGLEFILE_INTFILEFOUND', 'Voici un fichier important de %s');
define('_MD_TDMDOWNLOADS_SINGLEFILE_LIMITGLOBAL', 'Vous avez téléchargé %s fichiers de ce site et la limite est de %s en 24 h ');
define('_MD_TDMDOWNLOADS_SINGLEFILE_LIMITLID', 'Vous avez téléchargé ce fichier %s fois et la limite est de %s en 24 h');
define('_MD_TDMDOWNLOADS_SINGLEFILE_MODIFY', 'Modifier');
define('_MD_TDMDOWNLOADS_SINGLEFILE_NBTELECH', 'Téléchargé : %s fois');
define('_MD_TDMDOWNLOADS_SINGLEFILE_NONEXISTENT', "Ce téléchargement n'existe pas dans notre base de données");
define('_MD_TDMDOWNLOADS_SINGLEFILE_NOPERMDOWNLOAD', "Vous n'avez pas le droit de télécharger ce fichier");
define('_MD_TDMDOWNLOADS_SINGLEFILE_RATING', 'Note :');
define('_MD_TDMDOWNLOADS_SINGLEFILE_RATHFILE', 'Noter ce logiciel');
define('_MD_TDMDOWNLOADS_SINGLEFILE_REPORTBROKEN', 'Signaler un fichier brisé');
define('_MD_TDMDOWNLOADS_SINGLEFILE_TELLAFRIEND', 'Envoyer à un ami');
define('_MD_TDMDOWNLOADS_SINGLEFILE_VOTES', ' (%s votes)');
define('_MD_TDMDOWNLOADS_SINGLEFILE_PAYPAL', 'Don pour %s');
define('_MD_TDMDOWNLOADS_SINGLEFILE_NOPERM', "Vous n'avez pas les autorisations de téléchargement");
// ratefile.php
define('_MD_TDMDOWNLOADS_RATEFILE_BEOBJECTIVE', 'Veuillez être objectif, si tout le monde reçoit un 1 ou un 10, les cotes ne sont pas très utiles.');
define('_MD_TDMDOWNLOADS_RATEFILE_CANTVOTEOWN', 'Ne votez pas pour vos propres fichiers.<br>Tous les votes sont enregistrés et vérifiés.');
define('_MD_TDMDOWNLOADS_RATEFILE_DONOTVOTE', 'Ne votez pas pour vos propres fichiers.');
define('_MD_TDMDOWNLOADS_RATEFILE_NORATING', 'Le vote doit être comprise entre 0 et 10');
define('_MD_TDMDOWNLOADS_RATEFILE_RATE', 'Notez-le !');
define('_MD_TDMDOWNLOADS_RATEFILE_RATINGSCALE', "L'échelle est de 1 à 10, avec 1 étant faible et 10 étant excellent.");
define('_MD_TDMDOWNLOADS_RATEFILE_VOTE', 'Vote');
define('_MD_TDMDOWNLOADS_RATEFILE_VOTEOK', "Votre vote est apprécié.<br> Merci d'avoir pris le temps de voter ici");
define('_MD_TDMDOWNLOADS_RATEFILE_VOTEONCE', "Veuillez ne pas voter pour la même ressource plus d'une fois.");
// brokenfile.php
define('_MD_TDMDOWNLOADS_BROKENFILE_ALREADYREPORTED', 'Vous avez déjà soumis un rapport de fichier brisé pour ce téléchargement.');
define('_MD_TDMDOWNLOADS_BROKENFILE_FORSECURITY', "Pour des raisons de sécurité, votre nom d'utilisateur et votre adresse IP seront temporairement enregistrés.");
define('_MD_TDMDOWNLOADS_BROKENFILE_REPORTBROKEN', 'Rapports de fichier brisé');
define('_MD_TDMDOWNLOADS_BROKENFILE_THANKSFORHELP', "Merci de nous aider à maintenir l'intégrité de ce répertoire.");
define('_MD_TDMDOWNLOADS_BROKENFILE_THANKSFORINFO', "Merci pour l'information. Nous allons examiner votre demande dans peu de temps.");
// modfile.php
define('_MD_TDMDOWNLOADS_MODFILE_THANKSFORINFO', "Merci pour l'information. Nous allons examiner votre demande dans peu de temps.");
//submit.php
define('_MD_TDMDOWNLOADS_SUBMIT_ALLPENDING', 'Toutes les informations de fichier/script sont en attente de vérification.');
define('_MD_TDMDOWNLOADS_SUBMIT_DONTABUSE', "Le nom d'utilisateur et l'IP sont enregistrés, donc veuillez ne pas abuser du système.");
define('_MD_TDMDOWNLOADS_SUBMIT_ISAPPROVED', 'Votre fichier a été approuvé');
define('_MD_TDMDOWNLOADS_SUBMIT_PROPOSER', 'Soumettre un fichier');
define('_MD_TDMDOWNLOADS_SUBMIT_RECEIVED', 'Nous avons reçu vos informations de fichier. Merci !');
define('_MD_TDMDOWNLOADS_SUBMIT_SUBMITONCE', 'Soumettez votre fichier/script une seule fois.');
define('_MD_TDMDOWNLOADS_SUBMIT_TAKEDAYS', 'Cela peut prendre quelques jours avant de voir votre fichier/script ajouté avec succès à notre base de données.');
//search.php
define('_MD_TDMDOWNLOADS_SEARCH', 'Filtre dans la liste des modules');
define('_MD_TDMDOWNLOADS_SEARCH_ALL1', 'Tous');
define('_MD_TDMDOWNLOADS_SEARCH_ALL2', 'Tous');
define('_MD_TDMDOWNLOADS_SEARCH_BT', 'Recherche');
define('_MD_TDMDOWNLOADS_SEARCH_CATEGORIES', 'Catégories');
define('_MD_TDMDOWNLOADS_SEARCH_DATE', 'Date');
define('_MD_TDMDOWNLOADS_SEARCH_DOWNLOAD', 'Télécharger ');
define('_MD_TDMDOWNLOADS_SEARCH_HITS', 'Visites');
define('_MD_TDMDOWNLOADS_SEARCH_NOTE', 'Note');
define('_MD_TDMDOWNLOADS_SEARCH_PAGETITLE', 'Liste des fichiers');
define('_MD_TDMDOWNLOADS_SEARCH_THEREARE', 'Il y a <strong>%s</strong> fichier(s)');
define('_MD_TDMDOWNLOADS_SEARCH_TITLE', 'Nom');
//générique
define('_MD_TDMDOWNLOADS_EDITTHISDL', 'Modifier ce téléchargement');
define('_MD_TDMDOWNLOADS_MOREDETAILS', 'plus de détails');
define('_MD_TDMDOWNLOADS_DOWNLOAD', 'Télécharger');
define('_MD_TDMDOWNLOADS_RSS', 'Flux RSS');
//visit.php
define(
    '_MD_TDMDOWNLOADS_NOPERMISETOLINK',
    "Ce fichier n'appartient pas au site d'où vous venez.<br><br>Merci d'écrire un courrier électronique au webmestre du site d'où vous venez et dites-lui : <br><strong>VOUS N'ÊTES PAS PROPRIÉTAIRE DE LIENS PROVENANT D'AUTRES SITES ! (LEECH)</strong><br><strong>Définition de leecher : </strong> Quelqu'un qui est trop paresseux pour afficher et héberger des liens sur son propre serveur ou vole le dur travail fait par d'autres personnes.<br><br><strong>Vous êtes déjà enregistré</strong>"
);
//Message d'erreur
define('_MD_TDMDOWNLOADS_ERREUR_NOCAT', 'Vous devez choisir une catégorie !');
define('_MD_TDMDOWNLOADS_ERREUR_SIZE', 'La taille du fichier doit être un nombre');
//Bookmarks
define('_MD_TDMDOWNLOADS_BOOKMARK_ME', 'Recommandez-moi');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_BLINKLIST', 'Recommander sur Blinklist');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_DELICIOUS', 'Recommander sur del.icio.us');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_DIGG', 'Recommander sur Digg');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_FARK', 'Recommander sur Fark');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_FURL', 'Recommander sur Furl');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_NEWSVINE', 'Recommander sur Newsvine');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_REDDIT', 'Recommander sur Reddit');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_YAHOO', 'Recommander sur Yahoo');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_FACEBOOK', 'Recommander sur Facebook');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_TWITTER', 'Recommander sur Twitter');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_SCRIPSTYLE', 'Recommander sur Scripstyle');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_STUMBLE', 'Recommander sur Stumble');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_TECHNORATI', 'Recommander sur Technorati');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_MIXX', 'Recommander sur Mixx');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_MYSPACE', 'Recommander sur Myspace');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_DESIGNFLOAT', 'Recommander sur Designfloat');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_BALATARIN', 'Recommander sur Balatarin');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_GOOGLEPLUS', 'Recommander sur Google Plus');
define('_MD_TDMDOWNLOADS_BOOKMARK_TO_GOOGLEBOOKMARKS', 'Recommander sur Google Bookmarks');
//added by goffy
define('_MD_TDMDOWNLOADS_DISPLAYMORE', 'plus de téléchargement');
define('_MD_TDMDOWNLOADS_ADDNEW', 'Soumis  téléchargement');
define('_MD_TDMDOWNLOADS_COUNTDL', 'téléchargement disponible');
define('_MD_TDMDOWNLOADS_COUNTSUBS', 'Sous catégories');
