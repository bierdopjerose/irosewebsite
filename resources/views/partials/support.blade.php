@extends('main')

@section('content')
    <div class="one-fourth">
        @include('partials.membersection')
        @include('partials.advertorialsection')
    </div>

    <div class="three-fourth-right">
        <div class="big-padding support">
            <div class="new-ticket">
                <h1 class="border">NEW TICKET</h1>
                <form method="post" action="/createticket">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="title" placeholder="Title" required>
                    <select name="department" required>
                        <option value="Abuse report">Abuse report</option>
                        <option value="Account issue">Account issue</option>
                        <option value="Ban enquire">Ban enquire</option>
                        <option value="Bug report">Bug report</option>
                        <option value="Purchase issue">Purchase issue</option>
                        <option value="Hack report">Hack report</option>
                        <option value="Other">Other</option>
                    </select>
                    <textarea rows="10" name="message" required placeholder="Tell us what is wrong">
                    </textarea>
                    <span class="error">{{$errors->ticket->first('title')}}</span>
                    <span class="error">{{$errors->ticket->first('department')}}</span>
                    <span class="error">{{$errors->ticket->first('message')}}</span>
                    <span class="error">{{$errors->error->first('error')}}</span>
                    <input type="submit" value="create ticket">
                    {{ session('message') }}
                </form>
            </div>

            <div class="my-tickets">
                <h1 class="border">my TICKETs</h1>
                @foreach(\App\Ticket::where('Account', Session::get('user')->Account)->get() as $ticket)
                    <a href="/ticket/{{$ticket->id}}">
                        <div class="ticket">
                            <table>
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>
                                        {!! $ticket->closed ? '<span style="background-color: red;" class="ticket-status">closed</span>':
                                         '<span style="background-color: green;" class="ticket-status">open</span>'!!}
                                    </td>
                                    <td>
                                        <h1>{{$ticket->title}}</h1>
                                        <h2>{{$ticket->department}}</h2>
                                    </td>
                                    <td>
                                        <h4>{{$ticket->created_at}}</h4>
                                    </td>
                                </tr>
                            </table>


                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection