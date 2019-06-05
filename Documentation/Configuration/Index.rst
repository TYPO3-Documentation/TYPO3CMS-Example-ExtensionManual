.. include:: ../Includes.txt


.. _configuration:

=============
Configuration
=============

Target group: **Developers, Integrators**

How is the extension configured? Aim to provide simple instructions detailing 
how the extension is configured. Always assume that the user has no prior experience 
of using your extension.

Try and provide a typical use case for your extension and detail each of the 
steps required to get the extension running.


Typical Example
===============

- Do we need to include a static template?
- For example add a code snippet with comments

Minimal example of TypoScript:

- Code-blocks have support for syntax highlighting
- Use any supported language

.. code-block:: typoscript

   plugin.tx_myextension.settings {
      # configure basic email settings
      email {
         subject = Some subject
         from = someemail@domain.de
      }
   }

.. _configuration-typoscript:

TypoScript Reference
====================

Possible subsections: Reference of TypoScript options.
The construct below show the recommended structure for
TypoScript properties listing and description.

When detailing data types or standard TypoScript
features, don't hesitate to cross-link to the TypoScript
Reference as shown below.


See `Hyperlinks & Cross-Referencing <https://docs.typo3.org/typo3cms/HowToDocument/WritingReST/Hyperlinks.html>`
for information about how to use cross-references.

See the :file:`Settings.cgf` file for the declaration of cross-linking keys.
You can add more keys besides tsref.


Properties
==========

.. container:: ts-properties

   =========================== ===================================== ======================= ====================
   Property                    Data type                             :ref:`t3tsref:stdwrap`  Default
   =========================== ===================================== ======================= ====================
   allWrap_                    :ref:`t3tsref:data-type-wrap`         yes                     :code:`<div>|</div>`
   `subst\_elementUid`_        :ref:`t3tsref:data-type-boolean`      no                      0
   wrapItemAndSub_             :ref:`t3tsref:data-type-wrap`
   =========================== ===================================== ======================= ====================


Property details
================

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _ts-plugin-tx-extensionkey-allwrap:

allWrap
-------

:typoscript:`plugin.tx_extensionkey.allWrap =` :ref:`t3tsref:data-type-wrap`

Wraps the whole item.


.. _ts-plugin-tx-extensionkey-substelementUid:

subst_elementUid
----------------

:typoscript:`plugin.tx_extensionkey.subst_elementUid =` :ref:`t3tsref:data-type-boolean`

If set, all appearances of the string ``{elementUid}`` in the total
element html-code (after wrapped in allWrap_) are substituted with the
uid number of the menu item. This is useful if you want to insert an
identification code in the HTML in order to manipulate properties with
JavaScript.


.. _ts-plugin-tx-extensionkey-wrapitemandsub:

wrapItemAndSub
--------------

:typoscript:`plugin.tx_extensionkey.wrapItemAndSub =` :ref:`t3tsref:data-type-wrap`

Wraps the whole item and any submenu concatenated to it.


.. _configuration-faq:

FAQ
===

Possible subsection: FAQ
