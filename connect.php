<!-- recuperer les valeur de connections  -->
<?php
// namespace Play;
// use InvalidArgumentException;
// use RuntimeException;
class DotEnv{
    protected string $path;
    public function __construct(string $path){
        if(!file_exists($path)){
            if(file_exists('../'.$path)){
                $this->path = '../'.$path;
            }else{
                // past = chemin 
                throw new InvalidArgumentException(sprintf('%s est introuvable.',$path));
            }
        }else{
            $this->path = $path;
        }
    }
    public function load(){
        if(!is_readable($this->path)){
            throw new RuntimeException(sprintf('%s : lecture impossible.',$this->path));
        }
        $lines = file($this->path, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        foreach($lines as $line){
            // ignore les commentaires
            if(strpos(trim($line),'#') === 0){
                continue;
            }
            // separe en duex d'un cote les noms et de l'autre les valeurs 
            list($name,$value) = explode('=',$line,2);
            $name = trim($name);
            $value = trim($value);
            if(!array_key_exists($name,$_SERVER) && !array_key_exists($name,$_ENV)){
                putenv(sprintf("%s = %s",$name,$value));
                // compare les deux valeurs 
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}