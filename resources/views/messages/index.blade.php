<div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user --}}
                <div class="{{ ($message->from == Session::get('email')) ? 'sent' : 'received' }}">
                    @if($message->property_name != NULL)
                        <div class="alert alert-success">
                            <p><small>Pertanyaan Untuk Property {{$message->property_name}}. Alamat : {{$message->property_alamat}}</small></p>
                        </div>
                    @endif
                    <p>{{ $message->message }}</p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>


{{-- <div class="input-text">
    <input type="text" name="message" class="submit form-control" placeholder="Ketik Disini...">
</div> --}}

<form action="message" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}  
    @if($message->to == Session::get('email'))
    <div class="input-group">
        <input type="text" name="to" value="{{ $message->from }}" hidden/>
        <input type="text" name="message" class="form-control" placeholder="Ketik Disini..." autocomplete="off" required>
        <span class="input-group-btn">
            <input type="submit" name="" class="btn btn-success" style="width: 90px; height: height: 46px; margin-top: 15px;" value="Kirim">
        </span>
    </div>
    @endif
    @if($message->from == Session::get('email'))
    <div class="input-group">
        <input type="text" name="to" value="{{ $message->to }}" hidden />
        <input type="text" name="message" class="form-control" placeholder="Ketik Disini..." autocomplete="off" required>
        <span class="input-group-btn">
            <input type="submit" name="" class="btn btn-success" style="width: 90px; height: 46px; margin-top: 15px;" value="Kirim">
        </span>
    </div>
    @endif
</form>