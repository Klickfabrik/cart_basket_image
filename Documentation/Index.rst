.. every .rst file should include Includes.txt
.. use correct path!

.. include:: Includes.txt

.. Every manual should have a start label for cross-referencing to
.. start page. Do not remove this!

.. _start:

=============================================================
Cart - Basket Image
=============================================================

:Version:
   |release|

:Language:
   en

:Keywords:
   cart, cart_products, image, basket

:Copyright:
   2021

:Authors:
   Marc Finnern

:Email:
   marc@klickfabrik.net

:License:
   This extension documentation is published under the
   `CC BY-NC-SA 4.0 <https://creativecommons.org/licenses/by-nc-sa/4.0/>`__ (Creative Commons)
   license

**What does it do?**

Allow to display an image into the basket


**Screenshots**

- Display the image like this

image:: Images/basket_image.png


Basket-Template
---------------
- File: ProductList.html

Sample for the Template

::

    <f:if condition="{product.additionalArray.image}">
        <div class="product-image">
            <f:image src="{product.additionalArray.image}" height="400c" alt="{product.title}" class="img-fluid"/>
        </div>
    </f:if>
