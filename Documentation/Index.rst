..  Editor configuration
	...................................................
	* utf-8 with BOM as encoding
	* tab indentation with 4 characters (no space)
	* no wrapping when reaching the end of the margin, configuration with soft carriage return

.. Includes roles, substitutions, ...
.. include:: _Inclusion.rst

=================
Extension Name
=================

:Extension name: Extension Name
:Extension key: extension_key
:Description: manuals covering TYPO3 basics
:Language: en
:Author: Author Name <author@typo3.org>
:Creation date: 18-12-2010
:Generation date: |time|
:Licence: Open Content License available from http://www.opencontent.org/opl.shtml

The content of this document is related to TYPO3 - a GNU/GPL CMS/Framework available from www.typo3.org

.. toctree::
	:maxdepth: 2

	UserManual
	AdministratorManual
	TyposcriptReference
	DeveloperCorner
	ProjectInformation
	RestructuredtextHelp

.. STILL TO ADD IN THIS DOCUMENT
	@todo: add section about how screenshots can be automated. Pointer to PhantomJS could be added.
	@todo: explain how documentation can be rendered locally and remotely.
	@todo: explain what files should be versionned and what not (_build, Makefile, conf.py, ...)
	@todo: a word about inclusion


.. include:: ../Readme.rst