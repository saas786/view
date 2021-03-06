<?php declare(strict_types=1);
/**
 * Bright Nucleus View Component.
 *
 * @package   BrightNucleus\View
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      http://www.brightnucleus.com/
 * @copyright 2016-2017 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\View\View;

use BrightNucleus\View\Engine\Engine;
use BrightNucleus\View\Support\Finder;
use BrightNucleus\View\View;

/**
 * Interface ViewFinder.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\View\View
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
interface ViewFinder extends Finder
{

    // Constants to be used for the Config file sections.
    const CLASS_NAME_KEY = 'ClassName';
    const VIEWS_KEY = 'Views';
    const NULL_OBJECT = 'NullObject';

    /**
     * Find a result based on a specific criteria.
     *
     * @since 0.1.0
     *
     * @param array       $criteria Criteria to search for.
     * @param Engine|null $engine   Optional. Engine to use with the view.
     *
     * @return View View that was found.
     */
    public function find(array $criteria, Engine $engine = null): View;

    /**
     * Get the NullObject.
     *
     * @since 0.1.1
     *
     * @return NullView NullObject for the current Finder.
     */
    public function getNullObject(): NullView;
}
