<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated for Laravel 4.2.8 on 2014-08-26.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class DB extends \Illuminate\Support\Facades\DB
    {

        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }

        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }

        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }

        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }

        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }

        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void
         * @static
         */
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }

        /**
         * Return all of the created connections.
         *
         * @return array
         * @static
         */
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }

        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function getSchemaBuilder()
        {
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }

        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::table($table);
        }

        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::raw($value);
        }

        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array
         * @static
         */
        public static function select($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::select($query, $bindings);
        }

        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }

        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function update($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }

        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function delete($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }

        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }

        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }

        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool
         * @static
         */
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }

        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }

        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @return mixed
         * @throws \Exception
         * @static
         */
        public static function transaction($callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::transaction($callback);
        }

        /**
         * Start a new database transaction.
         *
         * @return void
         * @static
         */
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @static
         */
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::commit();
        }

        /**
         * Rollback the active database transaction.
         *
         * @return void
         * @static
         */
        public static function rollBack()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::rollBack();
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }

        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array
         * @static
         */
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param $time
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }

        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::listen($callback);
        }

        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column
         * @static
         */
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }

        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
         * @static
         */
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }

        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }

        /**
         * Get the current PDO connection.
         *
         * @return \Illuminate\Database\PDO
         * @static
         */
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return \Illuminate\Database\PDO
         * @static
         */
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }

        /**
         * Set the PDO connection.
         *
         * @param \PDO|null $pdo
         * @return $this
         * @static
         */
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }

        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|null $pdo
         * @return $this
         * @static
         */
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }

        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this
         * @static
         */
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getName();
        }

        /**
         * Get an option from the configuration options.
         *
         * @param string $option
         * @return mixed
         * @static
         */
        public static function getConfig($option)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }

        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar
         * @return void
         * @static
         */
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }

        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar
         * @return void
         * @static
         */
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }

        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor
         * @return void
         * @static
         */
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Events\Dispatcher
         * @return void
         * @static
         */
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }

        /**
         * Get the paginator environment instance.
         *
         * @return \Illuminate\Pagination\Factory
         * @static
         */
        public static function getPaginator()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getPaginator();
        }

        /**
         * Set the pagination environment instance.
         *
         * @param \Illuminate\Pagination\Factory|\Closure $paginator
         * @return void
         * @static
         */
        public static function setPaginator($paginator)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setPaginator($paginator);
        }

        /**
         * Get the cache manager instance.
         *
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static function getCacheManager()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getCacheManager();
        }

        /**
         * Set the cache manager instance on the connection.
         *
         * @param \Illuminate\Cache\CacheManager|\Closure $cache
         * @return void
         * @static
         */
        public static function setCacheManager($cache)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setCacheManager($cache);
        }

        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::pretending();
        }

        /**
         * Get the default fetch mode for the connection.
         *
         * @return int
         * @static
         */
        public static function getFetchMode()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getFetchMode();
        }

        /**
         * Set the default fetch mode for the connection.
         *
         * @param int $fetchMode
         * @return int
         * @static
         */
        public static function setFetchMode($fetchMode)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
        }

        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::logging();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }

        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string
         * @static
         */
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }

        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void
         * @static
         */
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }

        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }

    }


    class Eloquent extends \Illuminate\Database\Eloquent\Model
    {

        /**
         * Find a model by its primary key.
         *
         * @param array $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static
         * @static
         */
        public static function findMany($id, $columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::findMany($id, $columns);
        }

        /**
         * Execute the query and get the first result.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static|null
         * @static
         */
        public static function first($columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::first($columns);
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static
         * @throws ModelNotFoundException
         * @static
         */
        public static function firstOrFail($columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static function get($columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::get($columns);
        }

        /**
         * Pluck a single column from the database.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function pluck($column)
        {
            return \Illuminate\Database\Eloquent\Builder::pluck($column);
        }

        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         * @return void
         * @static
         */
        public static function chunk($count, $callback)
        {
            \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
        }

        /**
         * Get an array with the values of a given column.
         *
         * @param string $column
         * @param string $key
         * @return array
         * @static
         */
        public static function lists($column, $key = null)
        {
            return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
        }

        /**
         * Get a paginator for the "select" statement.
         *
         * @param int $perPage
         * @param array $columns
         * @return \Illuminate\Pagination\Paginator
         * @static
         */
        public static function paginate($perPage = null, $columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
        }

        /**
         * Get a paginator only supporting simple next and previous links.
         *
         * This is more efficient on larger data-sets, etc.
         *
         * @param int $perPage
         * @param array $columns
         * @return \Illuminate\Pagination\Paginator
         * @static
         */
        public static function simplePaginate($perPage = null, $columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns);
        }

        /**
         * Run the default delete function on the builder.
         *
         * @return mixed
         * @static
         */
        public static function forceDelete()
        {
            return \Illuminate\Database\Eloquent\Builder::forceDelete();
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function onDelete($callback)
        {
            \Illuminate\Database\Eloquent\Builder::onDelete($callback);
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param array $columns
         * @return array|static[]
         * @static
         */
        public static function getModels($columns = array())
        {
            return \Illuminate\Database\Eloquent\Builder::getModels($columns);
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         * @return array
         * @static
         */
        public static function eagerLoadRelations($models)
        {
            return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @param string $boolean
         * @return $this
         * @static
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhere($column, $operator = null, $value = null)
        {
            return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
        }

        /**
         * Add a relationship count condition to the query.
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure $callback
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a relationship count condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHas($relation, $callback, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHas($relation, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
        }

        /**
         * Add a relationship count condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function getQuery()
        {
            return \Illuminate\Database\Eloquent\Builder::getQuery();
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return void
         * @static
         */
        public static function setQuery($query)
        {
            \Illuminate\Database\Eloquent\Builder::setQuery($query);
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static function getEagerLoads()
        {
            return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         * @return void
         * @static
         */
        public static function setEagerLoads($eagerLoad)
        {
            \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
        }

        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function getModel()
        {
            return \Illuminate\Database\Eloquent\Builder::getModel();
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         * @return $this
         * @static
         */
        public static function setModel($model)
        {
            return \Illuminate\Database\Eloquent\Builder::setModel($model);
        }

        /**
         * Extend the builder with a given callback.
         *
         * @param string $name
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function macro($name, $callback)
        {
            \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
        }

        /**
         * Get the given macro by name.
         *
         * @param string $name
         * @return \Closure
         * @static
         */
        public static function getMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::getMacro($name);
        }

        /**
         * Set the columns to be selected.
         *
         * @param array $columns
         * @return $this
         * @static
         */
        public static function select($columns = array())
        {
            return \Illuminate\Database\Query\Builder::select($columns);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function selectRaw($expression)
        {
            return \Illuminate\Database\Query\Builder::selectRaw($expression);
        }

        /**
         * Add a new select column to the query.
         *
         * @param mixed $column
         * @return $this
         * @static
         */
        public static function addSelect($column)
        {
            return \Illuminate\Database\Query\Builder::addSelect($column);
        }

        /**
         * Force the query to only return distinct results.
         *
         * @return $this
         * @static
         */
        public static function distinct()
        {
            return \Illuminate\Database\Query\Builder::distinct();
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param string $table
         * @return $this
         * @static
         */
        public static function from($table)
        {
            return \Illuminate\Database\Query\Builder::from($table);
        }

        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @param bool $where
         * @return $this
         * @static
         */
        public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false)
        {
            return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function joinWhere($table, $one, $operator, $two, $type = 'inner')
        {
            return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
        }

        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoinWhere($table, $one, $operator, $two)
        {
            return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
        }

        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoinWhere($table, $one, $operator, $two)
        {
            return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $one, $operator, $two);
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this
         * @static
         */
        public static function whereRaw($sql, $bindings = array(), $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereRaw($sql, $bindings = array())
        {
            return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
        }

        /**
         * Add a where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return $this
         * @static
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereBetween($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotBetween($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNested($callback, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder|static $query
         * @param string $boolean
         * @return $this
         * @static
         */
        public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @param bool $not
         * @return $this
         * @static
         */
        public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure $callback
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereExists($callback, $not = false)
        {
            return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotExists($callback, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotExists($callback)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         * @return $this
         * @static
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereIn($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotIn($column, $values, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotIn($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool $not
         * @return $this
         * @static
         */
        public static function whereNull($column, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNull($column)
        {
            return \Illuminate\Database\Query\Builder::orWhereNull($column);
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotNull($column, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotNull($column)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereDay($column, $operator, $value, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereMonth($column, $operator, $value, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereYear($column, $operator, $value, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param string $parameters
         * @return $this
         * @static
         */
        public static function dynamicWhere($method, $parameters)
        {
            return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @return $this
         * @static
         */
        public static function groupBy()
        {
            return \Illuminate\Database\Query\Builder::groupBy();
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @param string $boolean
         * @return $this
         * @static
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
        }

        /**
         * Add a "or having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHaving($column, $operator = null, $value = null)
        {
            return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this
         * @static
         */
        public static function havingRaw($sql, $bindings = array(), $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHavingRaw($sql, $bindings = array())
        {
            return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param string $column
         * @param string $direction
         * @return $this
         * @static
         */
        public static function orderBy($column, $direction = 'asc')
        {
            return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function latest($column = 'created_at')
        {
            return \Illuminate\Database\Query\Builder::latest($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function oldest($column = 'created_at')
        {
            return \Illuminate\Database\Query\Builder::oldest($column);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return $this
         * @static
         */
        public static function orderByRaw($sql, $bindings = array())
        {
            return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         * @return $this
         * @static
         */
        public static function offset($value)
        {
            return \Illuminate\Database\Query\Builder::offset($value);
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function skip($value)
        {
            return \Illuminate\Database\Query\Builder::skip($value);
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         * @return $this
         * @static
         */
        public static function limit($value)
        {
            return \Illuminate\Database\Query\Builder::limit($value);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function take($value)
        {
            return \Illuminate\Database\Query\Builder::take($value);
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function forPage($page, $perPage = 15)
        {
            return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
        }

        /**
         * Add a union statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @param bool $all
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function union($query, $all = false)
        {
            return \Illuminate\Database\Query\Builder::union($query, $all);
        }

        /**
         * Add a union all statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function unionAll($query)
        {
            return \Illuminate\Database\Query\Builder::unionAll($query);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param bool $value
         * @return $this
         * @static
         */
        public static function lock($value = true)
        {
            return \Illuminate\Database\Query\Builder::lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function lockForUpdate()
        {
            return \Illuminate\Database\Query\Builder::lockForUpdate();
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function sharedLock()
        {
            return \Illuminate\Database\Query\Builder::sharedLock();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static function toSql()
        {
            return \Illuminate\Database\Query\Builder::toSql();
        }

        /**
         * Indicate that the query results should be cached.
         *
         * @param \DateTime|int $minutes
         * @param string $key
         * @return $this
         * @static
         */
        public static function remember($minutes, $key = null)
        {
            return \Illuminate\Database\Query\Builder::remember($minutes, $key);
        }

        /**
         * Indicate that the query results should be cached forever.
         *
         * @param string $key
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rememberForever($key = null)
        {
            return \Illuminate\Database\Query\Builder::rememberForever($key);
        }

        /**
         * Indicate that the results, if cached, should use the given cache tags.
         *
         * @param array|mixed $cacheTags
         * @return $this
         * @static
         */
        public static function cacheTags($cacheTags)
        {
            return \Illuminate\Database\Query\Builder::cacheTags($cacheTags);
        }

        /**
         * Indicate that the results, if cached, should use the given cache driver.
         *
         * @param string $cacheDriver
         * @return $this
         * @static
         */
        public static function cacheDriver($cacheDriver)
        {
            return \Illuminate\Database\Query\Builder::cacheDriver($cacheDriver);
        }

        /**
         * Execute the query as a fresh "select" statement.
         *
         * @param array $columns
         * @return array|static[]
         * @static
         */
        public static function getFresh($columns = array())
        {
            return \Illuminate\Database\Query\Builder::getFresh($columns);
        }

        /**
         * Execute the query as a cached "select" statement.
         *
         * @param array $columns
         * @return array
         * @static
         */
        public static function getCached($columns = array())
        {
            return \Illuminate\Database\Query\Builder::getCached($columns);
        }

        /**
         * Get a unique cache key for the complete query.
         *
         * @return string
         * @static
         */
        public static function getCacheKey()
        {
            return \Illuminate\Database\Query\Builder::getCacheKey();
        }

        /**
         * Generate the unique cache key for the query.
         *
         * @return string
         * @static
         */
        public static function generateCacheKey()
        {
            return \Illuminate\Database\Query\Builder::generateCacheKey();
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         * @return string
         * @static
         */
        public static function implode($column, $glue = null)
        {
            return \Illuminate\Database\Query\Builder::implode($column, $glue);
        }

        /**
         * Build a paginator instance from a raw result array.
         *
         * @param \Illuminate\Pagination\Factory $paginator
         * @param array $results
         * @param int $perPage
         * @return \Illuminate\Pagination\Paginator
         * @static
         */
        public static function buildRawPaginator($paginator, $results, $perPage)
        {
            return \Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
        }

        /**
         * Get the count of the total records for pagination.
         *
         * @return int
         * @static
         */
        public static function getPaginationCount()
        {
            return \Illuminate\Database\Query\Builder::getPaginationCount();
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function exists()
        {
            return \Illuminate\Database\Query\Builder::exists();
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         * @return int
         * @static
         */
        public static function count($columns = '*')
        {
            return \Illuminate\Database\Query\Builder::count($columns);
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function min($column)
        {
            return \Illuminate\Database\Query\Builder::min($column);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function max($column)
        {
            return \Illuminate\Database\Query\Builder::max($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function sum($column)
        {
            return \Illuminate\Database\Query\Builder::sum($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         * @return mixed
         * @static
         */
        public static function avg($column)
        {
            return \Illuminate\Database\Query\Builder::avg($column);
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return mixed
         * @static
         */
        public static function aggregate($function, $columns = array())
        {
            return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
        }

        /**
         * Insert a new record into the database.
         *
         * @param array $values
         * @return bool
         * @static
         */
        public static function insert($values)
        {
            return \Illuminate\Database\Query\Builder::insert($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string $sequence
         * @return int
         * @static
         */
        public static function insertGetId($values, $sequence = null)
        {
            return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static function truncate()
        {
            \Illuminate\Database\Query\Builder::truncate();
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         * @return void
         * @static
         */
        public static function mergeWheres($wheres, $bindings)
        {
            \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
        }

        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            return \Illuminate\Database\Query\Builder::raw($value);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            return \Illuminate\Database\Query\Builder::getBindings();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static function getRawBindings()
        {
            return \Illuminate\Database\Query\Builder::getRawBindings();
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         * @return $this
         * @throws \InvalidArgumentException
         * @static
         */
        public static function setBindings($bindings, $type = 'where')
        {
            return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
        }

        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         * @return $this
         * @throws \InvalidArgumentException
         * @static
         */
        public static function addBinding($value, $type = 'where')
        {
            return \Illuminate\Database\Query\Builder::addBinding($value, $type);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return $this
         * @static
         */
        public static function mergeBindings($query)
        {
            return \Illuminate\Database\Query\Builder::mergeBindings($query);
        }

        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getProcessor()
        {
            return \Illuminate\Database\Query\Builder::getProcessor();
        }

        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static function getGrammar()
        {
            return \Illuminate\Database\Query\Builder::getGrammar();
        }

    }

    class View extends \Illuminate\Support\Facades\View{

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\View\View
         * @static
         */
        public static function make($view, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }

        /**
         * Get the evaluated view contents for a named view.
         *
         * @param string $view
         * @param mixed $data
         * @return \Illuminate\View\View
         * @static
         */
        public static function of($view, $data = array()){
            return \Illuminate\View\Factory::of($view, $data);
        }

        /**
         * Register a named view.
         *
         * @param string $view
         * @param string $name
         * @return void
         * @static
         */
        public static function name($view, $name){
            \Illuminate\View\Factory::name($view, $name);
        }

        /**
         * Add an alias for a view.
         *
         * @param string $view
         * @param string $alias
         * @return void
         * @static
         */
        public static function alias($view, $alias){
            \Illuminate\View\Factory::alias($view, $alias);
        }

        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool
         * @static
         */
        public static function exists($view){
            return \Illuminate\View\Factory::exists($view);
        }

        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string
         * @static
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }

        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\View\Engines\EngineInterface
         * @throws \InvalidArgumentException
         * @static
         */
        public static function getEngineFromPath($path){
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }

        /**
         * Add a piece of shared data to the environment.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function share($key, $value = null){
            \Illuminate\View\Factory::share($key, $value);
        }

        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array
         * @static
         */
        public static function creator($views, $callback){
            return \Illuminate\View\Factory::creator($views, $callback);
        }

        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array
         * @static
         */
        public static function composers($composers){
            return \Illuminate\View\Factory::composers($composers);
        }

        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @param int|null $priority
         * @return array
         * @static
         */
        public static function composer($views, $callback, $priority = null){
            return \Illuminate\View\Factory::composer($views, $callback, $priority);
        }

        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\View\View $view
         * @return void
         * @static
         */
        public static function callComposer($view){
            \Illuminate\View\Factory::callComposer($view);
        }

        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\View\View $view
         * @return void
         * @static
         */
        public static function callCreator($view){
            \Illuminate\View\Factory::callCreator($view);
        }

        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startSection($section, $content = ''){
            \Illuminate\View\Factory::startSection($section, $content);
        }

        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function inject($section, $content){
            \Illuminate\View\Factory::inject($section, $content);
        }

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
        public static function yieldSection(){
            return \Illuminate\View\Factory::yieldSection();
        }

        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string
         * @static
         */
        public static function stopSection($overwrite = false){
            return \Illuminate\View\Factory::stopSection($overwrite);
        }

        /**
         * Stop injecting content into a section and append it.
         *
         * @return string
         * @static
         */
        public static function appendSection(){
            return \Illuminate\View\Factory::appendSection();
        }

        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }

        /**
         * Flush all of the section contents.
         *
         * @return void
         * @static
         */
        public static function flushSections(){
            \Illuminate\View\Factory::flushSections();
        }

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
        public static function flushSectionsIfDoneRendering(){
            \Illuminate\View\Factory::flushSectionsIfDoneRendering();
        }

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
        public static function incrementRender(){
            \Illuminate\View\Factory::incrementRender();
        }

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
        public static function decrementRender(){
            \Illuminate\View\Factory::decrementRender();
        }

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
        public static function doneRendering(){
            return \Illuminate\View\Factory::doneRendering();
        }

        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void
         * @static
         */
        public static function addLocation($location){
            \Illuminate\View\Factory::addLocation($location);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return void
         * @static
         */
        public static function addNamespace($namespace, $hints){
            \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return void
         * @static
         */
        public static function prependNamespace($namespace, $hints){
            \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }

        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function addExtension($extension, $engine, $resolver = null){
            \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
        public static function getExtensions(){
            return \Illuminate\View\Factory::getExtensions();
        }

        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver
         * @static
         */
        public static function getEngineResolver(){
            return \Illuminate\View\Factory::getEngineResolver();
        }

        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface
         * @static
         */
        public static function getFinder(){
            return \Illuminate\View\Factory::getFinder();
        }

        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void
         * @static
         */
        public static function setFinder($finder){
            \Illuminate\View\Factory::setFinder($finder);
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function getDispatcher(){
            return \Illuminate\View\Factory::getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Events\Dispatcher
         * @return void
         * @static
         */
        public static function setDispatcher($events){
            \Illuminate\View\Factory::setDispatcher($events);
        }

        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Container\Container
         * @static
         */
        public static function getContainer(){
            return \Illuminate\View\Factory::getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void
         * @static
         */
        public static function setContainer($container){
            \Illuminate\View\Factory::setContainer($container);
        }

        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function shared($key, $default = null){
            return \Illuminate\View\Factory::shared($key, $default);
        }

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
        public static function getShared(){
            return \Illuminate\View\Factory::getShared();
        }

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
        public static function getSections(){
            return \Illuminate\View\Factory::getSections();
        }

        /**
         * Get all of the registered named views in environment.
         *
         * @return array
         * @static
         */
        public static function getNames(){
            return \Illuminate\View\Factory::getNames();
        }

    }

    class Cookie {

        /**
         * @param $name
         * @param $value
         * @param null $expired
         * @param null $path
         * @param null $daomain
         * @return bool
         */
        public static function save($name, $value, $expired = null, $path = null, $daomain = null) {
            return \Cookie::instance()->_save($name, $value, $expired,$path,$daomain);
        }

        /**
         * @param $name
         * @return string
         */
        public static function get($name) {
            return \Cookie::instance()->_get($name);
        }

        /**
         * @param $name
         * @return bool
         */
        public static function delete($name) {
            return \Cookie::instance()->_delete($name);
        }

        /**
         * @param $name
         * @return bool
         */
        public static function exists($name) {
            return \Cookie::instance()->_exists($name);
        }
    }

    class Cache {

        public static function add($key, $value, $expired) {
            return \Cache::connection()->add($key, $value, $expired);
        }

        public static function set($key, $value, $expired) {
            return \Cache::connection()->set($key, $value, $expired);
        }

        public static function get($key) {
            return \Cache::connection()->get($key);
        }

        public static function delete($key, $time = 0) {
            return \Cache::connection()->delete($key, $time);
        }

        public static function decrement($key, $offset = 1) {
            return \Cache::connection()->decrement($key, $offset);
        }

        public static function increment($key, $offset = 1) {
            return \Cache::connection()->increment($key, $offset);
        }

        public static function append($key, $value) {
            return \Cache::connection()->append($key, $value);
        }
    }

    class Log {

        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function debug($message, $context = array()){
            return \Log::getLogger()->debug($message, $context);
        }

        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function info($message, $context = array()){
            return \Log::getLogger()->info($message, $context);
        }

        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function notice($message, $context = array()){
            return \Log::getLogger()->notice($message, $context);
        }

        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function warning($message, $context = array()){
            return \Log::getLogger()->warning($message, $context);
        }

        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function error($message, $context = array()){
            return \Log::getLogger()->error($message, $context);
        }

        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function critical($message, $context = array()){
            return \Log::getLogger()->critical($message, $context);
        }

        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }

        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static
         */
        public static function emergency($message, $context = array()){
            return \Log::getLogger()->emergency($message, $context);
        }

        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void
         * @static
         */
        public static function useFiles($path, $level = 'debug'){
            \Illuminate\Log\Writer::useFiles($path, $level);
        }

        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void
         * @static
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            \Log::getLogger()->useDailyFiles($path, $days, $level);
        }

        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param integer $messageType
         * @return void
         * @static
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            \Log::getLogger()->useErrorLog($level, $messageType);
        }
    }

    class Session {
        /**
         * Starts the session (if headers are already sent the session will not be started)
         */
        public static function start()
        {
            return \Session::instance()->start();
        }

        /**
         * @param array $options
         */
        public static function setOptions(array $options)
        {
            return \Session::instance()->setOptions($options);
        }

        /**
         * Get internal options
         */
        public static function getOptions()
        {
            return \Session::instance()->getOptions();
        }

        /**
         * Set session name
         */
        public static function setName($name)
        {
            return \Session::instance()->setName($name);
        }

        /**
         * Get session name
         */
        public static function getName()
        {
            return \Session::instance()->getName();
        }

        /**
         * {@inheritdoc}
         */
        public static function regenerateId($deleteOldSession = true)
        {
            return \Session::instance()->regenerateId($deleteOldSession);
        }

        /**
         * Gets a session variable from an application context
         *
         * @param $index
         * @param null $defaultValue
         * @param bool $remove
         * @return null
         */
        public static function get($index, $defaultValue = null, $remove = false)
        {
            return \Session::instance()->get($index, $defaultValue, $remove );
        }

        /**
         * @param $index
         * @param $value
         * @return mixed
         */
        public static function set($index, $value)
        {
            return \Session::instance()->set($index, $value );
        }

        /**
         * @param $index
         * @return mixed
         */
        public static function has($index)
        {
            return \Session::instance()->has($index );
        }

        /**
         * @param $index
         * @return mixed
         */
        public static function remove($index)
        {
            return \Session::instance()->remove($index );
        }

        /**
         * @return mixed
         */
        public static function getId()
        {
            return \Session::instance()->getId( );
        }

        /**
         * @param $id
         * @return mixed
         */
        public static function setId($id)
        {
            return \Session::instance()->setId($id );
        }

        /**
         * @return mixed
         */
        public static function isStarted()
        {
            return \Session::instance()->isStarted( );
        }

        /**
         * @param bool $removeData
         * @return mixed
         */
        public static function destroy($removeData = false)
        {
            return \Session::instance()->destroy( $removeData);
        }
    }

    class SiriusRedis {

        public static function set($name, $value, $ttl) {
            return \Sirius\Facades\Redis::set($name, $value, $ttl);
        }

        public static function get($name) {
            return \Sirius\Facades\Redis::set($name);
        }

        public static function pipeline($cb) {
            return \Sirius\Facades\Redis::pipeline($cb);
        }

    }
}