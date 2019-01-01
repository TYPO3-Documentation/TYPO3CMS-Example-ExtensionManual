.. include:: ../Includes.txt



.. _installation:

============
Installation
============

Target group: **Administrators**

- How should the extension be installed?
- Are there dependencies to resolved?
- Is it necessary to include a static template file?

Method 1: Install Extension Without Composer
============================================

To install the extension, perform the following steps:

#. In the backend, go to *ADMIN Tools* > *Extensions* > *Get extensions*
#. Type name of extension, and click on left icon (*Import and install*)
#. Activate extension in extension manager
#. Enable static includes

Method 2: Install Extension With Composer
=========================================

.. code-block:: bash

   composer require ...

After that, continue with these steps:

#. Activate extension in extension manager
#. Enable static includes


Next step
=========

:ref:`Configure extension <configuration>`.