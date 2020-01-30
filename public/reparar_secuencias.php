<?php
$base_dato="biomercado";
$usuario="postgres";
$clave="18671986";
$dbconn = pg_connect("host=localhost dbname=$base_dato user=$usuario password=$clave")
or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = "
SELECT 'SELECT SETVAL(' ||
       quote_literal(quote_ident(PGT.schemaname) || '.' || quote_ident(S.relname)) ||
       ', COALESCE(MAX(' ||quote_ident(C.attname)|| '), 1) ) FROM ' ||
       quote_ident(PGT.schemaname)|| '.'||quote_ident(T.relname)|| ';'
FROM pg_class AS S,
     pg_depend AS D,
     pg_class AS T,
     pg_attribute AS C,
     pg_tables AS PGT
WHERE S.relkind = 'S'
    AND S.oid = D.objid
    AND D.refobjid = T.oid
    AND D.refobjid = C.attrelid
    AND D.refobjsubid = C.attnum
    AND T.relname = PGT.tablename
ORDER BY S.relname;
";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
foreach ($line as $col_value) {

    echo pg_query($col_value)."<br>";

    
}


}
exit();
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);