<?php
/**
* mssqlnative driver session configuration for the Sessions package
*
* This file is part of the ADOdb package.
*
* @copyright 2021 Mark Newnham
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace ADOdb\SessionPlugin\drivers\mssqlnative;

use \ADOdb\SessionPlugin;

final class ADOSession extends \ADOdb\SessionPlugin\ADOSession {

	/*
	* large object handling required by driver
	*/
	protected string $largeObject = 'varbinary';

}
