<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\{Request, Response};
use Illuminate\Database\Eloquent\Model;

class LogRecord extends Model
{
    protected $table = 'logs';
    public $timestamps = false;

    static function log(Request $request, ?Response $response = null) : Request
    {
        if ($response && $request->logRecord) {
            $record = $request->logRecord;
            $record->response_content = gzencode($response->content(), 9);
            $record->response_status = $response->getStatusCode();
            $record->response_time = new \DateTime();
            $record->save();
            return $request;
        }

        $record = new self();

        $record->user_id = Auth::id();
        $record->url = $request->fullUrl();
        $record->method = $request->method();
        $record->client_ip = $request->ip();
        //$record->client_agent = $request->userAgent;
        $record->request_time = new \DateTime();

        //$record->save();
        $request->logRecord = $record;
        return $request;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
