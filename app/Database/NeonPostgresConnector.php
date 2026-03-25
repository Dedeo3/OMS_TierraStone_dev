<?php

namespace App\Database;

use Illuminate\Database\Connectors\PostgresConnector;
use PDO;

class NeonPostgresConnector extends PostgresConnector
{
    public function connect(array $config): PDO
    {
        $endpointId = explode('.', $config['host'])[0];

        $dsn = sprintf(
            'pgsql:host=%s;port=%d;dbname=%s;options=endpoint%%3D%s',
            $config['host'],
            $config['port'],
            $config['database'],
            $endpointId
        );

        $options = $this->getOptions($config);
        return $this->createConnection($dsn, $config, $options);
    }
}
