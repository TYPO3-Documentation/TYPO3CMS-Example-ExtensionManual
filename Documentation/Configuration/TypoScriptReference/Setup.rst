..  include:: /Includes.rst.txt
..  index::
    TypoScript; Setup
..  _configuration-typoscript-setup:

Setup
=====

Enable / disable some options
-----------------------------

..  confval:: enableThat

    :type: bool, stdWrap
    :Default: false

    If :php:`TRUE`, something is enabled...


    Example:


    ..  code-block:: typoscript
        :caption: EXT:my_extension/Congifguration/TypoScript/setup.typoscript

        plugin.tx_example.settings {
            enableThis.field = xyz
        }
