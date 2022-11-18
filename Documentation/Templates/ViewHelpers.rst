..  include:: /Includes.rst.txt
..  index:: Templates; ViewHelper
..  _templates-viewhelpers:

==================
Custom ViewHelpers
==================

If your extension provides custom ViewHelpers you can describe their usage here.

If you want to use ViewHelpers from other extensions you need to add the namespace
declaration at the beginning of the template. The namespace declaration for the
example extension is:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/MyTemplate.html

    {namespace x=MyCompany\MyExtension\ViewHelpers}

Now you can use a ViewHelper of news with a code like:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/MyTemplate.html

    <x:myCustomViewHelper><!-- some comment --></x:myCustomViewHelper>

All ViewHelpers
================

exampleTag
----------

ViewHelper to do something


Examples
^^^^^^^^

Basic Example
"""""""""""""

Render the content of the VH as page title

Code:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/MyTemplate.html

    <x:exampleTag>{myRecord.title}</x:exampleTag>


Output:

..  code-block:: html
    :caption: EXT:my_extension/Resources/Private/Templates/MyTemplate.html

    <xyz>TYPO3 is awesome</xyz>
