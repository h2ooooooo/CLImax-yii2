<?php

namespace CLImax\yii2;

/**
 * Class CLImaxController
 *
 * @package CLImax\yii2
 *
 * @mixin CLImaxApplication
 */
class CLImaxController extends \yii\base\Controller
{
	/** @var CLImaxApplication */
    protected $_application;

    /** @var array */
    protected $_applicationGetters;

	/**
	 * @return CLImaxApplication
	 */
    public function getApplication() {
        return $this->_application;
    }

	/**
	 * @throws \Exception
	 */
    public function init() {
        parent::init();

        $this->_application = new CLImaxApplication();
        $this->_applicationGetters = $this->_application->getModuleClasses();
    }

	/**
	 * @param string $method
	 * @param array  $arguments
	 *
	 * @return mixed
	 */
    public function __call($method, $arguments) {
        if (method_exists($this->_application, $method)) {
            return call_user_func_array([$this->_application, $method], $arguments);
        }

        return parent::__call($method, $arguments);
    }

	/**
	 * @param string $property
	 *
	 * @return mixed
	 *
	 * @throws \yii\base\UnknownPropertyException
	 */
    public function __get($property) {
        if (isset($this->_applicationGetters[$property]) || property_exists($this->_application, $property)) {
            return $this->_application->{$property};
        }

        return parent::__get($property);
    }
}