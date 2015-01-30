<?php
    namespace befound\ls\ModulePlugin;
    /**
     * Example plugin that can not be activated.
     */
    class ModulePlugin extends \ls\pluginmanager\PluginModule
    {
        public $defaultController = 'dashboard';
        public $controllerNamespace;
        
        public function __construct() {
             $this->controllerNamespace = __NAMESPACE__ . '\\controllers';
        }
    }
?>