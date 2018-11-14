<?php namespace Initbiz\CumulusCore\Contracts;

interface ClusterFeatureLogInterface extends RepositoryInterface
{

    /**
     * refresh
     * @param  string  $clusterSlug
     * @param  array  $features array of cluster's features
     * @return
     */
    public function refreshClusterFeatures(int $clusterId, array $features);
}
