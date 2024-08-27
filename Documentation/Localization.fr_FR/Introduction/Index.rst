..  include:: /Includes.rst.txt

..  _introduction:

============
Introduction
============

..  tip::

    Nouveau à reStructuredText et Sphinx?

    Faites-vous présenter :
    https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/Index.html

    Use this cheat sheet as reference:
    https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/WritingReST/CheatSheet.html

..  _what-it-does:

Que fait-il ?
=============

L'objectif de ce chapitre est de fournir une vue d'ensemble de votre extension.

* Qu'est-ce qu'elle fait ?
* Quels problèmes résout-elle ?
* Qui est le public cible ?

Ce chapitre doit fournir des informations qui aideront à informer les
utilisateurs potentiels et les aider à décider s'ils doivent ou non
installer et utiliser cette extension.

..  attention::

    N'oubliez pas d'indiquer le numéro de version de l'extension dans le fichier :file:`guides.xml`,
    dans la propriété :code:`release`.
    Il sera automatiquement repris sur la page de couverture par la substitution :code:`|release|`.

..  _screenshots:

Captures d'écran
================

Ce chapitre doit aider à comprendre le fonctionnement de l'extension.
Supprimez-le s'il n'est pas pertinent.

..  figure:: /Images/IntroductionPackage.png
    :class: with-shadow
    :alt: Introduction Package
    :width: 300px

    Introduction Paquet après installation (légende de l'image).

A quoi ressemble le Frontend du Package d'Introduction après l'installation (légende de l'image).
