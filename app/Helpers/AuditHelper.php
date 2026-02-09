<?php

namespace App\Helpers;

use App\Models\AuditLog;

class AuditHelper
{
    public static function log($userId,$action,$entity,$entityId,$old,$new)
    {
        AuditLog::create([
            'user_id'=>$userId,
            'action'=>$action,
            'entity'=>$entity,
            'entity_id'=>$entityId,
            'old_data'=>json_encode($old),
            'new_data'=>json_encode($new),
        ]);
    }
}
