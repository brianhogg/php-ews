<?php
/**
 * Definition of the FreeBusyResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FreeBusyResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FreeBusyResponseType {
	/**
	 * ResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $ResponseMessage;

	/**
	 * FreeBusyView property
	 * 
	 * @var EWSType_FreeBusyView
	 */
	public $FreeBusyView;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'FreeBusyView',
				'required' => false,
				'type' => 'FreeBusyView',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FreeBusyResponseType