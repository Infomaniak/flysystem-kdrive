<?php

namespace Infomaniak\KDrive;

use League\Flysystem\WebDAV\WebDAVAdapter;
use Sabre\DAV\Client;

class KDriveAdapter extends WebDAVAdapter
{
    /**
     * KDriveAdapter
     *
     * Initializes a new kDrive Adapter
     *
     * @param string $kDriveId Id of your drive, as found on Infomaniak
     * @param string $username Infomaniak login email address
     * @param string $password Application password, as generated on Infomaniak
     * @param null|string $prefix Optional path prefix on the drive
     * @param bool $useStreamedCopy
     */
    public function __construct(
        $kDriveId,
        $username,
        $password,
        $prefix = null,
        $useStreamedCopy = true
    ) {
        $settings = [
            'baseUri' => "https://${kDriveId}.connect.drive.infomaniak.com",
            'userName' => $username,
            'password' => $password
        ];

        $client = new Client($settings);

        parent::__construct($client, $prefix, $useStreamedCopy);
    }
}
