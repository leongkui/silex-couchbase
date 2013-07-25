<?php

namespace SilexCouchbase;

use Silex\Application;
use Silex\ServiceProviderInterface;

class CouchbaseProvider implements ServiceProviderInterface
{
    public function boot(Application $app)
    {

    }

    public function register(Application $app)
    {
        $app['couchbase'] = $app->share(function () use ($app) {
            $host = isset($app['couchbase.host']) ? $app['couchbase.host'] : "localhost";
            $user = isset($app['couchbase.user']) ? $app['couchbase.user'] : "";
            $password = isset($app['couchbase.password']) ? $app['couchbase.password'] : "";
            $bucket = isset($app['couchbase.bucket']) ? $app['couchbase.bucket'] : "default";
            $persistent = isset($app['couchbase.persistent']) ? $app['couchbase.persistent'] : false;

            return new \Couchbase($host,$user,$password,$bucket,$presistent);
        });
    }
}
