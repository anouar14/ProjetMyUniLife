<?php
namespace App\Message;

class SendActivityReminderMessage
{
    private $activityId;

    public function __construct(int $activityId)
    {
        $this->activityId = $activityId;
    }

    public function getActivityId(): int
    {
        return $this->activityId;
    }
}
