..  Content substitution
	...................................................
	|name| will be replaced by "My long extension name here"

.. |name| replace:: My long extension name here
.. |typo3| image:: Images/Typo3.png
.. |time| date:: %m-%d-%Y %H:%M


..  Custom roles
	...................................................
	After declaring a role like this: ".. role:: custom", the document may use the new "custom" :custom:`interpreted text`
	More information: http://docutils.sourceforge.net/docs/ref/rst/roles.html

.. @fix: This two roles below should be defined elsewhere, right? But are necessary to be visible for the Sphinx / Docutils parser.
.. role:: code
.. role:: typoscript

.. role:: typoscript(code)
.. role:: ts(typoscript)
.. role:: php(code)
