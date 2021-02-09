<?php
namespace Klickfabrik\CartBasketImage\Slots;


class AddImageSlot
{
    /**
     * @return array
     */
    public function addImage(array $params)
    {
        $productObject = $params['productProduct'];
        $cartProduct = $params['cartProduct'];
        $firstImage = $productObject->getFirstImage();
        if (null !== $firstImage) {
            $cartProduct->setAdditional('image', $firstImage->getOriginalResource()->getPublicUrl());
        }
        $params['cartProduct'] = $cartProduct;
        return [$params];
    }
}