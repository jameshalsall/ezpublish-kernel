<?php
/**
 * Storage Engine Handler Interface
 *
 * @copyright Copyright (c) 2011, eZ Systems AS
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2.0
 * @package ext
 * @subpackage base
 */

namespace ezx\base\Interfaces\StorageEngine;
interface Handler
{
    /**
     * Setups current handler instance with reference to storage engine object that created it.
     *
     * @param \ezx\base\Interfaces\StorageEngine $engine
     * @param object $backend Optional if storage engine needs to pass backend object to handlers
     *                        to be able to handle operations, use this
     */
    public function __construct( \ezx\base\Interfaces\StorageEngine $engine, $backend = null );
}
