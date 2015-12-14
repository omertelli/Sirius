<?php
/**
 * Created by PhpStorm.
 * User: jiangshengjun
 * Date: 15/12/11
 * Time: 下午2:05
 */

namespace Sirius\Session;


interface AdapterInterface {
    /**
     * Starts session, optionally using an adapter
     */
    public function start();

    /**
     * Sets session options
     */
    public function setOptions(array $options);

	/**
     * Get internal options
     */
	public function getOptions();

	/**
     * Gets a session variable from an application context
     */
	public function get($index, $defaultValue = null);

	/**
     * Sets a session variable in an application context
     */
	public function set($index, $value);

	/**
     * Check whether a session variable is set in an application context
     */
	public function has($index);

	/**
     * Removes a session variable from an application context
     */
	public function remove($index);

	/**
     * Returns active session id
     */
	public function getId();

	/**
     * Check whether the session has been started
     */
	public function isStarted();

	/**
     * Destroys the active session
     */
	public function destroy($removeData = false);

	/**
     * Regenerate session's id
     */
	public function regenerateId($deleteOldSession = true);

	/**
     * Set session name
     */
	public function setName($name);

	/**
     * Get session name
     */
	public function getName();
}