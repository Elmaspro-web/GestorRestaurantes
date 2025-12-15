<?php

/**
 * Vamos a usar un patrón Singleton para que solo haya una instancia del objeto "Config"
 * Y se use en toda la aplicación.
 */
class Config
{
    private static $instancia = null;  // Aquí guardamos el único objeto

    private array $data = []; // Guardará la configuración

    private function __construct()
    {
        // Cargamos el archivo .ini solo una vez y con secciones 'true'
        $this->data = parse_ini_file(__DIR__ . '/../config/config.ini', true);
    }

    public static function getInstance(): ?Config
    {
        // Si no existe la instancia, la creamos
        if (self::$instancia === null) {
            self::$instancia = new Config();
        }

        // Devolvemos siempre la misma instancia
        return self::$instancia;
    }

    public function get($section, $key)
    {
        return $this->data[$section][$key];
    }
}
