<?php

namespace WeWork\Api;

use WeWork\Traits\HttpClientTrait;

class CRM
{
    use HttpClientTrait;
    public function getExternalContactList(string $userid): array
    {
        return $this->httpClient->get('externalcontact/list', ['userid' => $userid]);
    }

    /**
     * 获取外部联系人详情
     *
     * @param string $externalUserId
     * @return array
     */
    public function getExternalContact(string $externalUserId): array
    {
        $action='externalcontact/get';
        return $this->httpClient->get($action, ['external_userid' => $externalUserId]);
        // return $this->httpClient->get('crm/get_external_contact', ['external_userid' => $externalUserId]);
    }
}
