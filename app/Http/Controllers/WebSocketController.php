<?php
namespace App\Http\Controllers;
use App\Models\Message;
use App\User;
use Illuminate\Support\Facades\Auth;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Illuminate\Support\Facades\DB;

class WebSocketController implements MessageComponentInterface
{
    protected $clients;
    private $subscriptions;
    private $users;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;

        $this->users = [];

    }

    public function onOpen(ConnectionInterface $conn)
    {
        $channels = DB::table('channels')->get();
        $this->clients->attach($conn);
        $this->users[$conn->resourceId] = $conn;

        foreach($channels as $channel){
            $this->subscriptions[$channel->channel_id] = $conn;
        }
    }

    public function onMessage(ConnectionInterface $conn, $msg)
    {
        $data = json_decode($msg);


        $channel_id = $data->from_user_id > $data->to_user_id ? $data->to_user_id.'-'.$data->from_user_id : $data->from_user_id.'-'.$data->to_user_id;

        switch ($data->command) {
            case "subscribe":
                $this->subscriptions[$conn->resourceId] = $data->channel;
                break;
            case "message":

                //$this->subscriptions[$channel_id]->send();
                $date = date("Y-m-d h:i:s");
                Message::insert(['from_user_id' => $data->from_user_id, 'to_user_id' => $data->to_user_id, 'message' => $data->message, 'created_at' => $date]);
                $from_user_name = User::where('id', $data->from_user_id)->select('name')->first()->name;
                $to_user_name = User::where('id', $data->to_user_id)->select('name')->first()->name;
                foreach ($this->clients as $client) {
                   // if ($conn !== $client) {
                        // The sender is not the receiver, send to each client connected
                        $client->send(json_encode(['message' => $data->message, 'from_user_name' => $from_user_name, 'channel_id' => $channel_id, 'created_at' => $date]));
                   // }
                }
//                dump($channel_id);
//                dump($this->subscriptions);
//                dd($this->clients);
//
//                foreach ($this->subscriptions as $id=>$channel) {
//                    if($channel == $channel_id){
//                       // $this->users[$id]
//                    }
//                }
//                if (isset($this->subscriptions[$channel_id])) {
//                    $target = $this->subscriptions[$conn->resourceId];
//                    foreach ($this->subscriptions as $id=>$channel) {
//                        if ($channel == $target && $id != $conn->resourceId) {
//                            $this->users[$id]->send($data->message);
//                        }
//                    }
//                }
        }
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        unset($this->users[$conn->resourceId]);
        unset($this->subscriptions[$conn->resourceId]);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}
