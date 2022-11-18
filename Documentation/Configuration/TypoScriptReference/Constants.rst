..  include:: /Includes.rst.txt

..  index::
    TypoScript; Constants
..  _configuration-typoscript-constants:

Constants
=========

Enable / disable some options
-----------------------------

..  confval:: enableThis

    :type: bool
    :Default: false

    If :php:`true`, something is enabled...

    Example:

    ..  code-block:: typoscript
        :caption: EXT:my_extension/Congifguration/TypoScript/constants.typoscript

        plugin.tx_example.settings {
            enableThis = true
        }

Configure page ids
------------------

..  confval:: storageId

    :type: int
    :Default: 0

    The id of the page storing the records


    Example:


    ..  code-block:: typoscript
        :caption: EXT:my_extension/Congifguration/TypoScript/constants.typoscript

        plugin.tx_example.settings {
            storageId = 42
        }
