<?php
	/**
	---------------------------------------------------------------------------------------------------------------------------
	SQLite procedural emultation layer v1.00

	* @author Javier Gutiérrez Chamorro (Guti) - https://www.javiergutierrezchamorro.com
 	* @link https://www.javiergutierrezchamorro.com
	* @copyright © Copyright 2020
 	* @package sqlite.inc.php
 	* @license LGPL
 	* @version 1.00
	---------------------------------------------------------------------------------------------------------------------------
	*/


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_open($psFilename, $piMode = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE)
	{
		$piHandle = new SQLite3($psFilename, $piMode);
		return($piHandle);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_close($piHandle)
	{
		$bResult = $piHandle->close();
		unset($piHandle);
		return($bResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_exec($piHandle, $psQuery)
	{
		$oResult = $piHandle->exec($psQuery);
		return($oResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_query($piHandle, $psQuery)
	{
		$oResult = $piHandle->query($psQuery);
		return($oResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_changes($piHandle)
	{
		$iResult = $piHandle->changes();
		return($iResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_last_insert_row_id($piHandle)
	{
		$iResult = $piHandle->lastInsertRowID();
		return($iResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_free_result($poResultset)
	{
		$bResult = $poResultset->finalize();
		unset($poResultset);
		return($bResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_escape_string($psString)
	{
		$sResult = SQLite3::escapeString($psString);
		return($sResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_errno($piHandle)
	{
		$iResult = $piHandle->lastErrorCode();
		return($iResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_error($piHandle)
	{
		$sResult = $piHandle->lastErrorMsg();
		return($sResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_fetch_assoc($poResultset)
	{
		$aResult = $poResultset->fetchArray(SQLITE3_ASSOC);
		return($aResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_fetch_row($poResultset)
	{
		$aResult = $poResultset->fetchArray(SQLITE3_NUM);
		return($aResult);
	}


	// ---------------------------------------------------------------------------------------------------------------------------
	function sqlite_fetch_array($poResultset, $piMode = SQLITE3_BOTH)
	{
		$aResult = $poResultset->fetchArray($piMode);
		$aResult($aResult);
	}

?>