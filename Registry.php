class Registry {

    private $vars = array();

    /**
     * @param string $key
     * @param void $default
     * @return void|null
     */
    public function get($key, $default = null) {
        if (array_key_exists($key, $this->vars)) {
            return $this->vars[$key];
        }
        return $default;
    }

    /**
     * @param string $key
     * @param void $var
     */    
    public function set($key, $var = null) {
        $this->vars[$key] = $var;
    }

    /**
     * @var Registry
     */
    private static $Obj;

    public static function obj() {
        if (!self::$Obj) {
            $class = get_called_class();
            self::$Obj = new $class();
        }
        return self::$Obj;
    }
}
