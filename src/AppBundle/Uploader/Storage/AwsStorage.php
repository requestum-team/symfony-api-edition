<?php

namespace AppBundle\Uploader\Storage;

use Oneup\UploaderBundle\Uploader\Storage\StorageInterface;
use Oneup\UploaderBundle\Uploader\File\FileInterface;

use Aws\S3\Exception\S3Exception;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AwsStorage extends AwsStorageAbstract implements StorageInterface
{
    /**
     * {@inheritdoc}
     */
    public function upload(FileInterface $file, $name, $path = null)
    {
        $result= [];

        try {
            $awsResult = $this->client->putObject([
                'Bucket' => $this->bucket,
                'Key'    => $name,
                'Body'   => fopen($file->getPathName(), 'r'),
                'ACL'    => 'public-read',
            ]);

            $result = [
                'name' => $file->getClientOriginalName(),
                'path' => $awsResult->get('ObjectURL'),
            ];

        } catch (S3Exception $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        return $result;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function getObject($params)
    {
        $result= [];

        $args = ['Bucket' => $this->bucket] + $params;

        try {
            $object = $this->client->getObject($args);

            $result = [
                'mime' => $object->get('ContentType'),
                'body' => $object['Body']
            ];

        } catch (S3Exception $e) {
        }

        return $result;
    }
}