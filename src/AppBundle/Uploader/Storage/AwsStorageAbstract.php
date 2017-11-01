<?php

namespace AppBundle\Uploader\Storage;

use Aws\S3\S3Client;

abstract class AwsStorageAbstract
{
    /**
     * @var \Aws\S3\S3Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $bucket;

    /**
     * @param S3Client $client
     * @param string           $bucket
     */
    public function __construct($client, $bucket)
    {
        $this->client = $client;
        $this->bucket = $bucket;
    }
}