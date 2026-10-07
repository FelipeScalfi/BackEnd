<?php
declare(strict_types=1);

/**
 * Conexão Singleton com o PostgreSQL via PDO.
 */
final class ConexaoBanco {
    private static ?PDO $instancia = null;

    private function __construct() {}
    private function __clone(): void {}

    public function __wakeup(): void {
        throw new \Exception("Desserialização proibida.");
    }

    public function __unserialize(array $data): void {
        throw new \Exception("Desserialização proibida.");
    }

    public static function obterConexao(?string $caminhoConfig = null): PDO {
        if (self::$instancia === null) {
            if ($caminhoConfig === null) {
                throw new \InvalidArgumentException("O caminho do arquivo de configuração é obrigatório na primeira chamada.");
            }

            if (!file_exists($caminhoConfig)) {
                throw new \RuntimeException("Arquivo de configuração não encontrado em {$caminhoConfig}");
            }

            $dados = parse_ini_file($caminhoConfig, true);

            if ($dados === false || !isset($dados['database'])) {
                throw new \RuntimeException("Sessão [database] ausente ou inválida no arquivo de configuração.");
            }

            $cfg = $dados['database'];
            $dsn = sprintf(
                "%s:host=%s;port=%s;dbname=%s",
                $cfg['db_driver'],
                $cfg['db_host'],
                $cfg['db_port'],
                $cfg['db_name']
            );

            self::$instancia = new PDO($dsn, $cfg['db_user'], $cfg['db_pass'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false
            ]);
        }

        return self::$instancia;
    }
}