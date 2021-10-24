<?php

namespace App\Http\Controllers\SaveTheCard;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use App\Models\OccasionModel;
use App\Models\OccasionEventsModel;

class EventController extends BasicController
{
    public function index()
    {
        $eventData    = [];
        $userId       = auth()->user()->id;
        $occasionData = OccasionModel::select('id')->where('userId', $userId)->first();
        if (!empty($occasionData)) {
            $eventData = OccasionEventsModel::where('occasion_id', $occasionData->id)->get();
        }

        return view('user.save-card.event-list', compact('eventData'));
    }

    public function addEvent()
    {
        return view('user.save-card.event-add');
    }

    public function editEvent($id) {
        $eventDetail = OccasionEventsModel::find($id);
        $eventDetail->event_time = date("d/m/Y h:i A", strtotime($eventDetail->event_time));

        return view('user.save-card.event-add', compact('eventDetail'));
    }

    public function deleteEvent($id)
    {
        $eventDetail = OccasionEventsModel::find($id);
        if ($eventDetail) {
            $eventDetail->delete();
        }

        return $this->responseSuccess();
    }

    public function saveEvent(Request $request)
    {
        $params        = $request->all();
        $id           = isset($params['id']) ? $params['id'] : null;
        $eventData    = [];
        $userId       = auth()->user()->id;
        $occasionData = OccasionModel::select('id')->where('userId', $userId)->first();
        if (empty($occasionData)) {
            return $this->responseError();
        }

        $eventTime = str_replace("/", "-", $params['event_time']);
        $eventTime = date("Y-m-d H:i:s", strtotime($eventTime));
        $eventData = [
            'occasion_id' => $occasionData->id,
            'name'        => $params['name'],
            'event_time'  => $eventTime,
            'invite_by'   => $params['invite_by'],
            'address'     => $params['address'],
        ];
        if (empty($id)) {
            OccasionEventsModel::insert($eventData);
        } else {
            OccasionEventsModel::where('id', $id)->update($eventData);
        }

        return $this->responseSuccess();
    }

}
