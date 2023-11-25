<?php
/**
* oci8 driver session management functionality for the Sessions package
*
* This file is part of the ADOdb package.
*
* @copyright 2020 Mark Newnham
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace ADOdb\addins\session\oci8;

use \ADOdb\addins\session;

class ADOSession extends \ADOdb\addins\session\ADOSession {
	
	/**
	* Provides the empty large object to the oci database
	* 
	* @param string $param1
	*
	* @return string
	*/
	final protected function getLobValue(?string $param1=null) : string {
		
		return sprintf('empty_%s()', strtolower($param1));
	
	}
}