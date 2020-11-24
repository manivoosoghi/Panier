<?php

class Templating {

    private $cache;
    private $template;
    private $compile;
    private $smarty;

    public function __construct(string $office) {
        try {
            require( __DIR__ . '/../configuration.php' );
            $this->setCache( __DIR__ . $templating['cache'] );
            $this->setTemplate( __DIR__ . $templating['template'] . $office );
            $this->setCompile( __DIR__ . $templating['compile'] );
            require_once( __DIR__ . '/../engine/smarty/libs/Smarty.class.php' );
            $smarty = (object) new Smarty();
        } catch (Exception $exception) {
            die();
        } finally {
            $smarty->debugging = (bool) false;
            $smarty->caching = (bool) false;
            $smarty->cache_lifetime = (int) 120;
            $smarty->force_compile = (bool) true;
            $smarty->setCacheDir($this->getCache());
            $smarty->setTemplateDir($this->getTemplate());
            $smarty->setCompileDir($this->getCompile());
            $this->setSmarty($smarty);
        }
    }

    // Accessors SETTER

    private function setCache(string $cache) : void {
        $this->cache = (string) (!empty($cache)) ? $cache : die('cache is not defined');
    }
    
    private function setTemplate(string $template) : void {
        $this->template = (string) (!empty($template)) ? $template : die('template is not defined');
    }
    
    private function setCompile(string $compile) : void {
        $this->compile = (string) (!empty($compile)) ? $compile : die('compile is not defined');
    }

    private function setSmarty(object $smarty) : void {
        $this->smarty = (object) $smarty;
    }

    // Accessors GETTER

    private function getCache() : string {
        return (string) $this->cache;
    }
    
    private function getTemplate() : string {
        return (string) $this->template;
    }
    
    private function getCompile() : string {
        return (string) $this->compile;
    }

    public function getSmarty() : object {
        return (object) $this->smarty;
    }

}

?>