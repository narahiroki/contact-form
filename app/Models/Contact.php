<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * ステータスの定数定義
     */
    public const STATUS_NEW = 'new';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_RESOLVED = 'resolved';

    /**
     * 一括代入を許可する属性
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'body',
        'status',
    ];

    /**
     * ステータスの選択肢（値 => 表示ラベル）
     *
     * @return array<string, string>
     */
    public static function statusOptions(): array
    {
        return [
            self::STATUS_NEW => '新規',
            self::STATUS_IN_PROGRESS => '対応中',
            self::STATUS_RESOLVED => '解決済み',
        ];
    }

    /**
     * 現在のステータスの表示ラベル
     */
    public function statusLabel(): string
    {
        return self::statusOptions()[$this->status] ?? $this->status;
    }
}
