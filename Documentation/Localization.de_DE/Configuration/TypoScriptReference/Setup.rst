..  include:: /Includes.rst.txt
..  highlight:: typoscript
..  index::
    TypoScript; Setup
..  _configuration-typoscript-setup:

Setup
=====

Enable / disable some options
-----------------------------

..  confval:: enableThat

    :type: bool, stdWrap
    :Default: 0

    If :typoscript:`1` then something is enabled...


    Example::

       plugin.tx_example.settings {
          enableThis.field = xyz
       }
