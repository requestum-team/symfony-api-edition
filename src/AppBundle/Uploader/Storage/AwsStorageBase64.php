<?php

namespace AppBundle\Uploader\Storage;

use Aws\S3\Exception\S3Exception;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Class AwsStorageBase64
 * @package AppBundle\Uploader\Storage
 */
class AwsStorageBase64 extends AwsStorageAbstract
{
    /**
     * {@inheritdoc}
     */
    public function upload($imgData, $name)
    {
        $result= [];
        
        try {
            $awsResult = $this->client->putObject([
                'Bucket' => $this->bucket,
                'Key'    => $name,
                'Body'   => $imgData,
                'ACL'    => 'public-read',
            ]);

            $result = [
                'name' => $name,
                'path' => $awsResult->get('ObjectURL'),
            ];

        } catch (S3Exception $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        return $result;
    }
}