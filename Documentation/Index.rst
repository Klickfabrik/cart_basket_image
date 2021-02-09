.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: Includes.txt
.. include:: Images.txt


Cart - Basket Image
=======================

:Author: |author|
:Rendered: |today|
:Extension Key: cart_basket_image
:Language: en
:Keywords: cart, cart_products, image, basket

Copyright 2021, |author|

This document is published under the Open Content License
available from http://www.opencontent.org/opl.shtml
The content of this document is related to TYPO3
\- a GNU/GPL CMS/Framework available from www.typo3.org


What does it do?
----------------
Allow to display an image into the basket


Screenshots
-----------

- Display the image like this

|basket_image|


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

