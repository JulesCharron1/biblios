<?php

namespace App\Enum;

enum CommentStatus: string
{
    case Pending = 'pending';
    case Published = 'published';
    case Moderated = 'moderated';

    public function getLabel(): string
    {
        return match ($this) {
            self::Pending => 'pending',
            self::Published => 'published',
            self::Moderated => 'moderated',
        };
    }
}