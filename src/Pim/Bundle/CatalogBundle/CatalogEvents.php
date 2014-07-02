<?php

namespace Pim\Bundle\CatalogBundle;

/**
 * Catalog events
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
final class CatalogEvents
{
    /**
     * This event is thrown each time a product is created in the system.
     *
     * The event listener receives an
     * Pim\Bundle\CatalogBundle\Event\FilterProductEvent instance.
     *
     * @staticvar string
     */
    const CREATE_PRODUCT = 'pim_catalog.create_product';

    /**
     * This event is thrown each time a product value is created in the system.
     *
     * The event listener receives an
     * Pim\Bundle\CatalogBundle\Event\FilterProductValueEvent instance.
     *
     * @staticvar string
     */
    const CREATE_PRODUCT_VALUE = 'pim_catalog.create_product_value';

    /**
     * This event is thrown before a product is removed.
     *
     * The event listener receives an
     * Pim\Bundle\CatalogBundle\Event\FilterProductValueEvent instance.
     *
     * @staticvar string
     */
    const PRE_REMOVE_PRODUCT = 'pim_catalog.pre_remove.product';

    /**
     * This event is thrown before an attribute is removed.
     *
     * The event listener receives an
     * Pim\Bundle\CatalogBundle\Event\FilterProductValueEvent instance.
     *
     * @staticvar string
     */
    const PRE_REMOVE_ATTRIBUTE = 'pim_catalog.pre_remove.attribute';

    /**
     * This event is thrown before a family is removed.
     *
     * The event listener receives an
     * Pim\Bundle\CatalogBundle\Event\FilterProductValueEvent instance.
     *
     * @staticvar string
     */
    const PRE_REMOVE_FAMILY = 'pim_catalog.pre_remove.family';
}
